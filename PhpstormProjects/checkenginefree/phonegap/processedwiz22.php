<?php


print_r( $_GET);
// sweet



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
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];

$cust=json_decode($cust,true);
$email=json_decode($email,true);
$name=json_decode($name,true);


//$cust=print_r($cust, true);
//$email=print_r($email, true);







//where the magic happens
$test_message= "Hello CheckEngineFree.com Webmaster!
  Here is a question, comment or concern from one of our visitors!\n
   Customer Info:\n

     Name: $name\n
    Email: $email\n
    Comment: $cust\n
    ";





$submit=$_POST['submit'];


$from ="woody@checkenginefree.com";
$to= "bigbother81@gmail.com";
$subject="Contact Notification!";
$message2=$test_message ;



$headers= "From: $from";

mail( $to, $subject, $message2, $headers );



?>
