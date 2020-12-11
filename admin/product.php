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
        $sql="SELECT * FROM tbl_product WHERE `id`='$id'";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $this->rows[]=$row;
            }
            return $this->rows;
        }
    }
}
   

    ?>