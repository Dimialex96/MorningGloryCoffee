<?php
  session_start();

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "Πρέπει να συνδεθείτε πρώτα";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Morning Glory Coffee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style> 
body {
    background-image: url("images/coffee0.jpg");
  min-height: 680px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body>
  <h1 class="display-4"><i class="text-light">Για να ξεκινήσει καλά η μέρα!</i></h1>
  </br></br></br>
     </form>
    <div class="container">
    
        <div class="row ">
            <div class="col-6 m-0">
             <div class="bgform">
                <h3>Μενού</h3>
                <form action="order.php" method="post" >
                <h5>Καφέδες</h5> 
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[0][checked]" />		
                                <label class="form-check-label" for="myId"> Ελληνικός, 1€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[0][quantity]" value="0" />
                            <input type="hidden" name="choice[0][price]" value="1" />
                            <input type="hidden" name="choice[0][name]" value="Ελληνικός"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0  no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[1][checked]"/>		
                                <label class="form-check-label" for="myId"> Φραπέ, 2€ </label>
                            </div>
                        </div>    
                        <div class="col-8">
                            <input type="number" name="choice[1][quantity]" value="0" />
                            <input type="hidden" name="choice[1][price]" value="2" />
                            <input type="hidden" name="choice[1][name]" value="Φραπέ"/>
                        </div>
                        
                    </div>
                     <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[2][checked]" />		
                                <label class="form-check-label" for="myId"> Espresso, 1€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[2][quantity]" value="0" />
                            <input type="hidden" name="choice[2][price]" value="1" />
                            <input type="hidden" name="choice[2][name]" value="Espresso"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[3][checked]" />		
                                <label class="form-check-label" for="myId"> Cappuccino, 2€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[3][quantity]" value="0" />
                            <input type="hidden" name="choice[3][price]" value="2" />
                            <input type="hidden" name="choice[3][name]" value="Cappuccino"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[4][checked]" />		
                                <label class="form-check-label" for="myId"> Φίλτρου, 2€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[4][quantity]" value="0" />
                            <input type="hidden" name="choice[4][price]" value="2" />
                            <input type="hidden" name="choice[4][name]" value="Φίλτρου"/>
                        </div>
                    </div>
                    <h5>Snacks</h5>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[5][checked]" />		
                                <label class="form-check-label" for="myId">Τυρόπιτα, 2€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[5][quantity]" value="0" />
                            <input type="hidden" name="choice[5][price]" value="2" />
                            <input type="hidden" name="choice[5][name]" value="Τυρόπιτα"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[6][checked]" />		
                                <label class="form-check-label" for="myId"> Χορτόπιτα, 2€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[6][quantity]" value="0" />
                            <input type="hidden" name="choice[6][price]" value="2" />
                            <input type="hidden" name="choice[6][name]" value="Χορτόπιτα"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[7][checked]" />		
                                <label class="form-check-label" for="myId"> Κουλούρι, 1€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[7][quantity]" value="0" />
                            <input type="hidden" name="choice[7][price]" value="1" />
                            <input type="hidden" name="choice[7][name]" value="Κουλούρι"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[8][checked]" />		
                                <label class="form-check-label" for="myId"> Τοστ, 2€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[8][quantity]" value="0" />
                            <input type="hidden" name="choice[8][price]" value="2" />
                            <input type="hidden" name="choice[8][name]" value="Τοστ"/>
                        </div>
                    </div>
                    <div class="row m-0 p-0 no-gutters">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="myId" name="choice[9][checked]" />		
                                <label class="form-check-label" for="myId"> Κέικ, 3€ </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <input type="number" name="choice[9][quantity]" value="0" />
                            <input type="hidden" name="choice[9][price]" value="3" />
                            <input type="hidden" name="choice[9][name]" value="Κέικ"/>
                        </div>
                    </div>
                    <input id="formLat" type="hidden" name="lat" value=" "/>
                    <input id="formLng" type="hidden" name="lng" value=" "/>
                    <input type="submit" value="Ολοκλήρωση Παραγγελίας"/>
                </form>
            </div></div>
            <div class="col-6 " style="margin-bottom:100px">
              <?php require "map.php"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <h1 class="display-5"><i class="text-white">Morning Glory<br>Coffee</i></h1>
            </div>
            <div class="col-7 text-right">
                <?php  if (isset($_SESSION['email'])) : ?>
                    <p class="lead mr-2">Καλωσόρισες <strong><?php echo $_SESSION['email'];?></strong></p>
                    <p class="mr-2"> <a href="index.php?logout='1'" style="color: #800000;">Αποσύνδεση</a> </p>
                <?php endif ?>
            </div>
        </div>
    </div>
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
  	<?php endif ?></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
