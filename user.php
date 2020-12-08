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

   class User
{
   
    /**
     * Function Sign
     */
    public function sign($name, $mob, $mail, $pass, $ques, $ans, $data) 
    {
        $sql="SELECT * from `user` where `username` LIKE '$username'";
        $res=$data->query($sql);
        if ($res->num_rows > 0) {
            return 'same';
           
        } else {
                     $sql = "INSERT INTO user 
                (`email`,`password`,`name`,`mobile`,`dateofsignup`) 
                VALUES ( '$username', '$pass','$name','$mobile',CURDATE())";
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
    public function login($username,$pass,$data)
    {
        $sql='SELECT * FROM user WHERE 
        `password`="'.$pass.'" AND `username`="'.$username.'"';
         $res=$data->query($sql);
        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                 $b=$row["isblock"];
                $r=$row["isadmin"];
                if ($r == '1') {
                    $_SESSION['admindata']=array
                    ('username'=>$row['username'],'id'=>$row['userid']);
                    $out="admin";
                    
                } else if (($r=='0') && ($b=='1') ) {
                    $_SESSION["userdata"]=array
            ('username'=>$row['username'],'id'=>$row['userid']);         
                    $out="customer";
                    
                } else if (($r=='0') && ($b=='0') ) {
                     $out="wait";
                } else {
                    $out="credentials";
                }
                return $out;
            }
        } else {
            $error=array('input'=>'form','msg'=>"login details are wrong");  
        }

    }
}
    ?>