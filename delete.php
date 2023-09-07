<?php
    session_start();
    $error = false;
    include('config.php');



$id = $_GET['id'];

$sql = "DELETE FROM booking WHERE id = $id ";
if (mysqli_query($conn, $sql)){
    echo '<p>ลบข้อมูลเรียบร้อย</p>';
    echo '<a href="booking_data.php">กลับไปยังหน้าหลัก</a>';
} else {
    echo "Error updating record:".mysqli_error($conn);
}
mysqli_close($conn);
//include 'inc/footer.html';
?>