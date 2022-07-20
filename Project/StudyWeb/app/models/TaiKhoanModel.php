
<?php

require_once 'core/Database.php';

class TaiKhoanModel extends Database
{
    public function getnameByemail($mail)
    {
        $qr = "select ten from tai_khoan WHERE Email=? ";
        $statement = $this->__conn->prepare($qr);
        $statement->bindParam(1, $mail);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetchAll();
        return $result;
    }
    public function dangnhap($id, $pass)
    {
        $qr = "select authorization from tai_khoan WHERE Email=? and Mat_khau=?";

        return $this->logincheck($qr, $id, $pass);
    }
    public function getID_TaiKhoan($mail)
    {
        $qr = "select ID_Tai_khoan from tai_khoan WHERE Email=? ";
        return $this->getIdByEmail($qr, $mail);
    }
    public function getTaiKhoan()
    {
        $qr = "select * from tai_khoan";
        return $this->query($qr);
    }
    public function addTai_khoan($Mat_khau1, $Email, $Ten)
    {
        $Mat_khau = md5($Mat_khau1);
        $qr = "insert tai_khoan( Mat_khau,Email, Ten,authorization) values('$Mat_khau','$Email', '$Ten','user')";
        return $this->query($qr);
    }

    public function updateTai_khoan($ID_Tai_khoan, $Mat_khau, $Email, $authorization, $Ten)
    {
        $qr = "update  tai_khoan set Mat_khau='$Mat_khau',Email='$Email', authorization='$authorization', Ten='$Ten' where ID_Tai_khoan='$ID_Tai_khoan'";
        $this->query($qr);
    }
    public function deleteTai_khoan($ID_Tai_khoan)
    {
        $qr = "delete from tai_khoan where ID_Tai_khoan='$ID_Tai_khoan'";
        $this->query($qr);
    }
    public function getTai_khoanRandom($num)
    {
        $qr = "select * from tai_khoan ORDER BY RAND() LIMIT $num";
        return $this->query($qr);
    }
}
