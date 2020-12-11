<?php
require '../Config.php';
require 'product.php';

$obj =new Config();
$data = $obj->Connect();
$obj=new Product();
$action=$_REQUEST['action'];

switch($action){
case 'edit':
        $id=$_REQUEST['id'];
        $out=$obj->getcatid($id, $data);
        print_r(json_encode($out));
    break;
case 'upcat':
    $id=$_REQUEST['id'];
    $catname=$_REQUEST['catname'];
    $avi=$_REQUEST['avi'];
    $link=$_REQUEST['link'];
    $out=$obj->upcat($id, $catname, $avi, $link, $data);
    print_r(json_encode($out));
    break;

}
?>