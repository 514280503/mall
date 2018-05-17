<?php
class ShopdetailfAction extends Action {
    private $_nav = null;
    private $_goods = null;

    public function __construct() {
        parent::__construct();
        $this->_nav = new NavModel();
        $this->_goods = new GoodsModel();
        $this->_commend = new CommendModel();
    }

    //实现初始页面
    public function index() {


        $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
        $this->_tpl->assign('FrontSonNav', $this->_nav->findFrontSonNav());
        $this->_tpl->assign('DetailsGoods', $this->_goods->findDetailGoods($_GET['goodsid']));
        $this->_tpl->assign('Commend', $this->_commend->findDetailsCommend());
        $this->_tpl->display(SMARTY_FRONT.'public/shop/detail.tpl');
    }


}

