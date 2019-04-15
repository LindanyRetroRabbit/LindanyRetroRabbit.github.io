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
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
			<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
			<link rel="stylesheet" type="text/css" href="ViewInfo/css/util.css">
<link rel="stylesheet" type="text/css" href="ViewInfo/css/main.css">
<!---
	




	
	
	
	<!--===============================================================================================-->

</head>
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
								<li>
									<a class="gn-icon gn-icon-download">Insert Info</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">View Info</a></li>
										<li><a class="gn-icon gn-icon-photoshop">View Stats</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="">LogIn</a></li>
				
			</ul>

			<header>
				
<!--This is the input form-->
<form method="post" action="server.php">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Disciple Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Disciple Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Diciple Surname</label>
      <input type="text" class="form-control" id="dsurname" placeholder="Enter Diciple Surname">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Disciple Address</label>
    <input type="text" class="form-control" id="address" placeholder="Address">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Province:</label>
       <select id="inputState" class="form-control">
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
      <input type="text" class="form-control" id="church" placeholder="Enter Church Name">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Topic:</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Man and Satan</option>
         <option>Generosity</option>
        <option>KwaZulu-Natal</option>
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
      <input type="date" class="form-control" id="dstart">
    </div>
     <div class="form-group col-md-6">
      <label for="inputCity">End Date</label>
      <input type="date" class="form-control" id="dend">
    </div>

</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email</label>
      <input type="email" class="form-control" id="demail">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Contact No:</label>
     <input type="text" class="form-control" id="contactNo">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Gender</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Male</option>
         <option>Female</option>
      </select>
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Discipler Name:</label>
      <input type="text" class="form-control" id="dsname" placeholder="Enter Discipler Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Dicipler Surname</label>
      <input type="text" class="form-control" id="dssurname" placeholder="Enter Dicipler Surname">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email</label>
      <input type="email" class="form-control" id="demail">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Contact No:</label>
     <input type="text" class="form-control" id="contactNo">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Gender</label>
       <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Male</option>
         <option>Female</option>
      </select>
    </div>
  </div>

   <div class="form-group">
    <label for="inputAddress">Discipler Address</label>
    <input type="text" class="form-control" id="daddress" placeholder="Address">
  </div>

  <br/>
  <div className="form-row">
	<button type="submit" name="save" class="btn btn-primary">Submit</button>  	
  </div>
  
</form>
<!-- <form method="post" action="server.php">
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name">
	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="text" name="address">
	</div>
	<div class="input-group">
		<button type="submit" name="save" class="btn">Save</button>
	</div>
</form> -->
			</header> 

			<!--Display Begin
	<tbody>
			<?php while ($row = mysqli_fetch_array($results)){ ?>
				<tr>
				<td><?php  echo $row['name'];?></td>
				<td><?php  echo $row['address'];?> </td>
				<td>
					<a href="#">Edit</a>
				</td>
				<td>
					<a href="#">Delete</a>
				</td>
			</tr>
				
			 <?php }?>
			
							</tbody>
-->

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
				<th class="cell100 column1">Discipler Name</th>
									<th class="cell100 column2">Discipler Surname</th>
									<th class="cell100 column3">Discipler Gender</th>
									<th class="cell100 column4">Discipler Contact</th>
									<th class="cell100 column5">Discipler Email</th>
									<th class="cell100 column6">Church</th>
									<th class="cell100 column7">Discipleship Topics</th>
									
									<th class="cell100 column8">DISCIPLE NAME</th>
									<th class="cell100 column9">DISCIPLE SURNAME</th>
									<th class="cell100 column10">DISCIPLE DOB</th>
									<th class="cell100 column11">DISCIPLE GENDER</th>
									<th class="cell100 column12">DISCIPLE ADDRESS</th>
									<th class="cell100 column13">DISCIPLE CONTACT</th>
									<th class="cell100 column14">DISCIPLE AGE</th>
									<th class="cell100 column15">STATUS</th>
									<th class="cell100 column16">STRAT DATE</th>
									<th class="cell100 column17">END DATE</th>
									<th class="cell100 column18">DISCIPLER COMMENT</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
									<?php while ($row = mysqli_fetch_array($results)){ ?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php  echo $row['name'];?></td>
									<td class="cell100 column2"><?php  echo $row['address'];?></td>
									<td class="cell100 column3">Male</td>
									<td class="cell100 column4">0846827658</td>
									<td class="cell100 column5">fubusine@gmail.com</td>
									<td class="cell100 column6">Thokoza</td>
									<td class="cell100 column7">Menu</td>
									
									<td class="cell100 column8">Siviwe</td>
									<td class="cell100 column9">Mjali</td>
									<td class="cell100 column10">1/03/2019</td>
									<td class="cell100 column11">Male</td>
									<td class="cell100 column12">Gabela street Tokoza</td>
									<td class="cell100 column13">8277 47673</td>
									<td class="cell100 column14">12</td>
									<td class="cell100 column15">Menu</td>
									<td class="cell100 column16">01/06/2019</td>
									<td class="cell100 column17">30/03/2019</td>
									<td class="cell100 column18">Siviwe is ready fo baptism</td>
									<td><a href="#">Edit</a></td>
									<td><a href="#">Delete</a></td>
								</tr><?php }?>

								<tr class="row100 body">
									<td class="cell100 column1">Sinethemba</td>
									<td class="cell100 column2">Fubu</td>
									<td class="cell100 column3">Male</td>
									<td class="cell100 column4">0846827658</td>
									<td class="cell100 column5">fubusine@gmail.com</td>
									<td class="cell100 column6">Thokoza</td>
									<td class="cell100 column7">Menu</td>
									<td class="cell100 column8">Siviwe</td>
									<td class="cell100 column9">Mjali</td>
									<td class="cell100 column10">1/03/2019</td>
									<td class="cell100 column11">Male</td>
									<td class="cell100 column12">Gabela street Tokoza</td>
									<td class="cell100 column13">8277 47673</td>
									<td class="cell100 column14">12</td>
									<td class="cell100 column15">Menu</td>
									<td class="cell100 column16">01/06/2019</td>
									<td class="cell100 column17">30/03/2019</td>
									<td class="cell100 column18">Siviwe is ready fo baptism</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Sinethemba</td>
									<td class="cell100 column2">Fubu</td>
									<td class="cell100 column3">Male</td>
									<td class="cell100 column4">0846827658</td>
									<td class="cell100 column5">fubusine@gmail.com</td>
									<td class="cell100 column6">Thokoza</td>
									<td class="cell100 column7">Menu</td>
									<td class="cell100 column8">Siviwe</td>
									<td class="cell100 column9">Mjali</td>
									<td class="cell100 column10">1/03/2019</td>
									<td class="cell100 column11">Male</td>
									<td class="cell100 column12">Gabela street Tokoza</td>
									<td class="cell100 column13">8277 47673</td>
									<td class="cell100 column14">12</td>
									<td class="cell100 column15">Menu</td>
									<td class="cell100 column16">01/06/2019</td>
									<td class="cell100 column17">30/03/2019</td>
									<td class="cell100 column18">Siviwe is ready fo baptism</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				</div>
			</div>
		</div>

			<!--display ends here-->
		</div><!-- /container -->


<!--===============================================================================================-->	
	<script src="ViewInfo/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ViewInfo/vendor/bootstrap/js/popper.js"></script>
	<script src="ViewInfo/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ViewInfo/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ViewInfo/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="ViewInfo/js/main.js"></script>

		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>