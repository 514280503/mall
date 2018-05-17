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


    //得到二级树型结构
//    public function getTree(Array $_all, $_id) {
//        //得到所有的数据必须遵循一下格式：
//        //索引字段必须是id，如果不是可以使用别名 key as id,key id
//        //主类和子类的区分用的字段：sid，如果不是可以用别名：skey as sid,skey sid
//        //类别名称必须使用name，如果不是，那么使用kind as name ,kind name
//        foreach ($_all as $_key=>$_value) {
////            var_dump($_all);exit();
//            $_value->sid == 0 ? $_mainNav[] = $_value : $_childNav[] = $_value;
//            if ($_value->id == $_id) {
//                $_resultNav[0] = $_value;
//                $_resultNav[0]->sait[$_resultNav[0]->id] = $_resultNav[0]->name;
//            }
//            if ($_value->sid == $_id) {
//                $_resultNav[0]->child[] = $_value;
//            }
//
////            $_r_child = $_resultNav[0]->child;
////
////                foreach($_r_child as $_key=>$value){
////                    if($value->id == $_value->sid){
//////                        $_resultNav[0]->child[0]->id ->son[] = $_value;
//////                        var_dump($value->id,$_value->sid,'----');
////                        $value->son[] = $_value;
////                    }
////
////                }
//
//        }
////        var_dump($_resultNav);
//        if ($_resultNav[0]->sid != 0) {
//            //var_dump($_resultNav);
//            foreach ($_mainNav as $_key=>$_value) {
//                if ($_resultNav[0]->sid == $_value->id) {
//                    $_child = $_resultNav;
//                    $_resultNav[0] = $_value;
//                    $_resultNav[0]->sait[$_resultNav[0]->id] = $_resultNav[0]->name;
//                    $_resultNav[0]->sait[$_child[0]->id] = $_child[0]->name;
//                }
//            }
//            foreach ($_childNav as $_key=>$_value) {
//                if ($_resultNav[0]->id == $_value->sid) {
//                    $_resultNav[0]->child[] = $_value;
//                }
//            }
//        }
//        //var_dump($_resultNav);
//        return $_resultNav;
//    }

    public function getTree(Array $all, $id) {

        //得到最终成型的数组
        $obj = [];


        //用getid替换id
        if (isset($_GET['getid'])) {
            $id = $_GET['getid'];
        }


        //得到一级数据，并存入数组
        foreach ($all as $key => $value) {
            //判断一级导航
            if ($value->id == $id) {
                //将一级导航信息写入数组
                $obj['id'] 		= 	$value->id;
                $obj['name']	=	$value->name;
                $obj['sid']		=	$value->sid;
            }
        }

        //通过一级导航id，得到子类
        foreach ($all as $key => $value) {
            //将二级导航附属到一级导航上
            if ($value->sid == $id) {
                $obj['two'][] = $value;
            }
        }


        //先遍历二级导航
        foreach ($obj['two'] as $key => $value) {
            //遍历所有，附属三级
            foreach ($all as $key2 => $value2) {
                //判断二级id和三级sid是否相同
                if ($obj['two'][$key]->id == $value2->sid) {
                    $obj['two'][$key]->three[] = $value2;
                }
            }
        }

        return $obj;
    }

    public function selectTree($param, $pid = 0, $lvl = 0)
    {
        static $res = [];

        foreach ($param as $key => $vo) {
            foreach ($param as $key1 => $vo1) {
                if ($pid == $vo1['sid']) {
                    $vo1['name'] = str_repeat('▪', $lvl) . (1 + $lvl) . '岗 -' . $vo1['name'];
                    $res[] = $vo1;
                    $temp = $lvl + 1;

                    $this->selectTree($param, $vo1['id'], $temp);
                }
            }

        }
        var_dump($res);
        return $res;
    }















}
