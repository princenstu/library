<h3> Member's profile</h3>
<?php
if(isset($msg))
{
	echo "<b style='color:red;'>".$msg."</b>";
}
else
{
		$this->db->select('');
		$this->db->like('name',$username);
		$query = $this->db->get('members');
		?>
		<div>
		<div style="width:60%; float:left;">
		<table border="0">
		<?php
		foreach($query->result() as $rows)
		{
			?>
			
			<tr><td>Name</td><td>:</td><td><?php echo $rows->name; ?>	</td></tr>
			<tr><td>Category</td><td>:</td><td><?php echo $rows->category; ?>	</td></tr>
			<tr><td>Rank</td><td>:</td><td><?php echo $rows->rank; ?>	</td></tr>
			<tr><td>Address</td><td>:</td><td><?php echo $rows->address; ?>	</td></tr>
			<tr><td>E-mail</td><td>:</td><td><?php echo $rows->email; ?>	</td></tr>
			<tr><td>Mobile</td><td>:</td><td><?php echo $rows->mobile; ?>	</td></tr>
			<tr><td>ID Number</td><td>:</td><td><?php echo $rows->id_number; ?>	</td></tr>
			<tr><td>Level</td><td>:</td><td><?php echo $rows->level; ?>	</td></tr>
						
			<?php
			$image_loc = $rows->image;
			
		}
		
		?>
		</table>
		</div>
		<div style="float:left; padding-left:20px;">
		<img src="<?php echo $image_loc; ?>" alt="Member image" />
		</div>
		</div>
		<?php
	
	
}
?>