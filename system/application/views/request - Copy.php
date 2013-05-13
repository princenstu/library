<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/dpstyles.css">
<title></title>


</head>

<body>

<?php

//print_r($request);
?>
<table border="1">
<th>User ID</th><th>Book ID</th><th>Booking Date</th><th>Action</th>
<?php
foreach($request as $row)
{
	?>
	<tr>
	<td><?php echo $row->user_id; ?></td>
	<td><?php echo $row->book_id; ?></td>
	<td><?php echo $row->booking_date; ?></td>
	<td> 
	<form action="" method="post">
	<input type="hidden" name="user_id" value="<?php echo $row->user_id; ?>"  />
	<input type="hidden" name="user_id" value="<?php echo $row->book_id; ?>"  />
	<input type="submit" name="accept" value="Accept" />
	</form>
	
	</td>
	</tr>
	<?php
}

?>

</table>
</body>
</html>