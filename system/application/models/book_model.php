<?php
class Book_model extends Model {

    function Book_model()
    {
        parent::Model();
		$this->load->helper('url');
    }
	
	
	
	function search()
	{
		if($this->input->post('cat') == 'books')
		{
			$category = $this->input->post('cat');
			$searchkey = $this->input->post('searchkey');
			
			
			$searchvalue = $this->input->post('searchvalue');
			
			
			$this->db->select();
			$this->db->group_by('title');
			$this->db->where('category',$category);
			
			$words  = explode(" ", $searchvalue);
			 //$total=count($words);
			//print_r($words);
			foreach($words as  $word){
					$this->db->or_like($searchkey,$word);
			}
			
			//$this->db->or_like($searchkey,$searchvalue);
			
			$query = $this->db->get('books');
			return $query->result();
		}
		if($this->input->post('cat') == 'e-books')
		{
			
			$searchvalue = $this->input->post('searchvalue');
			
			$this->db->select();
			//$this->db->like('ebooks',$searchvalue);
			$words  = explode(" ", $searchvalue);
			 //$total=count($words);
			//print_r($words);
			foreach($words as  $word){
					$this->db->or_like("ebooks",$word);
			}
			$query = $this->db->get('ebooks');
			return $query->result();
		}
	}
	
	function select_book($uri)
	{
		$this->db->select();
		$this->db->where('id', $uri);
		$query = $this->db->get('books');
		return $query->result();
	
	}
	
	
	
	function check_user_account()
	{
		
			$user_id=$this->input->post('username');
		
			$password=$this->input->post('password');
			
			$this->db->select("name");
			$this->db->where('id_number',$user_id);
			$this->db->where('password',$password);
			
			$query = $this->db->get('members');
			
				if ($query->num_rows() > 0)
				{
				 	$row = $query->row();
					$name = $row->name;
					$log_data = array('username' => $name,'logged_in' => TRUE);
				    return $log_data;
			    }
			    else
			    {
				    return false;
			    }
		
				
     }
	
	function get_user_id()
	{
		$usename=$this->session->userdata('username');
		
		$this->db->select('id_number');
		$this->db->like('name',$usename);
		$query = $this->db->get('members');
		if ($query->num_rows() > 0)
		{
		   $row = $query->row(); 
		
		   return $row->id_number;
		   
		} 

		
	}
	
	function booking_insert($data)
	{
		//echo $data['user_id'];
		//echo $data['book_id'];
		$sysdate = date("Y-m-d H:i:m");
		$ins = array(	'user_id'		=> $data['user_id'],
						'book_id'		=> $data['book_id'],
						'booking_date' 	=> $sysdate,
						'status' 		=>'1',
						'fine_update'	=>$sysdate
					);
		$this->db->insert('booking',$ins);
	
	}
	
	function all_book($uri)
	{
		$this->db->select('title');
		$this->db->where('id', $uri);
		$query = $this->db->get('books');
		$row = $query->row();
		
		$this->db->select();
		$this->db->like('title', $row->title);
		$query = $this->db->get('books');
		return $query->result();
		
	}
function booking_select1($id){
		$this->db->trans_start();
		$this->db->where('serial',$id);
		$this->db->delete('booking');
		$this->db->trans_complete(); 
		
}	


function booking_date(){
		$this->db->trans_start();
		$this->db->select('serial,booking_date,status');
		$this->db->where('status','1');
		$query = $this->db->get('booking');
		//echo $this->db->last_query();
		$rows=$query->result();
		//print_r($rows);
		$serial=array();
		$booking_date=array();
		$status=array();
			foreach($rows as $name){
				$serial[]=$name->serial;
				$booking_date[]=$name->booking_date;
				$status[]=$name->status;
			}
		 $diff['serial']=$serial;
		 $diff['booking_date']=$booking_date;
		 $diff['status']=$status;
		 //print_r($diff);
		 return $diff;
		 
		$this->db->trans_complete(); 
		
}	

function fine_date1(){
		$this->db->trans_start();
		$this->db->select('serial,booking_date,status,fine_update');
		$this->db->where('status','2');
		$this->db->order_by("serial");
		$query = $this->db->get('booking');
		//echo $this->db->last_query();
		return $rows=$query->result();
		//print_r($rows);
	/*	$serial=array();
		$booking_date=array();
		$status=array();
			foreach($rows as $name){
				$serial[]=$name->serial;
				$booking_date[]=$name->booking_date;
				$status[]=$name->status;
			}
		 $fine['serial']=$serial;
		 $fine['booking_date']=$booking_date;
		 $fine['status']=$status;
		 return $fine;
		$this->db->trans_complete();*/ 
		
}	



function booking_fine($id){
		
		$this->db->select('fine');
		$this->db->where('serial',$id);
		$query = $this->db->get('booking');
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $fine = $row->fine;
		} 
	
		$total = $fine + 5;
		
		$sysdate = date("Y-m-d H:i:s");
		
		$data = array(
				'fine'	=>$total,
				'fine_update' => $sysdate
		);
		$this->db->where('serial',$id);
		$this->db->update('booking',$data);
		
}	




/***************...........NOT USE............***************/	
/*function search_users(){
	$this->db->trans_start();
		$userName=$this->input->post('username');
		$u_id=$this->input->post('usernameid');
		$data = array(
					  'user_name'=>$userName,
					  'user_id'=>$u_id
					  );
		
		$this->db->select('users.user_id,users.user_name,booking.*');
		$this->db->join('booking','booking.user_id=users.user_id','inner');
		if(!empty($userName))
			$this->db->where("user_name",$userName);
		if(!empty($u_id))
			$this->db->where("user_id",$u_id);
		$query = $this->db->get('users');
		//echo $this->db->last_query();
		$rows=$query->result();
		//print_r($rows);
			$u_id=array();
			$username=array();
			$book_id=array();
			$booking_date=array();
			$release_date=array();
			$fine=array();
			$status=array();
			
			foreach($rows as $name){
			    $u_id[]=$name->user_id;
				$username[]=$name->user_name;
				$book_id[]=$name->book_id;
				$booking_date[]=$name->booking_date;
				$release_date[]=$name->release_date;
				$fine[]=$name->fine;
				$status[]=$name->status;
				
			}
		  $field['user_id']=$u_id;
		  $field['user_name']=$username;
		  $field['book_id']=$book_id;
		  $field['booking_date']=$booking_date;
		  $field['release_date']=$release_date;
		  $field['fine']=$fine;
		  $field['status']=$status;
		  //print_r($field);
		  $this->db->trans_complete(); 
		  return $field;			  
					  
	}*/

function row_count(){
	$totalRow=0;
		if(isset($_POST['username']) || isset($_POST['usernameid'])){
		//$propertyfor=$this->input->post('fpropertyfor');
			$userName=$this->input->post('username');
			$u_id=$this->input->post('usernameid');
			
			$sessiondata = array(
					   'user_name'=>$userName,
					  	'user_id'=>$u_id
					 );
	
			$this->session->set_userdata($sessiondata);
		}else{
			$propertytype=$this->session->userdata('user_name');
			$state=$this->session->userdata('user_id');
			
		}
		$this->db->select('users.user_id,users.user_name,booking.*');
		$this->db->join('booking','booking.user_id=users.user_id','inner');
		if(!empty($userName))
			$this->db->where("user_name",$userName);
		if(!empty($u_id))
			$this->db->where("user_id",$u_id);
		$this->db->from('users');
		$totalRow=$this->db->count_all_results();
		return  $totalRow;
	}


function search_users($startp=0,$endp=0){
		$this->load->helper('array');
		$this->db->trans_start();
		$id=$this->input->post('id');
		$this->db->select('users.user_id,users.user_name,booking.*');
		$this->db->join('booking','booking.user_id=users.user_id','inner');
		$this->db->limit($endp,$startp);
		if(!empty($id))
		$this->db->where("users.user_id",$id);
		$query = $this->db->get('users');
		//echo $this->db->last_query();
		$rows=$query->result();
		
		//print_r($rows);
			$u_id=array();
			$username=array();
			$book_id=array();
			$booking_date=array();
			$release_date=array();
			$fine=array();
			$status=array();
			
			foreach($rows as $name){
			    $u_id[]=$name->user_id;
				$username[]=$name->user_name;
				$book_id[]=$name->book_id;
				$booking_date[]=$name->booking_date;
				$release_date[]=$name->release_date;
				$fine[]=$name->fine;
				$status[]=$name->status;
				
			}
		  $field1['user_id']=$u_id;
		  $field1['user_name']=$username;
		  $field1['book_id']=$book_id;
		  $field1['booking_date']=$booking_date;
		  $field1['release_date']=$release_date;
		  $field1['fine']=$fine;
		  $field1['status']=$status;
		  //print_r($field);
		  $this->db->trans_complete(); 
		  //print_r($field);
		  return $field1;			
	}
	
	
	function update_ebook($book_name)
	 {
		$this->db->select('total_download');
		$this->db->where('ebook_file',$book_name);
		$query = $this->db->get('ebooks');
		//$this->db->where('id',$id1);
		foreach ($query->result_array() as $row)
			{
    		$row['total_download'];
			}
		$total = $row['total_download']+1;
		
		$data = array(
				'total_download'	=>$total
		);
		
		
		$this->db->where('ebook_file',$book_name);
		$this->db->update('ebooks',$data);
	}
	
	function check_profile()
	{
		
	}
	
	 function selectMember()//all member those who have fine
	{

            $this->db->select ( 'user_id,book_id,booking_date,fine' );
            $this->db->from ( 'booking' );
            $this->db->where('fine > 0');
            $resultSet = $this->db->get ();
            return $resultSet->result ();
	}


  function searchMember($user_id)//member searching who have fine
	{



            $this->db->select ( '*' );
            $this->db->from ( 'booking' );
            $this->db->where ( 'user_id',$user_id);
            $resultSet = $this->db->get ();
            return $resultSet->result ();
	}
  function  mailUser($user_id)//finding email from user id
  {
      $this->db->select('email');
      $this->db->from('members');
      $this->db->where('id_number',$user_id);
      $resultSet = $this->db->get ();
      $row = $resultSet->row();
       $email = $row->email;
      $this->sendMail($email);

  }
 function sendMail($email)
  {

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($email);
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        echo $this->email->print_debugger();

  }


function alarm()
{
    $this->db->select('COUNT(*) AS status');
    $this->db->from('booking');
    $this->db->where('status',1);
    $resultSet = $this->db->get();
    return $resultSet->result ();
}


	
	
}
	
?>