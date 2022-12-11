<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logowanie</title>
	<link rel="stylesheet" href="style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
</head>
<body>
<?php

$con = mysqli_connect("localhost","root","","mateusz_szkola");
if (mysqli_connect_errno())
  {
  echo "Niepoprawne połączenie " . mysqli_connect_error();
  }
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT password FROM `users` WHERE username='$username'";
	$result = mysqli_query($con,$query)->fetch_column(0);
        if(password_verify($password, $result)){
	    $_SESSION['username'] = $username;
	    header("Location: loggedin.php");
         }else{
	echo "<div class='form'>
<h3>Niepoprawne hasło lub nazwa</h3>
<br/>Kliknij aby ponownie się zalogować<a href='login.php'></a></div>";
	}
    }else{
?>
<div class="form">
<h1>Logowanie</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>

</div>
<?php } ?>
</body>
</html>