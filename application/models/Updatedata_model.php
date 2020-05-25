<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Updatedata_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    // Update record by id
    function updatejob($id, $jobtitle,$jobdetails,
    $jobtype,$rate,$post_status)
    {
        $query="call update_tbl_job('$id','$jobtitle',
        '$jobdetails','$post_status','$jobtype',
        '$rate')";
        $this->db->query($query);
        
    }

    function update_empstatus($id, $empstatus)
    {
        $query="call update_empstatus('$id','$empstatus')";
        $this->db->query($query);
        
    }

}