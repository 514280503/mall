<?php
//前台地区控制器
class CountryAction extends Action {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		parent::page();
		$this->_tpl->assign('Allcountry', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'country/show.tpl');
	}

    public function add() {
        if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=country', '地区新增成功！') : $this->_redirect->error('地区新增失败！');
        $this->_tpl->display(SMARTY_ADMIN.'country/add.tpl');
    }


    public function sort() {
        if (isset($_POST['send'])) $this->_model->sort() ? $this->_redirect->succ(Tool::getPrevPage()) : $this->_redirect->error('排序失败！');
    }

    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '地区删除成功！') : $this->_redirect->error('地区删除失败！');
    }

    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '地区修改成功！') : $this->_redirect->error('地区修改失败！');
        if (isset($_GET['id'])) {
            $this->_tpl->assign('Onecountry', $this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'country/update.tpl');
        }
    }

    public function isName() {
        $this->_model->isName();
    }




    
	
	
}
