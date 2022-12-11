<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
<title>Zalogowano</title>
</head>
<body>
 <?php 
 
 $con = mysqli_connect("localhost","root","fudali69","mateusz_szkola");
 if (mysqli_connect_errno())
   {
   echo "Niepoprawne połączenie " . mysqli_connect_error();
   }

 $zapytanie = "SELECT * FROM student";
 
 
$result = mysqli_query($con, $zapytanie);
    echo "Studenci <br>";
while($line = mysqli_fetch_assoc($result)) {
    echo "id: " . $line["id"]. ", name: " . $line["name"]. ", surname: " . $line["surname"]. "<br>";
}

$zapytanie1 = "SELECT * FROM class";
 
 
$result = mysqli_query($con, $zapytanie1);
    echo "Klasy <br>";
while($line = mysqli_fetch_assoc($result)) {
    echo "id: " . $line["id"]. ", name: " . $line["name"]. "<br>";
}



$zapytanie2 = "SELECT * FROM teacher";
 
 
$result = mysqli_query($con, $zapytanie2);
    echo "Nauczyciele <br>";
while($line = mysqli_fetch_assoc($result)) {
    echo "id: " . $line["id"]. ", name: " . $line["name"]. ", surname: " . $line["surname"]. ", age: " . $line["age"]. "<br>";
}
 

$zapytanie3 = "SELECT * FROM subject_";
 
 
$result = mysqli_query($con, $zapytanie3);
    echo "Przedmioty <br>";
while($line = mysqli_fetch_assoc($result)) {
    echo "id: " . $line["id"]. ", name: " . $line["name"].  "<br>";
}


$zapytanie4 = "SELECT * FROM users";
 
 
$result4 = mysqli_query($con, $zapytanie4);
    echo "Uzytkownicy <br>";
while($line = mysqli_fetch_assoc($result4)) {
    echo "id: " . $line["id"]. ", name: " . $line["name"]. ", surname: " . $line["surname"]. ", username: " . $line["username"]. ", email: " . $line["email"]. ", age: " . $line["age"]. ", role: " . $line["role"]."<br>";
}

 ?>
</body>
</html>