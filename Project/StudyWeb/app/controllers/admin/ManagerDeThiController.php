<?php
class ManagerDeThiController extends Controller
{

    public function show()
    {

        $this->render("AddTaiKhoanView");

    }
    public function index()
    {
        $DeThi = $this->model("DeThiModel");
        $listDeThi = $DeThi->getDeThi();
        $listDT = $listDeThi->fetchAll();
        $this->render("ManagerDeThiView", ['listDeThi' => $listDT]);

    }
    public function add()
    {
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $dethi = $this->model("DeThiModel");
        $ID_De = $data['ID_De'];

        $ten = $data['Ten'];
        $ID_Chuong = $data['ID_Chuong'];

        $Thoi_gian = $data['Thoi_gian'];
        $dethi->addDeThi($ID_De, $ten, $ID_Chuong, $Thoi_gian);
        $this->index();
    }
    public function updateDeThi()
    {

        $dethi = $this->model("DeThiModel");
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $dethiByID = $dethi->getDeThiByID_De($data['idDeThi']);
        $Ten_De = $dethiByID->fetch()['Ten'];

        $listCauHoi = $dethi->getCauHoiByID_De($data['idDeThi']);
        $listCH = $listCauHoi->fetchAll();

        $this->render("ManagerCauHoiDeView", ['listCauHoi' => $listCH, 'Ten_De' => $Ten_De, 'ID_De' => $data['idDeThi']]);

    }
    public function updatedDeThi()
    {
        $dethi = $this->model("DeThiModel");
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();
        $dethi->updateDeThi($data['idDeThi'], $data['Ten'], $data['Email'], $data['authorization']);

        $this->index();
    }
    public function delete()
    {

        $dethi = $this->model("DeThiModel");

        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();

        $data = $request->getData();
        // print_r($data);
        $dethi->deleteDeThi($data['idDeThi']);
        // $this->render("products/ListAccount", ["Acc" => $account->getAccount()]);
        // $this->index();
        $this->index();

    }
}
