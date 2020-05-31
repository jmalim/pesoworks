<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Senddata_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    function post_job($jobtitle,$jobdetails,$establishment_id,$jobtype,$rate,$location,$dateposted,$post_status)
	{
    $query="call postjob('$jobtitle','$jobdetails','$establishment_id','$jobtype',
    '$rate','$location','$dateposted','$post_status')";
	$this->db->query($query);
    }
    
    function post_employer($companyname,$empabbr,
    $emptin,$etype,$workforce,$personincharge,$position,$contact,$location,$dateposted)
	{
    $query="call post_employer('$companyname','$empabbr','$emptin','$etype',
    '$workforce','$personincharge','$position','$contact','$location','$dateposted')";
	$this->db->query($query);
    }

    function post_employee($fname,$lname,$mname,$suffix,$gender,$location,
      $civilstatus,$tin,$gsis,$pagibig,$phno,$height,$landline,$cellphone,
      $disability,$bdate,$bplace,$religion,$dateposted,$empstatus,$companyname,$rate,$empdate)
      {
        $query="call post_jobseeker('$fname','$lname','$mname','$suffix',
        '$gender','$location','$civilstatus','$tin','$gsis','$pagibig','$phno','$height','$landline','$cellphone',
        '$disability','$bdate','$bplace','$religion','$dateposted','$empstatus','$companyname','$rate','$empdate')";
        $this->db->query($query);

      }
}

