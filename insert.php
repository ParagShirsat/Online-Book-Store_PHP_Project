<?php
$server="localhost";
$username="root";
$password="";
$dbn="microproject";

$con = mysqli_connect($server,$username,$password,$dbn);

if(isset($_POST['Submit'])){

	if(!empty($_POST['name']) && (!empty($_POST['email']) &&(!empty($_POST['address']) &&(!empty($_POST['phone']) &&(!empty($_POST['code']) && (!empty($_POST['mode']) && (!empty($_POST['sel'])){
		
$txtName = $_POST['name'];
$txtemail = $_POST['email'];
$txtAddress = $_POST['address'];
$txtphone = $_POST['phone'];
$txtcode=$_POST['code'];
$textmode=$_POST['mode'];
$state=$_POST['sel'];

$sql = "INSERT INTO details(Name,Email,Address,Phone Number,Pin Code,Payment mode,State) VALUES('$txtName', '$txtemail', '$txtAddress', '$txtphone','$txtcode','$textmode','$state')";

$run= mysqli_query($con,$sql) or die(mysqli_error());
if($run){
	echo "Form Submitted..";
	}
	else{
		echo "Form not submitted..";
	}
}
else{
	echo "All fields are required...";
}
}
$con->close();
?>