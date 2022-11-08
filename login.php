<?php
include 'config.php';
session_start();
if(isset($_POST['submit'])) {
    $email= $_POST['email'];
    $password=($_POST['password']);
    $sql = "SELECT * FROM users where email='{$email}'";
    $result=mysqli_query($conn,$sql);
    $sql2= "SELECT email FROM users where password='{$password}'";
    $result1=mysqli_query($conn,$sql2);
    if((mysqli_num_rows($result) > 0) && (mysqli_num_rows($result1) > 0)){
       $row=mysqli_fetch_assoc($result);
       $_SESSION['username']=$row['username'];
       header("location: home.php");
    }else{
        echo "<script>alert('email or password is wrong')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>chat application | YASSINE-ABOULANOUAR</title>
    
</head>
<body>
   
    <section class="header">
        <h1 class="name">Yassine Aboulanouar</h1>
            </section>
    <div class="form-signup">
    <section class="inscription">
        <header class="headerv2">Chat app</header>
        <form action="" method="POST">
            <div class="error-txt">this is an error message!</div>
 
        <div class="informations-users">
            <label>Email adress:</label>
            <input type="text" placeholder="enter ur email adress:" name="email" ?> </input>
    </div>
    <div class="informations-users">
        <label>Password:</label>
        <input type="password" placeholder="enter ur password -_-:" name="password"></input>
</div>

<div class="informations-users">
    
    <input class="button" type="submit" value="continue to chat" name="submit"></input>
</div>
           
        </form>
        <div class="link">U don't have an account?  <a href="./index.php">sign up now</a></div>
    </section>  
   </div>
    <script src="./app.js"></script>
</body>
</html>
