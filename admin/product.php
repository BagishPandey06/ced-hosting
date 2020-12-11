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

   class Product
{
    public $rows=array();
    /**
     * Function Sign
     */
    public function getpro($data) 
    {
        $sql="SELECT * FROM tbl_product";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $this->rows[]=$row;
            }
            return $this->rows;
        }
    }
    public function getproavi($data) 
    {
        $sql="SELECT * FROM tbl_product where `prod_available`=1";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $this->rows[]=$row;
            }
            return $this->rows;
        }
    }
    /**
     * Function Login
    */
    public function addcat($newcat, $avi, $link, $data) 
    {
        
        $sql="INSERT into tbl_product (`prod_name`,`prod_available`,`link`) VALUES('$newcat','$avi','$link')";

        if ($data->query($sql)=== true) {
            return "inserted";
        } else {
            return $data->error;
        }
        
    }
    public function getcatid($id, $data) 
    {
        $sql="SELECT * FROM tbl_product WHERE `id`='$id'";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $this->rows[]=$row;
            }
            return $this->rows;
        }
    }
    public function upcat($id, $catname, $avi, $link, $data) 
    {
        $sql="UPDATE tbl_product SET `prod_name`='$catname',`link`='$link',`prod_available`='$avi' WHERE `id`='$id'";
        if ($res=$data->query($sql)==true) {
            $out="inserted";
        } else {
            $out="khtm"; 
        }
        return $out;
    }
    public function delcat($id, $data) 
    {
        $sql="DELETE FROM tbl_product WHERE `id`='$id'";
        if ($res=$data->query($sql)==true) {
            $out="inserted";
        } else {
            $out="khtm"; 
        }
        return $out;
    }
    public function insertprod($prntcat, $prdname, $url, $prodj, $mnthprc, $anprc, $sku, $data) 
    {
        $sql="INSERT into tbl_product (`prod_parent_id`,`prod_name`,`link`) VALUES('$prntcat','$prdname','$url')";

        if ($data->query($sql)=== true) {
            $lstid=$data->insert_id;
            $sql="INSERT into tbl_product_description (`prod_id`,`description`,`mon_price`,`annual_price`,`sku`) 
            VALUES('$lstid','$prodj','$mnthprc','$anprc','$sku')";
                if ($data->query($sql)=== true) {
                    return "inserted";
                }
        } else {
            return $data->error;
        }
    }
}
   

    ?>