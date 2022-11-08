<?php
include 'config.php';
error_reporting(0);
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=($_POST['password']);
    $cpassword=($_POST['cpassword']);
   
    if(!empty($username) && !empty($email) && !empty($password) && !empty($cpassword)){
if(strpos($email,"@gmail.com")){
    if($password == $cpassword ){
        $sql = "SELECT email FROM users where email='{$email}'";
        $result=mysqli_query($conn,$sql);
if((mysqli_num_rows($result) > 0) ){
    echo "<script>alert('email already exist ')</script>";

}
else{
    $sql ="INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result =mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('this user is registred succesfully go login now')</script>";


} else {
echo "<script>alert('Oops something is wrong went')</script>";
}

}
       
} else {
    echo "<script>alert('password  not matched')</script>";
}
    }else{
        echo "<script>alert(' email not matched')</script>";
    }
}else{
    echo "<script>alert('enter ur infos -_-')</script>";
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
        <form action="#" method="POST">
            <div class="error-txt">this is an error message!</div>
            <div class="name-details">
                <div class="informations-users">
                    <label>username:</label>
                    <input type="text" placeholder="username:" name="username"></input>
            </div>
            
        </div>
        <div class="informations-users">
            <label>Email adress:</label>
            <input type="text" placeholder="enter ur email adress:" name="email"></input>
    </div>
    <div class="informations-users">
        <label>Password:</label>
        <input type="password" placeholder="enter ur password -_-:" name="password"></input>
</div>
<div class="informations-users">
                <label>cpassword:</label>
                <input type="password" placeholder="confirm ur password:" name="cpassword"></input>
        </div>
<div class="informations-users">
    <input class="button"  type="submit" value="continue to chat" name="submit"></input>
</div>
           
        </form>
        <div class="link">Already singed up <a href="./login.php">Login now?</a></div>
    </section>  
   </div>
    <script src="./app.js"></script>
</body>
</html>
