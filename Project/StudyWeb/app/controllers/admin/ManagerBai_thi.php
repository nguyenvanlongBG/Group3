<?php
class ManagerExam extends Controller
{

    public function show()
    {
        $account = $this->model("ExamModel");

        $this->render("products/ListAccount", ["Acc" => $account->getExam(2)]);
    }
    public function showDiem()
    {
        $bai_thi = $this->model("Bai_thi");
        $cau_hoi = $this->model("Cau_hoi");
        $ket_qua = $this->model("Ket_qua");

        $listBT = $bai_thi->getBai_thiByID_Tai_khoan(1);

        $listBai_thi = $listBT->fetchAll();
        $ID_De = $listBai_thi[0]['ID_De'];

        $ID_Bai_Thi = $listBai_thi[0]['ID_Bai_Thi'];
        $listCH = $cau_hoi->getCau_hoiByID_De($ID_De);

        $listCau_hoi = $listCH->fetchAll();
        $diem = 0;
        foreach ($listCau_hoi as $cau_Hoi) {
            $lua_Chon = $ket_qua->getKet_quaByKey($ID_Bai_Thi, $cau_Hoi['ID_Cau_hoi']);
            $lua_chon = $lua_Chon->fetch();
            if ($lua_chon['Lua_chon'] == $cau_Hoi['Dap_an']) {
                $diem += 1;
            }
        }
        $this->render("products/ListAccount", ["Diem" => $diem]);

    }
    public function add()
    {
        $account = $this->model("AccountModel");
        $account->addAccount("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getAccount()]);
    }
    public function update()
    {
        $account = $this->model("AccountModel");
        $account->addAccount("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getAccount()]);
    }
    public function delete()
    {
        $account = $this->model("AccountModel");
        $account->addAccount("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getAccount()]);
    }
    public function createExam($subject, $num)
    {

        $qr = "select  * from question where ID_Subject=$subject";
        return $this->query($qr);
    }
}
