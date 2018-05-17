<?php
//前台职务控制器
class PositionAction extends Action {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		parent::page();
		$this->_tpl->assign('Allposition', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'position/show.tpl');
	}

    public function add() {
        if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=position', '职务新增成功！') : $this->_redirect->error('职务新增失败！');
        $this->_tpl->display(SMARTY_ADMIN.'position/add.tpl');
    }


    public function sort() {
        if (isset($_POST['send'])) $this->_model->sort() ? $this->_redirect->succ(Tool::getPrevPage()) : $this->_redirect->error('排序失败！');
    }

    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '职务删除成功！') : $this->_redirect->error('职务删除失败！');
    }

    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '职务修改成功！') : $this->_redirect->error('职务修改失败！');
        if (isset($_GET['id'])) {
            $this->_tpl->assign('Oneposition', $this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'position/update.tpl');
        }
    }

    public function isName() {
        $this->_model->isName();
    }




    
	
	
}
