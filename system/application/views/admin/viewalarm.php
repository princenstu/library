<?php
header("Refresh:10;");
?>
<html>
<head>
<title></title>
 <style type="text/css">
.blinkytext {
     font-family: Arial, Helvetica, sans-serif;
     font-size: 36px;
     text-decoration: blink;
     font-style: normal;
     font-weight:bold;
     color:#996633;
 }
 </style>

</head>
<body>
<table border="1" cellpadding="10" align="center">
    
       <?php
       foreach($result as $value)
           {

           ?>
            <tr>
			
           <td>New request:</td><td><h1 class="blinkytext"><?php echo $value->status;?></h1></td><td><a href="<?php echo site_url(); ?>/admin/request">View details</a></td>
           
       </tr>

       <?php
           }
       ?></h1>
   </table>

</table>
</body>

