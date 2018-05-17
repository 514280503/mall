<?php
//管理员实体类
class CommendModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','goods','content','star','user','date');
		$this->_tables = array(DB_FREFIX.'commend');
		$this->_check = new CommendCheck();
		list(
				$this->_R['id'], 
				$this->_R['goods'],


		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['goods']) ? $_POST['goods'] : null,


		));
	}
	
	public function findAll() {
        $this->_tables = array(DB_FREFIX.'commend a', DB_FREFIX.'goods b');
        return parent::select(array('a.id','a.user','a.content','a.star','a.user','a.date','b.name'),
            array('where'=>array('a.goods=b.id'),'limit'=>$this->_limit, 'order'=>'a.date DESC'));

	}

    public function findDetailsCommend() {
        $_where = array("goods='{$_GET['goodsid']}'");
        return parent::select(array('content', 'star', 'date', 'user'),
            array('where'=>$_where, 'order'=>'date DESC'));
    }
	
	public function findOne() {
		$_where = array("id='{$this->_R['id']}'");
		if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
		return parent::select(array('id','user','content','star','goods','date'),
											array('where'=>$_where, 'limit'=>'1'));
	}
	

	
	public function total() {
		return parent::total();
	}
	
	public function add() {
        $_where = array("user='{$this->_R['user']}'");
		if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
		$_addData = $this->getRequest()->filter($this->_fields);
        if($_addData['date']){
            $_addData['date'] = date('Y-m-d H:i',$_addData['date']);
        }else{
            $_addData['date'] = Tool::getDate();
        }
		return parent::add($_addData);
	}
	
	public function update() {
        $_where = array("id='{$this->_R['id']}'");
		if (!$this->_check->updateCheck($this)) $this->_check->error();
		$_updateData = $this->getRequest()->filter($this->_fields);
        if($_updateData['date']){
            $_updateData['date'] = date('Y-m-d H:i',$_updateData['date']);
        }else{
            $_updateData['date'] = Tool::getDate();
        }
		return parent::update($_where, $_updateData);
	}
	
	public function delete() {
		$_where = array("id='{$this->_R['id']}'");
		return parent::delete($_where);
	}
	
	public function isUser() {
		$_where = array("user='{$this->_R['user']}'");
		$this->_check->ajax($this, $_where);
	}
	
	public function login() {
		$_where = array("user='{$this->_R['user']}'", "pass='".sha1($this->_R['pass'])."'");
		if (!$this->_check->loginCheck($this, $_where)) {
			$this->_check->error();
		} else {
			return true;
		}
	}
	
	public function ajaxLogin() {
		$_where = array("user='{$this->_R['user']}'", "pass='".sha1($this->_R['pass'])."'");
		$this->_check->ajaxLogin($this, $_where);
	}
	
	public function ajaxCode() {
		$this->_check->ajaxcode($this, $this->_R['code']);
	}
}
