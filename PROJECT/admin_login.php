<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
	<title>Admin Login</title>
	<style type="text/css">
		body{
			background-image:url(gate.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
	</style>
</head>
<body>
	<center><br><br>
		<h2>Admin Login Page</h2><br>
		<form action="" method="post" class="box" action="logout.php" enctype="multipart/form-data">
			<input type="email" name="email"  class="input" placeholder="Email" required><br>
			<input type="password" name="password"  class="input" placeholder="Password" required><br>
			<input type="submit" name="submit" value="Login"  class="input">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","","hitbamas");
				$query = "select * from Admin where Email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['Email'] == $_POST['email'])
					{
						if($row['Password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['Name'];
							$_SESSION['email'] =  $row['Email'];
							
							header("location:admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
	</center>
</body>
</html>