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
<?php
$total = 0;
$items = [];
$info = '';
$lat = '';
$lng = '';
if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'] ) )
{
    foreach( $_POST['choice'] as $item )
    {
        $name     = trim( $item['name'] );
        $price    = intval( $item['price'] );
        $quantity = intval( $item['quantity'] );
        if( isset( $item['checked'] ) && $quantity > 0 )
        {
            $items[] = $quantity .' '. $name;
            $total  += $price * $quantity;
        }
    }
    if( count( $items ) )
    {
        $info = 'Επιλέξατε  ('.implode( ', ', $items ).')<br> Σύνολο: €'.$total;
        
    }
}
$db = mysqli_connect('localhost', 'root', '', 'mgc');

$emailc = $_SESSION['email'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$ellinikos = $_POST['choice'][0]['quantity'];
$frape = $_POST['choice'][1]['quantity'];
$espresso = $_POST['choice'][2]['quantity'];
$cappuccino = $_POST['choice'][3]['quantity'];
$filtrou = $_POST['choice'][4]['quantity'];
$tiropita = $_POST['choice'][5]['quantity'];
$xortopita = $_POST['choice'][6]['quantity'];
$koulouri = $_POST['choice'][7]['quantity'];
$tost = $_POST['choice'][8]['quantity'];
$keik = $_POST['choice'][9]['quantity'];
$query = "INSERT INTO myorder (email_customer, ellinikos,frape,espresso,cappuccino,filtrou,tiropita,xortopita,koulouri,tost,keik,location_lat, location_long ) VALUES ('$emailc', '$ellinikos','$frape','$espresso','$cappuccino','$filtrou','$tiropita','$xortopita','$koulouri','$tost','$keik','$lat','$lng')";

mysqli_query($db, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Morning Glory Coffee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style> 
body {
    background-image: url("images/coffee5.jpg");
  min-height: 610px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
</head>
<body>
<div class="row"><div class="col-12" style="text-align:center"><h2 style="color:white"><strong>H παραγγελία σας ολοκληρώθηκε!</strong></h2></div></div>
<div class="row"><div class="col-12" style="text-align:center"><p><strong><?= $info ?></strong></p></div></div>
<div class="row" style="margin-top:300px"><div class="col-9"></div><div class="col-3">
<?php  if (isset($_SESSION['email'])) : ?>
                   <?php echo $_SESSION['email'];?>
                    <p class="mr-2"> <a href="index.php?logout='1'" style="color: #000000;">Αποσύνδεση</a> </p>
                <?php endif ?>
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
                                <a href="index.php" style="color: #800000;">Επιστροφή στην αρχική</a></div></div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
