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
        SELECT js_emp_details.empID as empID, CONCAT(js_emp_details.lname,',',' ',js_emp_details.fname,' ',js_emp_details.mname) as name,
        CONCAT(tbl_address.barangay,',',' ',tbl_address.city_mun) as address,
        tbl_empstatus_detail.emp_status_type_name
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
        $query = $this->db->query("SELECT establishment_id as establishment_id, establishment_name as ename,
        CONCAT(tbl_address.barangay,',',' ',tbl_address.city_mun) as address,
        person_in_charge as pic, contact as contact,
        establishment_tin as tin, establishment_type as type, workforce
        FROM tbl_establishment_details
        JOIN tbl_address ON tbl_establishment_details.addressID = tbl_address.addressID");
        return $query->result_array();
    }

    public function fetchdata_employerbyId($id)
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT establishment_id as establishment_id, establishment_name as ename,
        CONCAT(tbl_address.barangay,',',' ',tbl_address.city_mun) as address,
        person_in_charge as pic, contact as contact,
        establishment_tin as tin, establishment_type as type, workforce
        FROM tbl_establishment_details
        JOIN tbl_address ON tbl_establishment_details.addressID = tbl_address.addressID
        WHERE tbl_establishment_details.establishment_id = '$id'");
        return $query->result_array();
    }


    public function fetchdata_jobposting()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT tbl_postingdetails.jobpostingID as jobpostingID,
        tbl_job.jobtitle as jobtitle, tbl_job.jobdetails as jobdetails,
        tbl_job.jobID as jobID,
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
    {   $query = $this->db->query("SELECT tbl_postingdetails.jobpostingID as jobpostingID,tbl_job.jobID as jobID,
        tbl_job.jobtitle as jobtitle, tbl_job.jobdetails as jobdetails,
        tbl_establishment_details.establishment_name as establishment,
        tbl_postingdetails.jobtype as jobtype,
        tbl_postingdetails.rate as rate,
        tbl_postingdetails.job_location as joblocation,
        tbl_postingdetails.postingdate as postingdate,
        tbl_postingdetails.posting_status as postingstatus
        FROM tbl_postingdetails JOIN tbl_establishment_details
        ON tbl_postingdetails.establishment_id = tbl_establishment_details.establishment_id
        JOIN tbl_job ON
        tbl_job.jobID = tbl_postingdetails.jobID
        WHERE tbl_job.jobID = '$id'");
    return $query->result_array();
    }

    public function fetchdata_viewjobseeker($id)
    {   $query = $this->db->query("SELECT js_emp_details.empID as empID,
        CONCAT(js_emp_details.lname,',',' ',js_emp_details.fname,' ',js_emp_details.mname) as fname, js_emp_details.suffix as suffix,
        js_emp_details.gender as gender, js_emp_details.addressID as location,
        js_emp_details.civilstatus as civilstatus, js_emp_details.tin as tin,
        js_emp_details.gsis as gsis, js_emp_details.pagibig as pagibig,
        js_emp_details.phno as philhealth, js_emp_details.height as height,
        js_emp_details.landline as landline, js_emp_details.cellphone as cellphone,
        js_emp_details.disability as disability, js_emp_details.bdate as bdate,
        js_emp_details.placeofbirth as placeofbirth, js_emp_details.religion as religion,
        js_emp_details.regdate as dateposted,
        tbl_empstatus_detail.emp_status_type_name as emp_status,
        tbl_empstatus_detail.wage_employment as wage,
        tbl_empstatus_detail.date_employed as date_emp,
        tbl_empstatus_detail.empstatus_detail_id as eid,
        tbl_establishment_details.establishment_name as ename
        FROM js_emp_details JOIN tbl_empstatus_detail
        ON js_emp_details.empID = tbl_empstatus_detail.empID
        JOIN tbl_establishment_details ON
        tbl_empstatus_detail.establishment_id = tbl_establishment_details.establishment_id
        WHERE js_emp_details.empID = '$id'");
    return $query->result_array();
    }

    public function fetchdata_address()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT tbl_address.addressID as addID, CONCAT(tbl_address.barangay,',',' ',
        tbl_address.city_mun,' ',tbl_address.province) as my_address
        FROM tbl_address");
        return $query->result_array();
    }

    public function fetchdata_skill()
    {
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT skill_id as skill_id,
        skill_name as skill_name
        FROM tbl_skills");
        return $query->result_array();
    }

    public function fetch_report_employed()
    {
        $inputdate=$_POST['from'];
        $inputdate2=$_POST['to'];

        // var_dump($inputdate);
        // var_dump($inputdate2);
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT js_emp_details.empID as empID,
        CONCAT(js_emp_details.lname,',',' ',js_emp_details.fname,' ',js_emp_details.mname) as fname,
        tbl_empstatus_detail.emp_status_type_name as emp_status, tbl_establishment_details.establishment_name as establishment,
        tbl_empstatus_detail.wage_employment as wage, tbl_empstatus_detail.date_employed as date_employed
        FROM js_emp_details JOIN tbl_empstatus_detail
        ON js_emp_details.empID = tbl_empstatus_detail.empID
        JOIN tbl_establishment_details ON tbl_empstatus_detail.establishment_id = tbl_establishment_details.establishment_id
        WHERE tbl_empstatus_detail.emp_status_type_name = 'Employed (Referred)' AND tbl_empstatus_detail.date_employed BETWEEN '$inputdate' AND '$inputdate2'");
        return $query->result_array();
    }

    public function fetch_report_employed_r()
    {
        $inputdate=$_POST['from'];
        $inputdate2=$_POST['to'];

        // var_dump($inputdate);
        // var_dump($inputdate2);
        //$query = $this->db->get('js_emp_details');
        $query = $this->db->query("SELECT js_emp_details.empID as empID,
        CONCAT(js_emp_details.lname,',',' ',js_emp_details.fname,' ',js_emp_details.mname) as fname,
        tbl_empstatus_detail.emp_status_type_name as emp_status, tbl_establishment_details.establishment_name as establishment,
        tbl_empstatus_detail.wage_employment as wage, tbl_empstatus_detail.date_employed as date_employed
        FROM js_emp_details JOIN tbl_empstatus_detail
        ON js_emp_details.empID = tbl_empstatus_detail.empID
        JOIN tbl_establishment_details ON tbl_empstatus_detail.establishment_id = tbl_establishment_details.establishment_id
        WHERE tbl_empstatus_detail.emp_status_type_name = 'Employed (Walk-in)' AND tbl_empstatus_detail.date_employed BETWEEN '$inputdate' AND '$inputdate2'");
        return $query->result_array();
    }
}
