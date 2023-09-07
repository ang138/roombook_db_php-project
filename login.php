<?php 
session_start();
        if(isset($_POST['fname'])){
                  include("config.php");
                  $fname = $_POST['email'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM users
                  WHERE  email='".$email."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($con,$sql);
                
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["fname"] = $row["fname"];
                      $_SESSION["email"] = $row["email"];

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>


