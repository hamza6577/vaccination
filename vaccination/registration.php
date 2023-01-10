<?php

 session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background:#ABCDEF;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
*{
    font-family: sans-serif;
    box-sizing: border-box;

}
form{
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background-color: #fff;
    border-radius: 15px;
}
h2{
    text-align: center;
    margin-bottom: 40px;
}
input{
    display: flex;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;

}

    </style>
</head>
<body>
<form action="registration.php" method="post">
        <h2>Registration form</h2>
        <label>user id</label>
        <input type="number" name="user_id" placeholder="user id">
        <label>user Name</label>
        <input type="text" name="user_Name" placeholder="Name">
        <label>user password</label>
        <input type="number" name="user_password" placeholder="password">
        <label>user Email</label>
        <input type="text" name="user_email" placeholder="email">
        <button type="submit" name="submitreg">registration</button>
    </form>
    <?php
    if(isset($_POST['submitreg']))
    {
        $id =$_POST['user_id'];
        $name =$_POST['user_Name'];
        $password =$_POST['user_password'];
        $email =$_POST['user_email'];

        $connection = mysqli_connect("localhost", "root" ,"","hamza");
        $query="INSERT INTO tbl_reg VALUES ($id ,'$name',$password,'$email')";
        $done = mysqli_query($connection ,$query);

    
    // if(mysqli_num_rows($result))
// {
//     $_SESSION['myuser'] = $result;
    header("location:login.php");
}

    if('done')
    {
        echo "<script>alert('Register successfully')</script>";
    }

    ?>
    
</body>
</html>