<?php

include("include/pdo_connection.php");
include("include/sanitize.php");


sanitize($_POST);

if($_POST['name']=='')
{
    echo "<script>alert('名前が入力されていません。。。')</script>";
    echo "<script> window.location.href = 'signup.php'; </script>";
}
else if(empty($_POST['gender']))
{
    echo "<script>alert('性別が選択されていません。。。')</script>";
    echo "<script> window.location.href = 'signup.php'; </script>";
}
else if($_POST['email']=='')
{
    echo "<script>alert('メールアドレスが入力されていません。。。')</script>";
    echo "<script> window.location.href = 'signup.php'; </script>";
}
else if($_POST['password']=='')
{    echo "<script>alert('パスワードが入力されていません。。。')</script>";
     echo "<script> window.location.href = 'signup.php'; </script>";
}
else if($_POST['password']!=$_POST['password2'])
{
    echo "<script>alert('再入力されたパスワードが異なっていました。。。')</script>";
    echo "<script> window.location.href = 'signup.php'; </script>";
}
else
{
    $sql='SELECT * from user Where Email=?';
    $stmt=$dbh->prepare($sql);
    $stmt->bindValue(1,$_POST['email']);
    $stmt->execute();
    $data=$stmt->fetch(PDO::FETCH_ASSOC);
    if($data) //入力されたメールアドレスが既に登録されている場合
    {
    $dbh=null;
    echo "<script>alert('このメールアドレス既に登録されています。。。')</script>";
    echo "<script> window.location.href = 'signup.php'; </script>";
    }
    else{
    $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $gender=$_POST['gender'];
     if($gender=='male')
     {
        $avatar="male.png";
     }
     else
     {
        $avatar="female.png";
     }
    
    $sql='INSERT into user(Name,Email,Password,Gender,Avatar_url) value(?,?,?,?,?)';
    $stmt=$dbh->prepare($sql);
    $stmt->bindValue(1,$name);
    $stmt->bindValue(2,$email);
    $stmt->bindValue(3,$password);
    $stmt->bindValue(4,$gender);
    $stmt->bindValue(5,$avatar);
    $stmt->execute();
    $dbh=null;
    echo "<script> window.location.href = 'signup_success.php'; </script>";
    }
}







?>