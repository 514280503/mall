<?php
//导航验证类
class NavsetCheck extends Check {
	
	public function addCheck(Model &$_model, $_param) {
		if (self::isNullString($_POST['name'])) {
			$this->_message[] = '导航名称不得为空！';
			$this->_flag = false;
		}

        if (self::isNullString($_POST['url'])) {
            $this->_message[] = '导航url不得为空！';
            $this->_flag = false;
        }
		if ($_model->isOne($_param)) {
			$this->_message[] = '导航名称已存在！';
			$this->_flag = false;
		}
		return $this->_flag;
	}
	
	public function updateCheck() {
        if (self::isNullString($_POST['name'])) {
            $this->_message[] = '导航名称不得为空！';
            $this->_flag = false;
        }

        if (self::isNullString($_POST['url'])) {
            $this->_message[] = '导航url不得为空！';
            $this->_flag = false;
        }


		return $this->_flag;
	}
	
	public function ajax(Model &$_model, Array $_param) {
		echo $_model->isOne($_param) ? 1 : 2;
	}
}
