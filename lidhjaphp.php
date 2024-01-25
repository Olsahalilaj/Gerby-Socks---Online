<?php
$servername = "localhost";
$db = "website";
$username = "root";
$password = "";

if(!$conn = mysqli_connect($servername, $username, $password, $db)){
 die("failed to connect");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
 $user_name = $_POST['user_name'];
 $emaili = $_POST['emaili'];
  $passwordi = $_POST['passwordi'];
 if(!empty($user_name) && !empty($emaili) && !empty($passwordi)){
 $user_id = random_num(20);
  $query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$emaili','$passwordi')";
   
  if( mysqli_query($conn, $query)){
  header("Location: Shoes%20Review%20Website.php");
  die; 
}
}else{
   echo "Ju lutem shkruani informata valide";
  }
 }

function random_num($length){
 $text = "";
 if($length < 5){
 $length = 5;
 }
 $len = rand(4,$length);
 for($i=0;$i < $len; $i++){
 $text .= rand(0,9);
 }
  return $text;
}

?>