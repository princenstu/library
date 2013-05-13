<?php

class Library extends Controller {

	function Library()
	{
		parent::Controller();
		ini_set('date.timezone', 'Asia/Dacca');
		$this->load->model('book_model');	
	}
	function index()
	{
		$data['title'] = "Welcome to Search option";
		$data['main'] = 'search';
		$this->load->view('mist',$data);
	}
	function add_books()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		
		$this->load->library('upload', $config);
		
		
		
		$data['title'] 			= "Add book details";
		$data['main'] 			= "add_book_v";
		if ($this->input->post('check'))
		{
			$data['check']=$this->input->post('check');
		}
		
		$rules['author']		= "required";
		$rules['subject']		= "required";
		$rules['title']			= "required";
		$rules['accession_no']  = "required|callback_accession_no_check";
		$rules['location']		= "required";
		$rules['publisher']		= "required";
		$rules['keyword']		= "required";
		$rules['isbn']			= "required";
		$rules['call_no']		= "required";
		$rules['edition']		= "required";
		$rules['description']	= "required";
		$rules['price']			= "required";
				
		$this->validation->set_rules($rules);
		
		$fields['author']		= "Author";
		$fields['subject']		= "Subject";
		$fields['title']		= "Title";
		$fields['accession_no']	= "Accession No.";
		$fields['location']		= "Location";
		$fields['publisher']	= "Publisher";
		$fields['keyword']		= "Keyword";
		$fields['isbn']			= "ISBN";
		$fields['call_no']		= "Call No.";
		$fields['edition']		= "Edition";
		$fields['description']	= "Description";
		$fields['price']		= "Price";
			
		$this->validation->set_fields($fields);
			
		if ($this->validation->run() == FALSE)
		{
			$this->load->view('mist',$data);
		}
		else
		{
			
			if ( ! $this->upload->do_upload())
			{
				$data['error'] = $this->upload->display_errors();
				
				$this->load->view('mist',$data);
			}	
			else
			{
				$data['upload_data'] = $this->upload->data();
				
				$filepath = 'uploads/'.$_FILES["userfile"]["name"];
				$filename = $_FILES["userfile"]["name"];
				
				$config['image_library'] = 'gd2';
				$config['source_image'] = $filepath;
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 75;
				$config['height'] = 50;
				
				$this->load->library('image_lib', $config);
				
				$this->image_lib->resize();
				@unlink($filepath);
				
				$this->load->view('mist',$data);
			}
			$this->book_model->insert_book($filename);
			echo "Book details added successfully!";
			
		}
		
	}
		
	function accession_no_check($str)
	{
		$value=$this->book_model->accession_no();
		
		if ($value==1)
		{
			$this->validation->set_message('accession_no_check', 'The %s field can not be duplicate ');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	function ziptest()
	{
		$data['title'] = "Zip and Download Test";
		$data['main'] = 'search';
		
		$this->load->library('zip');
		$name = 'mydata1.txt';
		$data = 'A Data String!';
		
		$this->zip->add_data($name, $data);
		
		// Write the zip file to a folder on your server. Name it "my_backup.zip"
		$this->zip->archive('uploads/my_backup.zip');
		
		// Download the file to your desktop. Name it "my_backup.zip"
		$this->zip->download('my_backup.zip'); 
		$this->load->view('mist',$data);
	}
}

/* End of file Library.php */
/* Location: ./system/application/controllers/Library.php */