<?php
class Emp extends CI_Controller
{
    
    public function demo()
    {
        $this->load->database();
        $this->load->model('empmodel');
      $this->load->view('empview');
   
      if($this->input->post('save'))
      {
          $fname=$this->input->post('fname');
          $lname=$this->input->post('lname');
          $this->empmodel->savedata($fname,$lname);
          echo "record inserted successfully";
      }
    } 
}

?>