<html>
<head>
</head>
<body>
	<div>
		
			<?php echo form_open('library/login_process')?>
			Enter ID: <?php echo form_input('username',$this->input->post('username'));?>
			Password: <?php echo form_password('password'),$this->input->post('password'); ?>
			<?php echo form_submit('login', 'Login'); ?>
			
			<?php echo form_close(); ?>
   </div>
</body>
</html>
