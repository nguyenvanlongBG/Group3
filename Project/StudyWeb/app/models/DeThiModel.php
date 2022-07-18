<?php
require_once 'configs/database.php';

class DeThiModel extends Database
{
    public function getDeThi()
    {
        $qr = "Select * from de";
        return $this->query($qr);
    }
    public function getDeThiByID_De($ID_De)
    {
        $qr = "select * from de where ID_De='$ID_De'";
        return $this->query($qr);
    }
    public function getCauHoiByID_De($ID_De)
    {
        $qr = "select * from cau_hoi where ID_De='$ID_De'";
        return $this->query($qr);
    }
    public function addDeThi($ID_De, $Ten, $ID_Chuong, $Thoi_gian)
    {
        $qr = "insert into de(ID_De, Ten,ID_Chuong, Thoi_gian)
        values('$ID_De','$Ten','$ID_Chuong', '$Thoi_gian')";
        $this->query($qr);
    }
    public function updateDeThi($ID_De, $Ten, $ID_Chuong, $Thoi_gian)
    {
        $qr = "update de  set Ten='$Ten',ID_Chuong='$ID_Chuong', Thoi_gian='$Thoi_gian' where ID_De='$ID_De'";
        $this->query($qr);
    }
    public function deleteDeThi($ID_De)
    {
        $qr = "delete from de where ID_De='$ID_De'";
        $this->query($qr);
    }
}
