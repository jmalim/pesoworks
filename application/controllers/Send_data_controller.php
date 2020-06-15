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
      redirect(base_url('pages/view_jobposting'));
      echo "<div style='alert'> SUCCESS </div> ";
    }
  }

  public function addjobseeker()
  {
    //load registration view form
    $data['establishment'] = $this->Fetchdata_model->fetchdata_employers();
    $data['address'] = $this->Fetchdata_model->fetchdata_address();
    $data['skill_id'] = $this->Fetchdata_model->fetchdata_skill();


    // var_dump($data['establishment']);
    $this->load->view('templates/headerDB');
    $this->load->view("pages/addjobseeker", $data);
    $this->load->view('templates/footerDB');

    // var_dump($data['skill_id']);

    //Check submit button 
    if ($this->input->post('post')) {
      //get form's data and store in local varable
      $dateposted = $this->input->post('date');
      $image = $this->input->post('image');
      // $image = $_FILES['image']['name'];
      $fname = $this->input->post('fname');
      $lname = $this->input->post('lname');
      $mname = $this->input->post('mname');
      $location = $this->input->post('location');
      $suffix = $this->input->post('suffix');
      $gender = $this->input->post('gender');
      $civilstatus = $this->input->post('civilstatus');
      $tin = $this->input->post('tin');
      $gsis = $this->input->post('gsis');
      $pagibig = $this->input->post('pagibig');
      $phno = $this->input->post('phno');
      $height = $this->input->post('height');
      $landline = $this->input->post('landline');
      $cellphone = $this->input->post('cellphone');
      $disability = $this->input->post('disability');
      $bdate = $this->input->post('bdate');
      $bplace = $this->input->post('bplace');
      $religion = $this->input->post('religion');
      $empstatus = $this->input->post('empstatus');
      $companyname = $this->input->post('companyname');
      $rate = $this->input->post('rate');
      $empdate = $this->input->post('empdate');

      


      //call saverecords method of Hello_Model and pass variables as parameter
      $this->Senddata_model->post_employee($image,$fname,$lname,$mname,$suffix,$gender,$location,
      $civilstatus,$tin,$gsis,$pagibig,$phno,$height,$landline,$cellphone,
      $disability,$bdate,$bplace,$religion,$dateposted,$empstatus,$companyname,$rate,$empdate);
      redirect(base_url('pages/admindashboard'));
      echo "<div style='alert'> SUCCESS </div> ";
    }
  }


  public function view_job($jobidnum)
  {
    $id = $jobidnum;
    
    // load registration view form
    $test =  $this->Fetchdata_model->fetchdata_viewjobpost($id);
    $data['jobpost'] = (object) $test;
          $this->load->view('templates/headerDB');
          $this->load->view("pages/updatejob", $data);
          $this->load->view('templates/footerDB');

    // var_dump($data['jobpost']);

    if ($this->input->post('update')) {
      //get form's data and store in local varable

      $jobtitle = $this->input->post('jobtitle');
      $jobdetails = $this->input->post('jobdetails');
      $jobtype = $this->input->post('jobtype');
      $rate = $this->input->post('rate');
      $post_status = $this->input->post('jobstatus');

      //call saverecords method of Hello_Model and pass variables as parameter
      $this->Updatedata_model->updatejob($id,$jobtitle, $jobdetails, $jobtype, $rate, $post_status);
      redirect(base_url('pages/view_jobposting'));
      echo "<div style='alert'> SUCCESS </div> ";
    }

    

  }
  public function view_jobseeker($empid)
  {
    $id = $empid;
    
    // load registration view form
    $test =  $this->Fetchdata_model->fetchdata_viewjobseeker($id);
    $data['establishment'] = $this->Fetchdata_model->fetchdata_employers();
    $data['jobseeker'] = (object) $test;
          $this->load->view('templates/headerDB');
          $this->load->view("pages/update_jobseeker", $data);
          $this->load->view('templates/footerDB');

    //var_dump($data['jobseeker']);

    if ($this->input->post('update')) {
      //get form's data and store in local varable

      $empstatus = $this->input->post('empstatus');


      //call saverecords method of Hello_Model and pass variables as parameter
      $this->Updatedata_model->update_empstatus($id,$empstatus);
      redirect(base_url('pages/admindashboard'));
      echo "<div style='alert'> SUCCESS </div> ";
    }
  }

  public function view_employer($employerID){

    $id = $employerID;

   
    
    // load registration view form
    
    $test =  $this->Fetchdata_model->fetchdata_employerbyId($id);
    $data['employer'] = (object) $test;
          $this->load->view('templates/headerDB');
          $this->load->view("pages/update_employer",$data);
          $this->load->view('templates/footerDB');

    var_dump($data['employer']);

  }

  public function add_employer(){
    $data['address'] = $this->Fetchdata_model->fetchdata_address();
    $this->load->view('templates/headerDB');
    $this->load->view("pages/add_employer", $data);
    $this->load->view('templates/footerDB');

     //Check submit button 
     if ($this->input->post('post')) {
      //get form's data and store in local varable
      $dateposted = $this->input->post('date');
      $location = $this->input->post('location');
      $companyname = $this->input->post('companyname');
      $empabbr = $this->input->post('abbr');
      $emptin = $this->input->post('tin');
      $etype = $this->input->post('etype');
      $workforce = $this->input->post('workforce');
      $personincharge = $this->input->post('personincharge');
      $position = $this->input->post('position');
      $contact = $this->input->post('contact');

       //call saverecords method of Hello_Model and pass variables as parameter
       $this->Senddata_model->post_employer($companyname,$empabbr,
       $emptin,$etype,$workforce,$personincharge,$position,$contact,$location,$dateposted);
       redirect(base_url('pages/view_employers'));
       echo "<div style='alert'> SUCCESS </div> ";

  }
}

  

}
