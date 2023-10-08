<?php
include('config/config.php');

$email = $_POST['useremail'];

$password = $_POST['userpassword'];

    $sql = mysqli_query($link,"SELECT * FROM `users_tbl` WHERE `users_email`='$email' AND `users_password`='$password'");
    $count = mysqli_num_rows($sql);

    if($count > 0)
    {
        $fetch = mysqli_fetch_assoc($sql);
        $userrid = $fetch['id'];
        $mainusertype = $fetch['users_type'];
        session_start();
        $usercreatedid = $userrid;
                             $_SESSION['userid'] = $usercreatedid; 
                      $_SESSION['usertype'] = $mainusertype; 
        echo $mainusertype;
    
    }
    else
    {
        echo'3';
    
    }







?>