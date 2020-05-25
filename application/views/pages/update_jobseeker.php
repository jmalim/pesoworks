<style>
  body {
    font-family: "Lato", sans-serif;
    padding: 0px 20px 0px 250px;

  }

  input[type=text],
  select {
    width: 100%;
    padding: 20px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type="submit"] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=reset]:hover {
    background-color: #DC143C;
  }

  input[type="reset"] {
    width: 100%;
    background-color: red;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div.a {
    border-radius: 20px;
    background-color: #f2f2f2;
    padding: 30px;


  }
</style>
<div style="text-align:center">
  <h3>PERSONAL INFORMATION</h3>
</div>


<div class="a">
  <form method="post">
    <label> First Name </label>
    <input type="text" id="fname" name="fname" placeholder="First Name">
        <label> Last Name </label>
        <input type="text" id="lname" name="lname" placeholder="Last Name">
        <label> Middle Name </label>
        <input type="text" id="mname" name="mname" placeholder="Middle Name">
        <label> Suffix </label>
        <input type="text" id="suffix" name="suffix" placeholder="Suffix" value="N/A">
        <label> Gender </label>
        <input type="text" id="gender" name="gender" placeholder="Gender" value="N/A">
        <label> Address </label>
        <input type="text" id="loc" name="location" placeholder="Location" value="N/A">
        <label> Civil Status </label>
        <input type="text" id="civilstatus" name="civilstatus" placeholder="Civil Status" value="N/A">
        <label> TIN </label>
        <input type="text" id="tin" name="tin" placeholder="TIN No." value="N/A">
        <label> GSIS </label>
        <input type="text" id="gsis" name="gsis" placeholder="GSIS No." value="N/A">
        <label> PAG-IBIG </label>
        <input type="text" id="gsis" name="pagibig" placeholder="PAG-IBIG No." value="N/A">
        <label> PHILHEALTH NO. </label>
        <input type="text" id="phno" name="phno" placeholder="Philhealth No." value="N/A">
        <label> Height </label>
        <input type="text" id="height" name="height" placeholder="Height" value="N/A">
        <label> Landline No. </label>
        <input type="text" id="landline" name="landline" placeholder="Landline No." value="N/A">
        <label> Cellphone No. </label>
        <input type="text" id="cellphone" name="cellphone" placeholder="Cellphone No." value="N/A">
        <label> Disability </label>
        <input type="text" id="disability" name="disability" placeholder="Disability" value="N/A">
        <label> Birth Date </label>
        <input type="text" id="bdate" name="bdate" placeholder="yyyy-mm-dd">
        <label> Birth Place </label>
        <input type="text" id="bplace" name="bplace" placeholder="Birth Place">
        <label> Religion </label>
        <input type="text" id="religion" name="religion" placeholder="Religion">
    <label> Employment Status </label>
    <select id="empstatus" name="empstatus">
    <option value="" disabled selected>Employment Status</option>
      <option value="wage_employed">Wage-Employed</option>
      <option value="self_employed">Self-Employed</option>
      <option value="unemployed">Unemployed</option>
    </select>
    <label> Company Name </label>
    <input type="text" id="cname" name="companyname" placeholder="Company Name">
    <label> Employment Rate </label>
    <input type="text" id="rate" name="rate" placeholder="Rate/day">
    <label> Date Employed </label>
    <input type="text" id="date" name="empdate" value="<?php
            echo date("Y-m-d"); ?>">

    <div class="btn btn-group"><input type="submit" name="post" value="VIEW">
    <input type="reset" name="reset" value="CANCEL" onclick="success()"></div>
    
  </form>
  
</div>

<script>
function success() {
  window.location.href='<?php echo base_url() ?>pages/view_jobposting';
}
</script>