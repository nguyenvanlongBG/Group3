<?php

class DangKyController extends Controller
{
    public $model_home;
    public function __construct()
    {

        $this->model_home = $this->model('HomeModel');

    }

    public function index()
    {
        $this->render("DangKyView");

    }
    public function check()
    {
        require_once _DIR_ROOT . "\core\Request.php";

        $request = new Request();
        $data = $request->getData();

        print($data['userName']);
        $this->render("DangNhapView");

    }
    public function registerProcessing()
    {
        if ($_POST) {
            $errors = [];

            if (!$_POST['hoten']) {
                $errors['hoten'] = "Vui lòng nhập Họ và tên !";
            }

            if (!$_POST['email']) {
                $errors['email'] = "Vui lòng nhập Email !";
            }
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Email không đúng đính dạng!";
            }
            if ($_POST['email']) {
                if (6 > strlen($_POST['password'])) {
                    $errors['password'] = "Vui lòng nhập mật khẩu tối thiểu 6 kí tự!";
                }
            }

            if ($_POST['password'] !== $_POST['repassword']) {
                $errors['repassword'] = " Mật khẩu nhập lại không khớp!";
            }

            if ($errors) {
                $_SESSION['errors2'] = $errors;
                $_SESSION['old2'] = $_POST;
                header("location: dang-ky");

                exit();
            }

            // Case dang ky thanh cong
            $taikhoanModel = $this->model('TaiKhoanModel');
            try {
                $taikhoanModel->addTai_khoan($_POST['password'], $_POST['email'], $_POST['hoten']);
            } catch (\Throwable$th) {
                $errors['email'] = "Email này đã có người sử dụng!Vui lòng dùng email khác .";
                $_SESSION['errors2'] = $errors;
                $_SESSION['old2'] = $_POST;
                header("location: dang-ky");

                exit();

            }

            $_SESSION['dangky'] = "Successfully";
            unset($_SESSION['errors2']);
            header("location: dang-nhap");

            exit();

        } else { // case đăng kí thất bại
            $this->index();
        }
    }

}
