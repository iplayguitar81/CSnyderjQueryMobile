<?php


print_r( $_GET);
// sweet
$qty = $_GET['qty'];
$pids = $_GET['pid'];


print_r($qty );
print_r($pids);


$form = <<<END_OF_FORM

<form method=post action="purchase.php?">
Name: <input type="text" name="name" /> <br/>
Address: <input type="address" name="address" /><br/>
<input type="submit" name="submit" value="Submit Order"/>
</form>


END_OF_FORM;


echo json_encode($form);

//$cart_array = json_decode($_REQUEST['cart_array']);



$cust=$_REQUEST['cust'];
$cust=json_decode($cust,true);
$cust=print_r($cust, true);

$cust2=$_REQUEST['cust2'];
$cust2=json_decode($cust2,true);
$cust2=print_r($cust2, true);

$cust3=$_REQUEST['cust3'];
$cust3=json_decode($cust3,true);
$cust3=print_r($cust3, true);


$cust4=$_REQUEST['cust4'];
$cust4=json_decode($cust4,true);
$cust4=print_r($cust4, true);

$cust5=$_REQUEST['cust5'];
$cust5=json_decode($cust5,true);
$cust5=print_r($cust5, true);



$test_message= "Hello CheckEngineFree.com webmaster!  Here is an invalid data notification from one of our visitors!\n Reported Invalid Info:\n  $cust \n\n Safeguards:\n Just in case these people reported blank data.... here's the address info again:\n $cust2\n$cust3\nTheir Latitude: $cust4 \n Their Longitude: $cust5";


$test_message2='<html>

<body>

<h1>Ringos Mobile Pizza Order</h1>

<p>Customer Info:</p> <p> Poop:'. $cust .'</p>







</body>

</html>';


$submit=$_POST['submit'];


$from ="woody@checkenginefree.com";
$to= "bigbother81@gmail.com";

//$to2= &#105; &#112;&#108;&#97;&#121;&#103;&#117;&#105;&#116;

$subject="Invalid Info Notification!";
$message2=$test_message ;
$headers= "From: $from";

mail( $to, $subject, $message2, $headers );



?>
