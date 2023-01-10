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
<form action="login.php" method="post">
    <h2>login form</h2>
    <label>user name</label>
    <input type="text" name="user_Name" placeholder="user Name">
    <label>user password</label>
    <input type="number" name="user_password" placeholder="user password">
    <button type="submit" name="submitlogin">login</button>
</form>
<?php
if(isset($_POST['submitlogin']))
{

$username =$_POST['user_Name'];
$userpassword = $_POST['user_password'];

$connection = mysqli_connect("localhost", "root" ,"","hamza");

$query = "SELECT * FROM tbl_reg WHERE user_Name = '$username' AND  user_password  = '$userpassword'";
$result  = mysqli_query($connection ,$query);

// if(mysqli_num_rows($result))
// {
//     $_SESSION['myuser'] = $result;
    header("location:vaccination.php");
}

// else
//     {
//         echo "<script>alert('Register successfully')</script>";
//     }
// }
?>

</body>
</html>