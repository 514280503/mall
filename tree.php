<?php
//二级树型结构
class Tree {
    //用于存放实例化的对象
    static private $_instance = null;
    //公共静态方法获取实例化的对象
    static public function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    //私有克隆
    private function __clone() {}
    //私有构造
    private function __construct() {}

    public function getTree(Array $_all, $_id) {

        foreach ($_all as $_key=>$_value) {

            if($_value->sid == 0){
                $_mainNav[] = $_value;
            }else{
                $_childNav[] = $_value;
//                foreach($_childNav as $_skey=>$_svalue){
//                    if($_svalue->id == $_value->sid){
//                        $_sonNav[] = $_svalue;
//                    }
//                }
            }

            if ($_value->id == $_id) {
                $_resultNav[0] = $_value;
                $_resultNav[0]->sait[$_resultNav[0]->id] = $_resultNav[0]->name;

            }

            if ($_value->sid == $_id) {
                $_resultNav[0]->child[] = $_value;
//                var_dump($_resultNav[0]->child[0]);exit();

                foreach($_resultNav[0]->child as $_skey=>$_svalue){

                    if($_svalue->id == $_value->sid){
//                        var_dump($_resultNav[0]->child);exit();
                        $_resultNav[0]->child[0]->son[]= $_svalue;
                    }
                }
            }


        }

        if ($_resultNav[0]->sid != 0) {
            foreach ($_mainNav as $_key=>$_value) {
                if ($_resultNav[0]->sid == $_value->id) {
                    $_child = $_resultNav;
                    $_resultNav[0] = $_value;
                    $_resultNav[0]->sait[$_resultNav[0]->id] = $_resultNav[0]->name;
                    $_resultNav[0]->sait[$_child[0]->id] = $_child[0]->name;
                }
            }
            foreach ($_childNav as $_key=>$_value) {
                if ($_resultNav[0]->id == $_value->sid) {
                    $_resultNav[0]->child[] = $_value;
                }
            }
        }
//var_dump($_resultNav);exit();

        return $_resultNav;
    }

    function getAllTree($list,$pk='id',$pid='sid',$child='_child',$root=0){
        $tree=array();
        $packData=array();
        foreach ($list as $data) {
            $packData[$data[$pk]] = $data;
        }
        foreach ($packData as $key =>$val){
            if($val[$pid]==$root){//代表跟节点
                $tree[]= $packData[$key];
            }else{
                //找到其父类
                $packData[$val[$pid]][$child][]= $packData[$key];
            }
        }
        return $tree;
    }
//    function getTree($items) {
//
//        $tree = array(); //格式化好的树
//        foreach ($items as $item){
//
//            if (isset($items[$item['sid']])) {
//                $items[$item['sid']]['son'][] = &$items[$item['id']];
//            }else{
//                $tree[] = &$items[$item['id']];
//            }
//        }
//        return $tree;
//    }









}
