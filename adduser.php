<?php

$userpass = $_POST['newuserpass'];
$username = $_POST['newusername'];


$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");
// Attempt insert query execution
$sql = "INSERT INTO users (name, password) VALUES ('$username', '$userpass')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

header('location:home.php');
