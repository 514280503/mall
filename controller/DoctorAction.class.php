<?php
//前台医生控制器
class DoctorAction extends Action {
    private $_year = null;
    private $_country = null;
    private $_position = null;
	public function __construct() {
		parent::__construct();
        $this->_year = new YearModel();
        $this->_country = new CountryModel();
        $this->_position = new PositionModel();
	}
	
	public function index() {
		parent::page();
		$this->_tpl->assign('Alldoctor', $this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'doctor/show.tpl');
	}

    public function add() {
        $this->_tpl->assign('AllYear', Tool::setFormItem($this->_year->findAddYearDoctor(), 'id', 'value'));
        $this->_tpl->assign('AllCountry', Tool::setFormItem($this->_country->findAddDoctorCountry(), 'id', 'name'));
        $this->_tpl->assign('AllPosition', Tool::setFormItem($this->_position->findAddDoctorPosition(), 'id', 'name'));
        if (isset($_POST['send'])) $this->_model->add() ? $this->_redirect->succ('?a=doctor', '医生新增成功！') : $this->_redirect->error('医生新增失败！');
        $this->_tpl->display(SMARTY_ADMIN.'doctor/add.tpl');
    }


    public function sort() {
        if (isset($_POST['send'])) $this->_model->sort() ? $this->_redirect->succ(Tool::getPrevPage()) : $this->_redirect->error('排序失败！');
    }

    public function delete() {
        if (isset($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(Tool::getPrevPage(), '医生删除成功！') : $this->_redirect->error('医生删除失败！');
    }

    public function update() {
        if (isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(Tool::getPrevPage(), '医生修改成功！') : $this->_redirect->error('医生修改失败！');
        if (isset($_GET['id'])) {
            $this->_tpl->assign('AllYear', Tool::setFormItem($this->_year->findAddYearDoctor(), 'id', 'value'));
            $this->_tpl->assign('AllCountry', Tool::setFormItem($this->_country->findAddDoctorCountry(), 'id', 'name'));
            $this->_tpl->assign('AllPosition', Tool::setFormItem($this->_position->findAddDoctorPosition(), 'id', 'name'));
            $this->_tpl->assign('Onedoctor', $this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'doctor/update.tpl');
        }
    }

    public function isName() {
        $this->_model->isName();
    }




    
	
	
}
