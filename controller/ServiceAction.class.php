<?php
//售后服务控制器
class ServiceAction extends Action {
	
	public function __construct() {
		parent::__construct();
	}
	
	//售后服务列表
	public function index() {
		parent::page();
		$this->_tpl->assign('AllService', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'service/show.tpl');
	}
	
	//添加售后服务
	public function add() {
		if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=service', '售后服务新增成功！') : $this->_redirect->error('售后服务新增失败！');
		$this->_tpl->display(SMARTY_ADMIN.'service/add.tpl');
	}
	
	//删除售后服务
	public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '售后服务删除成功！') : $this->_redirect->error('售后服务删除失败！请
        先取消默认首选！ ');
	}
	
	//修改售后服务
    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '售后服务修改成功！') : $this->_redirect->error('售后服务修改失败！');
        if (isset($_GET['id'])) {
            $this->_tpl->assign('OneService', $this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'service/update.tpl');
        }
    }

    public function first() {
        if (isset($_GET['id'])) $this->_model->first() ? $this->_redirect->succ(Tool::getPrevPage()) : $this->_redirect->error('售后服务默认设置失败！');
    }

	
	//ajax
	public function isName() {
		$this->_model->isName();
	}

}
