<?php
$task = $_POST['task'];

$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");

$sql = "DELETE FROM `todo` WHERE `id`='$task'";

if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

header('location:home.php');
