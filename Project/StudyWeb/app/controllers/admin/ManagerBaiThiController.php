<?php
class ManagerBaiThiController extends Controller
{

    public function showBaiThi()
    {
        $baithi = $this->model("BaiThiModel");
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();
        $ID_De = $data['ID_De'];
        $de = $this->model("DeThiModel");
        $dethi = $de->getDeThiByID_De($ID_De);
        $dethi = $dethi->fetch();
        $Ten_De = $dethi['Ten'];
        // $Ten_De = $data['Ten'];

        $listBaiThi = $baithi->getBaiThiByID_De($ID_De);
        $listBT = $listBaiThi->fetchAll();
        $this->render("ManagerBaiThiView", ["listBaiThi" => $listBT, "Ten_De" => $Ten_De]);
    }
    public function showDiem()
    {
        $bai_thi = $this->model("BaiThiModel");
        $cau_hoi = $this->model("CauHoiModel");
        $ket_qua = $this->model("KetQuaModel");

        $listBT = $bai_thi->getBaiThiByID_Tai_khoan(1);

        $listBai_thi = $listBT->fetchAll();
        $ID_De = $listBai_thi[0]['ID_De'];

        $ID_Bai_Thi = $listBai_thi[0]['ID_Bai_Thi'];
        $listCH = $cau_hoi->getCauHoiByID_De($ID_De);

        $listCau_hoi = $listCH->fetchAll();
        $diem = 0;
        foreach ($listCau_hoi as $cau_Hoi) {
            $lua_Chon = $ket_qua->getKetQuaByKey($ID_Bai_Thi, $cau_Hoi['ID_Cau_hoi']);
            $lua_chon = $lua_Chon->fetch();
            if ($lua_chon['Lua_chon'] == $cau_Hoi['Dap_an']) {
                $diem += 1;
            }
        }
        $this->render("products/ListAccount", ["Diem" => $diem]);

    }
    public function add()
    {
        $account = $this->model("TaiKhoanModel");
        $account->addAccount("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getTaiKhoan()]);
    }
    public function update()
    {
        $account = $this->model("TaiKhoanModel");
        $account->addAccount("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getTaiKhoan()]);
    }
    public function delete()
    {
        $account = $this->model("TaiKhoanModel");
        $account->addAccount("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getAccount()]);
    }
    public function createExam($subject, $num)
    {

        $qr = "select  * from question where ID_Subject=$subject";
        return $this->query($qr);
    }
}
