<section id="authenty_preview">
   	<section id="signin_main" class="authenty signin-main">
                <div class="section-content">
                  <div class="wrap">
                      <div class="container">     
                            <div class="form-wrap">
                                <div class="row">
                                  <div class="title" data-animation="fadeInDown" data-animation-delay=".8s">
                                      <h1>Authenty</h1>
                                      <h5>Authentication made beautiful</h5>
                                      <?php 
	                                    if(!empty($this->session->flashdata('disp_msg'))){
	                                        echo "<div class='message alert-success'>";
	                                        echo $this->session->flashdata('disp_msg');
	                                        echo "</div>";
	                                    } 
	                                  ?>
                                  </div>
                                    <div id="form_1" data-animation="bounceIn">
                                    	<form action="<?php echo base_url(); ?>index.php/login/new_password" method="post" id="loginSubmit">
	                                        <div class="form-header">
	                                          <i class="fa fa-user"></i>
	                                      	</div>
                                      		<div class="form-main">
	                                          	<div class="form-group">
                                                    <input type="text" id="un_1" class="form-control" name="code" placeholder="Code" required="required">
	                                            	<input type="text" id="un_1" class="form-control" name="email" placeholder="Email" required="required">
	                                                <input type="password" id="pw_1" class="form-control" name="password1" placeholder="Password" required="required">
                                                    <input type="password" id="pw_1" class="form-control" name="password2" placeholder="Confirm Password" required="required">
                                                </div>
                                        	<input id="signIn_1" type="submit" value="Create" class="btn btn-block signin">
                                      	</form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                      </div>
                  </div>
                </div>
            </section>
</section>  
        
      
    