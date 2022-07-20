
<?php

require_once 'core/Database.php';

class ChuongModel extends Database
{
    public function getChuong()
    {
        $qr = "select * from chuong";
        return $this->query($qr);
    }
    public function addTaiKhoan($Mat_khau, $Email, $authorization, $Ten)
    {
        $qr = "insert tai_khoan( Mat_khau,Email, authorization, Ten) values('$Mat_khau','$Email', '$authorization', '$Ten')";
        return $this->query($qr);
    }
    public function updateTaiKhoan($ID_Tai_khoan, $Ten, $Email, $authorization)
    {

        // print($Ten);
        // print($Email);

        $qr = "Update  tai_khoan Set Email='$Email', authorization='$authorization', Ten='$Ten' where ID_Tai_khoan='$ID_Tai_khoan'";
        $this->query($qr);
    }
    public function deleteTaiKhoan($ID_Tai_khoan)
    {
        $qr = "delete from tai_khoan where ID_Tai_khoan='$ID_Tai_khoan'";
        $this->query($qr);
    }
    public function getTaiKhoanRandom($num)
    {
        $qr = "select * from tai_khoan ORDER BY RAND() LIMIT $num";
        return $this->query($qr);
    }
}
