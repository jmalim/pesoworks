<!DOCTYPE html>
<html>

<head>
    <title>PESOWORKS</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>




    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>
<style>
    body {
  font-family: "Lato", sans-serif;
  padding: 20px;
  
}

.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 38px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.buttonedit {
  background-color: #FFD369; 
  border: none;
  color: black;
  padding: 15px 38px;
  text-align: center;
  text-decoration: none;
  
  font-size: 16px;
}

.buttondelete {
  background-color: red; 
  border: none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  
  font-size: 16px;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 50px 50px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #015668;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 25px;}
  .sidenav a {font-size: 15px;}
}
</style>

<body>
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> -->

    <div id="mySidenav" class="sidenav" >
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>
        <a href="<?php echo base_url() ?>pages/view_jobposting">Job Posting</a>
        <a href="<?php echo base_url() ?>pages/admindashboard">Jobseekers</a>
        <a href="<?php echo base_url() ?>pages/view_employers">Employers</a>
        <a href="<?php echo base_url() ?>pages/view_employers">Statistics</a>
        <button class="dropdown-btn">Reports
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?php echo base_url() ?>pages/pickdate_e">Employed</a>
            <a href="<?php echo base_url() ?>pages/pickdate_p">Referred</a>
            <a href="<?php echo base_url() ?>pages/pickdate_r">Walk-in</a>

        </div>

        <a href="<?php echo base_url() ?>">Logout</a>
    </div>

    <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>