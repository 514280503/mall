<?php
//预约控制器
class AppointAction extends Action {
	private $_level = null;
	
	public function __construct() {
		parent::__construct();
		$this->_level = new AppointModel();
	}
	
	//管理员列表
	public function index() {
		parent::page(20);
		$this->_tpl->assign('AllManage', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'appoint/show.tpl');
	}


}
