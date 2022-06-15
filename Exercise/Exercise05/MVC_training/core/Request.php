<?php

class Request{

    function getMethod(){
       return strtolower($_SERVER['REQUEST_METHOD']);
    }

    function isPost(){
        if($this->getMethod()=='post') return true;
        return false;
    }

    function isGet(){
        if($this->getMethod()=='get') return true;
        return false;
    }

    function getData(){
        $dataMethod = [];
        if($this->isGet()){
            foreach($_GET as $key =>$value){
                if(is_array($value)){
                    $dataGet[$key]= filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
                }else{
                    $dataGet[$key]= filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
                }
          
            }
        }

        if($this->isPost()){
            foreach($_POST as $key =>$value){
                if(is_array($value)){
                    $dataGet[$key]= filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS,FILTER_REQUIRE_ARRAY);
                }else{
                    $dataGet[$key]= filter_input(INPUT_GET,$key,FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
        }

       return $dataMethod;
    }
}