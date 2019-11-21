<?php
$db = mysqli_connect('localhost','root','', 'mgc');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM myorder ORDER BY id DESC LIMIT 10";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"].  "&nbsp&nbspΕλληνικός&nbsp" .$row['ellinikos']. "&nbsp&nbspΦραπέ&nbsp" .$row['frape']."&nbsp&nbspEspresso&nbsp" .$row['espresso']."&nbsp&nbspCappuccino" 
        .$row['cappuccino']."&nbsp&nbspΦίλτρου&nbsp" .$row['filtrou'].
        "&nbsp&nbspΤυρόπιτα&nbsp" .$row['tiropita']."&nbsp&nbspΧορτόπιτα&nbsp" .$row['xortopita']."&nbsp&nbspΚουλούρι&nbsp" .$row['koulouri']."&nbsp&nbspΤοστ&nbsp" 
        .$row['tost']."&nbsp&nbspΚέικ&nbsp" .$row['keik']."&nbsp&nbspΣυντεταγμένη&nbsp" .$row['location_long']. "&nbsp&nbspΣυντετμημένη&nbsp" .$row['location_lat']. "<br>" ;
    }
} else {
    echo "0 results";
} 

$sql = "SELECT * FROM delivery";
$result1 = mysqli_query($db, $sql);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
        echo "<u>Διανομέας</u>:&nbsp " . $row['username'].  "&nbsp&nbsp<u>Διαθεσιμότητα</u>:&nbsp" .$row['availabillity']. "<br>" ;
    }
} else {
    echo "0 results";
} 
?>


