<?php
$workspaceid = $_POST['workspaceid'];
$family = $_POST['family'];
$task = $_POST['task'];
$priority = $_POST['priority'];
$time = $_POST['time'];
$id = $_POST['submit'];

$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");

$sql = "UPDATE todo SET workspaceid='$workspaceid', family='$family', task='$task', priority='$priority', time='$time' WHERE id='$id'";

if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

header('location:home.php');
