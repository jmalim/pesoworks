<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Updatedata_model extends CI_Model {

    // Update record by id
    function updatejob($postData,$id){

            $jobstatus = $postData['jobstatus']; 
            $companyname = $postData['companyname'];
            $location = $postData['location'];
            // $jobtitle = $postData['jobtitle'];
            // $jobdetails = $postData['jobdetails'];
            $jobtype = $postData['jobtype']; 
            $rate = $postData['rate'];
            $date = $postData['date'];            
            // Update
            $value=array('establishment_id'=>$companyname,'jobtype'=>$jobtype,
            'rate'=>$rate,'job_location'=>$location,'postingdate'=>$date,
            'posting_status'=>$jobstatus);
            $this->db->where('`jobpostingID',$id);
            $this->db->update('tbl_postingdetails',$value);
        
    }
	

}