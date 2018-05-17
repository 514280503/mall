<?php
//管理员验证类
class CommendCheck extends Check {
	
	//用户名不得包含指定的非法词组，敏感词
	//密码不能纯数字，纯字母，或者必须包含特殊字符，或者必须大小写混拼
	public function addCheck(Model &$_model, Array $_param) {
		if (self::isNullString($_POST['user'])) {
			$this->_message[] = '请填写用户名！';
			$this->_flag = false;
		}

		if (self::checkStrEquals($_POST['goods'], '-1')) {
			$this->_message[] = '请选择项目！';
			$this->_flag = false;
		}
		if (self::isNullString($_POST['content'])) {
			$this->_message[] = '请填写评论！';
			$this->_flag = false;
		}

		return $this->_flag;
	}
	
	public function updateCheck(Model &$_model) {
        if (self::isNullString($_POST['user'])) {
            $this->_message[] = '请填写用户名！';
            $this->_flag = false;
        }

        if (self::checkStrEquals($_POST['goods'], '-1')) {
            $this->_message[] = '请选择项目！';
            $this->_flag = false;
        }
        if (self::isNullString($_POST['content'])) {
            $this->_message[] = '请填写评论！';
            $this->_flag = false;
        }
		return $this->_flag;
	}
	

	
}
