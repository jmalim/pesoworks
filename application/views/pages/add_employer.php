<style>
  body {
    font-family: "Lato", sans-serif;
    padding: 0px 20px 0px 200px;

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
  <h3>ESTABLISHMENT INFORMATION</h3>
</div>


<div class="a">
  <form method="post">
  <input type="text" id="date" name="date" value="<?php
            echo date("Y-m-d"); ?>" readonly>

    <select id="loc" name="location">
    <option value="" disabled selected>Company Address</option>
    <?php foreach ($address as $row) { ?>
        <option value="<?= $row['addID']; ?>"><?= $row['my_address']; ?></option>
      <?php
      } ?>
    </select>
    <input type="text" id="cname" name="companyname" placeholder="Company Name">
    <input type="text" id="abbr" name="abbr" placeholder="Abbreviation">
    <input type="text" id="tin" name="tin" placeholder="TIN No.">

    <select id="etype" name="etype">
    <option value="" disabled selected>Establishment Type</option>
      <option value="Private">Government</option>
      <option value="Public">Private</option>
      <option value="Recruitment & Placement Agency (Local)">Recruitment & Placement Agency (Local)</option>
      <option value="Licensed Recruitment Agency (Overseas)">Licensed Recruitment Agency (Overseas)</option>
      <option value="DO 174-17, Subcontractor">DO 174-17, Subcontractor</option>
      
    </select>
    <select id="workforce" name="workforce">
    <option value="" disabled selected>Total Workforce</option>
      <option value="Micro (1-9)">Micro (1-9)</option>
      <option value="Small (10-99)">Small (10-99)</option>
      <option value="Medium (100-199)">Medium (100-199)</option>
      <option value="Large (200 and up)">Large (200 and up)</option>
    </select>
    <input type="text" id="personincharge" name="personincharge" placeholder="Person In-charge">
    <input type="text" id="position" name="position" placeholder="Position">
    <input type="text" id="contact" name="contact" placeholder="Contact No.">

    <div class="btn btn-group"><input type="submit" name="post" value="ADD">
    <input type="reset" name="reset" value="CANCEL" onclick="success()"></div>
    
    
  </form>
  
</div>

<script>
function success() {
  window.location.href='<?php echo base_url() ?>pages/view_jobposting';
}
</script>