<?php 


$conn = mysqli_connect('localhost', 'root', 'root', 'phpcours');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}


$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$email =     $_POST['email']; 

if (isset($_POST['submit'])){
    

    $sql = "INSERT INTO users(firstName, lastName, email) 
            VALUES ('$firstName', '$lastName', '$email')";

            mysqli_query($conn, $sql); 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body><form action="index.php" method="POST">
      
        
         
       
         
        <h1 class="h1">Welcome to new customers</h1>
       
          
  <div class="box">
    <div class="form">
      <h2>Sign in</h2>
      <div class="inputBox">
       <input type="text" name="firstName" id="firstName" placeholder="UserName" required="required">
        <span>UserName</span>
        <i></i>
      </div>
      <div class="inputBox">
       <input type="text" name="email" id="email" placeholder="Gmail"required="required">
        <span>Gmail</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="text" name="lastName" id="lastName" placeholder="Password" required="required">
        <span>Password</span>
        <i></i>
      </div>
     
      <input type="submit" name="submit" value="send">
    </div>
  </div>
     </form>
        
   


<script src="./js/script.js"></script>
</body>
</html>
