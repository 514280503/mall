<?php
//分类实体类
class GoodsModel extends Model {
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','nav','brand','name','sn','price_sale','price_market','price_cost','unit','thumbnail','content','is_up','date','sort','doctor','keyword','sale_num','service');
		$this->_tables = array(DB_FREFIX.'goods');
		$this->_check = new GoodsCheck();
        list(
            $this->_R['id'],
            $this->_R['sn'],
            $this->_R['act'],
            $this->_R['goodsid'],
            $this->_R['price'],
            $this->_R['brand']
            ) = $this->getRequest()->getParam(array(
            isset($_GET['id']) ? $_GET['id'] : null,
            isset($_GET['goodsid']) ? $_GET['goodsid'] : null,
            isset($_POST['sn']) ? $_POST['sn'] : null,
            isset($_GET['act']) ? $_GET['act'] : null,
            isset($_GET['price']) ? $_GET['price'] : null,
            isset($_GET['brand']) ? $_GET['brand'] : null
        ));

	}
	
	public function findAll() {
        $this->_tables = array(DB_FREFIX.'goods a', DB_FREFIX.'nav b');
        $_allGoods = parent::select(array('a.id','a.name','a.is_up','a.brand','a.sort','a.doctor','a.price_sale','a.sale_num','a.price_cost','b.name as nav_name'),
            array('where'=>array('a.nav=b.id'),'limit'=>$this->_limit, 'order'=>'a.sort DESC'));
        $this->_tables = array(DB_FREFIX.'brand');
        $_allBrand = Tool::setFormItem(parent::select(array('id','name')), 'id', 'name');
        foreach ($_allGoods as $_key=>$_value) {
            if ($_value->brand == 0) {
                $_value->brand = '没有选择品牌';
            } else {
                $_value->brand = $_allBrand[$_value->brand];
            }
        }
        $this->_tables = array(DB_FREFIX.'doctor');
        $_allBrand = Tool::setFormItem(parent::select(array('id','name')), 'id', 'name');
        foreach ($_allGoods as $_key=>$_value) {
            if ($_value->doctor == 0) {
                $_value->doctor = '没有选择医生';
            } else {
                $_value->doctor = $_allBrand[$_value->doctor];
            }
        }
        return $_allGoods;

	}

    public function findAddCommend(){
        return parent::select(array('id','name'));
    }

    public function findListGoods() {
        $this->_tables = array(DB_FREFIX.'nav');
        $_idArr = parent::select(array('id'), array('where'=>array("sid='{$this->_R['id']} and is_up = 1'")));
        $_id = '';
        if (Validate::isNullArray($_idArr)) {
            $_id = $this->_R['id'];
        } else {
            foreach ($_idArr as $_value) {
                $_childid = parent::select(array('id'), array('where'=>array("sid='{$_value->id} and is_up = 1'")));
                if(parent::select(array('id'), array('where'=>array("sid='{$_value->id} and is_up = 1'")))){
                    foreach($_childid as $_valuechild){
                        $_id .= $_valuechild->id.',';
                    }
                }else{
                    $_id .= $_value->id.',';
                }

            }
            $_id = substr($_id, 0, -1);
        }
        $_priceSQL = '';
        $_brandSQL = '';

        $this->_tables = array(DB_FREFIX.'goods');
//        if ($this->_R['price']) {
//            $_left = substr($this->_R['price'], 0, strpos($this->_R['price'], ','));
//            $_right = substr($this->_R['price'], strpos($this->_R['price'], ',') + 1);
//            if (!Validate::isNumeric($_left) && !Validate::isNumeric($_right)) {
//                $_allGoods = parent::select(array('id','name','thumbnail','price_sale','price_market','nav'),
//                    array('where'=>array('nav in ('.$_id.') AND price_sale BETWEEN '.$_left.' AND '.$_right),'limit'=>$this->_limit, 'order'=>'sort DESC'));
//            } else {
//                $_allGoods = parent::select(array('id','name','thumbnail','price_sale','price_market','nav'),
//                    array('where'=>array('nav in ('.$_id.') AND price_sale BETWEEN '.$_left.' AND '.$_right),'limit'=>$this->_limit, 'order'=>'sort DESC'));
//            }
//        } else {
//            $_allGoods = parent::select(array('id','name','thumbnail','price_sale','price_market','nav'),
//                array('where'=>array('nav in ('.$_id.')'),'limit'=>$this->_limit, 'order'=>'sort DESC'));
//        }
        if ($this->_R['price']) {
            $_left = substr($this->_R['price'], 0, strpos($this->_R['price'], ','));
            $_right = substr($this->_R['price'], strpos($this->_R['price'], ',') + 1);
            $_priceSQL = " AND price_sale BETWEEN $_left AND $_right ";
        }
        if ($this->_R['brand']) {
            $_brand = $this->_R['brand'] == 'other' ? 0 : $this->_R['brand'];
            $_brandSQL = " AND brand='$_brand' ";
        }
        $_allGoods = parent::select(array('id','name','thumbnail','price_sale','price_market','nav','service'),
             array('where'=>array('nav in ('.$_id.') '.$_priceSQL.$_brandSQL.'and is_up = 1'),'limit'=>$this->_limit, 'order'=>'sort DESC'));



        return $_allGoods;
    }
    public function findDetailGoods($goodsid){
        $_where = array("id='{$goodsid}'");
        if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
        $_oneGoods = parent::select(array('id','nav','brand','name','sn','price_sale','price_market','price_cost','unit','thumbnail','content','is_up','sort','doctor','keyword','sale_num','service'),
            array('where'=>$_where, 'limit'=>'1'));

        $_oneGoods[0]->content = htmlspecialchars_decode($_oneGoods[0]->content);
        $this->_tables = array(DB_FREFIX.'brand');
        $_allBrand = Tool::setFormItem(parent::select(array('id','name')), 'id', 'name');
        if ($_oneGoods[0]->brand == 0) {
            $_oneGoods[0]->brandname = '其他品牌';
        } else {
            $_oneGoods[0]->brandname = $_allBrand[$_oneGoods[0]->brand];
        }
        $this->_tables = array(DB_FREFIX.'doctor');
        $_allDoctor = Tool::setFormItem(parent::select(array('id','name')), 'id', 'name');
            if ($_oneGoods[0]->doctor == 0) {
                $_oneGoods[0]->doctor_name = '没有选择医生';
            } else {
                $_oneGoods[0]->doctor_name = $_allDoctor[$_oneGoods[0]->doctor];
            }

        $this->_tables = array(DB_FREFIX.'service');
        $_where = array("id='{$_oneGoods[0]->service}'");
        $_service = parent::select(array('content'),
            array('where'=>$_where, 'limit'=>'1'));
        $_oneGoods[0]->service = htmlspecialchars_decode($_service[0]->content);
        $this->_tables = array(DB_FREFIX.'goods');
        return $_oneGoods;
    }

    public function findFrontNav() {
        return parent::select(array('id','name'),
            array('where'=>array('sid=0'), 'limit'=>'10', 'order'=>'sort ASC'));
    }

	
	public function findOne() {
		$_where = array("id='{$this->_R['id']}'");
		if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
		return parent::select(array('id','nav','brand','name','sn','price_sale','price_market','price_cost','unit','thumbnail','content','is_up','sort','doctor','keyword','sale_num','service'),
											array('where'=>$_where, 'limit'=>'1'));
	}
	
	public function total() {
        if (Validate::isNullString($this->_R['id'])) {
            return parent::total();
        } else {
            return parent::total(array('where'=>array('nav in ('.$this->getNavId().') and is_up = 1')));
        }
	}
    private function getNavId() {
        $this->_tables = array(DB_FREFIX.'nav');
        $_idArr = parent::select(array('id'), array('where'=>array("sid='{$this->_R['id']}'")));
        $_id = '';
        if (Validate::isNullArray($_idArr)) {
            $_id = $this->_R['id'];
        } else {
            foreach ($_idArr as $_value) {
                $_childid = parent::select(array('id'), array('where'=>array("sid='{$_value->id}'")));
                if(parent::select(array('id'), array('where'=>array("sid='{$_value->id}'")))){
                    foreach($_childid as $_valuechild){
                        $_id .= $_valuechild->id.',';
                    }
                }else{
                    $_id .= $_value->id.',';
                }
            }
            $_id = substr($_id, 0, -1);
        }
        $this->_tables = array(DB_FREFIX.'goods');
        return $_id;
    }
	
	public function add() {
        $_where = array("sn='{$this->_R['sn']}'");
		if (!$this->_check->addCheck($this, $_where)) $this->_check->error();
		$_addData = $this->getRequest()->filter($this->_fields);
        $_addData['date'] = Tool::getDate();
		$_addData['sort'] = $this->nextId();
		return parent::add($_addData);
	}
	
	public function update() {
		$_where = array("id='{$this->_R['id']}'");
		if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
        if (!$this->_check->updateCheck($this, array("id<>'{$this->_R['id']}'","sn='{$this->_R['sn']}'"))) $this->_check->error();
		$_updateData = $this->getRequest()->filter($this->_fields);
		return parent::update($_where, $_updateData);
	}

    public function updateSalenum($goodsid){

        $_where = array("id='{$goodsid}'");
        if (!$this->_check->oneCheck($this, $_where)) $this->_check->error();
        $_oneGoods = parent::select(array('id','sale_num'),
            array('where'=>$_where, 'limit'=>'1'));
        $_updateData = $this->getRequest()->filter($this->_fields);
        $_updateData['sale_num'] = $_oneGoods[0]->sale_num +1;
        return parent::update($_where, $_updateData);
    }
	
	public function delete() {
		$_where = array("id='{$this->_R['id']}'");
		return parent::delete($_where);
	}
	
	public function sort() {
		foreach ($_POST['sort'] as $_key=>$_value) {
			if (!is_numeric($_value)) continue;
			$_setField = array('sort'=>$_value);
			$_where = array("id='$_key'");
			parent::update($_where, $_setField);
		}
		return true;
	}

    public function isUp() {
        if (!Validate::isNullString($this->_R['id']) && !Validate::isNullString($_GET['act'])) {

            if ($_GET['act'] == 'up') {
                return parent::update(array("id='{$this->_R['id']}'"), array('is_up'=>'1'));
            } elseif ($_GET['act'] == 'down') {
                return parent::update(array("id='{$this->_R['id']}'"), array('is_up'=>'0'));
            }
        }
    }
	
	public function isSn() {
		$_where = array("sn='{$this->_R['sn']}'");
		$this->_check->ajax($this, $_where);
	}

    public function isUpdateSn() {
        $_where = array("id<>'{$this->_R['id']}'","sn='{$this->_R['sn']}'");
        $this->_check->ajax($this, $_where);
    }



	
}
