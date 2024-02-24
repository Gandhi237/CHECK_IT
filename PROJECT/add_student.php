<?php
	$con=mysqli_connect("localhost","root","","hitbamas");
	$query = "insert into Student set Name='".$_POST['name']."',S_ID='".$_POST['s_id']."',Department='".$_POST['course']."',Email='".$_POST['email']."',Password='".$_POST['password']."'";
	$query_run = mysqli_query($con,$query);
?>
<script type="text/javascript">
	alert("Student added successfully");
	window.location.href = "admin_dashboard.php";
</script>
