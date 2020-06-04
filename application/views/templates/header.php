<?php
    // die($this->session->userdata("logged_in"));
    if(!empty($this->session->userdata('logged_in'))){
        redirect('pages/admindashboard');
    }

?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="dist/css/styles.css">





  <title>PESOWORKS</title>

</head>
<body>