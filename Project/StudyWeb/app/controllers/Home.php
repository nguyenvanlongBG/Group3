<?php
class Home extends Controller{
    public $model_home;
    public function __construct(){
        
        $this->model_home= $this->model('HomeModel') ;

    }


    public function index(){
       $data = $this->model_home->getList();
       
       foreach($data as $key){
        foreach ($key as $index => $value){
            echo $index .': '.$value.'<br>';
        }
    }
        $detail = $this->model_home->getDetail(0);
        // $check = Session::data('username','Thế Thiện');
        // Session::delete('username');
        // $sessiondata= Session::data();
        // print_r($sessiondata);

        Session::flash('msg','Thêm dữ liệu thành công');
        $msg= Session::flash('msg');
        echo $msg;
    }
    public function get_category(){
        $request = new Request();
        $variable=  $request->getData();
        print_r($variable);



        $response = new Response();
        // muốn quay lại chính trang đó mà ko gặp lỗi thì cần có form để có method
        
    }
   
}

?>