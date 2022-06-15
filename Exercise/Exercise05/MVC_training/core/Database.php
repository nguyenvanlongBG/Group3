<?php


// để dùng biến $con, chỉ cần dùng $this->__conn
class Database {
    private $__conn;
    function __construct(){
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);
       
    }

    function insert($table, $data){
       

        return false; 
    }

    function delete($table, $condition=''){



    }
    function query($sql){
        $statement = $this->__conn->prepare($sql);
        $statement->execute();


        return $statement;
    }



}