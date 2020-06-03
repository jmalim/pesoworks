<?php echo validation_errors(); ?>

<?php echo form_open(''); ?>

<div class="login-page">
  <div class="form">
  <div><img src="<?php echo base_url();?>/dist/img/peso.png"></div>
  <div></div>
  <br>

<input type="text" placeholder="Email" name="email" size="50" />

<input type="password" placeholder="Password" name="password" size="50" />


<div><input type="submit" value="Log in" /></div>

</form>
</div>
</div>

<!-- <p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p> -->
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
