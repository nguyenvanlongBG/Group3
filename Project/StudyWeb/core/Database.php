<?php

// để dùng biến $con, chỉ cần dùng $this->__conn
class Database
{
    private $__conn;
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

}
