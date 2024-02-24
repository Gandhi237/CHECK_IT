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
			top: 13%;
			position: fixed;
		}
		#right_side{
			height: 60%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: black;
			border: solid 1px black;
		}
		#top_span{
			color:blue;
			top: 18%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		.select{
            width:65%;
            height:25px;
            margin-left:55px;
            margin-bottom:5px;
        }
		#header a{
			text-decoration: none;
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
	<span id="top_span"><marquee><strong>Welcome To The Timetable Management System</strong></marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" class="select" name="add_student" value="Add Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="add_lecturer" value="Add Lecturer">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="delete_student" value="Delete Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="delete_teacher" value="Delete Lecturer">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="show_student" value="View Students">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="show_teacher" value="View Lecturers">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" class="select" name="show_timetable" value="Manage timetables" >
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['show_timetable'])){
					header("location:display_table.php");		
				}
			?>			


			<?php 
				if(isset($_POST['add_student'])){
					?>
					<center><h3>Add Student</h3></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>S_ID:</b>
							</td> 
							<td>
								<input type="text" name="s_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Department:</b>
							</td> 
							<td>
								<input type="text" name="course" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="email" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
				?>
				<?php
				if(isset($_POST['add_lecturer'])){
					?>
					<center><h3>Add Lecturer</h3></center>
					<form action="add_lecturer.php" method="post">
						<table>
						<tr>
							<td>
								<b>L_ID:</b>
							</td> 
							<td>
								<input type="text" name="l_id" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Course:</b>
							</td> 
							<td>
								<input type="text" name="subject" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="email" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Teacher"></td>
						</tr>
						</table>
					</form>
					<?php
			 }		

			?>
			<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Student ID:</b>&nbsp;&nbsp; <input type="text" name="s_id" required>
				<input type="submit" name="delete_student" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php
			if(isset($_POST['delete_teacher']))
			{
				?>
				<center>
				<form action="delete_lecturer.php" method="post">
				&nbsp;&nbsp;<b>Enter Teacher ID:</b>&nbsp;&nbsp; <input type="text" name="t_id" required>
				<input type="submit" name="delete_teacher" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>



            <?php
				if(isset($_POST['show_student'])){
					?>
					<center>
						<h2>Student Details</h2>
						<table>
							<tr>
								<td id="td"><b>S_ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Department</b></td>
								<td id="td"><b>Email</b></td>

							</tr>
						</table>
					</center>
					<?php
					$con=mysqli_connect("localhost","root","","hitbamas");
					$query = "select * from Student";
					$query_run = mysqli_query($con,$query);
					while ($row = mysqli_fetch_array($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['S_ID']?></td>
								<td id="td"><?php echo $row['Name']?></td>
								<td id="td"><?php echo $row['Department']?></td>
								<td id="td"><?php echo $row['Email']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>



			<?php
				if(isset($_POST['show_teacher'])){
					?>
					<center>
						<h2>Teacher's Details</h2>
						<table>
							<tr>
								<td id="td"><b>L_ID</b></td>
								<td id="td"><b>Name</b></td>
								<td id="td"><b>Email</b></td>
								<td id="td"><b>Subject</b></td>

							</tr>
						</table>
					</center>
					<?php
					$con=mysqli_connect("localhost","root","","hitbamas");
					$query = "select * from Lecturer";
					$query_run = mysqli_query($con,$query);
					while ($row = mysqli_fetch_array($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['L_ID']?></td>
								<td id="td"><?php echo $row['Name']?></td>
								<td id="td"><?php echo $row['Course']?></td>
								<td id="td"><?php echo $row['Email']?></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>


		</div>
	</div>
</body>
</html>