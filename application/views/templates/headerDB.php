<?php
    // die($this->session->userdata("logged_in"));
    if(empty($this->session->userdata('logged_in'))){
        redirect('authentication');
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>PESOWORKS</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">




    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages': ['table', 'map', 'corechart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(initialize);

      function initialize() {
        // The URL of the spreadsheet to source data from.
        var query = new google.visualization.Query(
            'https://spreadsheets.google.com/pub?key=pCQbetd-CptF0r8qmCOlZGg');
        query.send(draw);
      }

      function draw(response) {
        if (response.isError()) {
          alert('Error in query');
        }

        var ticketsData = response.getDataTable();
        var chart = new google.visualization.ColumnChart(
            document.getElementById('chart_div'));
        chart.draw(ticketsData, {'isStacked': true, 'legend': 'bottom',
            'vAxis': {'title': 'Number of tickets'}});

        var geoData = google.visualization.arrayToDataTable([
          ['Lat', 'Lon', 'Name', 'Food?'],
          [51.5072, -0.1275, 'Cinematics London', true],
          [48.8567, 2.3508, 'Cinematics Paris', true],
          [55.7500, 37.6167, 'Cinematics Moscow', false]]);

        var geoView = new google.visualization.DataView(geoData);
        geoView.setColumns([0, 1]);

        var table =
            new google.visualization.Table(document.getElementById('table_div'));
        table.draw(geoData, {showRowNumber: false, width: '100%', height: '100%'});

        var map =
            new google.visualization.Map(document.getElementById('map_div'));
        map.draw(geoView, {showTip: true});

        // Set a 'select' event listener for the table.
        // When the table is selected, we set the selection on the map.
        google.visualization.events.addListener(table, 'select',
            function() {
              map.setSelection(table.getSelection());
            });

        // Set a 'select' event listener for the map.
        // When the map is selected, we set the selection on the table.
        google.visualization.events.addListener(map, 'select',
            function() {
              table.setSelection(map.getSelection());
            });
      }
    </script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    // new Date("2017-01-26");
    // var dateFormat = "Y-m-d",
    var dateFormat = "Y-m-d",
      from = $( "#from" )
        .datepicker({
          dateFormat: 'yy-mm-dd',
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  </script>



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
        
        <button class="dropdown-btn">Reports
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="<?php echo base_url() ?>pages/pickdate_e">Employed(Referred)</a>
            <a href="<?php echo base_url() ?>pages/pickdate_r">Referred(Walk-in)</a>
            <a href="<?php echo base_url() ?>pages/view_stat">Statistics</a>

        </div>

        <a href="<?php base_url() ?>logout">Logout</a>


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