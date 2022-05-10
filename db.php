<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname'])&& isset($_POST['password'])){
  function validate($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;

  }
  $uname = validate($_POST['uname']);
  $pass = validate($_POST['password']);
  if (empty($uname)){
    header("Location:index.php?error=Zadejte uživatelské jméno");
    exit();

  }
  else if(empty($pass)){
    header("location:index.php?error=Zadejte heslo");
    exit();
  }


  $sql ="SELECT*FROM crud WHERE user_name='$uname' AND password='$pass'";
  
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['user_name'] === $uname && $row['password'] === $pass){
    echo "Přihlášení proběhlo úspěšně!";
    $_SESSION['user_name']=$row['user_name'];
    $_SESSION['name']=$row['name'];
    $_SESSION['id']=$row['id'];
    header("Location:home.php");
  exit();
}
else{
  header("Location:index.php?error=Špatné uživatelské jméno nebo heslo");
  exit();
}
}
else{
  header("Location:index.php");
  exit();
}
}

