<?php


if (isset($_POST['login'])) {
	# code...

	
	include_once('db_connect.php');

	extract($_POST);


	$password=sha1($password);

    $email=strtolower($email);
    $email=strip_tags($email);
    $email=trim($email);
$pwd=$password;

$qry="select * from student where email='$email'";

$res=mysqli_query($con,$qry);

$row=mysqli_fetch_array($res);


if ($pwd==$row['password']) {
	# code...


	setcookie("sjc_db", $email, time() + (86400 * 30), "/"); // to store data for 30 days

	
	include"wecome.php";

}else{
	echo "Wrong Password";
}




}else{



	echo "wrong Turn";
}


?>