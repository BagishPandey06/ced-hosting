<?php
/**
 * * PHP version 7.2.10
 * 
 * @category Components
 * @package  PackageName
 * @author   Bagish <Bagishpandey999@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/training/taskmy/register.php?
 */
require 'Config.php';
require 'user.php';
require 'admin/product.php';
$obj =new Config();
$data = $obj->Connect();
$obj=new User();
$obj1=new Product();
$action=$_REQUEST['action'];
$arr = array();
switch($action){
case 'sign':
        $name=$_REQUEST['name'];
        $mob=$_REQUEST['mob'];
        $mail=$_REQUEST['mail'];
        $pass=$_REQUEST['pass'];
        $ques=$_REQUEST['ques'];
        $ans=$_REQUEST['ans'];
        $out=$obj->sign($name, $mob, $mail, $pass, $ques, $ans, $data);
        include 'phpmailer.php';
    echo $out;
    break;
case 'catpage':
    $id=$_REQUEST['prod_id'];
    $out=$obj1->getproavi($data); 
    foreach ($out as $key) {
        if ($id==$key['id']) {
            echo $key['html'];
        }
    }
    break;
case 'catpagedesc':
    $id=$_REQUEST['prod_id'];
    $out=$obj1->getallprod($data);
    foreach ($out as $key=>$val) {
        if ($id==$val['pid']) {
            $arr[]=$val;
        }
    }
    print_r(json_encode($arr));
   
    break;

}
?>