<?php
require_once 'configs/database.php';

class KetQuaModel extends Database
{
    public function getKetQua()
    {
        $qr = "Select * from ket_qua";
        return $this->query($qr);
    }
    public function getKetQuaByIDCauHoi($ID_Cau_hoi)
    {
        $qr = "select * from ket_qua where  ID_Cau_hoi='$ID_Cau_hoi'";
        return $this->query($qr);
    }
    public function addKetQua($ID_Bai_thi, $ID_Cau_hoi, $Lua_chon)
    {
        $qr = "insert into ket_qua(ID_Bai_thi, ID_Cau_hoi, Lua_chon)
        values('$ID_Bai_thi','$ID_Cau_hoi', '$Lua_chon')";
        $this->query($qr);
    }
    public function updateKetQua($ID_Bai_thi, $ID_Cau_hoi, $Lua_chon)
    {
        $qr = "update  ket_qua set ID_Bai_thi='$ID_Bai_thi', ID_Cau_hoi='$Id_Cau_hoi', Lua_chon='$Lua_chon' where ID_Bai_thi='$ID_Bai_thi'  and ID_Cau_hoi='$ID_Cau_hoi' ";
        $this->query($qr);
    }
    public function deleteKetQua($ID_Bai_thi, $ID_Cau_hoi)
    {
        $qr = "delete from ket_qua where  ID_Bai_thi='$ID_Bai_thi' and ID_Cau_hoi='$ID_Cau_hoi'";
        $this->query($qr);
    }
}
