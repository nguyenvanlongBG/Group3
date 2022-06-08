<?php 
class Product extends Controller{
    public $data=[];
    public function index(){
        echo 'Danh sách sản phẩm';
    }
    public function listProduct(){
        $title='Danh sách sản phẩm';
        $product = $this->model('ProductModel');
        $dataProduct = $product->getProductList();
        $this->data['sub_content']['product_list']= $dataProduct;
        $this->data['sub_content']['page_title']=$title;
        $this->data['page_title']=$title;
        $this->data['content']='products/list';
        //render ra view
        $this->render('layout/ClientLayout', $this->data);
    }
    public function detail($id=0){
        $product = $this->model('ProductModel');
        $this->data['sub_content']['infor']= $product->getDetail($id);
        $this->data['sub_content']['title']= 'Chi tiết sản phẩm';
        $this->data['page_title']='Chi tiết sản phẩm';
        $this->data['content']= 'products/detail';
        $this->render('layout/ClientLayout',$this->data);
    }
}