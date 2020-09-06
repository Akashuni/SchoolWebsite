<?php



if (isset($_POST['submit'])) {


	# code...

	include_once("db_connect.php");


extract($_POST);


if(!$email==""|| !$password=="")
{


$email=strtolower($email);
$email=strip_tags($email);
$email=trim($email);


//$password=trim($password);
$password=sha1($password);

$qry="insert into student(firstname,lastname,email,gender,password,number) values('$firstname','$lastname','$email','$gender','$password','$number') ";

$res=mysqli_query($con,$qry);

if ($res) {
	# code...
   include_once("login.php");


}else
{
   echo	"Something went wrong";
}


}


}else
{
	echo "Wrong Turn";
}

?>