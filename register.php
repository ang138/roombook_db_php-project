<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['fname'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sex = $_POST['sex'];
	$dob = date('Y-m-d', strtotime($_POST['dob']));
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (fname, lname, sex, dob, tel, email, password)
					VALUES ('$fname', '$lname', '$sex', '$dob', '$tel', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('สมัครข้อมูลเรียบร้อย')</script>";
				$fname = "";
				$lname = "";
				$sex = "";
				$dob = "";
				$tel = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>สมัครสมาชิก</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="ชื่อ" name="fname" value="<?php echo $fname; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="นามสกุล" name="lname" value="<?php echo $lname; ?>" required>
			</div>
			<center><label>เพศ :</label>
				<input type="radio" name="sex" value="ชาย" required> ชาย
				<input type="radio" name="sex" value="หญิง"> หญิง
				</center><br>
			<div class="input-group">
				<h3>วันเกิด :</h3>
				<input type="date" placeholder="วันเกิด" name="dob" value="<?php echo $dob; ?>" required>
			</div><br>
			<div class="input-group">
				<input type="text" placeholder="เบอร์โทร" name="tel" value="<?php echo $tel; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="อีเมล์" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="รหัสผ่าน" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="ยืนยันรหัสผ่าน" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">สมัครสมาชิก</button>
			</div>
			<p class="login-register-text">เป็นสมาชิก? <a href="index.php">เข้าสู่ระบบ</a></p>
		</form>
	</div>
</body>
</html>