<?php 
session_start();
include 'config.php';

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./home.css">

<head>
   
    <title> HOME PAGE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body class="body-spc">
    <div id="main">
        <h1 style="background-color:#6495ed; color: white; width:60% ; margin-left:40px; border-radius:10%;margin-bottom:10px;padding:8px; opacity:70%; ">
        <?php
        echo $_SESSION['username'];
        ?>
        -ONLINE</h1>
   <div class="output">
    <?php 
    $sql = "select * from posts ";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            
            echo "" . $row["name"]. " " . ":: ". $row["msg"]." --".$row["date"]. "<br>";
            echo "<br>";
            
}
    }
    else {
        echo "No Message yet"; 
    }
    $conn->close();
    ?>
    
   </div>
   <form method="post" action="send.php">
   <input name="msg" placeholder="type ur message here..." class="form-control" ></input><br>
<input type="submit" value="send" class="btn-id">
</form><br>
<form   action="logout.php">
    <input style="width: 73% ; background-color:#6495ed ;color:white; font-size: 20px; margin-left:20px;" type="submit" value="logout">

</form>
   
    </div>
</body>
</html>
