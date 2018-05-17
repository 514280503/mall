<?php
//医生验证类
class GoodsCheck extends Check {
	
	public function addCheck(Model &$_model, $_param) {
        if (self::checkStrEquals($_POST['nav'], -1)) {
            $this->_message[] = '项目类型必须选择！';
            $this->_flag = false;
        }
        if (self::checkStrEquals($_POST['brand'], -1)) {
            $this->_message[] = '项目品牌必须选择！';
            $this->_flag = false;
        }
        if (self::checkStrEquals($_POST['doctor'], -1)) {
            $this->_message[] = '项目医生必须选择！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['name'])) {
            $this->_message[] = '项目名称不得为空！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_POST['name'], 2, 'min')) {
            $this->_message[] = '项目名称不得小于2位！';
            $this->_flag = false;
        }

        if (self::isNullString($_POST['sn'])) {
            $this->_message[] = '项目编号不得为空！';
            $this->_flag = false;
        }
        if (self::checkStrLength($_POST['name'], 2, 'min')) {
            $this->_message[] = '项目编号不得小于2位！';
            $this->_flag = false;
        }

        if ($_model->isOne($_param)) {
            $this->_message[] = '项目编号已存在！';
            $this->_flag = false;
        }
		return $this->_flag;
	}
	
	public function updateCheck(Model &$_model, Array $_param) {
        return $this->addCheck($_model, $_param);
	}

	
	public function ajax(Model &$_model, Array $_param) {
		echo $_model->isOne($_param) ? 1 : 2;
	}
}
