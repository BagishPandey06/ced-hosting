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
if (!isset($_SESSION)) {
    session_start();
}
/**
 * * PHP version 7.2.10
 * 
 * @category Components
 * @package  PackageName
 * @author   Bagish <Bagishpandey999@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/training/taskmy/register.php?
 */
class User
{
    /**
     * Function for fetch Product
     * 
     * @param name $name comment
     * @param mob  $mob  comment
     * @param mail $mail comment
     * @param pass $pass comment
     * @param ques $ques comment
     * @param ans  $ans  comment
     * @param data $data comment
     * 
     * @return fetchProduct()
     */   
    public function sign($name, $mob, $mail, $pass, $ques, $ans, $data) 
    {
        $sql="SELECT * from `tbl_user` where `email` LIKE '$mail'";
        $res=$data->query($sql);
        $sql1="SELECT * from `tbl_user` where `mobile` LIKE '$mob'";
        $res1=$data->query($sql1);
        if ($res->num_rows > 0) {
           
            return 'sameemail';
           
        } if ($res1->num_rows > 0) {
            return 'samemob';
        } else {
            $pass=md5($pass);
                     $sql = "INSERT INTO tbl_user 
                (`email`,`password`,`name`,`mobile`,`security_question`,`security_answer`) 
                VALUES ( '$mail', '$pass','$name','$mob','$ques','$ans')";
            if ($data->query($sql) === true) {
                    $out="inserted";
            } else {
                    $out=$data->error;
            }   
        }
    }
    /**
     * Function for fetch Product
     * 
     * @param mail $mail comment
     * @param pass $pass comment
     * @param data $data comment
     * 
     * @return fetchProduct()
     */ 
    public function login($mail, $pass, $data)
    {
        $sql='SELECT * FROM tbl_user WHERE 
        `password`="'.$pass.'" AND `email`="'.$mail.'"';
         $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                
                $r=$row["is_admin"];
                if ($r == '1') {
                    $_SESSION['admindata']=array
                    ('name'=>$row['name'],'id'=>$row['id']);
                    echo '<script>window.location.href="../cedhosting/admin/"</script>';
                } else if (($r=='0') && ($b=='1') ) {
                    $_SESSION["userdata"]=array
                    ('name'=>$row['name'],'id'=>$row['id']);         
                } else if (($r=='0') && ($b=='0') ) {
                } else {
                }
            }
        } else {
            $error=array('input'=>'form','msg'=>"login details are wrong");  
        }

    }
}
    ?>