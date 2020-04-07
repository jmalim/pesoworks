<?php  
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
 
 class Login_controller extends CI_Controller {  

      //functions  
      public function index()  
      {  
           //http://localhost/icantrack/login_controller/login  
           $this->load->view('templates/header');
           $this->load->view("pages/login_form");  
           $this->load->view('templates/header');
      }  
     
      public function login_validation()  
      {  
           $this->load->library('');  
           $this->form_validation->set_rules('email', 'Email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $email = $this->input->post('email');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('login_database');  
                $validate =  $this->login_database->can_login($email, $password);
                if($validate)  
                {  
                     $session_data = array(  
                          'username'     =>     $email,
                          'password'     =>     $password 
                     );  
                     $this->session->set_userdata($session_data);
                     redirect(base_url() . 'welcome'); //controller

                       
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Email or Password');  
                     redirect(base_url() . 'login_controller');  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
      }  
     //  function enter(){  
     //       if($this->session->userdata('email') != '')  
     //       {  
     //            echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>';  
     //            echo '<label><a href="'.base_url().'login_controller/logout">Logout</a></label>';  
     //       }  
     //       else  
     //       {  
     //            redirect(base_url() . 'login_controller/login');  
     //       }  
     //  }  
     //  function logout()  
     //  {  
     //       $this->session->unset_userdata('username');  
     //       redirect(base_url() . 'login_controller/login');  
     //  }  
 }
