<?php
require_once 'configs/database.php';

class Bai_thi extends Database
{
    public function getBai_thi()
    {
        $qr = "select * from bai_thi";
        return $this->query($qr);
    }
    public function getBai_thiByID_Tai_khoan($ID_Tai_khoan)
    {
        $qr = "select * from bai_thi where ID_Tai_Khoan='$ID_Tai_khoan'";
        return $this->query($qr);
    }
    public function addBai_thi($ID_Bai_Thi, $ID_De, $Bat_dau, $Ket_thuc, $ID_Tai_khoan)
    {
        $qr = "insert into bai_thi( ID_Bai_Thi,ID_De, bat_dau, Ket_thuc, ID_Tai_khoan) values('$ID_Bai_Thi','$ID_De', '$Bat_dau, '$Ket_thuc', '$ID_Tai_khoan')";
        return $this->query($qr);
    }
    public function updateBai_thi($ID_Bai_Thi, $ID_De, $Bat_dau, $Ket_thuc, $ID_Tai_khoan)
    {
        $qr = "update  bai_thi set ID_De='$ID_De', Bat_dau='$Bat_dau', Ket_thuc='$Ket_thuc, ID_Tai_khoan='$ID_Tai_khoan' where ID_Bai_Thi='$ID_Bai_Thi'";
        $this->query($qr);
    }
    public function deleteBai_thi($ID_Bai_Thi)
    {
        $qr = "delete from bai_thi where ID_Bai_Thi='$ID_Bai_Thi'";
        $this->query($qr);
    }
    // public function createBai_thi($Mon, $num)
    // {
    //     $exam = addExam($ID_De, $Bat_dau, $Ket_thuc, $ID_Tai_khoan);
    //     $qr = "select  * from cau_hoi where ID_Mon=$Mon ORDER BY RAND() LIMIT $num  ";
    //     $listQuestions = $this->query($qr);
    //     foreach ($listQuestions as $question) {
    //         $qrQuestion = "insert into exam_question(ID_Exam, ID_Question) values (')" . $exam['ID_Exam'] . "', '" . $question['ID_Question'] . "')";
    //         $this->query($qrQuestion);
    //     }
    // }
}
