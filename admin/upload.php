<?php 
session_start();
#include_once('config.php');


// For adding post  
if(isset($_POST['submit']))
{
$movie_name=$_POST['movie_name'];
$producer_name=$_POST['producer_name'];
$movie_date=$_POST['movie_date'];
$detail=$_POST['detail'];
$imgfile=$_FILES["file-to-upload"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["file-to-upload"]["tmp_name"],"../movies/".$imgnewfile);

$status=1;
$con = mysqli_connect('localhost','root','','cinema');
$query=mysqli_query($con,"INSERT into movies(movie_name,movie_producer,movie_date,post_name,movie_detail,is_active) values('$movie_name','$producer_name','$movie_date','$imgnewfile','$detail','$status')");
if($query)
{
echo"<script>alert('Post successfully added')</script> ";
}
else{
    echo"<script>alert('Post not added')</script> ";  
} 

}
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/stylee.css">
    <style>
        html, body {
         margin: 0;
         padding: 0;
         background-image: url('../images/work_1.jpg');}
#inptex{
  width: 300px;
  height: 10px;
  outline: none;
  border: none;
  padding: 10px;
  background: #0ebe75;
  color: white;
  border-radius: 30px;

  
}
.form-container {
         margin: 20px;
         padding: 35px;
         
         color: white;
         box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3), 0 7px 21px 0 rgba(0, 0, 0, 0.20);
      }
.sub{
  border:none;
  border-radius: 20px;
  outline: none;
  width: 75%;
  margin: 0 auto;
  font-size: 104%;
  padding: 8px;
  color: #0ebe75;
  transition-duration: .5s;
}
.sub:hover{
  border:none;
  border-radius: 20px;
  outline: none;
  width: 75%;
  margin: 0 auto;
  font-size: 104%;
  padding: 8px;
  color: #0ebe75;
  transition-duration: .5s;
  background:rgb(182, 93, 93);
}
.input-cnt > i {
         min-width: 40px; /* set a minimum width for the icon */
         padding: 10px; /* make sure the icon is centered vertically */
         text-align: center; /* horizontally center the icon */
         background:greenyellow;
         border-top-left-radius: 40px;
         border-bottom-left-radius: 40px;
         color: #0076ff;
         width: 70%;
      }
.input-cnt > input[type="text"] {
         outline: none;
         border: none;
         padding: 10px;
         border: 1px solid rgb(102, 177, 187);
         border-top-right-radius: 50px;
         border-bottom-right-radius: 50px;
         width: 60%;
         align-content: center;
      }
.azsx{
  font-family: sans-serif;
  background: transparent;
  color:rgb(8, 8, 8);
  background: turquoise;
  border: sandybrown;
  display: block;
}  
.input-cnt > input[type="submit"] {
         border: none;
         border-radius: 20px;
         outline: none;
         width: 25%;
         margin: 0 auto;
         font-size: 105%;
         padding: 8px;
         color: #0076ff;
         background: rgb(238, 205, 19);
         transition-duration: .5s;
         align-content: center;
      }
      /* add a hover effect for the submit button */
      .input-cnt > input[type="submit"]:hover {
         color: white;
         background: #0076ff;
      }               
    </style>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>upload-movie</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body '>
    <div class="form-container">
    <form action="" name='myForm' onsubmit="return validate()"method='post'enctype='multipart/form-data'>
       <div class='input-cnt'><i class="material-icons">name of the movie:</i> <input id = '' name='movie_name'type='text'placeholder='name of the file'><br><br><br></div>
       <div class='input-cnt'><i class="material-icons">name of the producer:</i>  <input id = 'a'name='producer_name' type='text'placeholder='name of the producer'required><br><br><br></div>
       <div class='input-cnt'><i class="material-icons">date of the movie:</i> <input id = '' name='movie_date'type="date" placeholder='  date of the movie'required><br><br><br></div>
       <div class='input-cnt'><i class="material-icons">detail of the movie:</i>  <input id = ''name='detail' type='text'placeholder='name of the producer'required><br><br></div>
       <div class="input-cnt"> <input class="azsx" type="file"name='file-to-upload'id='file-to-upload'><br><br></div>
       <div class="input-cnt">  <input class='sub'type="submit"value='upload image'name='submit'></div>
    </form>

</div>
<script>
  function validate(){
    x = document.forms['myForm']['movie_name'].value;
    if (x == '' ){
      alert('form must be filled out')
    }
  }
  </script>
</body>
</html>