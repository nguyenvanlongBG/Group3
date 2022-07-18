<?php
class ManagerTaiKhoanController extends Controller
{

    public function show()
    {

        $this->render("AddTaiKhoanView");

    }
    public function index()
    {
        $Tai_khoan = $this->model("TaiKhoanModel");
        $listTai_khoan = $Tai_khoan->getTaiKhoan();
        $listTK = $listTai_khoan->fetchAll();
        $this->render("ManagerTaiKhoanView", ['listTai_khoan' => $listTK]);

    }
    public function add()
    {
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $account = $this->model("TaiKhoanModel");
        $name = $data['Name'];
        $email = $data['Email'];

        $password = $data['Password'];
        $authorization = $data['Authorization'];
        $account->addTaiKhoan(10, $password, $email, $authorization, $name);
        $listAcc = $account->getTaiKhoan();
        $listAcccount = $listAcc->fetchAll();
        $this->render("products/ListAccount", ["Acc" => $listAcccount]);
    }
    public function updateTaiKhoan()
    {
        $Tai_khoan = $this->model("TaiKhoanModel");
        $listTai_khoan = $Tai_khoan->getTaiKhoan();
        $listTK = $listTai_khoan->fetchAll();
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();

        $this->render("ManagerTaiKhoanView", ['listTai_khoan' => $listTK, 'idTaiKhoan' => $data['idTaiKhoan']]);

    }
    public function updatedTaiKhoan()
    {
        $tai_khoan = $this->model("TaiKhoanModel");
        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();
        $data = $request->getData();
        $tai_khoan->updateTaiKhoan($data['idTaiKhoan'], $data['Ten'], $data['Email'], $data['authorization']);

        $this->index();
    }
    public function delete()
    {

        $tai_khoan = $this->model("TaiKhoanModel");

        require_once _DIR_ROOT . "\core\Request.php";
        $request = new Request();

        $data = $request->getData();
        // print_r($data);
        $tai_khoan->deleteTaiKhoan($data['idTaiKhoan']);
        // $this->render("products/ListAccount", ["Acc" => $account->getAccount()]);
        // $this->index();
        $Tai_khoan = $this->model("TaiKhoanModel");
        $listTai_khoan = $Tai_khoan->getTaiKhoan();
        $listTK = $listTai_khoan->fetchAll();
        $this->render("ManagementTaiKhoan", ['listTai_khoan' => $listTK, 'idTaiKhoan' => $data['idTaiKhoan']]);

    }
}
