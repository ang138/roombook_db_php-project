<?php 

include 'config.php';

session_start();
if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
 $error = false;
$fname = $_POST["fname"];
$dorm = $_POST["dorm"];
$rmnum = $_POST["rmnum"];

$sql = "INSERT INTO booking (fname, dorm, rmnum)
        VALUES ('$fname', '$dorm', '$rmnum')";

if (mysqli_query($conn,$sql)) {
    
    echo '<p>จองห้องพักเรียบร้อย</p>';
    echo '<a href="user.php">กลับไปยังหน้าหลัก</a>';

    

}else{
    echo "Error: ". $sql . "<br>". mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>



</body>
</html>