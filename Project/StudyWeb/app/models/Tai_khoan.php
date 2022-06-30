
<?php

require_once 'core/Database.php';

class Tai_khoan extends Database
{
    public function getTai_khoan()
    {
        $qr = "select * from tai_khoan";
        return $this->query($qr);
    }
    public function addTai_khoan($Mat_khau, $Email, $authorization, $Ten)
    {
        $qr = "insert tai_khoan( Mat_khau,Email, authorization, Ten) values('$Mat_khau','$Email', '$authorization', '$Ten')";
        $this->query($qr);
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
