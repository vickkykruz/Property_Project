<?php
include('config/config.php');
 $userrid = $_POST['userrid'];

$sqlcheckvendorverstats = mysqli_query($link,"SELECT * FROM `users_tbl` WHERE `id`='$userrid' ");
$getvendstats = mysqli_fetch_assoc($sqlcheckvendorverstats);
echo $vendstats = $getvendstats['users_veristats'];

?>