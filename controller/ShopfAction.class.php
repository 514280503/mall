<?php
class ShopfAction extends Action {

    private $_nav = null;
	public function __construct() {
		parent::__construct();
        $this->_nav = new NavModel();
	}
	
	//实现初始页面
    public function index() {

        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->display(SMARTY_FRONT.'public/shop/index.tpl');
    }

	
	//验证码
	public function validateCode() {
		$_vc = new ValidateCode();
		$_vc->doimg();
		$_SESSION['code'] = $_vc->getCode();
	}






}
