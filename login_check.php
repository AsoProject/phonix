<?php

include("include/pdo_connection.php");
include("include/sanitize.php");

if($_POST['email']=='')
{

    echo "<script> window.location.href = 'login.php'; </script>";
}
else if($_POST['password']=='')
{
    echo "<script> window.location.href = 'login.php'; </script>";
}

else
{

    sanitize($_POST);
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql='SELECT * from user Where Email=?';

    $stmt=$dbh->prepare($sql);
    $stmt->bindValue(1,$email);
    $stmt->execute();
    $data=$stmt->fetch(PDO::FETCH_ASSOC);
    $dbh=null;

    if(!$data)
    {
      echo "<script>alert('メールアドレスが登録されていません。。。')</script>";
      echo "<script> window.location.href = 'login.php'; </script>";
    }
    else if($password!=$data['Password'])
    {
      
    echo "<script>alert('パスワードが間違えました')</script>";
    echo "<script> window.location.href = 'login.php'; </script>";

    }
    else
    {

    }
}




