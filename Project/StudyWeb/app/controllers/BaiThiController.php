<?php
class BaiThiController extends Controller
{

    public function show()
    {
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $bai_thi = $this->model("BaiThiModel");
        $cau_hoi = $this->model("CauHoiModel");
        $ket_qua = $this->model("KetQuaModel");

        // $listBT = $bai_thi->getBaiThiByID_Tai_khoan(1);

        // $listBai_thi = $listBT->fetchAll();
        // $ID_De = $listBai_thi[0]['ID_De'];

        // $ID_Bai_Thi = $listBai_thi[0]['ID_Bai_Thi'];
        $listCH = $cau_hoi->getCauHoiByID_De($data['ID_De']);

        $listCau_hoi = $listCH->fetchAll();
        $diem = 0;
        $i = 0;
        $countBaiThi = $bai_thi->getCount();
        $countBaiThi = $countBaiThi->fetch();
        $bai_thi->addBaiThi(($countBaiThi[0] + 1), (int) $data['ID_De'], '2022-07-15 19:45:02', '2022-07-16 19:45:02', 4, 0);

        foreach ($listCau_hoi as $cau_Hoi) {
            ++$i;
            $luachon = $data['Ketquacau' . $i];
            $ket_qua->addKetQua(($countBaiThi[0] + 1), $cau_Hoi['ID_Cau_hoi'], $luachon);
            $lua_Chon = $ket_qua->getKetQuaByIDCauHoi($cau_Hoi['ID_Cau_hoi']);
            $lua_chon = $lua_Chon->fetch();
            if ($luachon == $cau_Hoi['Dap_an']) {
                $diem += 1;
            }
        }
        $bai_thi->updateBaiThi($countBaiThi[0], $data['ID_De'], '2022-07-15 19:45:02', '2022-07-15 19:45:02', 4, $diem);

        $this->render("KetQuaBaiThiView", ["Diem" => $diem]);

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
        $account = $this->model("BaiThiModel");
        $account->addTaiKhoan("Account2", "Password2", "Email2", "admin2", "Name2");
        $this->render("products/ListAccount", ["Acc" => $account->getTaiKhoan()]);
    }
}
