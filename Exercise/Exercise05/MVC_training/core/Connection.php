<?php
class Connection{
    private static $instance = null, $conn = null;

    private function __construct($config){
        // kết nối database
        try{
            // cấu hình dns 
            $dns = 'mysql:dbname='.$config['db'].';host='.$config['host'];

            // cấu hình opstion
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND =>'Set names utf8',
                PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
            ];
            // câu lệnh kết nối 
            $con = new  PDO($dns, $config['user'], $config['password'], $options);
            self::$conn = $con;
        }catch(EXCEPTION $exception) {
            $mess = $exception ->getMessage();
            die($mess);

            // if(preg_match('/Access denied for user/ ',$mess)){
            //     die('Lỗi kết nối cơ sở dữ liệu');
            // }
            // if(preg_match('/Unknow database/ ')){
            //     die('Không tìm thấy cơ sở dữ liệu');
            // }
        }
    }

    public static function getInstance($config){
        if(self::$instance == null){
            $connection = new Connection($config);
            self::$instance = self::$conn;
        }
        return self::$instance;
    }

}