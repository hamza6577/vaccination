<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>

    <title>Document</title>

    <style>
        html,body
{
    width: 500px;
    margin: auto;
}
.container
{
    width: 500px;
    margin: 50px auto;
}

.preview
{
    padding: 10px;
    position: relative;
}

.preview i
{
    color: white;
    font-size: 35px;
    transform: translate(50px,130px);
}

.preview-img
{
    border-radius: 100%;
    box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.7);
}

.browse-button
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    position: absolute; /* Tweak the position property if the element seems to be unfit */
    top: 10px;
    left: 132px;
    background: linear-gradient(180deg, transparent, black);
    opacity: 0;
    transition: 0.3s ease;
}

.browse-button:hover
{
    opacity: 1;
}

.browse-input
{
    width: 200px;
    height: 200px;
    border-radius: 100%;
    transform: translate(-1px,-26px);
    opacity: 0;
}

.form-group
{
    width:  250px;
    margin: 10px auto;
}

.form-group input
{
    transition: 0.3s linear;
    margin-top: 20px;
}

.form-group input:focus
{
    border: 1px solid crimson;
    box-shadow: 0 0 0 0;
}

.Error
{
    color: crimson;
    font-size: 13px;
}

.Back
{
    font-size: 25px;
}
    </style>
</head>
<body>
   <div class="container">
       <div class="Back">
            <i class="fa fa-arrow-left" onclick="Back()"></i>
        </div>
        <p style="font-size: 30px; font-weight: bold;" class="h2 text-center">vaccine registration</p>
        <form action="" method="post" style="padding-top: 40px;">
            
            <div class="form-group">
                
                <input class="form-control" type="text" name="txtname" placeholder="vaccine name"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
               
                <input class="form-control" type="date" name="txtdate" placeholder="vaccine date"/>
                <span class="Error"></span>
            </div>
            <div class="form-group">
                
                <input class="form-control" type="text" name="txtava"  placeholder="avaliable or unavaliable"/>
                <span class="Error"></span>
            </div>
          
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" name="btnsub">
            </div>
        </form>

        <?php
    if(isset($_POST['btnsub']))
    {
        
        $name = $_POST['txtname'];
        $date = $_POST['txtdate'];
        $avaliable =$_POST['txtava'];
        

    //  

include("connection.php");
       $query = "INSERT INTO  tbl_vaccine  (name, date, avaliablity) VALUES ('$name', '$date', '$avaliable')";

      $result =  mysqli_query($connection,$query);

       if($result)
       {
        echo "<script>  alert ('Record Submitted')</script>";
       }

    }
     ?> 

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>