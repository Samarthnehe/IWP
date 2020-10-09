<!DOCTYPE html>
<?php 
    include('sessionemp.php');
    $uname = $_SESSION['login_user'];
    $sql = "SELECT * from employee where eid='$uname'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stordstatc.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <title>Student</title>
    </head>
    <body >
        <section class="section-plans">
            <div class="row">
                <div class="col span-10-of-12">
                    <?php       
                        $cid = $row["cid"];
                        $canteen = "SELECT * from canteen where cid='$cid'";
                        $res = mysqli_query($db,$canteen);
                        $cantrow = mysqli_fetch_array($res,MYSQLI_ASSOC);
                    ?>
                    <img src="images/person.png" style="border-radius: 20%; width: 5vw;">
                    <div style="display: inline-block; vertical-align: super;color:black"><b><?php echo $row['name']?></b><br>
                        <?php 
                            $cant=$cantrow['name'];
                            $loc=$cantrow['location'];
                            echo "$cant, $loc" 
                        ?></div>
                </div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="empprof.php">Profile</a></div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="index.php">Logout</a></div>

            </div>
        </section>
        <section class="section-cant" id="cities" style="color:black">
            <div class="row">
            <br><br><br>
                <h2><b>Best Employee</b></h2>
            </div>
            <div class="row">
                <div class="row">
                    
                </div>
            </div>
            <div class="row">
            <br><br><br>
                <h2>Leaderboard</h2>
            </div>
            <div class="row">
                <div class="row">
                    <table>
                        <tr>
                            <td width=15><strong>Name of Employee</strong></td>
                            <td width=15><strong>Canteen</strong></td>
                            <td width=15><strong>Average Sale</strong></td>
                        </tr>
                       
                   
                    </table>
                </div>
            </div>
        </section>
        <section class="section-plans">
            <div class="row">
                <h2 style="color:white">DASHBOARD</h2>
            </div>
            <div class="row">
                <a style="text-decoration: none; color:#3f184f;" href="emordstat.php">
                    <div class="col span-5-of-11" style="border-radius:5px;box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;">
                        <p style="color:#3f184f"> Pending Orders</p>
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color: white;" href="emordview.php">
                    <div class="col span-5-of-11" style="border-radius:5px;box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;background-color: #3f184f;">
                        Completed Orders
                    </div>
                </a>
            </div>
        </section>
   </body>
</html>
