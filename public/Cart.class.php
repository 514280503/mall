<?php
//购物车类
class Cart {

    //给购物车添加一个商品
    public function addProduct() {
        setcookie('cart['.$_POST['goodsid'].']', serialize(array(
            'id'=>$_POST['goodsid'],
            'name'=>$_POST['name'],
            'num'=>$_POST['num'],
            'price_cost'=>$_POST['price_cost']
        )), time() + 60 * 60 * 24 * 7);
    }

    //获取购物车里的商品
    public function getProduct() {
        $_cartArr = array();
        if (isset($_COOKIE['cart'])) {
            foreach ($_COOKIE['cart'] as $_key=>$_value) {
                $_cartArr[$_key] = unserialize(stripslashes($_value));
            }
        }
        return $_cartArr;
    }




}
