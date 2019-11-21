<?php include('serverm.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Morning Glory Coffee</title>
</head>
<body class="bg-img4">
  <div class="header">
  	<h2>Είσοδος Μάνατζερ</h2>
  </div>

  <form method="post" action="loginm.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Κωδικός</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_manager">Είσοδος</button>
  	</div>
  </form>
  </br> </br> </br> </br><h1><font color="white"><i>Morning Glory</br>Coffee</i></font></h1>
</body>
</html>
