<?php
define('_DIR_ROOT',__DIR__);
// xử lý htttp root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on'){
    $webroot="https://".$_SERVER['HTTP_HOST'];
}else{
    $webroot="http://".$_SERVER['HTTP_HOST'];
}
    // xử lý tên file strtolower(_DIR_ROOT)

$folder = substr(strtolower(_DIR_ROOT),15,13);

$webroot = $webroot.$folder;

define('_WEB_ROOT',$webroot);
// tự động load configs
$configs_dir = scandir('configs');
if(!empty($configs_dir)){
    foreach ($configs_dir as $item){
        if($item!='.' && $item!='..' && file_exists('configs/'.$item)){
            require_once 'configs/'.$item;
        }
    }
}

require_once 'core/Route.php'; 
require_once 'core/Session.php';
require_once 'app/App.php';             // load app
 

// kiểm tra config và load database
if(!empty($config['database'])){
    $db_config = array_filter($config['database']);

    if(!empty($db_config)){
        require_once 'core/Connection.php';
        require_once 'core/Database.php';
    }
}
require_once 'core/Model.php'; 
require_once 'core/Controller.php';     // load Controller
require_once 'core/Request.php';
require_once 'core/Response.php';
?>
