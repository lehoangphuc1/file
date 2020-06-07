<?php
include('db.php');
if(isset($_POST['name'])){
   $name = $_POST['name'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $note = $_POST['note'];
   $email = $_POST['email'];
   $result = mysql_query($con,"INSERT INTO persons(name,phone,address,note,email) VALUES('$name','$phone','$address','$note','$email')");
   if($result){
   	echo 1;
   }
   else{
   	echo 0;
   }
};
?>
