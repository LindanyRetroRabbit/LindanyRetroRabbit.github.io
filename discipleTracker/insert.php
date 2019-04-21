<?php	include('server.php');	?>
<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Burning Bush Ministries</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="BBM" content="BBM App" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/moderpenizr.custom.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</head>
	<h1 align="center">Insert Information</h1>
	<br/>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li><a class="gn-icon gn-icon-cog" href="insert/insert.html">Insert Information</a></li>
								<li><a class="gn-icon gn-icon-help" href="View.html">View Information</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.html">Home</a></li>
				<li><a class="codrops-icon " href="../index.html"><span>Main BBM Site</span></a></li>
				<li><a class="codrops-icon " href="../login/login.html"><span>Lougout</span></a></li>
			</ul>
				
				<h1>Insert Information</h1>
				<form method="post" action="server.php">


						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Disciple Name:</label>
						      <input type="text" class="form-control" id="discipler_name" name="discipler_name" placeholder="Enter Disciple Name">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Disciple Surname</label>
						      <input type="text" class="form-control" id="discipler_surname" name="discipler_surname" placeholder="Enter Disciple Surname">
						    </div>
						  </div>

						  <div class="form-group">
						    <label for="inputAddress">Disciple Address</label>
						    <input type="text" class="form-control" id="discipler_address" name="discipler_address" placeholder="Enter Address">
						  </div>

						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Province:</label>
						       <select id="inputState" name="" class="form-control">
						        <option selected>Choose...</option>
						        <option>Eastern Cape</option>
						        <option>Free State</option>
						        <option>KwaZulu-Natal</option>
						         <option>Gauteng</option>
						         <option>Limpopo</option>
						         <option>Mpumalanga</option>
						         <option>KwaZulu-Natal</option>
						         <option>Northern Cape</option>
						         <option>North West</option>
						         <option>Western Cape</option>
						      </select>
						    </div>

						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Church</label>
						      <input type="text" class="form-control" id="discipler_church" name="discipler_church" placeholder="Enter Church Name">
						    </div>
						  </div>

						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Topic:</label>
						       <select id="discipler_topics" name="discipler_topics" class="form-control">
						        <option selected>Choose...</option>
						        <option>Man and Satan</option>
						         <option>Generosity</option>
						        <option>The Cross</option>
						        <option>God</option>
						        <option>The Blood</option>
						        <option>The Cross</option>
						        <option>Temptation</option>
						        <option>The Bible</option>
						      </select>
						    </div>
						   
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Status:</label>
						       <select id="inputState" class="form-control">
						        <option selected>Choose...</option>
						        <option>Done</option>
						         <option>In progress</option>
						      </select>
						    </div>
						</div>

						    <div class="form-row">
						      <div class="form-group col-md-6">
						      <label for="inputCity">Start Date</label>
						      <input type="date" class="form-control" name="start_date" id="start_date">
						    </div>
						     <div class="form-group col-md-6">
						      <label for="inputCity">End Date</label>
						      <input type="date" class="form-control" name="end_date"  id="end_date">
						    </div>

						</div>

						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputCity">Email</label>
						      <input type="email" class="form-control" name="discipler_email" id="discipler_email">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputState">Contact No:</label>
						     <input type="text" class="form-control" name="discipler_contact" id="discipler_contact">
						    </div>
						    <div class="form-group col-md-2">
						      <label for="inputZip">Gender</label>
						       <select id="discipler_gender" name="discipler_gender" class="form-control">
						        <option selected>Choose...</option>
						        <option>Male</option>
						         <option>Female</option>
						      </select>
						    </div>
						  </div>

						 <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Discipler Name:</label>
						      <input type="text" class="form-control" id="disciple_name" name="disciple_name" placeholder="Enter Discipler Name">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Discipler Surname</label>
						      <input type="text" class="form-control" id="disciple_surname" name="disciple_surname" placeholder="Enter Discipler Surname">
						    </div>
						  </div>

						   <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputCity">Email</label>
						      <input type="email" class="form-control" id="demail">
						    </div>
						    <div class="form-group col-md-4">
						      <label for="inputState">Contact No:</label>
						     <input type="text" class="form-control" name="disciple_contact" id="disciple_contact">
						    </div>
						    <div class="form-group col-md-2">
						      <label for="inputZip">Gender</label>
						       <select id="disciple_gender" name="disciple_gender" class="form-control">
						        <option selected>Choose...</option>
						        <option>Male</option>
						         <option>Female</option>
						      </select>
						    </div>
						  </div>


						   <div class="form-group">
						    <label for="inputAddress">Discipler Address</label>
						    <input type="text" class="form-control" id="disciple_address" name="disciple_address" placeholder="Enter Address">
						  </div>

						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputCity">Status</label>
						      <input type="text" class="form-control" id="disciple_status" name="disciple_status">
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputState">Comment</label>
						     <textarea type="text" class="form-control" name="disciple_comment" id="disciple_comment"></textarea>
						    </div>
						</div>

						  <br/>
						  <div className="form-row">
							<button type="submit" name="save" class="btn btn-primary">Submit</button>  	
						  </div>
						  
		</form>

			<!--display ends here-->
	</div><!-- /container -->

	<script src="ViewInfo/js/main.js"></script>

		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>