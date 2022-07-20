<?php
class FormBaiThiController extends Controller
{

    public function show()
    {
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $cauhoi = $this->model("CauHoiModel");

        $listCH = $cauhoi->getCauHoiByID_De($data['ID_De']);

        //$ID_De = $listBai_thi[0]['ID_De'];

        //$ID_Bai_Thi = $listBai_thi[0]['ID_Bai_Thi'];
        //$listCH = $cau_hoi->getCauHoiByID_De($ID_De);

        $listCau_hoi = $listCH->fetchAll();

        // foreach ($listCau_hoi as $cau_Hoi) {
        //     $lua_Chon = $ket_qua->getKetQuaByKey($ID_Bai_Thi, $cau_Hoi['ID_Cau_hoi']);
        //     $lua_chon = $lua_Chon->fetch();
        //     if ($lua_chon['Lua_chon'] == $cau_Hoi['Dap_an']) {
        //         $diem += 1;
        //     }
        // }

        $this->render("FormBaiThiView", ["listCauHoi" => $listCau_hoi, "ID_De" => $data['ID_De']]);

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
        $account->addTaiKhoan("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getTaiKhoan()]);
    }
    public function delete()
    {
        $account = $this->model("TaiKhoanModel");
        $account->addTaiKhoan("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getTaiKhoan()]);
    }
}
