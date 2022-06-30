<?php
require_once 'configs/database.php';

class Danh_gia extends Database
{
    public function getDanh_gia()
    {
        $qr = "Select * from danh_gia";
        return $this->query($qr);
    }
    public function addDanh_gia($ID_De, $ID_Tai_khoan, $Binh_luan, $Sao_danh_gia)
    {
        $qr = "insert into danh_gia(ID_De, ID_Tai_khoan,Binh_luan, Sao_danh_gia )
         values('$ID_De','$ID_Tai_khoan','$Binh_luan', '$Sao_danh_gia')";
        $this->query($qr);
    }
    public function updateDanh_gia($ID_De, $ID_Tai_khoan, $Binh_luan, $Sao_danh_gia)
    {
        $qr = "update  danh_gia set Binh_luan='$Binh_luan',Sao_danh_gia='$Sao_danh_gia' where ID_De='$ID_De' and ID_Tai_khoan='$ID_Tai_khoan'";
        $this->query($qr);
    }
    public function deleteDanh_gia($ID_De, $ID_Tai_khoan)
    {
        $qr = "delete from danh_gia where ID_De='$ID_De' and ID_Tai_khoan='$ID_Tai_khoan'";
        $this->query($qr);
    }
}
