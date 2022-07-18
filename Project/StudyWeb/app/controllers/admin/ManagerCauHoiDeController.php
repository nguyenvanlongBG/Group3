<?php
class ManagerCauHoiDeController extends Controller
{

    // public function show()
    // {

    //     $this->render("AddCauHoiView");

    // }
    // public function index()
    // {
    //     $DeThi = $this->model("CauHoiModel");
    //     $listDeThi = $DeThi->getDethi();
    //     $listDT = $listDeThi->fetchAll();
    //     $this->render("ManagerDeThiView", ['listDeThi' => $listDT]);

    // }
    public function add()
    {
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $cauhoi = $this->model("CauHoiModel");

        $ID_De = $data['ID_De'];
        $ID_Cau_hoi = $data['ID_Cau_hoi'];
        $Do_kho = $data['Do_kho'];
        $Noi_dung = $data['Noi_dung'];
        $Dap_an_A = $data['Dap_an_A'];
        $Dap_an_B = $data['Dap_an_B'];
        $Dap_an_C = $data['Dap_an_C'];
        $Dap_an_D = $data['Dap_an_D'];
        $Dap_an = $data['Dap_an'];

        $cauhoi->addCauHoi($ID_Cau_hoi, $ID_De, $Do_kho, $Noi_dung, $Dap_an_A, $Dap_an_B, $Dap_an_C, $Dap_an_D, $Dap_an);
        $de = $this->model("DeThiModel");
        $dethi = $de->getDeThiByID_De($ID_De);
        $dethi = $dethi->fetch();
        $Ten_De = $dethi['Ten'];

        $listCauHoi = $cauhoi->getCauHoiByID_De($ID_De);
        $listCH = $listCauHoi->fetchAll();

        $this->render("ManagerCauHoiDeView", ['listCauHoi' => $listCH, 'idCauHoi' => $ID_Cau_hoi, 'Ten_De' => $Ten_De]);

    }
    public function update()
    {

        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $cauhoi = $this->model("CauHoiModel");
        $de = $this->model("DeThiModel");
        $dethi = $de->getDeThiByID_De($data['idDeThi']);
        $dethi = $dethi->fetch();
        $Ten_De = $dethi['Ten'];

        $listCauHoi = $cauhoi->getCauHoiByID_De($data['idDeThi']);
        $listCH = $listCauHoi->fetchAll();

        $this->render("ManagerCauHoiDeView", ['listCauHoi' => $listCH, 'idCauHoi' => $data['idCauHoi'], 'Ten_De' => $Ten_De]);

    }
    public function updatedCauHoi()
    {
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();
        // print($data['ID_Cau_hoi']);
        $cauhoi = $this->model("CauHoiModel");
        $de = $this->model("DeThiModel");
        $dethi = $de->getDeThiByID_De($data['idDeThi']);
        $dethi = $dethi->fetch();
        $Ten_De = $dethi['Ten'];

        $cauhoi->updateCauHoi($data['idCauHoi'], $data['Do_kho'], $data['Noi_dung'], $data['Dap_an_A'], $data['Dap_an_B'], $data['Dap_an_C'], $data['Dap_an_D'], $data['Dap_an']);
        $listCauHoi = $cauhoi->getCauHoiByID_De($data['idDeThi']);
        $listCH = $listCauHoi->fetchAll();

        $this->render("ManagerCauHoiDeView", ['listCauHoi' => $listCH, 'Ten_De' => $Ten_De]);
        #header("Location: /listCauHoi");
    }
    public function delete()
    {

        $cauhoi = $this->model("CauHoiModel");

        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();

        $data = $request->getData();
        // print_r($data);
        $cauhoi->deleteCauHoi($data['idCauHoi']);
        $de = $this->model("DeThiModel");
        $dethi = $de->getDeThiByID_De($data['idDeThi']);
        $dethi = $dethi->fetch();
        $Ten_De = $dethi['Ten'];

        $listCauHoi = $cauhoi->getCauHoiByID_De($data['idDeThi']);
        $listCH = $listCauHoi->fetchAll();

        $this->render("ManagerCauHoiDeView", ['listCauHoi' => $listCH, 'ID_De' => $data['idDeThi'], 'Ten_De' => $Ten_De]);

    }
}
