<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirmition</title>
    <style>
           .all{
               background-color: yellow;
               width: 60%;
               height: 105%;
               justify-content: center;
           }
       

    </style>
</head>
<body style='background:black;'>
<?php
require('config.php');
$pid = intval($_GET['mid']);
$query=mysqli_query($con,"select * from movies where movieid='$pid'");
while($row=mysqli_fetch_array($query)){
?>
<div class='all'>
            your ticket:
          movie name:  <?php echo $row['movie_name'];?><br>
          movie name:  <?php echo $row['movie_date'];?><br>
          use this qrcode for confirmation<br>
    </div>
    <br><br>
<?php 
// Include the qrlib file 

include 'phpqrcode/qrlib.php'; 

$text =  $row['movie_name']; $row['movie_price'];

  
// $path variable store the location where to  
// store image and $file creates directory name 
// of the QR code file by using 'uniqid' 
// uniqid creates unique id based on microtime 

$path = 'images/'; 

$file = $path.uniqid().".png"; 

  
// $ecc stores error correction capability('L') 

$ecc = 'L'; 

$pixel_Size = 10; 

$frame_Size = 20; 

  
// Generates QR Code and Stores it in directory given 

QRcode::png($text, $file, $ecc, $pixel_Size); 

  
// Displaying the stored QR code from directory 

echo "<center><img src='".$file."'></center>"; 
}
?> 
</body>
</html>
