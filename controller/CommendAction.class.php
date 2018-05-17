<?php
//项目评价控制器
class CommendAction extends Action {
    private $_goods=null;
	
	public function __construct() {
		parent::__construct();
        $this->_goods = new GoodsModel();

	}
	
	//项目评价列表
	public function index() {
		parent::page();
		$this->_tpl->assign('AllCommend', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'commend/show.tpl');
	}
	
	//添加项目评价
	public function add() {
        $this->_tpl->assign('AllGoods', Tool::setFormItem($this->_goods->findAddCommend(), 'id', 'name'));
		if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=commend', '项目评价新增成功！') : $this->_redirect->error('项目评价新增失败！');

		$this->_tpl->display(SMARTY_ADMIN.'commend/add.tpl');
	}
	
	//删除项目评价
	public function delete() {
		if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '项目评价删除成功！') : $this->_redirect->error('项目评价删除失败！');
	}
	
	//修改项目评价
	public function update() {
		if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '项目评价修改成功！') : $this->_redirect->error('项目评价修改失败！');
		if (isset($_GET['id'])) {
            $this->_tpl->assign('AllGoods', Tool::setFormItem($this->_goods->findAddCommend(), 'id', 'name'));
			$this->_tpl->assign('OneCommend', $this->_model->findOne());
			$this->_tpl->display(SMARTY_ADMIN.'commend/update.tpl');
		}
	}
	
	//ajax
	public function isUser() {
		$this->_model->isUser();
	}

}
