<?php
class Admin_model extends Model {

    function Admin_model()
    {
        parent::Model();
    }
	
	function check_user_account()
	{
		
			$usename=$this->input->post('username');
		
			$password=$this->input->post('password');
			
			$this->db->select();
			$this->db->where('user_name',$usename);
			$this->db->where('password',$password);
			
			$query = $this->db->get('users');
			
				if ($query->num_rows() > 0)
				{
				 	$log_data = array('admin' => $usename,'logged_in' => TRUE);
				    return $log_data;
			    }
			    else
			    {
				    return false;
			    }
		
				
     }
	
	
	
	
}
	
?>