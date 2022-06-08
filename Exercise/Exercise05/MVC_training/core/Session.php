<?php
class Session{
    //
    //data($key,$value) => set session
    //data($key) => get session
    static public function data($key='', $value=''){
        $session = self::isInvalid();

        if(!empty($value)){
            if(!empty($key)){
                $_SESSION[$session][$key]= $value; // set session
            return true;
            }
            return false;
        }else{
            if(empty($key)){
                if(isset($_SESSION[$session])){// key trống trả về tất cả các session key 
                    return $_SESSION[$session];
                }
            }else{
                if(isset($_SESSION[$session][$key])){
                    return $_SESSION[$session][$key]; // get session
                }
            }
        }
    }
    //
    //delete(key) => xóa session với key
    //delete() => xóa hết session
    //

    static public function delete($key){
        $session = self::isInvalid();
        if(!empty($key)){
            if(isset($_SESSION[$session][$key])){
                unset($_SESSION[$session][$key]);
                return true;
            }
                return false;
        }else{
          unset($_SESSION[$session]) ;
          return true;
        }
        return false;
    }

    //Flash data
    // - set flash data -> như set session
    // - get flash data -> như get session nhưng xóa luôn session sau khi get
    //
    //
    static public function flash($key='', $value=''){
       $dataFlash = self::data($key, $value); // set flash
        if(empty($value)){                     // delete session
            self::delete($key);
        }

        return $dataFlash;
    }
    static public function showError($mess){
        App::$app->loadError('ErrorSession');
    }

    static public function isInvalid(){
        global $config;
        if(!empty($config['session'])){
            $session_config = $config['session'];
        }else{
            self::showError();

        }
    }
}