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
if(!isset($_SESSION)){
    session_start();
}
   class User
{
   
    /**
     * Function Sign
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
                return $out;
       
        
        
    }
}
    /**
     * Function Login
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
                   //print_r($_SESSION['admindata']);
                   echo '<script>window.location.href="../cedhosting/admin/"</script>';
                    //header("Location:../cedhosting/admin/");
                    
                } else if (($r=='0') && ($b=='1') ) {
                    $_SESSION["userdata"]=array
            ('name'=>$row['name'],'id'=>$row['id']);         
                    // $out="customer";
                    
                } else if (($r=='0') && ($b=='0') ) {
                    //  $out="wait";
                } else {
                    // $out="credentials";
                }
               // return $out;
            }
        } else {
            $error=array('input'=>'form','msg'=>"login details are wrong");  
        }

    }
}
    ?>