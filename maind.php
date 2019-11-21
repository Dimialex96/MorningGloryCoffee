<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Πρέπει να συνδεθείτε πρώτα";
  	header('location: logind.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: logind.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Morning Glory Coffee</title>
</head>
<body class="bg-img3">
  <div class="row">
        <div class="col-12">
         <div class="table-responsive-sm">
           
      <table class="table">
        <tr>
          <th>Username</th> 
          <th>Έναρξη βάρδιας</th>
          <th>Λήξη βάρδιας</th>
        </tr>
        <tr>
            <form method="post" action="shift.php">
              <td><input type="text" style="width: auto" name="username"/></td>  
              <td><input type="time" name="onduty" step="1"/></td>
              <td><input type="time" name="offduty" step="1"/></td>
              <td><input id="formLat" type="hidden" name="lat" value=" "/>
                    <input id="formLng" type="hidden" name="lng" value=" "/></td>
            </tr>
      
      <input type="submit" value="Έναρξη/Λήξη βάρδιας"/>
      </form>
              <tr>    <form method="post" action="avaliability.php"><input type="submit" name='aval' value="Active"></form>
                  <form method="post" action="avaliability.php"><input type="submit" name='aval' value="Inactive"></form>
 </tr> </table>
  </div>
</div>
</div>
<?php require "map.php"; ?>

<div class="logout1">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	    <h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
        	</h3>
        </div>
  	        <?php endif ?>
         <?php  if (isset($_SESSION['username'])) : ?>
    	<?php echo $_SESSION['username'];?>
    	<p> <a href="maind.php?logout='1'" style="color: #800000;">Αποσύνδεση</a> </p>
    <?php endif ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
