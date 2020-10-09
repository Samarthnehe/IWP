<!DOCTYPE html>
<?php 
    include('sessionemp.php');
    $uname = $_SESSION['login_user'];
    $sql = "SELECT * from employee where eid='$uname'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $cid = $row['cid'];
    $s = "SELECT * from canteen where cid='$cid'";
    $res = mysqli_query($db,$s);
    $cant = mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stordstatc.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <title>Student</title>
    </head>
    <body style="color:black">
        <section class="section-plans">
            <div class="row">
                <div class="col span-10-of-12">
                    <img src="images/person.png" style="border-radius: 20%; width: 5vw;">
                    <div style="display: inline-block; vertical-align: super"><b><?php echo $row['name']?></b><br>
                        <?php 
                            $nm=$cant['name'];
                            $loc=$cant['location'];
                            echo "$nm, $loc"; 
                        ?></div>
                </div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="empprof.php">Profile</a></div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="index.php">Logout</a></div>

            </div>
        </section>
        <section class="section-plans">
			<div class="row">
				<h2>Today's Orders : (<?php echo $nm; ?>)</h2>
			</div>
		</section>
        <section class="section-cant">
            <div class="row">
                <table>
                    <tr>
                        <td width=15 style="text-align: center;"><strong>Order Number</strong></td>
                        <td width=15 style="text-align: center;"><strong>Order Date</strong></td>
                        <td width=15 style="text-align: center;"><strong>Price</strong></td>
                        <td width=15 style="text-align: center;"><strong>Status</strong></td>
                    </tr>
                  
                </table>
            </div>
        </section>
        <section class="section-plans">
            <div class="row">
                <a style="text-decoration: none; color:#3f184f;" href="emphome.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;">
                        GO BACK
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color: white;" href="emordstat.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(12, 10, 72, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;background-color: #3f184f;">
                        TODAY'S ORDER
                    </div>
                </a>
            </div>
        </section>
   </body>
</html>
