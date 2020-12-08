<?php
require 'Config.php';
require 'user.php';
$obj =new Config();
$data = $obj->Connect();
$obj=new User();
$action=$_REQUEST['action'];
switch(action){
case 'sign':
        $name=$_REQUEST['name'];
        $mob=$_REQUEST['mob'];
        $mail=$_REQUEST['mail'];
        $pass=$_REQUEST['pass'];
        $ques=$_REQUEST['ques'];
        $ans=$_REQUEST['ans'];
        $out=$obj->sign($name, $mob, $mail, $pass, $ques, $ans, $data);
     print_r($out);
    break;

}
?>