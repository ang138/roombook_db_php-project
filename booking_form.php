
<?php
    session_start();
    if (!isset($_SESSION['fname'])) {
    header("Location: index.php");
}
    $error = false;

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://unpkg.com/feather-icons"></script>


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

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                        <div class="row">
                            <center><h3>หอพักหญิง</h3></center><br>
                            <div class="col-sm-4">
                                <center>หอพัก1</center>
                                <img src="img/d1.jpg" width="100%">
                                <a href="dorm1.php" class="btn btn-success" style="width: 100%;">เข้าจอง</a>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก2</center>
                                <img src="img/d2.jpg" width="100%">
                                <a href="dorm2.php" class="btn btn-success" style="width: 100%;">เข้าจอง</a>
                            </div>
                            <div class="col-sm-4" style="padding-bottom: 20px;">
                                <center>หอพัก3</center>
                                <img src="img/d3.jpg" width="100%">
                                <a href="dorm3.php" class="btn btn-success" style="width: 100%;">เข้าจอง</a>
                            </div>
                            <center><h3>หอพักชาย</h3></center><br>
                            <div class="col-sm-4">
                                <center>หอพัก4</center>
                                <img src="img/d4.jpg" width="100%">
                                <a href="dorm4.php" class="btn btn-success" style="width: 100%;">เข้าจอง</a>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก5</center>
                                <img src="img/d5.jpg" width="100%">
                                <a href="dorm5.php" class="btn btn-success" style="width: 100%;">เข้าจอง</a>
                            </div>
                            <div class="col-sm-4">
                                <center>หอพัก6</center>
                                <img src="img/d6.jpg" width="100%">
                                <a href="dorm6.php" class="btn btn-success" style="width: 100%;">เข้าจอง</a>
                            </div>
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