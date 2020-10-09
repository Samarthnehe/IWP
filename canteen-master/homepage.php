<!DOCTYPE html>
<?php 
    include('sessioncust.php');
    $uname = $_SESSION['login_user'];
    $sql = "SELECT * from customer where custid='$uname'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <title>Student</title>
    </head>
    <body style="color:black">
        <section class="section-plans">
            <div class="row">
                <div class="col span-10-of-12">
                    <img src="images/person.png" style="border-radius: 20%; width: 5vw;">
                    <div style="display: inline-block; vertical-align: super"><?php echo $row['name']?><br><?php echo $row['custid']?></div>
                </div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="profile.php">Profile</a></div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="index.php">Logout</a></div>

            </div>
        </section>
        <section class="section-cant" id="cities">
            <div class="row">
            <br><br><br>
                <h2>Our Canteens</h2>
            </div>
            <div class="row" >
                <div class="col span-1-of-5 cities-box">
                   <img src="images/919.jpg" style="border:1px solid black"><br><br>
                    <h3><a href="alasjt.php" class="cant" style="text-decoration: none; border: 2px solid #3f184f; border-radius: 4px; padding: 2px 4px;">SJT Canteen</a><br><br>Inside SJT</h3>
                </div>
                <div class="col span-1-of-5 cities-box">
                   <img src="images/943.jpg" style="border:1px solid black"><br><br>
                    <h3><a href="aladc.php" class="cant" style="text-decoration: none; border: 2px solid #3f184f; border-radius: 4px; padding: 2px 4px;">DC</a><br><br>Near TT</h3>
                </div>
                <div class="col span-1-of-5 cities-box">
                   <img src="images/2015.jpg" style="border:1px solid black"><br><br>
                    <h3><a href="alanac.php" class="cant" style="text-decoration: none; border: 2px solid #3f184f; border-radius: 4px; padding: 2px 4px;">FC (Non AC)</a><br><br>Near TT</h3>
                </div>
                <div class="col span-1-of-5 cities-box">
                   <img src="images/2038.jpg" style="border:1px solid black"><br><br>
                    <h3><a href="alaac.php" class="cant" style="text-decoration: none; border: 2px solid #3f184f; border-radius: 4px; padding: 2px 4px;">FC (AC)</a><br><br>Near TT</h3>
                </div>
                <div class="col span-1-of-5 cities-box">
                    <img src="images/2299.jpg" style="border:1px solid black"><br><br>
                     <h3><a href="aladar.php" class="cant" style="text-decoration: none; border: 2px solid #3f184f; border-radius: 4px; padding: 2px 4px;">Darling</a><br><br>Gate 2</h3>
                 </div>
            </div>
            <div class="row">
            <br><br><br>
                <h2>Leaderboard</h2>
            </div>
           
        </section>
        <section class="section-plans">
            <div class="row">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row">
                <a style="text-decoration: none; color:#3f184f;" href="stordstat.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;">
                        VIEW TODAY'S ORDERS
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color: white;" href="stordview.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;background-color: #3f184f;">
                        ORDER HISTORY
                    </div>
                </a>
            </div>
            <div class="row">
                <a style="text-decoration: none; color: white;" href="givefeed.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;background-color: #3f184f;">
                        GIVE FEEDBACK
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color:#3f184f;" href="viewfeed.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;">
                        VIEW FEEDBACK
                    </div>
                </a>
                
            </div>
        </section>
   </body>
</html>
