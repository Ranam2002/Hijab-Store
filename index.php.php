<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hijab store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourName = $_POST["your_Name"];
    $email = $_POST["Email"];
    $AdditienalDEtails = $POST ["Additienaldetails"];
}

$sql = "INSERT INTO hijab store ('yourname','email','additienaldetails') 
VALUES ('$yourName','$email', '$additienaldetails')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>