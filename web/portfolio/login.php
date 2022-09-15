<?php 
session_start();
        if(isset($_POST['username'])){
				//connection
                  include("function/function.php");
				//รับค่า user & password
                  $username = $_POST['username'];
                  $password = md5($_POST['password']);
				//query 
                  $sql="SELECT * FROM user Where username='".$username."' and password='".$password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["id"];
                      $_SESSION["User"] = $row["firstname"]." ".$row["lastname"];
                      $_SESSION["Userlevel"] = $row["userlevel"];

                      if($_SESSION["Userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin.php");

                      }

                      if ($_SESSION["Userlevel"]=="u"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: dashboard.php");

                      }

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