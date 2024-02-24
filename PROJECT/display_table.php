<?php 
    $con=mysqli_connect("localhost","root","","hitbamas");
    $querry2 = "select * from Student";
    $result2 =mysqli_query($con,$querry2);

    $querry="select * from Department";
    $result1 =mysqli_query($con,$querry);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/foot.css" />
	<style>
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 85%;
			width: 80%;
			background-color: whitesmoke;
			position: absolute;
			left: 17%;
			top: 45%;
			color: blue;
			border: solid 1px black;
		}
		#top_span{
			top: 18%;
			width: 80%;
			left: 17%;
			position: fixed;
			color: blue;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
        .select{
            width:70%;
            height:25px;
            margin-left:55px;
            margin-bottom:5px;
        }
	</style>
</head>
<?php 
session_start();
$con=mysqli_connect("localhost","root","","hitbamas");
@session_start();
		if($_SESSION['name']==''){
			header("location:index.php");
		}
?>
<body>
	<div id="header"><br>
		<center>Admin Dashboard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome:<?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="logout.php?logout=true">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee><strong>Higher Institute of Technology Business and Management Sciences</strong></marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
            <select class="select" name="department" id="course" required>

			<option selected disabled value="">Select Department</option>
			<option value="MLS">MLS</option>
			<option value="EDM">EDM</option>
			<option value="CE">CE</option>
			<option value="SWE">SWE</option>
			<option value="ME">ME</option>

            </select>
					<input type="submit" class="select" name="show_timetable" value="Display timetable" >
					<button class="select" ><a href="admin_dashboard.php">Return</a></button>
					
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				// $gettable=$_POST['department'];
				if(isset($_POST['show_timetable']) && $_POST['department']=="MLS"){
					
					include("MLS_display.php");		
				}
				if(isset($_POST['show_timetable']) && $_POST['department']=="EDM"){
					include("EDM_display.php");		
				}
				if(isset($_POST['show_timetable']) && $_POST['department']=="CE"){
					
					include("CE_display.php");		
				}
				if(isset($_POST['show_timetable']) && $_POST['department']=="SWE"){
					include("SWE_display.php");
				}
				if(isset($_POST['show_timetable']) && $_POST['department']=="ME"){
					include("ME_display.php");
				}
				if(isset($_POST['show_timetable']) && $_POST['department']==""){
					echo "Please select department";
				}
			?>			
		</div>
	</div>
</body>
</html>