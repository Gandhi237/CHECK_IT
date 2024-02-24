<!DOCTYPE html>
<html lang="en">
<head>
   
    <title</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="main-div">
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <caption><h2>Medical Laboratory Sciences</h2></caption>
                    <thead>
                        <tr>
                            <th bgcolor="blue"><strong>Day</strong></th>
                            <th bgcolor="blue"><strong>8:00am - 10:00am</strong></th>
                            <th bgcolor="blue"><strong>10:15am - 12:15pm</strong></th>
                            <th bgcolor="blue"><strong>12:15pm - 1:00pm</strong></th>
                            <th bgcolor="blue"><strong>1:00pm - 3:00pm</strong></th>
                            <th bgcolor="blue"><strong>3:15pm - 5:15pm</strong></th>
                            
                            <th bgcolor="blue"><strong>Action</strong></th>
                        </tr>    
                    </thead>
                    <tbody>
                    <?php
                        $querry="select * from Medical_Laboratory_Sciences ";
                        $connection = mysqli_connect("localhost","root","","hitbamas");
                        $query= mysqli_query($connection,$querry);
                        $nums= mysqli_num_rows($query);
                        while($res=mysqli_fetch_array($query)){
                           ?> 
                            <tr>
                            <td><?php echo $res['Day']; ?></td>
                            <td><?php echo $res['8:00am - 10:00am']; ?></td>
                            <td><?php echo $res['10:15am - 12:15pm']; ?></td>
                            <td><?php echo $res['12:15pm - 1:00pm']; ?></td>
                            <td><?php echo $res['1:00pm - 3:00pm']; ?></td>
                            <td><?php echo $res['3:15pm - 5:15pm']; ?></td>
                            
                            <td><a href="update.php?sl_No=<?php echo $res['sl_No'];?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit" aria-hidden="true"></i> </a></td>
                        </tr>
                        <?php

                        }

                    ?>
                        
                    </tbody>    
                </table>
            </div>
        </div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>