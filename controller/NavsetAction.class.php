<?php
//前台导航控制器
class NavsetAction extends Action {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		parent::page();
		$this->_tpl->assign('AllNavset', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'navset/show.tpl');
	}

    public function add() {
        if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=navset', '导航新增成功！') : $this->_redirect->error('导航新增失败！');
        $this->_tpl->display(SMARTY_ADMIN.'navset/add.tpl');
    }


    public function sort() {
        if (isset($_POST['send'])) $this->_model->sort() ? $this->_redirect->succ(Tool::getPrevPage()) : $this->_redirect->error('排序失败！');
    }

    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '导航删除成功！') : $this->_redirect->error('导航删除失败！');
    }

    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '导航修改成功！') : $this->_redirect->error('导航修改失败！');
        if (isset($_GET['id'])) {
            $this->_tpl->assign('OneNavset', $this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'navset/update.tpl');
        }
    }

    public function isName() {
        $this->_model->isName();
    }




    
	
	
}
