<?php
$personName =$_REQUEST['personName'];
$personEmail =$_REQUEST['personEmail'];
$personCourse =$_REQUEST['personCourse'];

$personMsg =$_REQUEST['personMsg'];
$connect=mysqli_connect("localhost","root","","uniweb");
$query="insert into contact(Name,Email,Course,Msg)value('$personName','$personEmail','$personCourse','$personMsg')";
mysqli_query($connect,$query);
if (mysqli_affected_rows($connect)>0) {
	header("location:Contact.php?successfull");

}
else{
	header("location:Contact.php?error");

}
?>