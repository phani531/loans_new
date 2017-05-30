<style>
.help-block{
    color:white;
    font-size:12px;
}
</style>
<section id="authenty_preview">
   	<section id="signin_main" class="authenty signin-main">
                <div class="section-content">
                  <div class="wrap">
                      <div class="container">     
                            <div class="form-wrap">
                                <div class="row">
                                    <div class="form-wrap animated fadeInUp" data-animation="fadeInUp" 
                                    data-animation-delay=".8s" style="animation-delay: 0.8s;">
                                          <div class="title hidden-sm hidden-xs">
                                            <h1>FINMAN</h1>
                                            <h5>Finance made easy</h5>
                                            <div class="overlay"></div>
                                          </div>
                                        <div id="form_1" data-animation="bounceIn">
                                        	<form action="<?php echo base_url(); ?>index.php/login/process" method="post" id="loginSubmit">
    	                                       
                                          		<div class="form-main">
    	                                          	<div class="form-group">
    	                                            	<input type="text" id="un_1" class="form-control" name="user" placeholder="Username" required="required">
    	                                                <input type="password" id="pw_1" class="form-control" name="pass" placeholder="Password" required="required">
    	                                          	</div>
                                            	<input id="signIn_1" type="submit" value="Sign In" class="btn btn-block signin">
                                          	</form>
                                        </div>
                                        <div class="form-footer">
                                            <div class="row">
                                                <div class="col-xs-7">
                                                    <i class="fa fa-unlock-alt"></i>
                                                    <a href="#password_recovery" id="forgot_from_1">Forgot password?</a>
                                                </div>
                                                <div class="col-xs-5">
                                                    <i class="fa fa-check"></i>
                                                    <a href="#signup_window" id="signup_from_1">Sign Up</a>
                                                </div>
                                            </div>
                                        </div>      
                                  </div>
                              </div>
                                </div>
                            </div>
                      </div>
                  </div>
                </div>
            </section>
            <section id="signup_window" class="authenty signup-window">
                <div class="section-content">
                    <div class="wrap">
                        <div class="container">
                            <div class="row form-wrap" data-animation="bounceIn">
                                <i class="fa fa-times-circle"></i>
                                <div class="title">
                                    <h3>Create an account</h3>
                                    <?php 
                                                if(!empty($this->session->flashdata('msg'))){
                                                    echo "<div class='message alert-danger'>";
                                                    echo $this->session->flashdata('msg');
                                                    echo "</div>";
                                                     //echo validation_errors('<div class="error">', '</div>'); 
                                                } 
                                        ?>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-4 col-md-offset-1">
                                    <div class="sns-signin">
                                        <a class="btn btn-primary" href="#">
                                          <i class="fa fa-facebook"></i>Sign in via Facebook</a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-2 col-sm-1">
                                    <div class="horizontal-divider"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="normal-signup">
                                         
                                        <form action="<?php echo base_url(); ?>index.php/login/register" method="post">
                                          <div class="form-group">
                                            <input type="text" name="fname" class="form-control" placeholder="First Name" required="required">
                                            <?php echo form_error('First Name','<span class="help-block">','</span>'); ?>
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required="required">
                                            <?php echo form_error('lname','<span class="help-block">','</span>'); ?>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                                            <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                                            <input type="text" name="cpassword" class="form-control" placeholder="Confirm Password" required="required">
                                            <?php echo form_error('cpassword','<span class="help-block">','</span>'); ?>
                                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                                            <?php echo form_error('phone','<span class="help-block">','</span>'); ?>
                                          </div>
                                            <div class="row">
                                                <div class="col-md-5 col-md-offset-7">
                                                    <button type="submit" class="btn btn-block signup">Sign Up</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="password_recovery" class="authenty password-recovery">
                <div class="section-content">
                    <div class="wrap">
                        <div class="container">
                            <div class="form-wrap">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3 brand" data-animation="fadeInUp">
                                        <h2>FINMAN</h2>
                                        <p>Finance made easy</p>
                                    </div>
                                    <div class="col-sm-1 hidden-xs">
                                        <div class="horizontal-divider"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 main" data-animation="fadeInLeft" data-animation-delay=".5s">
                                        <h2>Forgot your password?</h2>
                                        <p style="font-size:12px;">Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.</p>
                                        <form action="<?php echo base_url(); ?>index.php/login/forgot_password" method="post">
                                            <?php if($this->session->flashdata('message')){ 
                                               echo $this->session->flashdata('message');
                                             } ?>
                                          <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                                          </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4 col-sm-offset-8">
                                                    <input type="submit" value="Reset Password" class="btn btn-block reset">
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</section>  
        
      
    