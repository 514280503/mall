<?php
class ShoplistfAction extends Action {
    private $_nav = null;
    private $_goods = null;

    public function __construct() {
        parent::__construct();
        $this->_nav = new NavModel();
        $this->_goods = new GoodsModel();
    }

    //实现初始页面
    public function index() {
        parent::page(15, $this->_goods);
        $this->_tpl->assign('ListGoods', $this->_goods->findListGoods());
        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->assign('FrontSonNav', $this->_nav->findFrontSonNav());
        $this->_tpl->assign('FrontPrice', $this->_nav->findFrontPrice());
        $this->_tpl->assign('FrontBrand', $this->_nav->findFrontBrand());
        $this->_tpl->assign('url', Tool::getUrl());
        $this->_tpl->display(SMARTY_FRONT.'public/shop/list.tpl');
    }


}

