<?php
$workspaceid = $_POST['workspaceid'];

$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");

$sql = "DELETE FROM `todo` WHERE `workspaceid`='$workspaceid'";

if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);


$link = mysqli_connect("localhost", "workbiche", "Coucou1$", "workbiche");

$sql = "DELETE FROM workspaces WHERE id='$workspaceid';";

if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

header('location:home.php');
