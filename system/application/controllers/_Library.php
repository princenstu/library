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
		
		$config['image_library'] = 'gd2';
		$config['source_image'] ='C:\Users\Public\Pictures\Sample Pictures\Tulips.jpg'; //$_FILES["file"]["tmp_name"];
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 80;
		$config['height'] = 104;
		
		$this->load->library('image_lib', $config);
		
		$this->image_lib->resize();
		
		//echo "Image file: ".$this->input->post('image');

		$data['title'] 			= "Add book details";
		$data['main'] 			= "add_book_v";
		
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
			
			
				$this->load->view('mist',$data);
			
			//$this->book_model->insert_book();
			//echo "Book details added successfully!";
			
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
}

/* End of file Library.php */
/* Location: ./system/application/controllers/Library.php */