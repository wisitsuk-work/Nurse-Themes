<?php

session_start();

include("connect.php");

$login=mysqli_query($conn,"SELECT status, username, password, firstname FROM user WHERE username='$_POST[username]' and password='$_POST[password]'");
    
list($status, $username, $password, $firstname)=mysqli_fetch_row($login);

    if($username==$_POST['username'] and $password==$_POST['password']){
        $_SESSION['valid_username']=$username;
        $_SESSION['valid_status']=$status;
        $_SESSION['valid_firstname']=$firstname;

        if($_SESSION['valid_status']=="1"){
            echo "<script>window.location='index.html'</script>";
        }elseif($_SESSION['valid_status']=="2"){
            echo "<script>window.location='index.html'</script>";
        }else{
            echo "<script>window.location='index.html'</script>";
        }
    }else{
        $_SESSION['valid_username']="";
        $_SESSION['valid_status']="";
        echo "<script>alert('รหัสผู้ใช้งานของคุณไม่ถูกต้อง กรุณากรอกอีกครั้ง!')</script>";
        echo "<script>window.location='login.php'</script>";
    }

?>