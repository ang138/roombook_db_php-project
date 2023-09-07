<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['fname'])) {
    header("Location: home_page.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['fname'] = $row['fname'];
		header("Location: user.php");
	} else {
		echo "<script>alert('อีเมล์หรือรหัสผ่านไม่ถูกต้อง')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://unpkg.com/feather-icons"></script>


<style>
        .container {
    width: 80%;
    min-height: 300px;
    background: #f0f9ff;
    border-radius: 15px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
    margin-top: 10px;
    margin-bottom: 10px;
}

    </style>

	<title>เข้าสู่ระบบ</title>
</head>
<body>

	<nav class="navbar navbar-light p-4 border border-bottom" style="background-image: url('sky.jpg'); background-size: cover; background-position: center;">
    <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between ">
      <h2>ระบบจองหอพัก</h2>
      
    </div>
    
  </nav>

  <div class="container-fluid">
    <div class="row"><br>
      <nav id="sidebar" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100 border-end">
        <div class="position-sticky">
          <form action="" method="POST" class="login-email"><br>
          	<p class="login-text" style="font-size: 2rem; font-weight: 500; text-align: center;">เข้าสู่ระบบ</p><br>
          	  <div class="mb-4 row">
                <div class="col-sm-12 ms-2">
                <input type="email" class="form-control" placeholder="อีเมล์" name="email" value="<?php echo $email; ?>" required>
                </div>
                </div>
                <div class="mb-4 row">
                <div class="col-sm-12 ms-2">
                <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>
                </div>
			<div class="text-center">
				<button name="submit" class="btn btn-success">เข้าสู่ระบบ</button>
			</div><br>
			<div class="text-center">
			<p class="login-register-text">ยังไม่ได้เป็นสมาชิก? <a href="register.php">สมัครสมาชิก</a></p>
			</div><br>
		</form>
        </div>
      </nav>






	
    <main class="col-md-2 ml-sm-auto col-lg-10 px-md-4 py-4 ">
        <div class="container">
        
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/d1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>หอพัก1</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/d2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>หอพัก2</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/d3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>หอพัก3</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/d4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>หอพัก4</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/d5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>หอพัก5</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/d6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>หอพัก6</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>