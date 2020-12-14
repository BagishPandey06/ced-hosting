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
        $cat_data = array();
        $sql="SELECT * FROM tbl_product where `prod_parent_id`='1'";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $prod_name=$row['prod_name'];
                $link=$row['html'];
                $prod_available=$row['prod_available'];
                $id=$row['prod_parent_id'];
                $prod_id=$row['id'];
                $t=mysqli_fetch_assoc($data->query("SELECT `prod_name` FROM tbl_product where `id`='$id'"));
                $prnt_prod_name=$t['prod_name'];
                $cat_data[]=array(
                    'id'=>$prod_id,
                    // 'prod_name'=>$prod_name,
                    'link'=>$link,
                    'prod_available'=>$prod_available,
                    'prod_name'=>$prod_name,
                    'prod_parent_name'=>$prnt_prod_name
                );
                //$this->rows[]=$row;
                
            }
            return $cat_data;
        }
        return false;   
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
        return false; 
    }
    /**
     * Function Login
    */
    public function addcat($newcat, $avi, $link, $data) 
    {
        
        $sql="INSERT into tbl_product (`prod_name`,`prod_available`,`html`) VALUES('$newcat','$avi','$link')";

        if ($data->query($sql)=== true) {
            return "inserted";
        } else {
            return false; 
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
        $sql="UPDATE tbl_product SET `prod_name`='$catname',`html`='$link',`prod_available`='$avi' WHERE `id`='$id'";
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
        $sql1="DELETE FROM tbl_product WHERE `prod_parent_id`='$id'";
        $sql2="DELETE FROM tbl_product_description WHERE `prod_id`='$data->insert_id'";
        if (($res=$data->query($sql)==true) && ($res=$data->query($sql1)==true) && ($res=$data->query($sql2)==true)) {
            $out="inserted";
        } else {
            $out="khtm"; 
        }
        return $out;
    }
    public function delpro($id, $data) 
    {
        $sql="DELETE `tbl_product`, `tbl_product_description`
        FROM `tbl_product`
        INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`
        WHERE `prod_id`=$id";
        if ($res=$data->query($sql)===true) {
            $out="inserted";
        } else {
            $out="khtm"; 
        }
        return $out;
    }
    public function insertprod($prntcat, $prdname, $url, $prodj, $mnthprc, $anprc, $sku, $data) 
    {
        $sql="INSERT into tbl_product (`prod_parent_id`,`prod_name`,`html`) VALUES('$prntcat','$prdname','$url')";

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
    public function getallprod($data) 
    {
        $prod_data = array();
        $sql="SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                //$prod_data[]=$row;
                $desc=json_decode($row['description']);
                $ws=$desc->{'ws'};
                $band=$desc->{'band'};
                $domain=$desc->{'domain'};
                $sup=$desc->{'sup'};
                $mail=$desc->{'mail'};
                $pid=$row['prod_parent_id'];
                $t=mysqli_fetch_assoc($data->query("SELECT `prod_name` FROM `tbl_product` where `id`=$pid"));
                $prnt_prod_name=$t['prod_name'];
                $prod_data[]=array(
                    'id'=>$row['prod_id'],
                   'ws'=>$ws,
                   'band'=>$band,
                   'domain'=>$domain,
                   'sup'=> $sup,
                   'mail'=> $mail,
                   'link'=>$row['html'],

                   'prnt_prod_name'=>$prnt_prod_name,
                   'prod_name'=>$row['prod_name'],
                   'mon_price'=>$row['mon_price'],
                   'annual_price'=>$row['annual_price'],
                   'sku'=>$row['sku']);
            }
            return $prod_data;
        }
        return false; 
    }
    public function getproid($id, $data) 
    {
        $prod_data = array();
        $sql="SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id WHERE `prod_id`=$id";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                //$prod_data[]=$row;
                $desc=json_decode($row['description']);
                $ws=$desc->{'ws'};
                $band=$desc->{'band'};
                $domain=$desc->{'domain'};
                $sup=$desc->{'sup'};
                $mail=$desc->{'mail'};
                $prod_data[]=array(
                    'id'=>$row['prod_id'],
                   'ws'=>$ws,
                   'band'=>$band,
                   'domain'=>$domain,
                   'sup'=> $sup,
                   'mail'=> $mail,
                   'link'=>$row['html'],
                   'prod_parent_id'=>$row['prod_parent_id'],
                   'prod_name'=>$row['prod_name'],
                   'mon_price'=>$row['mon_price'],
                   'annual_price'=>$row['annual_price'],
                   'sku'=>$row['sku']);
            }
            return $prod_data;
        }
        return false; 
    }
    public function upprod($id, $prntcat, $prdname, $url, $prodj, $mnthprc, $anprc, $sku, $data)
    {
        $sql= "UPDATE `tbl_product` SET `prod_name`='$prdname',`html`='$url' WHERE `id` ='$id'";
        if ($data->query($sql) === true) {
            $sql2="UPDATE `tbl_product_description` SET `description`='$prodj',`mon_price`='$mnthprc',`annual_price`='$anprc',`sku`='$sku' WHERE `prod_id` ='$id'";
            if ($data->query($sql2) === true) {
                return 1;
            } else {
                return "Error updating record: " . $this->conn->error;
            }
        } else {
            return "Error updating record: " . $this->conn->error;
        }
    }
}
   

    ?>