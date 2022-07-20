<?php

class DangNhapController extends Controller
{
    public $model_home;
    public function __construct()
    {

        $this->model_home = $this->model('TaiKhoanModel');

    }

    public function index()
    {

        $this->render("DangNhapView");
    }
    public function signout()
    {
        session_destroy();

        header("location: trang-chu");
        exit();
    }
    public function loginProcessing()
    {
        if ($_POST) {
            $errors = [];

            if (!$_POST['login-id']) {
                $errors['login-id'] = "Vui lòng nhập Email!";
            }
            if (!filter_var($_POST['login-id'], FILTER_VALIDATE_EMAIL)) {
                $errors['login-id'] = "Email không đúng đính dạng!";
            }

            if (0 === strlen($_POST['password'])) {
                $errors['password'] = "Password không được để trống!";
            }

            if (null == $this->model_home->dangnhap($_POST['login-id'], $_POST['password'])) {
                $errors['failed'] = " Email hoặc mật khẩu không chính xác";
            } else {

                $_SESSION['authentication'] = $this->model_home->dangnhap($_POST['login-id'], $_POST['password']);
            }

            if ($errors) {
                $_SESSION['errors'] = $errors;
                $_SESSION['old'] = $_POST;
                header("location: dang-nhap");

                exit();
            }

            // login process
            $ID_Tai_khoan = $this->model_home->getID_TaiKhoan($_POST['login-id']);
            //$ID_Tai_khoan = $ID_Tai_khoan->fetch();
            $_SESSION['ID_TaiKhoan'] = $ID_Tai_khoan;
            $_SESSION['username'] = $this->model_home->getnameByemail($_POST['login-id']);
            unset($_SESSION['errors']);

            header("location: trang-chu");
            exit();

        } else { // khi vào ko qua submit login
            $this->index();
        }
    }

}
