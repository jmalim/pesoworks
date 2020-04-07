<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Send_data_controller extends CI_Controller
{

  public function __construct()
  {
    //call CodeIgniter's default Constructor
    parent::__construct();

    //load database libray manually
    $this->load->database();

    //load Model
    $this->load->model('Senddata_model');
  }


  public function view_employers()
  {

    $data['establishment'] = $this->Fetchdata_model->fetchdata_employers();

    // var_dump($data['establishment']);
    $this->load->view('templates/headerDB');
    $this->load->view("pages/employers", $data);
    $this->load->view('templates/footerDB');
  }

  public function savedata()
  {
    //load registration view form
    $data['establishment'] = $this->Fetchdata_model->fetchdata_employers();
    $data['address'] = $this->Fetchdata_model->fetchdata_address();


    // var_dump($data['establishment']);
    $this->load->view('templates/headerDB');
    $this->load->view("pages/postajob", $data);
    $this->load->view('templates/footerDB');

    //Check submit button 
    if ($this->input->post('post')) {
      //get form's data and store in local varable
      $establishment_id = $this->input->post('companyname');
      $location = $this->input->post('location');
      $jobtitle = $this->input->post('jobtitle');
      $jobdetails = $this->input->post('jobdetails');
      $jobtype = $this->input->post('jobtype');
      $rate = $this->input->post('rate');
      $dateposted = $this->input->post('date');
      $post_status = $this->input->post('jobstatus');

      //call saverecords method of Hello_Model and pass variables as parameter
      $this->Senddata_model->post_job($jobtitle, $jobdetails, $establishment_id, $jobtype, $rate, $location, $dateposted, $post_status);
      echo "Records Saved Successfully";
    }
  }

  public function view_job()
  {
    $id = $this->input->post('jobpostingID');
  
    

    
    //load registration view form
    $data['jobpost'] = $this->Fetchdata_model->fetchdata_viewjobpost($id);
          $this->load->view('templates/headerDB');
          $this->load->view("pages/updatejob", $data);
          $this->load->view('templates/footerDB');

  }

  // public function dispdata()
	// {
	// $result['data']=$this->Hello_Model->displayrecords();
	// $this->load->view('display_records',$result);
	// }
	
	// public function deletedata()
	// {
	// $id=$this->input->get('id');
	// $this->Hello_Model->deleterecords($id);
	// redirect("Hello/dispdata");
	// }

  // public function updatedata()
	// {
	// $id=$this->input->get('jobpostingID');
	// $result['data']=$this->Hello_Model->displayrecordsById($id);
	// $this->load->view('update_records',$result);	
	
	// 	if($this->input->post('update'))
	// 	{
	// 	$n=$this->input->post('name');
	// 	$e=$this->input->post('email');
	// 	$m=$this->input->post('mobile');
	// 	$this->Hello_Model->updaterecords($n,$e,$m,$id);
	// 	redirect("Hello/dispdata");
	// 	}
  // }
  
  public function updatedata()
	{
	$id=$this->input->get('jobpostingID');
	$result['data']=$this->Fetchdata_Model->displayrecordsById($id);
  $this->load->view('templates/headerDB');
    $this->load->view("pages/updatejob", $result);
      $this->load->view('templates/footerDB');	
	
		// if($this->input->post('update'))
		// {
		// $n=$this->input->post('name');
		// $e=$this->input->post('email');
		// $m=$this->input->post('mobile');
		// $this->Hello_Model->updaterecords($n,$e,$m,$id);
		// redirect("Hello/dispdata");
		// }
	}


}
