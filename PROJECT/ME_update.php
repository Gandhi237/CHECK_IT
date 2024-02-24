<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
    <?php 
        $con=mysqli_connect("localhost","root","","hitbamas");

        $ids= $_GET['sl_no'];
        $showquery= "select * from Mechanical_Engineering where sl_No={$ids}";
        $showdata= mysqli_query($con,$showquery);
        $arraydata= mysqli_fetch_array($showdata);

        if(isset($_POST['submit']))
        {
            $id= $_GET['sl_No'];

            $p1=$_POST['p1'];
            $p2=$_POST['p2'];
            $p3=$_POST['p3'];
            $p4=$_POST['p4'];
            $p5=$_POST['p5'];
            $p6=$_POST['p6'];

            $update= " update table4 set sl_No=$id, 8:00am - 10:00am='$p1', 10:15am - 12:15pm='$p2', 12:15pm - 1:00pm='$p3', 1:00pm - 3:00pm='$p4', 3:15pm - 5:15pm='$p5' where sl_No=$id ";

            $result=mysqli_query($con,$update);

            if($result)
            {
                ?>
                <script>
                    alert("Data updated successfully");
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Data not updated");
                </script>
                <?php
            }    
            }
        ?>

    <div class="main-div">
        <h1>Update Timetable</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th bgcolor="yellow"><strong>Day</strong></th>
                            <th bgcolor="yellow"><strong>8:00am - 10:00am</strong></th>
                            <th bgcolor="yellow"><strong>10:15am - 12:15pm</strong></th>
                            <th bgcolor="yellow"><strong>12:15pm - 1:00pm</strong></th>
                            <th bgcolor="yellow"><strong>1:00pm - 3:00pm<</strong></th>
                            <th bgcolor="yellow"><strong>3:15pm - 5:15pm</strong></th><br><br>
                            <th bgcolor="yellow"><strong>Update</strong></th>
                        </tr>
                <form action="" method="post" enctype="multipart/form-data">    
                    <th>
                        <input type="text"  placeholder="Day" name="day" value="<?php echo $arraydata['day']; ?>" readonly/>
                    </th>
                    <th>
                        <input type="text"  placeholder="1st Period" name="p1" value="<?php echo $arraydata['8:00am - 10:00am']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="2nd Period" name="p2" value="<?php echo $arraydata['10:15am - 12:15pm']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="3rd Period" name="p3" value="<?php echo $arraydata['12:15pm - 1:00pm']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="4th Period" name="p4" value="<?php echo $arraydata['1:00pm - 3:00pm']; ?>" required/>
                    </th>
                    <th>
                        <input type="text"  placeholder="5th Period" name="p5" value="<?php echo $arraydata['3:15pm - 5:15pm']; ?>" required/>
                    </th><br>
                    <td>
                    <input type="submit" name="submit" value="Update">
                </td>
                </form>
            </thead>
        </table>
        </div> 
        </div>
        </div> 
</body>
</html>