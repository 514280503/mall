<?php
define('SMARTY_FRONT', 'default/');
//if(isMobile())
//{
//    define('SMARTY_FRONT', 'mobile/');//皮肤
//}else
//{
//    define('SMARTY_FRONT', 'default/');//皮肤
//}
define('SMARTY_ADMIN', 'admin/');//后台皮肤
define('SMARTY_TEMPLATE_DIR', ROOT_PATH.'/view/');//模板目录
define('SMARTY_COMPILE_DIR', ROOT_PATH.'/compile/');//编译目录
define('SMARTY_CONFIG_DIR', ROOT_PATH.'/configs/');//配置变量目录
define('SMARTY_CACHE_DIR', ROOT_PATH.'/cache/');//缓存目录
define('SMARTY_CACHING', 0);//是否开启缓存，网站开发调试阶段，我们应该关闭缓存
define('SMARTY_CACHE_LIFETIME', 60*60*24);//缓存的声明周期
define('SMARTY_LEFT_DELIMITER', '{');//左定界符
define('SMARTY_RIGHT_DELIMITER', '}');//右定界符

//设置数据库连接参数
define('DB_DNS', 'mysql:host=localhost;dbname=mall1');//数据库的dns
define('DB_USER', 'root');//用户名
define('DB_PASS', 'root');//密码
define('DB_CHARSET', 'UTF8');//字符集
define('DB_FREFIX', 'mall_');//表前缀

//系统参数设置
define('PAGE_SIZE', 10);//分页数量
define('UPDIR','uploads/');//上传图片目录



function isMobile()
{
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        return true;

    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    {
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    }
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile');
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
            return true;
    }
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        }
    }
    return false;
}
