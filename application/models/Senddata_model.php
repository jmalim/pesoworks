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
}

