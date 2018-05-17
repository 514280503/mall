<?php
//管理员实体类
class AppointModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','user','tel','text','goods','date');
		$this->_tables = array(DB_FREFIX.'order');
		$this->_check = new ManageCheck();
		list(
				$this->_R['id'], 
				$this->_R['user'], 
				$this->_R['tel'],
				$this->_R['goods']
		) = $this->getRequest()->getParam(array(
				isset($_GET['id']) ? $_GET['id'] : null,
				isset($_POST['user']) ? $_POST['user'] : null,
				isset($_POST['tel']) ? $_POST['tel'] : null,
				isset($_POST['goods']) ? $_POST['goods'] : null
		));
	}
	
	public function findAll() {
        return parent::select(array('id','user','tel','text','goods','date'),array('limit'=>$this->_limit,'order'=>'date desc'));
	}

	public function total() {
		return parent::total();
	}

}
