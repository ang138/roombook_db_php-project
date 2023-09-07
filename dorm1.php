<?php
    session_start();
    if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
    $error = false;
    include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

    <style>
        body{
            width: 90%;
    min-height: 80vh;
    background-image: url('bg.jpg'); 
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;


        }
        .container{
            width: 80%;
    min-height: 400px;
    background: #f0f9ff;
    border-radius: 15px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left: 150px;


        }
    </style>


</head>
<body>
<?php

$amount = 4;

$sql = "SELECT * FROM users WHERE fname='$_SESSION[fname]'";
$result = mysqli_query($conn, $sql);
?>
<?php
if (mysqli_num_rows($result) > 0){
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    ?>
        <div class="container">
        <h2>จองห้องพัก</h2>
        	<form name="booking" action="booking.php" method="post">

                <input type="hidden" name="fname" required value="<?=$row['fname']?>" readonly>

        			<input type="hidden" name="dorm" required value="หอพัก1" readonly>
                    <input type="text" name="amount" value="<?php echo $amount?>" readonly>

                    &nbsp&nbsp<label>ชั้นที่1</label>
                    <fieldset>
                    <input type="radio" name="rmnum" value="1101" required>1101<br/>
                    <input type="radio" name="rmnum" value="1102">1102<br/>
                    <input type="radio" name="rmnum" value="1103">1103<br/>
                    <input type="radio" name="rmnum" value="1104">1104<br/>
        		    </fieldset><br>
        		    &nbsp&nbsp<label>ชั้นที่2</label>
                    <fieldset>
                    <input type="radio" name="rmnum" value="1201">1201<br/>
                    <input type="radio" name="rmnum" value="1202">1202<br/>
                    <input type="radio" name="rmnum" value="1203">1203<br/>
                    <input type="radio" name="rmnum" value="1204">1204<br/>
        		    </fieldset><br>
        		    &nbsp&nbsp<input type="submit" value="เช่าห้อง"/><br><br>
        	</form>
        	
    </div>
<?php
} else {
    echo "0 results";
}
mysqli_close($conn);
?>


</body>
</html>