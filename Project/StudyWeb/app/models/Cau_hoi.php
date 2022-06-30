<?php
require_once 'configs/database.php';

class Cau_hoi extends Database
{
    public function getCau_hoi()
    {
        $qr = "Select * from cau_hoi";
        return $this->query($qr);
    }
    public function getCau_hoiByID_De($ID_De)
    {
        $qr = "select * from cau_hoi where ID_De='$ID_De'";
        return $this->query($qr);
    }
    public function addCau_hoi($ID_Cau_hoi, $ID_De, $Do_kho, $Noi_dung, $Dap_an_A, $Dap_an_B, $Dap_an_C, $Dap_an_D, $Dap_an)
    {
        $qr = "insert into cau_hoi(ID_Cau_hoi, ID_De,Do_kho, Noi_dung, Dap_an_A,Dap_an_B, Dap_an_C, Dap_an_D, Dap_an )
         values('$ID_Cau_hoi','$ID_De','$Do_kho', '$Noi_dung', '$Dap_an_A', '$Dap_an_B', '$Dap_an_C','$Dap_an_D', '$Dap_an' )";
        $this->query($qr);
    }
    public function updateCau_hoi($ID_Cau_hoi, $ID_De, $Do_kho, $Noi_dung, $Dap_an_A, $Dap_an_B, $Dap_an_C, $Dap_an_D, $Dap_an)
    {
        $qr = "update  cau_hoi set ID_Cau_hoi='$ID_Cau_hoi', ID_De='$ID_De',Do_kho='$Do_kho', Noi_dung='$Noi_dung', Dap_an_A='$Dap_an_A', Dap_an_B='$Dap_an_B',  Dap_an_C='$Dap_an_C', Dap_an_D='$Dap_an_D', Dap_an='$Dap_an'   where Account='$Account'";
        $this->query($qr);
    }
    public function deleteCau_hoi($ID_Cau_hoi)
    {
        $qr = "delete from cau_hoi where ID_Cau_hoi='$ID_Cau_hoi'";
        $this->query($qr);
    }
    public function getCauhoiRandom($num)
    {
        $qr = "select * from cau_hoi ORDER BY RAND() LIMIT $num";
        return $this->query($qr);
    }
}
