<?php
	
session_start();
	  // $name = "";
	  // $address = "";
	  // $id = 0;
	  $id=0;
	  $dname= "";
	  $dsurname="";
	  $dgender="";
	  $dcontact="";
	  $demail="";
	  $church="";
	  $topics="";
	  $sname="";
	  $ssurname="";
	  $sdob="";
	  $sgender="";
	  $saddress="";
	  $scontact="";
	  $sstatus="";
	  $start_date="";
	  $end_date="";
	  $dcomment="";
	//connect database
$db = mysqli_connect('localhost','root','','crud');

//if save button clicked
   if(isset($_POST['save'])){
	  
	  $query = "INSERT INTO gauteng(
	     person_id,
	     discipler_name,
	  	discipler_surname,
	  	discipler_gender,
	  	discipler_contact,
	  	discipler_email,
	  	discipler_church,
	  	discipler_topics,
	  	disciple_name,
	  	disciple_surname,
	  	disciple_dob,
	  	disciple_gender,
	  	disciple_address,
	  	disciple_contact,
	  	disciple_status,
	  	start_date,
	  	end_date,
	  	disciple_comment) 

	  	VALUES 

	  ('$id',
	  '$dname',
	  '$dsurname',
	  '$dgender',
	  '$dcontact',
	  '$demail',
	  '$church',
	  '$topics',
	  '$sname',
	  '$ssurname',
	  '$sdob',
	  '$sgender',
	  '$saddress',
	  '$scontact',
	  '$sstatus',
	  '$start_date',
	  '$end_date',
	  '$dcomment')";

	  mysqli_query($db,$query);
	  $_SESSION['msg'] = "Discipleship information succesfully captured";
	  header('location: index.php'); // redirecting to index after inserting
}
	//retrieve records
	$results = mysqli_query($db,"SELECT * FROM gauteng");
   	
?>