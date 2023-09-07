
<?php
    session_start();
    include('config.php');
    $error = false;
    $sql = "SELECT * FROM users WHERE fname='$_SESSION[fname]'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Member</title>

    <link rel="stylesheet" type="text/css" href="hstyle.css">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        .container {
    width: 80%;
    min-height: 400px;
    background: #f0f9ff;
    border-radius: 15px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
    margin-top: 30px;
    margin-bottom: 30px;
}

    </style>
        
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
          <ul class="nav flex-column">
            <li class="nav-item"><br>
              <a href="user.php" class="nav-link " aria-current="page">
                <i data-feather="user"></i>
                <span class="ml-2">ข้อมูลส่วนตัว</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="booking_form.php" class="nav-link " aria-current="page">
                <i data-feather="database"></i>
                <span class="ml-2">จองหอพัก</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="booking_data.php" class="nav-link " aria-current="page">
                <i data-feather="calendar"></i>
                <span class="ml-2">ข้อมูลการจอง</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link " aria-current="page">
                <i data-feather="log-in"></i>
                <span class="ml-2">ออกจากระบบ</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>


      <main class="col-md-2 ml-sm-auto col-lg-10 px-md-4 py-4 " style="background-image: url('bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
        <center><h2>ข้อมูลส่วนตัว</h2></center>
            <center><table class="table table-striped" style="width:90% " ></center><br>
                <tr>
                    <th><h4>ชื่อ :</h4></th>
                    <td><h4><?php echo $row['fname'];?></h4></td>
                    <th><h4>นามสกุล :</h4></th>
                    <td><h4><?php echo $row['lname'];?></h4></td>
                </tr>
                <tr>
                    <th><h4>เพศ :</h4></th>
                    <td><h4><?php echo $row['sex'];?></h4></td>
                    <th><h4>วันเกิด :</h4></th>
                    <td><h4><?php echo $row['dob'];?></h4></td>
                </tr>
                <tr>
                    <th><h4>เบอร์โทร :</h4></th>
                    <td><h4><?php echo $row['tel'];?></h4></td>
                    <th><h4>อีเมล์ :</h4></th>
                    <td><h4><?php echo $row['email'];?></h4></td>
                </tr>
            </table><br>
            </div>

            </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script>feather.replace()</script>

</body>
</html>