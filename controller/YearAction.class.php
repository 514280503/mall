<?php
//前台从业年限控制器
class YearAction extends Action {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		parent::page();

		$this->_tpl->assign('Allprice', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'year/show.tpl');
	}

    public function add() {
        if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=year', '从业年限新增成功！') : $this->_redirect->error('从业年限新增失败！');
        $this->_tpl->display(SMARTY_ADMIN.'year/add.tpl');
    }


    public function sort() {
        if (isset($_POST['send'])) $this->_model->sort() ? $this->_redirect->succ(Tool::getPrevPage()) : $this->_redirect->error('排序失败！');
    }

    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '从业年限删除成功！') : $this->_redirect->error('从业年限删除失败！');
    }

    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '从业年限修改成功！') : $this->_redirect->error('从业年限修改失败！');
        if (isset($_GET['id'])) {
            $this->_tpl->assign('Oneprice', $this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'year/update.tpl');
        }
    }

    public function isName() {
        $this->_model->isName();
    }




    
	
	
}
