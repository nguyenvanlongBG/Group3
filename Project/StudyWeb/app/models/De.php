<?php
require_once 'configs/database.php';

class De extends Database
{
    public function getDe()
    {
        $qr = "Select * from de";
        return $this->query($qr);
    }
    public function addDe($ID_De, $Ten, $ID_Chuong, $Thoi_gian)
    {
        $qr = "insert into de(ID_De, Ten,ID_Chuong, Thoi_gian)
        values('$ID_De','$Ten','$ID_Chuong', '$Thoi_gian')";
        $this->query($qr);
    }
    public function updateDe($ID_De, $Ten, $ID_Chuong, $Thoi_gian)
    {
        $qr = "update de  set Ten='$Ten',ID_Chuong='$ID_Chuong', Thoi_gian='$Thoi_gian' where ID_De='$ID_De'";
        $this->query($qr);
    }
    public function deleteDe($ID_De)
    {
        $qr = "delete from de where ID_De='$ID_De'";
        $this->query($qr);
    }
}
