<?php 
	session_start();

    include_once '../Connection.php';

	if($_SESSION['mid'] == "")
	{
		header("location:../Home.php");
	}

    $q = "select * from tbl_maintenance where sid = ".$_SESSION['socid']." and year = ".date("Y");
    $sel = mysqli_query($conn,$q);
	$data = mysqli_fetch_array($sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Secretary Dashboard</title>
	
	<!-- Google Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet"> -->
	
    <link rel="stylesheet" href="../css/logincss.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/milligram.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	
	<style>
	</style>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar">
		<div class="row">
			<div class="column column-30 col-site-title"><a href="#" class="site-title float-left">Dashboard</a></div>
			<!-- <div class="column column-30 col-site-title"><a href="#" class="site-title float-right	">Dashboard</a></div> -->


			<div class="column column-15" id="user">
				<div class="user-section"><a href="#">
					<img src="../Image/user/<?php echo $_SESSION['uimg']; ?>" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
					<div class="username">
						<h4><?php echo $_SESSION['mname']; ?></h4>
						<p>Secretary</p>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<h5>Navigation</h5>
			<ul>
				<li><a href="Secretary_Dashboard.php"><em class="fa fa-home"></em> Home</a></li>
                <?php if(empty($data['mnid'])){?>               
				<li><a href="Manage_Maintenance.php"><em class="fa fa-wrench"></em>Manage Maintenance</a></li><?php }?>
				<li><a href="Add_Committee.php"><em class="fa fa-users"></em>Manage Expenses</a></li>
				<li><a href="Service_Provider.php"><em class="fa fa fa-wrench"></em> Add Service Provider</a></li>
				<li><a href="../Logout.php"><em class="fa fa-sign-out"></em> Logout </a></li>

			</ul>
		</div>
	</div>

	

					
</body>
</html> 