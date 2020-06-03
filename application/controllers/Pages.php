<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pages extends CI_Controller
{

  //functions  
  public function index()
  {
    $this->authentication();
  }

  public function authentication()
  {
      $this->load->view('templates/header');
      $this->load->view("pages/login_form");
      $this->load->view('templates/footer');  
  }

  public function admindashboard()
  {
    $data['empdetails'] = $this->Fetchdata_model->fetchdata_jobseekers();


    $this->load->view('templates/headerDB');
    $this->load->view("admin_page", $data);
    $this->load->view('templates/footerDB');
  }

  public function view_jobposting()
  {
    $data['jobpost'] = $this->Fetchdata_model->fetchdata_jobposting();
    $this->load->view('templates/headerDB');
    $this->load->view("pages/jobposting", $data);
    $this->load->view('templates/footerDB');
  }

  public function view_employers()
  {

    $data['establishment'] = $this->Fetchdata_model->fetchdata_employers();
    $data['address'] = $this->Fetchdata_model->fetchdata_address();

    // var_dump($data['establishment']);
    $this->load->view('templates/headerDB');
    $this->load->view("pages/employers", $data);
    $this->load->view('templates/footerDB');
  }

  public function view_profile()
  {

    $this->load->view("pages/profile");
  }

  public function pickdate_e()
  {

    $this->load->view('templates/headerDB');
    $this->load->view("pages/pickdate_employed");
    $this->load->view('templates/footerDB');
  }

  public function pickdate_r()
  {

    $this->load->view('templates/headerDB');
    $this->load->view("pages/pickdate_referred");
    $this->load->view('templates/footerDB');
  }

  public function report_employed()
  {


    $data['report_employed_data'] = $this->Fetchdata_model->fetch_report_employed();

    $this->load->view('templates/headerDB');
    $this->load->view("report/employed", $data);
    $this->load->view('templates/footerDB');
  }

  public function report_referred()
  {

    $data['report_employed_data'] = $this->Fetchdata_model->fetch_report_employed_r();

    $this->load->view('templates/headerDB');
    $this->load->view("report/employed", $data);
    $this->load->view('templates/footerDB');
  }
  public function view_stat()
  {

    $this->load->view('templates/headerDB');
    $this->load->view("report/stat");
    $this->load->view('templates/footerDB');
  }
  public function login(){
      $this->load->model("Login_database");
      $this->load->model("Fetchdata_model");

      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');
      if ($this->form_validation->run() == FALSE){
          $this->session->set_flashdata('error_msg', 'Invalid Username or Password. Please try again.');
          return redirect('authentication');
      }
      $credentials = array(
          'email' => $this->input->post('email'),
          'password' => $this->input->post('password')
      );

      $record = $this->Login_database->checkUser($credentials);
      if(count($record)==0){
          $this->session->set_flashdata('error_msg', "Invalid Username or Password. Please try again.");
          return redirect('authentication');
      }
      else{
        $sessionData = [
          "user_id" => $record[0]->empID,
          "email" => $record[0]->email
        ];
        $this->session->set_userdata('logged_in',$sessionData);
        return redirect('pages/admindashboard');            
      }        

  }

  public function logout(){
      $this->session->unset_userdata('logged_in');
      session_destroy();
      redirect('authentication');
  }
}
