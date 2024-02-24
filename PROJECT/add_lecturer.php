<?php
	$con=mysqli_connect("localhost","root","","hitbamas");
	$query = "insert into Lecturer set L_ID='".$_POST['l_id']."',Name='".$_POST['name']."',Course='".$_POST['subject']."',Email='".$_POST['email']."',Password='".$_POST['password']."'";
	$query_run = mysqli_query($con,$query);
?>
<script type="text/javascript">
	alert("Lecturer added successfully");
	window.location.href = "admin_dashboard.php";
</script>
