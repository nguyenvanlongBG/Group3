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
        $this->render("Login");

    }

}
