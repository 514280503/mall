<?php
//分类实体类
class CartModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','goods','user','tel','text');
		$this->_tables = array(DB_FREFIX.'order');
		$this->_check = new CartCheck();
		list(
				$this->_R['goods'],
                $this->_R['user'],
                $this->_R['tel']
		) = $this->getRequest()->getParam(array(
				isset($_POST['goods']) ? $_POST['goods'] : null,
                isset($_POST['tel']) ? $_POST['tel'] : null,
                isset($_POST['user']) ? $_POST['user'] : null
		));
	}

    public function findFrontTenNav(){
        return parent::select(array('name','url','sort'),array('order'=>'sort ASC'),array('limit'=>'10'));
    }



	public function add() {
		$_where = array("tel='{$this->_R['tel']}'");
		if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
		$_addData = $this->getRequest()->filter($this->_fields);
        $_addData['date'] = Tool::getDate();
		return parent::add($_addData);
	}
	

	

}
