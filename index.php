<?php
if(isset($_POST["submit"])) {
 $username = $_POST["name"];
 echo "Hello " . $username;
$names = array("Boom");
$minimum = 4;
$maximum = 12;
 if(strlen($username) < $minimum){
   echo "Username cannot be less than 4 symbols";
 }
 if(strlen($username) > $maximum){
   echo "Username cannot be longer than 12 symbols";
 }
 if(in_array($username,$names)){
   echo "You are registered";
 } else {
   echo "Sorry you cannot login";}

};


 ?>

<!DOCTYPE HTML>
<html>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name" placeholder="Enter username"><br>
E-mail: <input type="text" name="email" placeholder="Enter email"><br>
<input type="submit" name="submit">
</form>

</body>
</html>
