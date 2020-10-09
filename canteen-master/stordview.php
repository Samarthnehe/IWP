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
        <link rel="stylesheet" type="text/css" href="css/stordstatc.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <title>Student</title>
    </head>
    <body>
        <section class="section-cant">
            <div class="row">
                <div class="col span-10-of-12">
                    <img src="images/person.png" style="border-radius: 20%; width: 5vw;">
                    <div style="display: inline-block; vertical-align: super"><?php echo $row['name']?><br><?php echo $row['custid']?></div>
                </div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="profile.php">Profile</a></div>
                <div class="col span-1-of-12"><a class="btn btn-dark" style="text-decoration: none;  border-radius:5px ;padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="index.php">Logout</a></div>

            </div>
        </section>
        <section class="section-plans">
			<div class="row">
				<h2>Your Old Orders</h2>
			</div>
		</section>
        <section class="section-cant" style="color:black">
            <div class="row">
                <table>
                    <tr>
                        <td width=15 style="text-align: center;"><strong>Order Number</strong></td>
                        <td width=15 style="text-align: center;"><strong>Order Date</strong></td>
                        <td width=15 style="text-align: center;"><strong>Price</strong></td>
                        <td width=15 style="text-align: center;"><strong>Canteen</strong></td>
                        <td width=15 style="text-align: center;"><strong>Status</strong></td>
                    </tr>
                    <?php 
                        $un = $row['custid'];
                        $al = "select * from ord where custid='$un'";
                        $res = mysqli_query($db,$al);
                        while($item = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                            if(strcmp($item['odate'],date("Y-m-d"))!=0){
                                $cid = $item['cid'];
                                $q = "select name from canteen where cid='$cid'";
                                $r = mysqli_query($db,$q);
                                $name = mysqli_fetch_array($r,MYSQLI_ASSOC);
                                if(strcmp($item['status'],'Cancelled')==0){
                                    echo "<tr><td style=\"text-align: center;\">".$item['oid']."<td style=\"text-align: center;\">".$item['odate']."<td style=\"text-align: center;\">".$item['cost']."<td style=\"text-align: center;\">".$name['name']."</td>";
                                    echo "<td style=\"margin:10px; background: rgba(245, 70, 70, 0.8);color:black; text-align: center;\"><a href='stord.php?oid=".$item['oid']."' style=\"text-decoration:none; color:black;\">Cancelled</a></td>"; 
                                    echo "</tr>";                          
                                }
                                else if(strcmp($item['status'],'Completed')==0){
                                    echo "<tr><td style=\"text-align: center;\">".$item['oid']."<td style=\"text-align: center;\">".$item['odate']."<td style=\"text-align: center;\">".$item['cost']."<td style=\"text-align: center;\">".$name['name']."</td>";
                                    echo "<td style=\"margin:10px; background: rgba(58, 216, 51, 0.8);color:black; text-align: center;\"><a href='stord.php?oid=".$item['oid']."' style=\"text-decoration:none; color:black;\">Completed</a></td>"; 
                                    echo "</tr>";
                                }
                            }
                        }
                    ?>
                </table>
            </div>
        </section>
        <section class="section-plans">
            <div class="row">
                <a style="text-decoration: none; color:#3f184f;" href="homepage.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;">
                        GO BACK
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color: white;" href="stordstat.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(12, 10, 72, 0.15); text-align: center; padding: 1%;border: 2px solid #3f184f;background-color: #3f184f;">
                        VIEW TODAY'S ORDERS
                    </div>
                </a>
            </div>
        </section>
   </body>
</html>