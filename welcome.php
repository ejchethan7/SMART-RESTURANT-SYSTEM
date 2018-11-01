<?php
$waterQ = $_POST['waterQ'];
$gCornPizzaQty = $_POST['gCornPizzaQty'];
$plpq = $_POST['plpq'];
$vsq = $_POST['vsq'];
$vbq = $_POST['vbq'];
$bcq = $_POST['bcq'];
$ccq = $_POST['ccq'];
$dbcq = $_POST['dbcq'];
$jq = $_POST['jq'];


 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "welcome";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into menu (waterQ, gCornPizzaQty,plpq, vsq, vbq, bcq, ccq, dbcq, jq) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
    
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("iiiiiiiii", $waterQ, $gCornPizzaQty, $plpq, $vsq, $vbq, $bcq, $ccq, $dbcq, $jq);
      $stmt->execute();
      echo "Ua Order is passed";
     } else {
      echo "wait";
     }
     $stmt->close();
     $conn->close();
    }

?>
