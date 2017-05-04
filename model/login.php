<?php
session_start();
if($_POST['password'] !== "") {
  $_SESSION['password'] = $_POST['password'];
  header('location:../home.php');
}
else {
  header('location:../index.php');
}
