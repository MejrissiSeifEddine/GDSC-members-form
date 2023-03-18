<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GDSC members";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];


    $sql = "SELECT * FROM MEMBERS WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
       
        echo "Congratulations, you have successfully filled in the form!";
    } else {
        
        echo "Sorry, you need to make a payment to complete the form.";
    }
}


mysqli_close($conn);

?>
