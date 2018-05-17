<?php
//购物车控制器
class CartAction extends Action {
    private $_cart = null;
    private $_nav = null;
    private $_goods = null;

    public function __construct() {
        parent::__construct();
//        if (!isset($_COOKIE['user'])) $this->_redirect->succ('?a=member&m=login&url='.Tool::getPrevPage(), '请先登录！');
        $this->_cart = new Cart();
        $this->_nav = new NavModel();
        $this->_goods = new GoodsModel();
    }

    //显示购物车
    public function index() {

        $this->_tpl->assign('GoodsId', $_POST['goodsid']);
        $this->_tpl->assign('GoodsName', $_POST['name']);
        $this->_tpl->assign('prePage', Tool::getPrevPage());
        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->display(SMARTY_FRONT.'public/shop/cart.tpl');
    }


    //给购物车添加一个商品
    public function addProduct() {
        if (isset($_POST['send']) && $_POST['send']=="预约")
        {
            if($this->_model->add()){
                $this->_goods->updateSalenum($_POST['goodsId']);
                $this->_redirect->succ($_POST['prePage'], '预约成功！');
            }else{
                $this->_redirect->error('预约失败！');
            }
        }
        //$this->_model->add() ? $this->_redirect->succ($_POST['prePage'], '预约成功！') : $this->_redirect->error('预约失败！');
        $this->_tpl->assign('GoodsName', $_POST['name']);
        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->display(SMARTY_FRONT.'public/shop/cart.tpl');
    }




}

