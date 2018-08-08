<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Edumu CMS</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?= base_url('assets/backend/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?= base_url('assets/backend/css/bootstrap-responsive.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/backend/css/maruti-login.css') ?>" />
        <link href="<?= base_url('assets/backend/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
        <?php echo $script_captcha; // javascript recaptcha ?>
    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post">
				<div class="control-group normal_text"> <h3>Edumu CMS</h3></div>
                <?php echo $this->session->userdata('msg'); unset($_SESSION); ?>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="fa fa-user"></i></span><input type="text" name="AdmUsr" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="fa fa-lock"></i></span><input type="password" name="AdmPswd" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                           <center><?php echo $captcha // tampilkan recaptcha ?></center>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-inverse" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" name="LogAdmin" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-inverse" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="Recover" /></span>
                </div>
            </form>
        </div>
        <?php if ($hasil=='berhasil'): ?>
        <script>
            location='<?php echo base_url("mastercms/home"); ?>';
        </script>
        <?php endif ?>
        
        <script src="<?= base_url('assets/backend/js/jquery.min.js') ?>"></script>  
        <script src="<?= base_url('assets/backend/js/maruti.login.js') ?>"></script> 
    </body>

</html>