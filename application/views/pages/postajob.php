<style>
  body {
    font-family: "Lato", sans-serif;
    padding: 0px 100px;

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
    width: 120%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=reset]:hover {
    background-color: #DC143C;
  }

  input[type="reset"] {
    width: 120%;
    background-color: red;
    color: white;
    padding: 14px 20px;
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
  <h3>POST A JOB</h3>
</div>


<div class="a">
  <form method="post">
  <input type="text" id="date" name="date" value="<?php
          echo date("Y-m-d"); ?>" readonly>


    <input type="text" id="jobstatus" name="jobstatus" value="OPEN" readonly>
    <select id="cname" name="companyname">
    <option value="" disabled selected>Company Name</option>
      <?php foreach ($establishment as $row) { ?>
        <option value="<?= $row['establishment_id'] ; ?>"><?= $row['ename'] ; ?></option>

      <?php

      } ?>
    </select>
    <select id="loc" name="location">
    <option value="" disabled selected>Job Location</option>
    <?php foreach ($address as $row) { ?>
        <option value="<?= $row['my_address']; ?>"><?= $row['my_address']; ?></option>
      <?php
      } ?>
    </select>
    <input type="text" id="jobtitle" name="jobtitle" placeholder="Job Title">
    <input type="text" id="jobdetails" name="jobdetails" placeholder="Job Details">

    <select id="jobtype" name="jobtype">
    <option value="" disabled selected>Job Type</option>
      <option value="Full-Time">Full Time</option>
      <option value="Part-Time">Part-Time</option>
      <option value="Contractual">Contractual</option>
    </select>
    <input type="text" id="rate" name="rate" placeholder="Rate">

    <div class="btn btn-group"><input type="submit" name="post" value="POST"> &nbsp;
    <input type="reset" name="reset" value="CANCEL" onclick="success()"></div>
    
    
  </form>
  
</div>

<script>
function success() {
  window.location.href='<?php echo base_url() ?>pages/view_jobposting';
}
</script>