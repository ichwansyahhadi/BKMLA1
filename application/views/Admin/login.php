<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="forget"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <h1>Login Form</h1><br />
              <?php 
              $attributes = array("id" => "loginform", "name" => "loginform");
              echo form_open("Admin/Home/index", $attributes);
              ?>
              <div class="row item form-group form-mid">
	              <div class="col-xs-12 col-sm-7">
                	<input type="text" class="form-control" placeholder="Username" required="required" name="txtUsername" id="txtUsername" />
                  </div>
              </div>
              <div class="row item form-group form-mid">
	              <div class="col-xs-12 col-sm-7">
                	<input type="password" class="form-control" placeholder="Password" required="required" name="txtPassword" id="txtPassword" />
                  </div>
              </div>
              <div class="row item form-group form-mid">
	              <div class="col-xs-12 col-sm-7">
                	<button type="submit" class="btn btn-default submit" name="btnLogin" value="Login">Login</button>
                  <?php echo anchor('forget', 'Lost your password?');?>
                  </div>
              </div>
              <?php echo form_close(); ?>
              <?php echo $this->session->flashdata('msg'); ?>  
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <?php echo anchor('signup', 'Create Account');?>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i></h1>
                  <p>©<?=date('Y')?> All Rights Reserved.</p>
                </div>
              </div>
          </section>
        </div>
      </div>
    </div>
  </body>
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- validator -->
  <script src="<?php echo base_url(); ?>assets/vendors/validator/validator.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>

  <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
</html>
