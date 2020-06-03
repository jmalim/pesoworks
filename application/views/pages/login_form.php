<?php if($this->session->flashdata('error_msg')): ?>
	<div class="alert alert-danger alert-dismissible">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	  <?= $this->session->flashdata('error_msg') ?>
	</div>
<?php endif ?>
<div class="login-page">
  <div class="form">
  	<form method="POST" action="<?php echo base_url() ?>pages/login">
  <div><img src="<?php echo base_url();?>dist/img/peso.png"></div>
  <div></div>
  <br>

<input type="email" placeholder="Email" name="email" size="50" />

<input type="password" placeholder="Password" name="password" size="50" />


<div><button type="submit">Log in</button></div>

</form>
</div>
</div>

<!-- <p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p> -->
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
