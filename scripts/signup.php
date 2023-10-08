<?php
include('config/config.php');
 
$name = $_POST['name'];
$usertype = $_POST['usertype'];
$email = $_POST['email'];
$password = $_POST['password'];
 



date_default_timezone_set("Africa/Lagos");
    $DateCreated = date('Y-m-d H:i:s'); 

$sqlcheckemail = mysqli_query($link,"SELECT * FROM `users_tbl` WHERE `users_email`='$email'");
$countemail = mysqli_num_rows($sqlcheckemail);

if($countemail > 0)
{
    echo'3';
   
}
else
{

 
 
              
                    $sql = mysqli_query($link,"INSERT INTO `users_tbl`( `users_name`, `users_email`, 
                    `users_password`, `users_type`,`users_regdate`) VALUES ('$name','$email','$password','$usertype','$DateCreated')");
                     $usercreatedid = mysqli_insert_id($link);
                     session_start();
                     $_SESSION['userid'] = $usercreatedid; 
                      $_SESSION['usertype'] = $usertype; 
                      
                     echo $usertype;
                  
                
             

}




?>