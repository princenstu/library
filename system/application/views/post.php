<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$today = date("m/d/Y");//send output back to page.echo "Hello $FirstName $LastName. Todays date is $today.";?>
<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$today = date("m/d/Y H:i:s");
//send output back to page.
echo "Hello $FirstName $LastName. Todays date is $today.";
?>
