<?php

class Search_controller extends Controller {

	

        function searchMember()
        {
          $data=array();
            $this->load->model('book_model');
            $user_id=$this->input->post('user_id',true);
            $data['result'] =$this->book_model->searchMember($user_id);
            $data['title'] ="fine report";
            $data['main'] = 'admin/view_fine';
            $this->load->view('admin/mist',$data);
                 
        }

        function mailUser($user_id)
        {
             $data= array();
             $this->load->model('book_model');
             $data['result'] =$this->book_model->mailUser($user_id);
          
             }


function alarm()
{
   $data=array();
   $this->load->model('book_model');
   $data['result']=$this->book_model->alarm();
   $data['title']="alarm";
   $data['main']='admin/viewalarm';
   $this->load->view('admin/mist',$data);

}






}
?>