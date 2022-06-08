<?php
class App{
    private $__controller;
    private $__action, $__params,$__routes;
   
    function __construct(){
        global $routes, $config;
        $this->__routes= new Route();
        if(!empty($routes['default_controller'])){
            $this->__controller = $routes['default_controller'];
        }
     
         $this->__action = 'index';
         $this->__params=[];

         $this->handleUrl();
    }


    function getUrl(){
        if(!empty($_SERVER['PATH_INFO'])){
            $url = $_SERVER['PATH_INFO'];
        }else {
            $url = '/';
        }

        return $url;
    }

    public function handleUrl(){
        
        $url= $this->getUrl();
       
        $url= $this->__routes->handleRoute($url);
        $urlArr=array_filter(explode('/',$url)) ;
        $urlArr= array_values($urlArr);
        // xử lý controller

        $urlCheck=''; // xử lý trường hợp file trong controller chưa phải file.php
        if(!empty($urlArr)){

        
             foreach ($urlArr as $key => $item){
             $urlCheck.=$item.'/';
             $filecheck= rtrim($urlCheck,'/');
             $fileArr = explode('/',$filecheck);
             $fileArr[count($fileArr)-1]= ucfirst($fileArr[count($fileArr)-1]);
             $filecheck = implode('/',$fileArr);

              if(!empty($urlArr[$key-1])){
                unset($urlArr[$key-1]);
              }

               if(file_exists('app/controllers/'.($filecheck).'.php')){
               $urlCheck = $filecheck;
               break;
              }
           
           }
         }
        // xắp xếp lại key trong array
        $urlArr= array_values($urlArr);
       
        if(!empty($urlArr[0])){
            $this->__controller= ucfirst($urlArr[0]);                       
        }else {
            $this->__controller=ucfirst($this->__controller);
        }
            //Xử lý khi về trang mặc định
      
        if(empty($urlCheck)){
                $urlCheck = $this->__controller;
        }
        
        
        if(file_exists('app/controllers/'.$urlCheck.'.php')){
            require_once 'app/controllers/'.$urlCheck.'.php';

            // kiểm tra class this->__controller có tồn tại hay không
            if(class_exists($this->__controller)){
                $this->__controller= new $this->__controller();
                unset($urlArr[0]);
            }
            else{
                $this->loadError();
            }
           
        }
        else {
               $this->loadError();
           }

        // xử lý action
        if(!empty($urlArr[1])){
            $this->__action=$urlArr[1] ;
            unset($urlArr[1]);
        }
           
        // xử lý param - chuyển array cũ về array mới với chỉ số từ 0
        $this->__params=array_values($urlArr);

        // kiểm tra action có tồn tại hay không
        if(method_exists($this->__controller,$this->__action)){
            //gọi hàm theo đường dẫn
           call_user_func_array([$this->__controller,$this->__action],$this->__params);
        }else{
            $this->loadError();
        }      
    }

    public function loadError($name='404'){
        require_once 'errors/'.$name.'.php';
    }
}




?>