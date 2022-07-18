<?php
class KhoaHocHoaController extends Controller
{
    public $model_home;
    public function __construct()
    {

        $this->model_home = $this->model('HomeModel');

    }

    public function index()
    {
        $this->render("KhoaHocHoaView");

    }
    public function chuong()
    {
        // if ($_SERVER['REQUEST_URI'] != '/este.php'
        //     && $_SERVER['REQUEST_URI'] != '/') {
        //     header('Location: MVC/Home.php');
        // }

        $this->render("DangNhapView");
    }

}
