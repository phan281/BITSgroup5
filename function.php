<?php
include('connect.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password  = $_POST['password'];
    $query = "SELECT * FROM nguoidung WHERE username='$username'";
    $result = mysqli_query($connect, $query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
      header("Location: account.php?faillogin=1");
    } 
    else {
      $row = mysqli_fetch_array($result);
      if ($password != $row['password']) {
        header("Location: account.php?faillogin=1");
      }
      else{
        $_SESSION['username'] = $username;
      $_SESSION['id'] = $row['id'];
      $_SESSION['email'] = $row['email'];
        header("Location: index.php?index&msg=1");
      
      }
    }
}
if(isset($_POST['singup'])){
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password  = $_POST['password'];
      $check = "SELECT * FROM nguoidung WHERE username='$username' OR email='$email'";
      $excute = mysqli_query($connect, $check);
      $row = mysqli_num_rows($excute);
      if($row > 0)
      {
          header("Location: account.php?account&fail=2");
      }else{
        $query = "INSERT INTO nguoidung ( `username`,`email`, `password`) 
        VALUES ( '{$username}', '{$email}', '{$password}') ";
        $result = mysqli_query($connect, $query);
        if ($result) {
          header("Location: account.php?account&msg=1");
        } 
        else {
            header("Location: account.php?account&fail=2");
        }
      }
}
?> 
 
