<?php

$workspaceid = $_POST['workspaceid'];
$family = $_POST['family'];
$task = $_POST['task'];
$priority = $_POST['priority'];
$time = $_POST['time'];

$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");
// Attempt insert query execution
$sql = "INSERT INTO todo (workspaceid, family, task, priority, time) VALUES ('$workspaceid', '$family', '$task', '$priority', '$time')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

header('location:home.php');
