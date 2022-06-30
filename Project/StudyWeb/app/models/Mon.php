<?php
require_once 'configs/database.php';

class Mon extends Database
{
    public function getMon()
    {
        $qr = "Select * from mon";
        return $this->query($qr);
    }

    public function addMon($ID_Mon, $Ten)
    {
        $qr = "insert into mon(ID_Mon, Ten) values('$ID_Mon','$Ten')";
        $this->query($qr);
    }
    public function updateMon($ID_Mon)
    {
        $qr = "update mon set Ten='$Ten' where ID_Mon='$ID_Mon'";
        return $this->query($qr);
    }
    public function deleteMon($ID_Mon)
    {
        $qr = "delete from mon where ID_Mon='$ID_Mon'";
        $this->query($qr);
    }
    // public function getExamSubject(){
    //     $
    //     return this->
    // }
}
