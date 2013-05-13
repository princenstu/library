<?php

class Library extends Controller {

	function Library()
	{
		parent::Controller();
		ini_set('date.timezone', 'Asia/Dacca');
		$this->load->model('book_model');	
		$this->load->helper('url');
	}
	function index()
	{
		$data['title'] = "Welcome to Library";
		$data['main'] = 'mist_lib';
		$this->load->view('mist',$data);
		
		//This function is used for late fee calculation
		$this->fine();
	}
	
	function search_all()
	{
		$data['title'] = "Welcome to Search option";
		$data['main'] = 'search';
		$this->load->view('mist',$data);
	}
	
	function facilities()
	{
		$data['title'] = "Library Facilities";
		$data['main'] = 'facilities';
		$this->load->view('mist',$data);
	}
	
	function hours()
	{
		$data['title'] = "Library Operating Hours";
		$data['main'] = 'Operating_hours';
		$this->load->view('mist',$data);
	}
	
	function rules()
	{
		$data['title'] = "Library Rules & Regulation";
		$data['main'] = 'rules_regulation';
		$this->load->view('mist',$data);
	}
	
		
	
	function search()
	{
		$data['values'] = $this->book_model->search();
		$data['title'] = "Search results";
		$data['main'] = 'search';
		//print_r($data);
		$this->load->view('mist',$data);
	}
	
/*	function update_ebooks($id1)
	{
	$this->load->helper('url');
	$this->load->model('book_model');
	$this->book_model->update_ebook($id1);
	//$this->load->view('search',$data);
	$this->search();
	'<a href="<?php echo base_url(); ?>uploads/ebooks/<?php echo $row->ebook_file; ?>" ></a>'
	//echo ("uploads/ebooks/ebook_file;");
	}*/
	
	function download()
	{
	/*if(!$this->session->userdata('logged_in')==true){
			header("Location: ".$this->config->site_url()."/library/search.html");
			//$this->load->view(msg);
			//echo"hello";
		}
	else
	{*/
		$this->load->model('book_model');
		$this->book_model->update_ebook($this->uri->segment(3));
		//echo $total;
		//$id1=1;
		$data['uri']= $this->uri->segment(3);
		//print_r($data);
		
		//$total=$this->input->get('total_download');
		//echo $total_download=$total+1;
		$this->load->view("download",$data);
		//}
	}
	
	function details()
	{
		if($this->input->post('book_id') != '')
		{
			
			$data['user_id'] = $this->input->post('user_id');
			$data['book_id'] = $this->input->post('book_id');
			$this->book_model->booking_insert($data);
			$data['bdeatails'] = $this->book_model->select_book($this->input->post('book_id'));
			$data['all_book'] = $this->book_model->all_book($this->input->post('book_id')); 
		}
		else
		{
			$data['bdeatails'] = $this->book_model->select_book($this->uri->segment(3));
			$data['all_book'] = $this->book_model->all_book($this->uri->segment(3)); 
		}
		$data['user_id'] = $this->book_model->get_user_id(); 
		$data['title'] = "Book Details";
		$data['main'] = 'details';
		$this->load->view('mist',$data);
	}
	
	/*function reset_booking_table()
	{
		$this->load->model('book_model');
		$data=$this->book_model->booking_select1();
		redirect("admin/request");

	}*/
	
	function reset_booking_diff()
	{
		ini_set('date.timezone', 'Asia/Dacca');
		$this->load->model('book_model');
		$data=$this->book_model->booking_date();
		//print_r($data);
		//print_r($data['status']);
				if(!empty($data['status'])){
				
					if(sizeof($data['status'])>0){
						for($i=0; $i<sizeof($data['status']);$i++){	
					 		//echo $data['booking_date'][$i]."<br>";
							$id=$data['serial'][$i];
							$date1=$data['booking_date'][$i];
							$date2 = date('Y-m-d H:i:s'); 
							$diff = abs(strtotime($date2) - strtotime($date1)); 
							$years   = floor($diff / (365*60*60*24)); 
							$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
							$days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
							$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
							$minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
							$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60)); 
							//printf("%d years, %d months, %d days, %d hours, %d minuts\n, %d seconds\n", $years, $months, $days, $hours, $minuts, $seconds); 
							//printf("%d years, %d months, %d days, %d hours, %d minuts\n, %d seconds\n", $years, $months, $days, $hours, $minuts, $seconds)."<br>"; 
							//echo $minuts."->".$id."<br>";
							//$num;
							if($minuts>2){
								$this->load->model('book_model');
								$data=$this->book_model->booking_select1($id);
								redirect("admin/request");
							}
						}
					}
				}
		//echo $id;
	}
	
	
		function fine()	{
			ini_set('date.timezone', 'Asia/Dacca');
			$this->load->model('book_model');
			$data=$this->book_model->fine_date1();
			//print_r($data);
			//print_r($data);
				
			foreach( $data as $rows)
			{
				//echo $rows->serial."----";
				//echo $rows->booking_date."<br>";
				$id = $rows->serial;
				$booked_date = $rows->booking_date;
				$date = new DateTime($booked_date);
				$booked_date =  $date->format('m-d-Y');
				
				
				$sysdate = date('Y-m-d'); 
				$date = new DateTime($sysdate);
				$sysdate =  $date->format('m-d-Y');
				
				
				//$date1="09-11-2004";
				//$date2="09-11-2005";
				
				$diff =  $this->dateDiff("-", $sysdate, $booked_date);
				
			
				if($diff > 7){
				
						//echo $diff."<br>";
						$fine_update = $rows->fine_update;
						
						$date = new DateTime($fine_update);
						$fine_update =  $date->format('m-d-Y');
						
						$diff_fine_update =  $this->dateDiff("-", $sysdate, $fine_update);
						//echo $diff_fine_update."<br>"; 
						
						if($diff_fine_update > 0)
						{
							//echo $id."---".$diff_fine_update."<br>";
							$this->load->model('book_model');
							$data=$this->book_model->booking_fine($id);
						}
				}
				
				
			}
			/*	$diff = abs(strtotime($sysdate) - strtotime($booked_date)); 
				$years   = floor($diff / (365*60*60*24)); 
				$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
				$days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
				$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
				$minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
				$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));*/
		}
		
	function dateDiff($dformat, $endDate, $beginDate)
	{
		$date_parts1=explode($dformat, $beginDate);
		$date_parts2=explode($dformat, $endDate);
		$start_date=gregoriantojd($date_parts1[0], $date_parts1[1], $date_parts1[2]);
		$end_date=gregoriantojd($date_parts2[0], $date_parts2[1], $date_parts2[2]);
		return $end_date - $start_date;
	}
	
	/*function total_fine()	{
		//ini_set('date.timezone', 'Asia/Dacca');
		$this->load->model('book_model');
		$data=$this->book_model->fine_total();
		
		if(!empty($data['status'])){
				
					if(sizeof($data['status'])>0){
						for($i=0; $i<sizeof($data['status']);$i++){	
					 		echo $data['booking_date'][$i]."<br>";
							echo $id=$data['serial'][$i];
							$this->load->model('book_model');
							$data1=$this->book_model->fine_calculate($id);
						}
					}
				}
	}
	*/
	
	
	
	function login_process()
	{
		
		
		
		$data =$this->book_model->check_user_account();
		
		if ($data['logged_in']==true)
		{
			$this->session->set_userdata($data);
		}
		redirect();
		
		
	}
	
	function profile()
	{
		if ($this->session->userdata('logged_in')==true)
		{
			//$data =$this->book_model->check_profile();
			//print_r($data);
			$data['username'] = $this->session->userdata('username');
			$data['title'] = "Member's profile";
			$data['main'] = 'profile';
			$this->load->view('mist',$data);
				
		}
		else
		{
			$data['msg'] =  "Please login to view profile!";
			$data['title'] = "Member's profile";
			$data['main'] = 'profile';
			$this->load->view('mist',$data);
		}
		
	}
	
	
	
	function logout()
	{
		$session_data = array('username' => $this->session->userdata('username'),'logged_in' => $this->session->userdata('logged_in'));
		//$this->session->sess_destroy();
		$this->session->unset_userdata($session_data);
		redirect('');
	}


          public function searchMember()
        {
            $data=array();
            $this->load->model('book_model');
           // $user_id= $this->session->userdata('user_id');
            $user_id=$this->input->post('user_id',true);
            //echo '---'.$search_text;
            //exit();
            $data['result'] =$this->book_model->searchMember($user_id);
            $data['main'] = $this->load->view('admin/view_fine',$data,true);
             $this->load->view('admin/mist',$data);
        }




        

}



/* End of file Library.php */
/* Location: ./system/application/controllers/Library.php */