<?php
//分类实体类
class NavsetModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','name','url','sort');
		$this->_tables = array(DB_FREFIX.'navset');
		$this->_check = new NavsetCheck();
		list(
				$this->_R['id'],
				$this->_R['name']
		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['name']) ? $_POST['name'] : null
		));
	}
	
	public function findAll() {
		return parent::select(array('id','name','url','sort'),array('order'=>'sort ASC'));
	}

    public function findFrontTenNav(){
        return parent::select(array('name','url','sort'),array('order'=>'sort ASC'),array('limit'=>'10'));
    }

	
	public function findOne() {
		if (isset($_GET['id'])) {
			return parent::select(array('id','name','url'),
											array('where'=>array("id='{$this->_R['id']}'"), 'limit'=>'1'));
		}
		$_where = array("id='{$this->_R['id']}'");
		if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
		return parent::select(array('id','name','url'),
											array('where'=>$_where, 'limit'=>'1'));
	}
	
	public function total() {
		return parent::total();
	}
	
	public function add() {
		$_where = array("name='{$this->_R['name']}'");
		if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
		$_addData = $this->getRequest()->filter($this->_fields);
		$_addData['sort'] = $this->nextId();
		return parent::add($_addData);
	}
	
	public function update() {
		$_where = array("id='{$this->_R['id']}'");
		if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
		if (!$this->_check->updateCheck($this)) $this->_check->error();
		$_updateData = $this->getRequest()->filter($this->_fields);
		return parent::update($_where, $_updateData);
	}
	
	public function delete() {
		$_where = array("id='{$this->_R['id']}'");
		return parent::delete($_where);
	}
	
	public function sort() {
		foreach ($_POST['sort'] as $_key=>$_value) {
			if (!is_numeric($_value)) continue;
			$_setField = array('sort'=>$_value);
			$_where = array("id='$_key'");
			parent::update($_where, $_setField);
		}
		return true;
	}
	
	public function isName() {
		$_where = array("name='{$this->_R['name']}'");
		$this->_check->ajax($this, $_where);
	}

	
}
