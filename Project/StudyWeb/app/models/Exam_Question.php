<?php
require_once 'configs/database.php';

class Exam_Question extends Database
{
    public function getExam()
    {
        $qr = "Select * from exam_question";
        return mysqli_query($qr);
    }
    public function addExam($ID_Exam, $ID_Question)
    {
        $qr = "insert into exam_question(ID_Exam, ID_Question) values('$ID_Exam','$ID_Question')";
        mysqli_query($qr);
    }

    public function deleteExamQuestion($ID_ExamQuestion)
    {
        $qr = "delete from exam where ID_Exam='$ID_ExamQuestion'";
        $this->query($qr);
    }

}
