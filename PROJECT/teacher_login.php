<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
	<title>Teacher Login</title>
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
		<h2>Teacher LogIn Page</h2><br>
		<form action="" method="post" class="box">
            <input type="email" name="email" required placeholder="Email"><br>
			<input type="password" name="password" required placeholder="Password"><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"hitbamas");
				$query = "select * from Lecturer where Email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['Email'] == $_POST['email'])
					{
						if($row['Password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['Name'];
							$_SESSION['email'] =  $row['Email'];
							header("location:teacher_dashboard.php");
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