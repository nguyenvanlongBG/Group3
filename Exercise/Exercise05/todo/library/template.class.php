<?php
class Template {

 protected $variables = array();
 protected $_controller;
 protected $_action;

 function __construct($controller,$action) {
 $this->_controller = $controller;
 $this->_action = $action;
 }

 /** Set Variables **/

 function set($name,$value) {
 $this->variables[$name] = $value;
 }

 /** Display Template **/

 function render() {
 extract($this->variables);

 if (file_exists(ROOT . DS .'todo'.DS . 'application' . DS . 'view' . DS . $this->_controller . DS . 'header.php')) {
 include (ROOT . DS.'todo'.DS . 'application' . DS . 'view' . DS . $this->_controller . DS . 'header.php');
 } else {
 include (ROOT . DS .'todo'.DS . 'application' . DS . 'view' . DS . 'header.php');
 }

 include (ROOT . DS .'todo'.DS . 'application' . DS . 'view' . DS . $this->_controller . DS . $this->_action . '.php'); 

 if (file_exists(ROOT . DS .'todo'.DS . 'application' . DS . 'view' . DS . $this->_controller . DS . 'footer.php')) {
 include (ROOT . DS .'todo'.DS . 'application' . DS . 'view' . DS . $this->_controller . DS . 'footer.php');
 } else {
 include (ROOT . DS .'todo'.DS . 'application' . DS . 'view' . DS . 'footer.php');
 }
 }

}