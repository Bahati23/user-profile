<?php
// Database connection
$servername = 'localhost';
$username= 'root';
$dbname= 'userprofile';
$password= '';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob= $_POST['dob'];
    $marital_status = $_POST['marital_status'];
    $gender= $_POST['gender'];
    $address= $_POST['address'];
    $occupation= $_POST['occupation'];




    $sql="INSERT INTO user_profile(name, email , phone , dob, marital_status,gender ,address, occupation)
    VALUES( '$name', '$email', '$phone',  '$dob', '$marital_status','$gender','$address','$occupation')";

    if (mysqli_query($conn,$sql)) {
        echo( 'profile submitted successfully!');
    } 
    else 
     {
        echo ('Error:' .mysqli_error($conn));
    }
}
$conn->close();
?>
