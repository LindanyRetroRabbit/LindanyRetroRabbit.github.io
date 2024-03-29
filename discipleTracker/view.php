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
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="ViewInfo/css/main.css">
	</head>
	
	<h1 align="center">View Information</h1>
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
								<li><a class="gn-icon gn-icon-cog" href="insert/insert.php">Insert Information</a></li>
								<li><a class="gn-icon gn-icon-help" href="View.php">View Information</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.php">Home</a></li>
				<li><a class="codrops-icon " href=""><span>Facebook</span></a></li>
				<li><a class="codrops-icon " href="login/login.php"><span>Login</span></a></li>
			</ul>
				

<div class="limiter" align="center">
		<div class="container-table100">
			<div class="wrap-table100"></div> 
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">DISCIPLER NAME</th>
									<th class="cell100 column2">DISCIPLER SURNAME</th>
									<th class="cell100 column3">DISCIPLER GENDER</th>
									<th class="cell100 column4">DISCIPLER CONTACT</th>
									<th class="cell100 column5">DISCIPLER EMAIL</th>
									<th class="cell100 column6">DISCIPLE CHURCH</th>
									<th class="cell100 column7">DISCIPLESHIP TOPICS</th>
									
									<th class="cell100 column8">DISCIPLE NAME</th>
									<th class="cell100 column9">DISCIPLE SURNAME</th>
									<th class="cell100 column10">DISCIPLE DOB</th>
									<th class="cell100 column11">DISCIPLE GENDER</th>
									<th class="cell100 column12">DISCIPLE ADDRESS</th>
									<th class="cell100 column13">DISCIPLE CONTACT</th>
									<th class="cell100 column14">DISCIPLE CHURCH</th>
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
									<td class="cell100 column1"><?php  echo $row['discipler_name'];?></td>
									<td class="cell100 column2"><?php  echo $row['discipler_surname'];?></td>
									<td class="cell100 column3"><?php  echo $row['discipler_gender'];?></td>
									<td class="cell100 column4"><?php  echo $row['discipler_contact'];?></td>
									<td class="cell100 column5"><?php  echo $row['discipler_email'];?></td>
									<td class="cell100 column6"><?php  echo $row['discipler_church'];?></td>
									<td class="cell100 column7"><?php  echo $row['discipler_topics'];?></td>
									
									<td class="cell100 column8"><?php  echo $row['disciple_name'];?></td>
									<td class="cell100 column9"><?php  echo $row['disciple_surname'];?></td>
									<td class="cell100 column10"><?php  echo $row['disciple_dob'];?></td>
									<td class="cell100 column11"><?php  echo $row['disciple_gender'];?></td>
									<td class="cell100 column12"><?php  echo $row['disciple_address'];?></td>
									<td class="cell100 column13"><?php  echo $row['disciple_contact'];?></td>
									<td class="cell100 column14"><?php  echo $row['disciple_status'];?></td>
									<td class="cell100 column15"><?php  echo $row['start_date'];?></td>
									<td class="cell100 column16"><?php  echo $row['end_date'];?></td>
									<td class="cell100 column17"><?php  echo $row['disciple_comment'];?></td>
									<td><a href="#">Edit</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

							<?php };?>
		
							</tbody>
						</table>
					</div>
				</div>
				</div>
			</div>
		</div>

			<!--display ends here-->
	</div><!-- /container -->


<!--===============================================================================================-
	<script src="ViewInfo/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="ViewInfo/vendor/bootstrap/js/popper.js"></script>
	<script src="ViewInfo/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="ViewInfo/vendor/select2/select2.min.js"></script>

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