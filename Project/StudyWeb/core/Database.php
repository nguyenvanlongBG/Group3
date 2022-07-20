<?php

// để dùng biến $con, chỉ cần dùng $this->__conn
class Database
{
    protected $__conn;
    public function __construct()
    {
        global $db_config;
        $this->__conn = Connection::getInstance($db_config);

    }

    public function insert($table, $data)
    {

        return false;
    }

    public function delete($table, $condition = '')
    {

    }
    public function query($sql)
    {
        $statement = $this->__conn->prepare($sql);
        $statement->execute();

        return $statement;
    }
    public function logincheck($sql, $mail, $pass)
    {
        $statement = $this->__conn->prepare($sql);
        $statement->bindParam(1, $mail);
        $pass1 = md5($pass);
        $statement->bindParam(2, $pass1);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetchAll();
        //print_r($result);
        return $result;
    }public function getIdByEmail($sql, $mail)
    {
        $statement = $this->__conn->prepare($sql);
        $statement->bindParam(1, $mail);

        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetchAll();
        //print_r($result);
        return $result;
    }
}
