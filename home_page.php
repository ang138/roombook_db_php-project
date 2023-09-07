<?php 

session_start();

if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link rel="stylesheet" type="text/css" href="hstyle.css">
    <style>
        
    </style>


</head>
<body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>Booking Room</h2>
        <ul>
            <li><a href="user.php"><i class="fas fa-user"></i>ข้อมูลส่วนตัว</a></li>
            <li><a href="booking_form.php"><i class="fas fa-address-card"></i>จองห้องพัก</a></li>
            <li><a href="booking_data.php"><i class="fas fa-project-diagram"></i>ข้อมูลการจอง</a></li>
            <li><a href="logout.php"><i class="fas fa-map-pin"></i>ออกจากระบบ</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"><h1><center>ยินต้อนรับ</center></h1></div>  
        <div class="info">
            <h3>ข่าวสาร ! !</h3>
        </div>
    </div>
</div>
</body>
</html>