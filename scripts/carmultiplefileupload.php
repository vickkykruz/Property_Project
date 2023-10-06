<?php
include('config/config.php');
$cartitle = $_POST['cartitle'];
$carmodel = $_POST['carmodel'];
$carlocation = $_POST['carlocation'];
$cardesc = $_POST['cardesc'];
$enterdriverli = $_POST['enterdriverli'];
$entervehdesc = $_POST['entervehdesc'];
$enteravdate = $_POST['enteravdate'];
$enterrentduration = $_POST['enterrentduration'];
$enterprice = $_POST['enterprice'];
$userrid = $_POST['userrid'];
date_default_timezone_set("Africa/Lagos");
    $DateCreated = date('Y-m-d H:i:s'); 
if(empty($cartitle) || empty($carmodel) ||  empty($carlocation) || empty($cardesc) || empty($enterdriverli) || empty($entervehdesc) || empty($enterprice) || empty($enterrentduration) || empty($enterrentduration) )
{
   echo'
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong>oops!!</strong> Plese make sure all fields are properly field before proceeding
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
 </div>
   ';
}
else
{
   $sql = mysqli_query($link,"INSERT INTO `tbl_cars`( `cars_name`, `cars_model`, `cars_location`, `cars_description`, 
   `cars_availabledate`, `cars_duration`, `cars_offerprice`, `cars_userid`, `cars_uploaddate`,`cars_license`, `cars_status`)
   VALUES ('$cartitle','$carmodel','$carlocation','$entervehdesc','$enteravdate','$enterrentduration','$enterprice','$userrid','$DateCreated','$enterdriverli','0')");
   $last_id = mysqli_insert_id($link);
$countfiles = count($_FILES['files']['name']);

// Upload directory
$upload_location = "../uploads/";

$count = 0;
for($i=0;$i < $countfiles;$i++){

   // File name
   $filename = $_FILES['files']['name'][$i];

   // File path
   $path = $upload_location.$filename;

   // file extension
   $file_extension = pathinfo($path, PATHINFO_EXTENSION);
   $file_extension = strtolower($file_extension);

   // Valid file extensions
   $valid_ext = array("pdf","doc","docx","jpg","png","jpeg");

   // Check extension
   if(in_array($file_extension,$valid_ext)){

      // Upload file
      if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$path)){
        $count += 1;
        $sqll = mysqli_query($link,"INSERT INTO `tbl_images`( `image_title`, `image_type`, `image_propertyid`)
        VALUES ('$filename','car','$last_id')");
      } 
   }

}

if($sqll)
{
   echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Great!</strong>Car successfully uploaded
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
   </button>
   </div>';
}

}


?>