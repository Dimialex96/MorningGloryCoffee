<?php
session_start();
$username = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'mgc');

// LOGIN MANAGER
if (isset($_POST['login_manager'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Απαιτείται username");
  }
  if (empty($password)) {
  	array_push($errors, "Απαιτείται κωδικός");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM manager WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "";
  	  header('location: mainm.php');
  	}else {
  		array_push($errors, "Λανθασμένος συνδιασμός username/password");
  	}
  }
}

?>
