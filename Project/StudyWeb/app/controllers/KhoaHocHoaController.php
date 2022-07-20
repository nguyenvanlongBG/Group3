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

        $chuongModel = $this->model("ChuongModel");
        $listChuong = $chuongModel->getChuong();
        $listChuong = $listChuong->fetchAll();
        $listDeChuong = [];
        $deModel = $this->model("DeThiModel");
        foreach ($listChuong as $chuong) {

            $deChuong = $deModel->getDeThiByID_Chuong($chuong['ID_Chuong']);
            $deChuong = $deChuong->fetChAll();

            $listDeChuong['' . $chuong['ID_Chuong']] = $deChuong;

        }

        $this->render("KhoaHocHoaView", ['listChuong' => $listChuong, 'listDeChuong' => $listDeChuong]);

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
