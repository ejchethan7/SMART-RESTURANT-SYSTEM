<?php
$img = imagegrabscreen();
$name = rand(1,100);
$name = $name.time();
imagepng($img, $name.'.png');	

echo "Your Order is Passed"
?>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="js/bootstrap.min.js"></script>
      <script src="jquery.min.js"></script>
	  
      <form id="Payment Mode" action="payment.html">
<td> <style= "text-align: center;"> </td>  
					 <td>
					 <button type="submit" class="btn btn-danger">Payment Mode</button></td>
					 </form>
					 </head>
					 
					 </html>
					 
					 
