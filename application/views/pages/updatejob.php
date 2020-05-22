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
    width: 100%;
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
  <h3>UPDATE JOB</h3>
</div>
<form method="post">
  <?php foreach ($jobpost as $key) { ?>
    <label> Posting Date </label>
    <input type="text" id="date" name="date" value="<?php echo $key['postingdate'] ?>" disabled readonly>
    
    <label> Establishment </label>
    <input type="text" id="cname" name="companyname" value="<?php echo $key['establishment'] ?>" disabled readonly>

    <label> Job Location </label>
    <input type="text" id="location" name="location" value="<?php echo $key['joblocation'] ?>" disabled readonly>

    <label> Posting Status </label>
    <input type="text" id="jobstatus" name="jobstatus" placeholder="status" value="<?php echo $key['postingstatus'] ?>">
    
    <label> Job Title </label>
    <input type="text" id="jobtitle" name="jobtitle" placeholder="Job Title" value="<?php echo $key['jobtitle'] ?>">
    <label> Job Details </label>
    <input type="text" id="jobdetails" name="jobdetails" placeholder="Job Details" value="<?php echo $key['jobdetails'] ?>">
    <label> Job Type </label>
    <input type="text" id="jobtype" name="jobtype" placeholder="Job Type" value="<?php echo $key['jobtype'] ?>">
    <label> Rate </label>
    <input type="text" id="rate" name="rate" placeholder="Rate" value="<?php echo $key['rate'] ?>">
  <?php }
  ?>


  <div class="btn btn-group">
    <input type="submit" name="update" value="UPDATE">
    <input type="reset" name="reset" value="CANCEL" onclick="success()">
  </div>

</form>

</div>

<script>
  function success() {
    window.location.href = '<?php echo base_url() ?>pages/view_jobposting';
  }
</script>