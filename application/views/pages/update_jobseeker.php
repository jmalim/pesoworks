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
  <h3>JOBSEEKER'S INFORMATION</h3>
</div>


<div class="a">
  <form method="post">
  <?php foreach ($jobseeker as $key) { ?>
    <label> Date Employed </label>

    <input type="text" id="date" name="empdate" value="<?php echo $key['dateposted'] ?>" disabled readonly>
    <input type="file" name="image">
    <label> Full Name </label>
    <input type="text" id="fname" name="fname" value="<?php echo $key['fname'] ?>" disabled readonly>
    <label> Employment Status </label>
    <input type="text" id="empstatus" name="empstatus" value="<?php echo $key['emp_status'] ?>">
    <label> Company Name </label>
    <input type="text" id="cname" name="companyname" value="<?= $key['ename'] ; ?>"disabled readonly>
    <label> Employment Rate </label>
    <input type="text" id="rate" name="rate" value="<?php echo $key['wage'] ?>"disabled readonly>

            <?php }
  ?>

    <div class="btn btn-group"><input type="submit" name="update" value="UPDATE">
    <input type="reset" name="reset" value="CANCEL" onclick="success()"></div>
    
  </form>
  
</div>

<script>
function success() {
  window.location.href='<?php echo base_url() ?>pages/admindashboard';
}
</script>