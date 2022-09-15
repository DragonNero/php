<?php
if(isset($_POST["submit"])) {
 $username = $_POST["name"];
 echo "Hello " . $username;
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
