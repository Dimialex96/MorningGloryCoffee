<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Πρέπει να συνδεθείτε πρώτα";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginm.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

<script>
function showHint() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("listorder").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "gethint.php", true);
    xmlhttp.send();
}

</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <title>Morning Glory Coffee</title>
</head>
<body class="bg-img4">
        <div id="listorder" class="bgmanag" >
    <script type="text/javascript">
    var interr=setInterval(showHint, 1000);
    </script>
    </div></div>
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
    	              <p>Καλωσόρισες <strong><?php echo $_SESSION['username'];?></strong></p>
                    	<p> <a href="mainm.php?logout='1'" style="color: #800000;">Αποσύνδεση</a> </p>
               <?php endif ?>
            </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
