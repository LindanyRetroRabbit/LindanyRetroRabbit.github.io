<?php
	
	  session_start();
	  $name = "";
	  $address = "";
	  $id = 0;
	//connect database
$db = mysqli_connect('localhost','root','','crud');

//if save button clicked
   if(isset($_POST['save'])){
	  $name = $_POST['name'];
	  $address = $_POST['address'];
	  
	  $query = "INSERT INTO info(name,address) VALUES ('$name','$address')";
	  mysqli_query($db,$query);
	  $_SESSION['msg'] = "Address Saved";
	  header('location: index.php'); // redirecting to index after inserting
}
	//retrieve records
	$results = mysqli_query($db,"SELECT * FROM info");
   
?>