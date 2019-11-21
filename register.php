<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Morning Glory Coffee</title>
</head>
<body class="bg-img1">
  <div class="header">
  	<h2>Εγγραφή</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Κωδικός</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Επιβεβαίωση κωδικού</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
  	  <label>Τηλέφωνο</label>
  	  <input type="text" name="tel">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Εγγραφή</button>
  	</div>
  	<p>
  		Είστε ήδη μέλος;&nbsp;  <a href="login.php">Είσοδος</a>
  	</p>
  </form>
  </br> </br> </br> </br><h1><font color="white"><i>Morning Glory</br>Coffee</i></font></h1>
</body>
</html>
