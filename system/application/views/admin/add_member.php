<html>
<head>
</head>
<body>
	<div>
			<h3>Membership Form</h3>
			<?php if(isset($error))echo "<b style='color:red;'>".$error['error']."</b>";?>
			<table border="0">
			<?php echo form_open_multipart('admin/add_member_process')?>
			<tr><td style="width:80px;">Name</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'full_name',
              'size'        => '40'
               ); 
			 echo form_input($data);?>
			</td></tr>
			<tr><td>Category</td><td>:</td><td>
			<?php $data = array(
              'Student'	=> 'Student',
              'Staff'   => 'Staff'
               ); 
			 echo form_dropdown('cat',$data);?>
			</td></tr>
			<tr><td>Rank</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'rank',
              'size'        => '40'
               ); 
			 echo form_input($data);?>
			 </td></tr>
			 <tr><td>Address</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'address',
              'size'        => '40'
               ); 
			 echo form_input($data);?>
			 </td></tr>
			 <tr><td>E-mail</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'email',
              'size'        => '40'
               ); 
			 echo form_input($data);?>
			 </td></tr>
			 <tr><td>Mobile</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'mob',
              'size'        => '40'
               ); 
			 echo form_input($data);?>
			 </td></tr>
			 <tr><td>Image</td><td>:</td><td>
				<input type="file" name="userfile" size="20" />(Note: P.P Size)
			 </td></tr>
			<tr><td>ID Number</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'user_id',
              'size'        => '40'
               ); 
			 echo form_input($data);?>
			 </td></tr>
			<tr><td>Password</td><td>:</td><td>
			<?php $data = array(
              'name'        => 'password',
              'size'        => '40'
               ); 
			 echo form_password($data);?>
			</td></tr>
			<tr><td>Level</td><td>:</td><td>
			<?php $data = array(
              '0'        => 'Member',
              '1'        => 'Admin'
               ); 
			 echo form_dropdown('level',$data);?>
			</td></tr>
			<tr><td></td><td></td><td><?php echo form_submit('submit', 'Submit'); ?></td></tr>
			<?php echo form_close(); ?>
			</table>
			
   </div>
</body>
</html>