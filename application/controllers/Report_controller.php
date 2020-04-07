<?php  
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 
 class Report_controller extends CI_Controller {  

      //functions  
  

      public function report_employed()  
      {  
           $data['report_employed'] = $this->Report_model->report_employed();
            
           $this->load->view('templates/headerDB');
           $this->load->view("report/employed", $data);  
           $this->load->view('templates/footerDB');
          

      }




     
 }
