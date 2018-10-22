<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
     <!-- iCheck -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">
     <style type="text/css">
          .login-page, .register-page {
               background: #d2d6de;
          }

     </style>
</head>


<body class="login-page">

<div class="login-box">
     <div class="login-logo">
          <a href=""><b>Login</b> Panel</a>
     </div>
     <!-- /.login-logo -->
     <div class="login-box-body">
          <p class="login-box-msg">Sign in with your credentials below</p>

          <form action="<?php echo base_url();?>Project" method="post">
               <div class="form-group has-feedback">
                    
                    <input class="form-control" id="admin_email" name="admin_email" placeholder="Enter Your Email" autocomplete="off" type="email" value="<?php /*echo set_value('contact_email'); */?>" required/>
                    <span class="text-danger"><?php echo form_error('admin_email');?></span>

               </div>

               <div class="form-group has-feedback">
                    <input class="form-control" id="admin_password" name="admin_password" placeholder="Enter Your Password" type="password" value="<?php /*echo set_value('contact_password'); */?>"  required/>
                    <span class="text-danger"><?php echo form_error('admin_password');?></span>
               </div>

               <div class="row">
                    <div class="inp" style="text-align: center;">
                         <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary" value="Login" />
                    </div> 
               </div> 
               <?php if($this->session->flashdata('msg')){ ?>
               <br>
               <div class="form-group">
               <div class="alert alert-danger">
                   <?php echo $this->session->flashdata('msg'); ?>
                  </div>
                  </div>
               <?php } ?>
          </form>

<!--


          <a href="register.html" class="text-center">Register as a new member</a>
 -->
     </div>
     <!-- /.login-box-body -->
</div>


<!--<div class="container">
     <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
               <div class="navbar-header">
                    <a class="navbar-brand" href=".">Property Haven</a>
               </div>
          </div>
     </nav>

     <div class="page-header"> <h3>Contact Login!</h3></div>

</div>

<div class="container" id="con">
     <div class="roww">
          <div class="col-lg-4 col-sm-4 well">
          <?php
/*          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
echo form_open("login", $attributes);
 */?>
          <fieldset class="cen">

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4">
                    <label for="post_username" class="control-label">Email</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="contact_email" name="contact_email" placeholder="Enter Your Email" type="email" value="<?php /*echo set_value('contact_email'); */?>" />
                    <span class="text-danger"><?php /*echo form_error('contact_email'); */?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4">
               <label for="post_password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="contact_password" name="contact_password" placeholder="Enter Your Password" type="password" value="<?php /*echo set_value('contact_password'); */?>" />
                    <span class="text-danger"><?php /*echo form_error('contact_password'); */?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
               </div>
               </div>
          </fieldset>
          <?php /*echo form_close(); */?>
          <?php /*echo $this->session->flashdata('msg'); */?>
          </div>

     </div>



</div>
-->

<!--load jQuery library-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--load bootstrap.js-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
