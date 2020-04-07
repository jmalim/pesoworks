<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fetchdata_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function fetchdata_jobseekers()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("
        SELECT CONCAT(js_emp_details.lname,',',' ',js_emp_details.fname,' ',js_emp_details.mname) as name,
        CONCAT(tbl_address.barangay,',',' ',tbl_address.city_mun) as address, tbl_empstatus_detail.emp_status_type_name
        as emp_status
FROM js_emp_details
JOIN tbl_address
ON js_emp_details.addressID = tbl_address.addressID
JOIN tbl_empstatus_detail
ON tbl_empstatus_detail.empID = js_emp_details.empID");
        return $query->result_array();
    }

    public function fetchdata_employers()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT establishment_id, establishment_name as ename,
        establishment_tin as tin, establishment_type as type, workforce
        FROM tbl_establishment_details");
        return $query->result_array();
    }

    public function fetchdata_jobposting()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT tbl_postingdetails.jobpostingID as jobpostingID,
        tbl_job.jobtitle as jobtitle, tbl_job.jobdetails as jobdetails,
        tbl_establishment_details.establishment_name as establishment,
        tbl_postingdetails.jobtype as jobtype,
        tbl_postingdetails.rate as rate,
        tbl_postingdetails.job_location as joblocation,
        tbl_postingdetails.postingdate as postingdate,
        tbl_postingdetails.posting_status as postingstatus
        FROM tbl_job JOIN tbl_postingdetails
        ON tbl_job.jobID = tbl_postingdetails.jobID
        JOIN tbl_establishment_details WHERE
        tbl_establishment_details.establishment_id = tbl_postingdetails.establishment_id");
        return $query->result_array();
    }


    public function fetchdata_viewjobpost($id)
    {
        // $result=$this->db->select('tbl_postingdetails.jobpostingID as jobpostingID,
        // tbl_job.jobtitle as jobtitle, tbl_job.jobdetails as jobdetails,
        // tbl_establishment_details.establishment_name as establishment,
        // tbl_postingdetails.jobtype as jobtype,
        // tbl_postingdetails.rate as rate,
        // tbl_postingdetails.job_location as joblocation,
        // tbl_postingdetails.postingdate as postingdate,
        // tbl_postingdetails.posting_status as postingstatus');
        // $this->db->from('tbl_job');
        // $this->db->join('tbl_postingdetails','tbl_job.jobID = tbl_postingdetails.jobID');
        // $this->db->join('tbl_establishment_details','tbl_postingdetails.jobpostingID' = $id );
        // $this->db->where('jobpostingID', $id);
        // // $result = $this->db->get('tbl_postingdetails');

        // return $result->row_array();

        // $this->db->where('jobpostingID', $id);
        // $result = $this->db->get('tbl_postingdetails');
        // return $result->row_array();
        // $query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT tbl_postingdetails.jobpostingID as jobpostingID,
        tbl_job.jobtitle as jobtitle, tbl_job.jobdetails as jobdetails,
        tbl_establishment_details.establishment_name as establishment,
        tbl_postingdetails.jobtype as jobtype,
        tbl_postingdetails.rate as rate,
        tbl_postingdetails.job_location as joblocation,
        tbl_postingdetails.postingdate as postingdate,
        tbl_postingdetails.posting_status as postingstatus
        FROM tbl_job JOIN tbl_postingdetails
        ON tbl_job.jobID = tbl_postingdetails.jobID
        JOIN tbl_establishment_details WHERE
        tbl_postingdetails.jobpostingID = '$id'");
        return $query->result_array();
    }


    public function fetch_report_employed()
    {
        $query = $this->db->query("
        SELECT CONCAT(js_emp_details.lname,',',' ',js_emp_details.fname,' ',js_emp_details.mname) as name,
        CONCAT(tbl_address.barangay,',',' ',tbl_address.city_mun) as address, GROUP_CONCAT(tbl_skills.skill_name SEPARATOR ',') as skills,
        tbl_empstatus_detail.wage_employment as wage_employment, js_emp_details.gender as gender,
        js_emp_details.civilstatus as civil_status, (YEAR(CURRENT_DATE)-YEAR(js_emp_details.bdate)) as age, tbl_education.education_level as education,
        work_experience.position as work_experience,
        tbl_empstatus_detail.date_employed as date_employed, tbl_establishment_details.establishment_name as establishment_name,
        (SELECT CONCAT(tbl_address.barangay,',',' ',tbl_address.city_mun) as establishment_address FROM tbl_address WHERE tbl_establishment_details.addressID = tbl_address.addressID ) as establishment_address
        FROM
        js_emp_details INNER JOIN tbl_address ON js_emp_details.addressID = tbl_address.addressID
        JOIN tbl_employeeskills ON tbl_employeeskills.empID = js_emp_details.empID
	JOIN tbl_skills ON tbl_skills.skill_id = tbl_employeeskills.skill_id
        JOIN work_experience ON work_experience.empID = js_emp_details.empID
        JOIN tbl_empstatus_detail ON tbl_empstatus_detail.empID = js_emp_details.empID
        JOIN tbl_education ON tbl_education.empID = js_emp_details.empID
        inner JOIN tbl_establishment_details ON tbl_establishment_details.establishment_id = tbl_empstatus_detail.establishment_id
	GROUP by name");
        return $query->result_array();
    }

    public function fetchdata_address()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT CONCAT(tbl_address.barangay,',',' ',
               tbl_address.city_mun,' ',tbl_address.province) as my_address
               FROM tbl_address");
        return $query->result_array();
    }


    function displayrecordsById($id)
	{

	$query=$this->db->query("as postingdate,
        tbl_postingdetails.posting_status as postingstatus
        FROM tbl_job JOIN tbl_postingdetails
        ON tbl_job.jobID = tbl_postingdetails.jobID
        JOIN tbl_establishment_details WHERE
        tbl_postingdetails.jobpostingID ='".$id."'");
	return $query->result();
	}
}
