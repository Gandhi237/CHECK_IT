<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<style type="text/css">
		body{
			background-image:url(gate.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		.footer{
			display: inline-block;
			justify-content: center;
			width:40px;
			height:60px;
			margin-top:80px;
			margin-left:60px;
			text-align:center;

		}
		.foo{
			margin-top:250px;
		}
		.front h1{
			color: #4A0404;
		}
		.form input{
			border-radius: 15px;
			width: 120px;
			height: 45px;
		}

		p{
			display: grid;
  			place-items: center;
		}
	</style>
</head>
<body>
	<div class="front">
	    <h1><strong>Welcome To The Higher Institute of Technology Business and Management Sciences <br>(hitbamas)</strong></h1><br>
		<p><i class="fas fa-cloud"></i>
<i class="fas fa-heart"></i>
<i class="fas fa-car"></i>
<i class="fas fa-file"></i>
<i class="fas fa-bars"></i>
</p>
	    </div>
	    <form class="form" action="" method="POST">
		    <input type="submit" name="admin_login" value="Admin Login" required class="admin">&nbsp;&nbsp;
		    <input type="submit" name="lecturer_login" value="Lecturer Login" required class="teacher">&nbsp;&nbsp;
		    <input type="submit" name="student_login" value="Student Login" required class="student">
	    </form>
	    <?php
		    if(isset($_POST['admin_login'])){
			    header("Location: admin_login.php");
		    }
		    if(isset($_POST['lecturer_login'])){
			    header("Location: teacher_login.php");
		    }
		    if(isset($_POST['student_login'])){
			    header("Location: student_login.php");
		    }
	    ?>
    </div>
</body>
</html>