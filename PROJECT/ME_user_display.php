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
        <span id="top_span"><marquee><strong>Higher Institute of Technology Business and Management Sciences</strong></marquee></span>
            <div class="table-responsive">
                <table>
                <caption><h2>Mechanical Engineering</h2></caption>
                    <thead>
                        <tr>
                            <th bgcolor="blue"><strong>Day</strong></th>
                            <th bgcolor="blue"><strong>8:00am - 10:00am</strong></th>
                            <th bgcolor="blue"><strong>10:15am - 12:15pm</strong></th>
                            <th bgcolor="blue"><strong>12:15pm - 1:00pm</strong></th>
                            <th bgcolor="blue"><strong>1:00pm - 3:00pm</strong></th>
                            <th bgcolor="blue"><strong>3:15pm - 5:15pm</strong></th>
                        </tr>    
                    </thead>
                    <tbody>
                    <?php
                        $querry="select * from Mechanical_Engineering ";
                        $con=mysqli_connect("localhost","root","","hitbamas");
                        $query= mysqli_query($con,$querry);
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
                        </tr>
                        <?php
                        }
                    ?>
                        
                    </tbody>    
                </table>
            </div>
        </div>
</div> 
</body>
</html>