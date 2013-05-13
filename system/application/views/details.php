<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">




<script type="text/javascript" src="<?php echo base_url();?>system/application/views/javascript/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>system/application/views/javascript/ddaccordion.js"></script>


<style type="text/css">

.mypets{ /*header of 1st demo*/
cursor: hand;
cursor: pointer;
padding: 2px 5px;
border: 1px solid gray;
background: #E1E1E1;
}

.openpet{ /*class added to contents of 1st demo when they are open*/
background: yellow;
}

.technology{ /*header of 2nd demo*/
cursor: hand;
cursor: pointer;
font: bold 14px Verdana;
margin: 10px 0;
}


.openlanguage{ /*class added to contents of 2nd demo when they are open*/
color: green;
}

.closedlanguage{ /*class added to contents of 2nd demo when they are closed*/
color: red;
}

</style>

<script type="text/javascript">

//Initialize first demo:
ddaccordion.init({
	headerclass: "mypets", //Shared CSS class name of headers group
	contentclass: "thepet", //Shared CSS class name of contents group
	revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", "openpet"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

//Initialize 2nd demo:
ddaccordion.init({
	headerclass: "technology", //Shared CSS class name of headers group
	contentclass: "thelanguage", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: false, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: false, //persist state of opened contents within browser session?
	toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["prefix", "<img src='<?php echo base_url();?>system/application/views/images/plus.gif' style='width:13px; height:13px' /> ", "<img src='<?php echo base_url();?>system/application/views/images/minus.gif' style='width:13px; height:13px' /> "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})

</script>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php
//print_r($all_book);
foreach($bdeatails as $row)
{
?>
	
	<div style="width:650px; height: auto; margin:0 auto; overflow:hidden;">
	
		<div style="width:650px; height:auto; margin:0 auto; overflow:hidden;">
		
			<div style="width:550px; height:auto; float:left;  font-family:'Trebuchet MS',Helvetica,Geneva,Arial,sans-serif;">
			
			<font style="color:#505587; font-size: 18px;;"> <?php echo $row->title; ?></font><br />
			
			<font style="color:#505587; font-size: 12px;"><?php echo $row->author; ?><br />
<?php echo $row->publisher; ?> </font>
			
			<br/><br />
			<table>
			
			<tr style="color:#606060; font-size: 15px;">
			<td>Subject </td><td>:</td>
			<td><?php echo $row->subject; ?></td>
			</tr>
			
			<tr style="color:#606060; font-size: 15px;">
			<td>Edition </td><td>:</td>
			<td><?php echo $row->edition; ?></td>
			</tr>
			
			<tr style="color:#606060; font-size: 15px;">
			<td>Description </td><td>:</td>
			<td><?php echo $row->description; ?></td>
			</tr>
			
			<tr style="color:#606060; font-size: 15px;">
			<td>Total Books </td><td>:</td>
			<td><?php echo $count = count($all_book);  echo "  Copies. ";?></td>
			</tr>
			
			</table>
		    </div>
			
			
			<div style="width:auto; height:auto; float:right; border:gray 3px solid;">
			<img src="<?php echo "uploads/".$row->image; ?>" alt="Image"  />
			
		    </div>
		
		</div>
		
		
		
	</div>
<?php } ?>

<div class="technology">All Available Books</div>
	<div align="center" class="thelanguage">
	
		<table border="0" cellpadding="10">
		<tr style="background-color:#D3DCE3; color:#0032F2"><th>ID</th><th>Facility</th><th>Accession No</th><th>ISBN</th><th>Location</th><th>Call No</th><th>Action</th></tr>
	
			<?php 
			$i = 0;
			foreach($all_book as $value)
			{
				if( $i%2 == 0)
				{
					?>
					<tr style="background-color:#E5E5E5;"> 
					<?php
				}
				else
				{
					?>
					<tr style="background-color:#D5D5D5;"> 
					<?php
				}
				?>
				
				
				<td > <?php echo $value->id;?></td>
				<!--<td style=" border-bottom:1px solid #000000;"> <?php //echo $value->title;?></td>-->
				<td > <?php echo $value->facility;?></td>
				<td > <?php echo $value->accession_no;?></td>
				<td > <?php echo $value->isbn;?></td>
				<td > <?php echo $value->location;?></td>
				<td > <?php echo $value->call_no;?></td>
				<td style="font-weight:bold;">
				
				<?php 
					if ($this->session->userdata('logged_in')==true)
					{
						$query = $this->db->query("SELECT * FROM booking WHERE book_id='$value->id'");
						$row = $query->row();
						//echo $row->status; 
	
						$query1 = $this->db->query("SELECT * FROM booking WHERE user_id='$user_id'");
						$row_num1 = $query1->num_rows();
						
						$row_num = $query->num_rows();
						if($row_num == 0)
						{
							if($row_num1 < 3)
							{
							?>
							<form action="" method="post">
							<input type="hidden" name="user_id" value="<?php echo $user_id; ?>"  />
							<input type="hidden" name="book_id" value="<?php echo $value->id; ?>" />
							<input type="submit" name="booking" value="Booking" />
							</form>
							
							<?php
							}
							else
							echo "Three items are booked";
						}
						else
						{
							if($row->status == 1)
							{
								echo "Request pending";
							}
							else
							echo "Issued";
						}
					}
					else
					{
						echo "Please login for booking";
					}
				
				?>
				</td>
				
				</tr>
				
			<?php $i++; } ?>
		</table>
			
	</div>
</div>
</body>
</html>


<?php
/*//print_r($bdeatails);
echo "<br>";

echo "<table border='1'>";
foreach($bdeatails as $row)
{
	echo "<tr><td><b>";	echo "Title  :"; echo "</td><td></b>";
	echo $row->title; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Subject  :"; echo "</td><td></b>";
	echo $row->subject; echo " </td></tr>";
	
	echo "<tr><td><b>";	echo "Author  :"; echo "</td><td></b>";
	echo $row->author; echo " </td></tr>";
	
	echo "<tr><td><b>";	echo "Accession No.  :"; echo "</td><td></b>";
	echo $row->accession_no; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Image  :"; echo "</td><td></b>";
	echo $row->image; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Location  :"; echo "</td><td></b>";
	echo $row->location; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Category  :"; echo "</td><td></b>";
	echo $row->category; echo " </td></tr>";
	
	echo "<tr><td><b>";	echo "Facility  :"; echo "</td><td></b>";
	echo $row->facility; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "ISBN  :"; echo "</td><td></b>";
	echo $row->isbn; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Call No.  :"; echo "</td><td></b>";
	echo $row->call_no; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Edition  :"; echo "</td><td></b>";
	echo $row->edition; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Description  :"; echo "</td><td></b>";
	echo $row->description; echo " </td></tr>";
	
	echo "<tr><td><b>"; echo "Price  :"; echo "</td><td></b>";
	echo $row->price; echo " </td></tr>";

}
echo "</table>";*/
?>