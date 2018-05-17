<?php
//地区验证类
class CountryCheck extends Check {
	
	public function addCheck(Model &$_model, $_param) {
		if (self::isNullString($_POST['name'])) {
			$this->_message[] = '地区名称不得为空！';
			$this->_flag = false;
		}


		if ($_model->isOne($_param)) {
			$this->_message[] = '地区名称已存在！';
			$this->_flag = false;
		}
		return $this->_flag;
	}
	
	public function updateCheck() {
        if (self::isNullString($_POST['name'])) {
            $this->_message[] = '地区名称不得为空！';
            $this->_flag = false;
        }

		return $this->_flag;
	}
	
	public function ajax(Model &$_model, Array $_param) {
		echo $_model->isOne($_param) ? 1 : 2;
	}
}
