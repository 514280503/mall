<?php
//会员控制器
class MemberAction extends Action {
    private $_nav = null;
    private $_user = null;

    public function __construct() {
        parent::__construct();
        $this->_nav = new NavModel();
        $this->_user = new UserModel();
    }

    public function reg() {
        if (isset($_POST['send'])) $this->_user->frontReg() ? $this->_redirect->succ('?a=member&m=login', '注册成功，请登录！') : $this->_redirect->error('注册失败！');
        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->display(SMARTY_FRONT.'public/reg.tpl');
    }

    public function login($url='./') {
        if (isset($_POST['send'])) $this->_user->frontLogin() ? $this->_redirect->succ('./') : $this->_redirect->error('登录失败！');
        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->display(SMARTY_FRONT.'public/login.tpl');
    }

    public function logout() {
        $this->_user->frontLogout() ? $this->_redirect->succ('./') : $this->_redirect->error('退出失败！');
    }

    public function isUser() {
        $this->_user->isUser();
    }

    public function ajaxLogin() {
        $this->_user->ajaxLogin();
    }







}
