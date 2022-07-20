<?php
require_once 'configs/database.php';

class BaiThiModel extends Database
{
    public function getBaiThi()
    {
        $qr = "select * from bai_thi";
        return $this->query($qr);
    }
    public function getBaiThiByIDTaiKhoan($ID_Tai_khoan)
    {
        $qr = "select * from bai_thi where ID_Tai_Khoan='$ID_Tai_khoan'";
        return $this->query($qr);
    }
    public function getBaiThiByID_De($ID_De)
    {
        $qr = "select * from bai_thi where ID_De='$ID_De' order by Diem DESC";
        return $this->query($qr);
    }
    public function getCount()
    {
        $qr = "select max(ID_Bai_Thi) from bai_thi";
        return $this->query($qr);
    }
    public function addBaiThi($ID_Bai_Thi, $ID_De, $Bat_dau, $Ket_thuc, $ID_Tai_khoan, $Diem)
    {
        $qr = "insert into bai_thi( ID_Bai_Thi,ID_De, Bat_dau, Ket_thuc, ID_Tai_Khoan, Diem) values($ID_Bai_Thi,$ID_De, '$Bat_dau', '$Ket_thuc', $ID_Tai_khoan, $Diem)";
        return $this->query($qr);
    }
    public function updateBaiThi($ID_Bai_Thi, $ID_De, $Bat_dau, $Ket_thuc, $ID_Tai_Khoan, $Diem)
    {
        $qr = "update  bai_thi set ID_De='$ID_De', Bat_dau='$Bat_dau', Ket_thuc='$Ket_thuc', ID_Tai_Khoan=$ID_Tai_Khoan, Diem=$Diem where ID_Bai_Thi=$ID_Bai_Thi";
        $this->query($qr);
    }
    public function deleteBaiThi($ID_Bai_Thi)
    {
        $qr = "delete from bai_thi where ID_Bai_Thi='$ID_Bai_Thi'";
        $this->query($qr);
    }

}
