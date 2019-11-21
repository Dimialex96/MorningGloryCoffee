<?php
session_start();
$email = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'mgc');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $tel = mysqli_real_escape_string($db, $_POST['tel']);
  if (empty($email)) { array_push($errors, "Απαιτείται email"); }
  if (empty($password_1)) { array_push($errors, "Απαιτείται κωδικός"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Οι δυο κωδικοί δεν ταιριάζουν");
  }
  if (empty($tel)) { array_push($errors, "Απαιτείται τηλέφωνο"); }
  $user_check_query = "SELECT * FROM customer WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { 
        if ($user['email'] === $email) {
      array_push($errors, "Το email υπάρχει ήδη");
    }
  }
  if (count($errors) == 0) {
  	$password =$password_1;

  	$query = "INSERT INTO customer (email, password, tel)
  			  VALUES('$email', '$password', '$tel')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "Είστε Συνδεδεμένος";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Απαιτείται email");
  }
  if (empty($password)) {
  	array_push($errors, "Απαιτείται κωδικός");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Λανθασμένος συνδιασμός email/password");
  	}
  }
}

?>
