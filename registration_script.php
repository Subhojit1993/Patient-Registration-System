<?php 
session_start();
include_once( "./connect_db.inc");
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$cnct = $_POST['cnct'];
$txtinfo = $_POST['txtinfo'];


$sql = "insert into patient_register(fname,lname,age,dob,gender,cnct,txtinfo) values( '$fname', '$lname', '$age', '$dob', '$gender', '$cnct', '$txtinfo')";

$result=mysql_query($sql,$connection);

if(!$result)
{
	echo "error";
}
else
{
	$_SESSION['uid']=$email;
	header("location:patient_register.php");
}
	
?>