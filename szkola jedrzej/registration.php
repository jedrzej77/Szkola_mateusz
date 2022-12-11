<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rejerstracja</title>
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

if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con, $username); 

        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);

        $surname = stripslashes($_REQUEST['surname']);
        $surname = mysqli_real_escape_string($con, $surname);

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $age = stripslashes($_REQUEST['age']);
        $age = mysqli_real_escape_string($con, $age);

        

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);

        $query = "INSERT into `users` (username, name, surname, email, age, password) VALUES ('$username','$name', '$surname', '$email', '$age',  '".password_hash($password, PASSWORD_DEFAULT)."')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Zarejestrowano pomyślnie</h3>
<br/>Kliknij tutaj żeby się zalogować <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Rejerstracja</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Nazwa" required /><br>
<input type="text" name="name" placeholder="Imię" required /><br>
<input type="text" name="surname" placeholder="Nazwisko" required /><br>
<input type="text" name="email" placeholder="Email" required /><br>
<input type="text" name="age" placeholder="Wiek" required /><br>
<input type="password" name="password" placeholder="Hasło" required /><br>
<input type="submit" name="submit" value="Zarejestruj" />
</form>
</div>
<?php } ?>
</body>
</html>