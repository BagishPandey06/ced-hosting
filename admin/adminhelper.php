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
case 'editpro':
        $id=$_REQUEST['id'];
        $out=$obj->getproid($id, $data);
        print_r(json_encode($out));
    break;
case 'upcat':
    $id=$_REQUEST['id'];
    $catname=$_REQUEST['catname'];
    $avi=$_REQUEST['avi'];
    $link=$_REQUEST['link'];
    $out=$obj->upcat($id, $catname, $avi, $link, $data);
    print_r($out);
    break;
case 'del':
    $id=$_REQUEST['id'];
    
    $out=$obj->delcat($id, $data);
    print_r($out);
    break;
case 'delpro':
    $id=$_REQUEST['id'];
    $out=$obj->delpro($id, $data);
    print_r($out);
    break; 
case 'addprod':
    $prntcat=$_REQUEST['prntcat'];
    $prdname=$_REQUEST['prdname'];
    $url=$_REQUEST['url'];
    $mnthprc=$_REQUEST['mnthprc'];
    $anprc=$_REQUEST['anprc'];
    $sku=$_REQUEST['sku'];
    $ws=$_REQUEST['ws'];
    $band=$_REQUEST['band'];
    $domain=$_REQUEST['domain'];
    $sup=$_REQUEST['sup'];
    $mail=$_REQUEST['mail'];
    $prod=array('ws'=>$ws,
    'band'=>$band,
    'domain'=>$domain,
    'sup'=>$sup,
    'mail'=>$mail
    );
    //print_r($prod);
    $prodj=json_encode($prod);
    $out=$obj->insertprod($prntcat, $prdname, $url, $prodj, $mnthprc, $anprc, $sku, $data);
    print_r($out);
    break;
case 'upprod':
    $id=$_REQUEST['id'];
    $prntcat=$_REQUEST['prntcat'];
    $prdname=$_REQUEST['prdname'];
    $url=$_REQUEST['url'];
    $mnthprc=$_REQUEST['mnthprc'];
    $anprc=$_REQUEST['anprc'];
    $sku=$_REQUEST['sku'];
    $ws=$_REQUEST['ws'];
    $band=$_REQUEST['band'];
    $domain=$_REQUEST['domain'];
    $sup=$_REQUEST['sup'];
    $mail=$_REQUEST['mail'];
    $prod=array('ws'=>$ws,
    'band'=>$band,
    'domain'=>$domain,
    'sup'=>$sup,
    'mail'=>$mail
    );
    //print_r($prod);
    $prodj=json_encode($prod);
    $out=$obj->upprod($id, $prntcat, $prdname, $url, $prodj, $mnthprc, $anprc, $sku, $data);
    print_r($out);
    break;

}
?>