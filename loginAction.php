<?php

 session_start();
      include 'config.php';
      if(isset($_POST['login'])){ 
      $username=$_POST['username'];
      $password=$_POST['password'];
      $conn = $connect->query("SELECT * FROM users where user_username='$username' and user_password='$password'");
      $row = $conn->fetch_assoc();
      $userID = $row['user_ID'];
      $user = $row['user_username'];
      $pass = $row['user_password'];
      $type = $row['user_type'];
      $fullname = $row['user_fullName'];
      if($type=='teacher'){
        $conn = $connect->query("SELECT * FROM teachers INNER JOIN users ON teachers.teacher_userID = users.user_ID where users.user_ID = '$userID' AND teachers.teacher_confirm = '1'");
        $row = $conn->fetch_assoc(); 
          if($row != null){
            $_SESSION['session_id'] = $row['teacher_ID'];
            $_SESSION['fullname'] = $fullname;
            echo "<script>location.href='teacher/subjects.php';</script>";
          }else{
            echo "<script>alert('Please wait for the confirmation of the Admin');location.href='index.php';</script>";
          }
       
       }elseif($type=='student'){
        echo "<script>location.href='student/dashboard.php';</script>";
       }elseif($type=='admin'){
        echo "<script>location.href='admin/teachers.php';</script>";
       }else{
        echo "<script>alert('Invalid Username or Password');location.href='index.php';</script>";;
       }
    }  
?>
