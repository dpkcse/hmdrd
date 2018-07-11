<?php include('partials/head.php'); ?>
<link href="<?php echo base_url();?>/Assets/css/style-login.css?v=2.1.0" rel="stylesheet" />
<div class="login-form">
    <h1>Vini</h1>
    <div class="form-group ">
      <input type="text" class="form-control" placeholder="Username " id="UserName">
      <i class="fa fa-user"></i>
    </div>
    <div class="form-group log-status">
      <input type="password" class="form-control" placeholder="Password" id="Passwod">
      <i class="fa fa-lock"></i>
    </div>
    <span class="alert">Invalid Credentials</span>
    <a class="link" href="#">Lost your password?</a>
    <button type="button" class="log-btn" >Log in</button>
</div>
<?php include('partials/foot.php'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.log-btn').click(function(){
      $('.log-status').addClass('wrong-entry');
        $('.alert').fadeIn(500);
        setTimeout( "$('.alert').fadeOut(1500);",3000 );
    });
    $('.form-control').keypress(function(){
      $('.log-status').removeClass('wrong-entry');
    });

  });
</script>


