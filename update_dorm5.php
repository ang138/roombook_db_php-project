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
$id = $_GET['id'];
$sql = "SELECT * FROM users INNER JOIN booking ON users.fname=booking.fname WHERE users.fname='$_SESSION[fname]' AND booking.id = $id";
$result = mysqli_query($conn, $sql);
?>
<?php
if (mysqli_num_rows($result) > 0){
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <h2>จองห้องพัก</h2>
            <form name="update_guests" action="update_guest.php" method="post">

                <input type="hidden" name="fname" required value="<?=$row['fname']?>" readonly>
                <input type="hidden" name="id" required value="<?php echo $row['id'];?>" readonly><br>


                    <input type="hidden" name="dorm" required value="หอพัก5" readonly>

                    &nbsp&nbsp<label>ชั้นที่1</label>
                    <fieldset>
                    <input type="radio" name="rmnum" value="5101">5101<br/>
                    <input type="radio" name="rmnum" value="5102">5102<br/>
                    <input type="radio" name="rmnum" value="5103">5103<br/>
                    <input type="radio" name="rmnum" value="5104">5104<br/>
                    </fieldset><br>
                    &nbsp&nbsp<label>ชั้นที่2</label>
                    <fieldset>
                    <input type="radio" name="rmnum" value="5201">5201<br/>
                    <input type="radio" name="rmnum" value="5202">5202<br/>
                    <input type="radio" name="rmnum" value="5203">5203<br/>
                    <input type="radio" name="rmnum" value="5204">5204<br/>
                    </fieldset><br>
                    &nbsp&nbsp<input type="submit" value="อัพเดตข้อมูล"/><br><br>
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