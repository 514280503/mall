<?php
class IndexAction extends Action {

    private $_navf = null;


	public function __construct() {
		parent::__construct();
        $this->_navf = new NavsetModel();

	}
	
	//实现初始页面
	public function index() {
        $this->_tpl->assign('FrontNav', $this->_navf->findFrontTenNav());
		$this->_tpl->display(SMARTY_FRONT.'public/index.tpl');
	}







}
