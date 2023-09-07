<?php
    session_start();
    $error = false;
    include('config.php');
    $sql = "SELECT * FROM booking";
    $result = mysqli_query($conn, $sql);


$id = $_POST['id'];
$dorm = $_POST['dorm'];
$rmnum = $_POST['rmnum'];
$sql = "UPDATE booking SET dorm='$dorm', rmnum='$rmnum' WHERE id = $id ";
if (mysqli_query($conn, $sql)){
    echo '<p>อัพเดตข้อมูลเรียบร้อย</p>';
    echo '<a href="user.php">กลับไปยังหน้าหลัก</a>';
} else {
    echo "Error updating record:".mysqli_error($conn);
}
mysqli_close($conn);
//include 'inc/footer.html';
?>
