<?php
    session_start();
    if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
    $error = false;
    include('config.php');
    $sql = "SELECT * FROM booking";
    $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<style>
		body{
			background-image: url('bg.jpg'); 
            background-size: cover; 
            background-position: center;
			display: flex;
            justify-content: center;
            align-items: center;
		}
		.main .info{
            border-radius: 30px;
            width: 700px;
            margin: 20px;
            color: black;
            line-height: 30px;
            font-size: 1rem;
            background-color: #c9e8ff;
        }
        label{
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
        .main .info h2{
            text-align: center;
        }
        .main .info{
            text-align: center;
        }
        .main .info .row{
            text-align: center;
            padding-right: 30px;
            padding-left: 30px;
        }
	</style>


</head>
<body>
	<?php
	$id = $_GET['id'];
$sql = "SELECT * FROM booking WHERE id = $id ";
$result = mysqli_query($conn, $sql);
?>
<?php
if (mysqli_num_rows($result) > 0){
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="main">
        <div class="info">  
        	<form name="update_guests" action="update_guest.php" method="post"><br>
        			<h2>ข้อมูลการจอง</h2>
                    &nbsp&nbsp<label>หอพัก : </label>
                    <input type="text" name="dorm" required value="<?php echo $row['dorm'];?>" readonly><br>
                    &nbsp&nbsp<label>หมายเลขห้อง : </label>
                    <input type="text" name="rmnum" required value="<?php echo $row['rmnum'];?>" readonly><br>
                    <input type="hidden" name="id" required value="<?php echo $row['id'];?>" readonly><br>
                    <h2>แก้ไขข้อมูล</h2>

                        <div class="row">
                            <center><h4>หอพักหญิง</h4></center><br>
                            <div class="col-sm-4">
                                <center>หอพัก1</center>
                                <img src="img/d1.jpg" width="100%">
                                <b><?php echo "<a href='update_dorm1.php?id=$row[id]' class='btn btn-success' style='width: 100%;'>เข้าจอง</a>";?></b>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก2</center>
                                <img src="img/d2.jpg" width="100%">
                                <b><?php echo "<a href='update_dorm2.php?id=$row[id]' class='btn btn-success' style='width: 100%;'>เข้าจอง</a>";?></b>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก3</center>
                                <img src="img/d3.jpg" width="100%">
                                <b><?php echo "<a href='update_dorm3.php?id=$row[id]' class='btn btn-success' style='width: 100%;'>เข้าจอง</a>";?></b>
                            </div>
                            <center><h4>หอพักชาย</h4></center><br>
                            <div class="col-sm-4">
                                <center>หอพัก4</center>
                                <img src="img/d4.jpg" width="100%">
                                <b><?php echo "<a href='update_dorm4.php?id=$row[id]' class='btn btn-success' style='width: 100%;'>เข้าจอง</a>";?></b>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก5</center>
                                <img src="img/d5.jpg" width="100%">
                                <b><?php echo "<a href='update_dorm5.php?id=$row[id]' class='btn btn-success' style='width: 100%;'>เข้าจอง</a>";?></b>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก6</center>
                                <img src="img/d6.jpg" width="100%">
                                <b><?php echo "<a href='update_dorm6.php?id=$row[id]' class='btn btn-success' style='width: 100%;'>เข้าจอง</a>";?></b>
                            </div><br>&nbsp&nbsp<br>
                        </div>
                </form>
            </div>
        </div>
<?php
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>