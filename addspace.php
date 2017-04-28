<?php


$workspacename = $_POST['workspacename'];


$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");
// Attempt insert query execution
$sql = "INSERT INTO workspaces (name, userid) VALUES ('$workspacename', 1)";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

header('location:home.php');
