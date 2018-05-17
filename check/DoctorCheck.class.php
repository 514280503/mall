<?php
//医生验证类
class DoctorCheck extends Check {
	
	public function addCheck(Model &$_model, $_param) {
		if (self::isNullString($_POST['name'])) {
			$this->_message[] = '医生姓名不得为空！';
			$this->_flag = false;
		}

		if ($_model->isOne($_param)) {
			$this->_message[] = '医生姓名已存在！';
			$this->_flag = false;
		}

        if (self::checkStrEquals($_POST['country'], -1)) {
            $this->_message[] = '请选择地区！';
            $this->_flag = false;
        }
        if (self::checkStrEquals($_POST['position'], -1)) {
            $this->_message[] = '请选择医生职务！';
            $this->_flag = false;
        }
        if (self::checkStrEquals($_POST['year'], -1)) {
            $this->_message[] = '请选择从业年限！';
            $this->_flag = false;
        }



		return $this->_flag;
	}
	
	public function updateCheck() {

        if (self::isNullString($_POST['name'])) {
            $this->_message[] = '医生姓名不得为空！';
            $this->_flag = false;
        }

		return $this->_flag;
	}
	
	public function ajax(Model &$_model, Array $_param) {
		echo $_model->isOne($_param) ? 1 : 2;
	}
}
