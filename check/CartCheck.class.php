<?php
//医生验证类
class CartCheck extends Check {
	
	public function addCheck(Model &$_model, $_param) {
		if (self::isNullString($_POST['goods'])) {
			$this->_message[] = '请选择产品！';
			$this->_flag = false;
		}

        if (self::isNullString($_POST['user'])) {
            $this->_message[] = '姓名不得为空！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['tel'])) {
            $this->_message[] = '联系方式不得为空！';
            $this->_flag = false;
        }
        if (self::checkPone($_POST['tel'])) {
            $this->_message[] = '请输入有效的手机号码！';
            $this->_flag = false;
        }
		return $this->_flag;
	}
	
	public function updateCheck() {
        if (self::isNullString($_POST['goods'])) {
            $this->_message[] = '请选择产品！';
            $this->_flag = false;
        }

        if (self::isNullString($_POST['user'])) {
            $this->_message[] = '姓名不得为空！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['tel'])) {
            $this->_message[] = '联系方式不得为空！';
            $this->_flag = false;
        }
        if (self::checkPone($_POST['tel'])) {
            $this->_message[] = '请输入有效的手机号码！';
            $this->_flag = false;
        }
        return $this->_flag;
	}
	
	public function ajax(Model &$_model, Array $_param) {
		echo $_model->isOne($_param) ? 1 : 2;
	}
}
