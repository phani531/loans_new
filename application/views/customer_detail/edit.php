<style>
@media (min-width: 768px){
.form-horizontal .control-label {
		text-align:left;
	}
	.btn-success{
		margin-left:50px;
	}
	.box.box-info {
		border-top-color: none;
	    border-left-color: #00c0ef;
	    padding:25px;
	}
	.box-header.with-border{
		margin-bottom:10px;
	}
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 400;
    padding: 0px;
    font-size: 12px;
}
.box{
	box-shadow:0px 0px 0px 0px;
}
.form-control{
	width:80%;
}
.profile-img-container {
  position: absolute;
  /*width:50%;*/
  /*border-radius:50%;*/
  overflow:hidden;
}

.profile-img-container img:hover {
  opacity: 0.5;
  z-index: 501;
}

.profile-img-container img:hover + i {
  display: block;
  z-index: 500;
}

.profile-img-container .icon-wrapper {
  position: absolute;
  bottom:0;
  left:0;
  background:rgba(0,0,0,0.7);
  color:#fff;
  text-align:center;
  width:100%;
  padding:5px;
}

/*.profile-img-container img {
position:absolute;
}*/

/*.profile-img-container {
  position:relative;
}*/

input[type="file"] {
  opacity:0;
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
}
.btn-box-tool{
	border: 0px;
	margin-top:-5px;
}
.tab-pane{
	background-color: #fff;
}
</style>

<div class="row">
    <div class="col-md-12">
    <?php echo validation_errors(); ?>
			<?php echo form_open('customer_detail/edit/'.$customer_detail['CUSTOMER_ID'],array("class"=>"form-horizontal")); ?>
			<div class="col-md-2" style="float:right;margin-top: 4px;">
				<select name="CUSTOMER_TYPE" class="form-control">
					<option value="">select</option>
						<?php $CUSTOMER_TYPE_values = array(
							'1'=>'Individual',
							'2'=>'Company',
						);
					foreach($CUSTOMER_TYPE_values as $value => $display_text){
						$selected = ($value == $customer_detail['CUSTOMER_TYPE']) ? ' selected="selected"' : "";
						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} ?>
				</select>
			</div>
	 <!-- Custom Tabs -->
      <div class="nav-tabs-custom">
         <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Customer Info</a></li>
            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Customer Additional Info</a></li>
            <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Spouse Info</a></li>
            <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Gurantor Info</a></li>
            <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Verification Info</a></li>
            <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">Other Information</a></li>
            <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false">References</a></li>
            <li class=""><a href="#tab_8" data-toggle="tab" aria-expanded="false">Docs</a></li>
         </ul>
      </div>
         <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
            	<div class="row">
                  	<div class="col-md-12">
				      	<div class="box box-info">
				            <div class="box-header with-border">
				              	<h3 class="box-title">Customer Information</h3>
				            </div>
							<div class="box-body">
							 	<div class="col-md-5" style="padding:0px;">
	                              	<div class="box box-primary col-md-offset-5" style="border-radius:0px;height:130px;box-shadow:none;border:0px;">
							            <div class="box-body box-profile" style="border:0px;">
								            <div class="profile-img-container img-circle">
		  										<input type="file" />
								              	<img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/default-user.png" alt="User profile picture">
											</div>
							            </div>
							            <!-- /.box-body -->
							        </div>
						    			<div class="col-md-12 col-md-offset-1">	
								
											<div class="form-group">
												<label for="CUSTOMER_IDNO" class="col-md-4 control-label">CUSTOMER IDNO</label>
												<div class="col-md-8">
													<input type="text" name="CUSTOMER_IDNO" value="<?php echo ($this->input->post('CUSTOMER_IDNO') ? $this->input->post('CUSTOMER_IDNO') : $customer_detail['CUSTOMER_IDNO']); ?>" class="form-control" id="CUSTOMER_IDNO" />
												</div>
											</div>
											<div class="form-group">
												<label for="CUSTOMER_NAME" class="col-md-4 control-label">CUSTOMER NAME</label>
												<div class="col-md-8">
													<input type="text" name="CUSTOMER_NAME" value="<?php echo ($this->input->post('CUSTOMER_NAME') ? $this->input->post('CUSTOMER_NAME') : $customer_detail['CUSTOMER_NAME']); ?>" class="form-control" id="CUSTOMER_NAME" />
												</div>
											</div>
											<div class="form-group">
												<label for="DOB" class="col-md-4 control-label">DOB</label>
												<div class="col-md-8">
													<input type="text" name="DOB" value="<?php echo ($this->input->post('DOB') ? $this->input->post('DOB') : $customer_detail['DOB']); ?>" class="form-control" id="DOB" />
												</div>
											</div>
											<div class="form-group">
												<label for="AGE" class="col-md-4 control-label">AGE</label>
												<div class="col-md-8">
													<input type="text" name="AGE" value="<?php echo ($this->input->post('AGE') ? $this->input->post('AGE') : $customer_detail['AGE']); ?>" class="form-control" id="AGE" />
												</div>
											</div>
											<div class="form-group">
													<label for="GENDER" class="col-md-4 control-label">GENDER</label>
													<div class="col-md-8">
														<select name="GENDER" class="form-control">
															<option value="">select</option>
															<?php 
															$GENDER_values = array(
												'1'=>'Male',
												'2'=>'Female',
											);

															foreach($GENDER_values as $value => $display_text)
															{
																$selected = ($value == $customer_detail['GENDER']) ? ' selected="selected"' : "";

																echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
															} 
															?>
														</select>
													</div>
												</div>
											<div class="form-group">
													<label for="HOUSESTATUS_ID" class="col-md-4 control-label">HOUSESTATUS ID</label>
													<div class="col-md-8">
														<select name="HOUSESTATUS_ID" class="form-control">
															<option value="">select</option>
															<?php 
															$HOUSESTATUS_ID_values = array(
												'1'=>'Own',
												'2'=>'Rented',
											);

															foreach($HOUSESTATUS_ID_values as $value => $display_text)
															{
																$selected = ($value == $customer_detail['HOUSESTATUS_ID']) ? ' selected="selected"' : "";

																echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
															} 
															?>
														</select>
													</div>
												</div>
											<div class="form-group">
													<label for="MARTIAL_STATUS" class="col-md-4 control-label">MARTIAL STATUS</label>
													<div class="col-md-8">
														<select name="MARTIAL_STATUS" class="form-control">
															<option value="">select</option>
															<?php 
															$MARTIAL_STATUS_values = array(
												'1'=>'Unmarried',
												'2'=>'Married',
												'3'=>'Divorced',
												'4'=>'Widowed',
											);

															foreach($MARTIAL_STATUS_values as $value => $display_text)
															{
																$selected = ($value == $customer_detail['MARTIAL_STATUS']) ? ' selected="selected"' : "";

																echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
															} 
															?>
														</select>
													</div>
												</div>
											<div class="form-group">
												<label for="EMAIL_ID" class="col-md-4 control-label">EMAIL ID</label>
												<div class="col-md-8">
													<input type="text" name="EMAIL_ID" value="<?php echo ($this->input->post('EMAIL_ID') ? $this->input->post('EMAIL_ID') : $customer_detail['EMAIL_ID']); ?>" class="form-control" id="EMAIL_ID" />
												</div>
											</div>
										</div>
									</div>
								<div class="box-body col-md-6 col-md-offset-1" style="border-left:1px solid #00c0ef;padding-left:30px;">
									<div class="form-group">
										<label for="FILE_NO" class="col-md-4 control-label">FILE NO</label>
										<div class="col-md-8">
											<input type="text" name="FILE_NO" value="<?php echo ($this->input->post('FILE_NO') ? $this->input->post('FILE_NO') : $customer_detail['FILE_NO']); ?>" class="form-control" id="FILE_NO" />
										</div>
									</div>
									<div class="form-group">
										<label for="OLDIC_NO" class="col-md-4 control-label">OLDIC NO</label>
										<div class="col-md-8">
											<input type="text" name="OLDIC_NO" value="<?php echo ($this->input->post('OLDIC_NO') ? $this->input->post('OLDIC_NO') : $customer_detail['OLDIC_NO']); ?>" class="form-control" id="OLDIC_NO" />
										</div>
									</div>
									<div class="form-group">
										<label for="NON_ICNO" class="col-md-4 control-label">NON ICNO</label>
										<div class="col-md-8">
											<input type="text" name="NON_ICNO" value="<?php echo ($this->input->post('NON_ICNO') ? $this->input->post('NON_ICNO') : $customer_detail['NON_ICNO']); ?>" class="form-control" id="NON_ICNO" />
										</div>
									</div>
									<div class="form-group">
										<label for="APPLICATION_DATE" class="col-md-4 control-label">APPLICATION DATE</label>
										<div class="col-md-8">
											<input type="text" name="APPLICATION_DATE" value="<?php echo ($this->input->post('APPLICATION_DATE') ? $this->input->post('APPLICATION_DATE') : $customer_detail['APPLICATION_DATE']); ?>" class="form-control" id="APPLICATION_DATE" />
										</div>
									</div>
									<div class="form-group">
											<label for="AGENT_ID" class="col-md-4 control-label">AGENT ID</label>
											<div class="col-md-8">
												<select name="AGENT_ID" class="form-control">
													<option value="">select masters_agent_info</option>
													<?php 
													foreach($all_masters_agent_info as $masters_agent_info)
													{
														$selected = ($masters_agent_info['AGENT_ID'] == $customer_detail['AGENT_ID']) ? ' selected="selected"' : "";

														echo '<option value="'.$masters_agent_info['AGENT_ID'].'" '.$selected.'>'.$masters_agent_info['AGENT_NAME'].'</option>';
													} 
													?>
												</select>
											</div>
										</div>
									<div class="form-group">
										<label for="VEHICLE_NO" class="col-md-4 control-label">VEHICLE NO</label>
										<div class="col-md-8">
											<input type="text" name="VEHICLE_NO" value="<?php echo ($this->input->post('VEHICLE_NO') ? $this->input->post('VEHICLE_NO') : $customer_detail['VEHICLE_NO']); ?>" class="form-control" id="VEHICLE_NO" />
										</div>
									</div>
									<div class="form-group">
										<label for="RELATED_TO_EMP" class="col-md-4 control-label">RELATED TO EMP</label>
										<div class="col-md-8">
											<input type="text" name="RELATED_TO_EMP" value="<?php echo ($this->input->post('RELATED_TO_EMP') ? $this->input->post('RELATED_TO_EMP') : $customer_detail['RELATED_TO_EMP']); ?>" class="form-control" id="RELATED_TO_EMP" />
										</div>
									</div>
									<div class="form-group">
										<label for="ADVERTISEMENT_ID" class="col-md-4 control-label">ADVERTISEMENT ID</label>
										<div class="col-md-8">
											<select name="ADVERTISEMENT_ID" class="form-control">
												<option value="">select masters_advertisement</option>
												<?php 
												foreach($all_masters_advertisements as $masters_advertisement)
												{
													$selected = ($masters_advertisement['ADVERTISEMENT_ID'] == $customer_detail['ADVERTISEMENT_ID']) ? ' selected="selected"' : "";

													echo '<option value="'.$masters_advertisement['ADVERTISEMENT_ID'].'" '.$selected.'>'.$masters_advertisement['ADVERTISEMENT_NAME'].'</option>';
												} 
												?>
											</select>
										</div>
									</div>
					
									<div class="form-group">
										<label for="COMPANY_ID" class="col-md-4 control-label">COMPANY ID</label>
											<div class="col-md-8">
												<select name="COMPANY_ID" class="form-control">
													<option value="">select administration_comp_profile</option>
													<?php 
													foreach($all_administration_comp_profile as $administration_comp_profile)
													{
														$selected = ($administration_comp_profile['BRANCH_ID'] == $customer_detail['COMPANY_ID']) ? ' selected="selected"' : "";

														echo '<option value="'.$administration_comp_profile['BRANCH_ID'].'" '.$selected.'>'.$administration_comp_profile['BRANCH_NAME'].'</option>';
													} 
													?>
												</select>
											</div>
										</div>
										<div class="form-group">
												<label for="APPLIED_BRANCH_ID" class="col-md-4 control-label">APPLIED BRANCH ID</label>
												<div class="col-md-8">
													<input type="text" name="APPLIED_BRANCH_ID" value="<?php echo ($this->input->post('APPLIED_BRANCH_ID') ? $this->input->post('APPLIED_BRANCH_ID') : $customer_detail['APPLIED_BRANCH_ID']); ?>" class="form-control" id="APPLIED_BRANCH_ID" />
												</div>
											</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			 <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
               <div class="row" style="padding-bottom:10px;">
                  <div class="col-md-6" style="padding-right:0px;">
                     <div class="box box-info" style="padding-right:0px;">
                        <div class="box-header with-border">
                           <h3 class="box-title">Working Information</h3>
                        </div>
                        <div class="col-md-12" style="padding-right:0px;border-right: 1px solid #00c0ef;">
	         		
							<div class="form-group">
								<label for="OCCUPATION_DEPT_NAME" class="col-md-4 control-label">OCCUPATION DEPT NAME</label>
								<div class="col-md-8">
									<input type="text" name="OCCUPATION_DEPT_NAME" value="<?php echo ($this->input->post('OCCUPATION_DEPT_NAME') ? $this->input->post('OCCUPATION_DEPT_NAME') : $customer_detail['OCCUPATION_DEPT_NAME']); ?>" class="form-control" id="OCCUPATION_DEPT_NAME" />
								</div>
							</div>
							<div class="form-group">
									<label for="RACE_ID" class="col-md-4 control-label">RACE ID</label>
									<div class="col-md-8">
										<select name="RACE_ID" class="form-control">
											<option value="">select masters_race</option>
											<?php 
											foreach($all_masters_race as $masters_race)
											{
												$selected = ($masters_race['RACE_ID'] == $customer_detail['RACE_ID']) ? ' selected="selected"' : "";

												echo '<option value="'.$masters_race['RACE_ID'].'" '.$selected.'>'.$masters_race['RACE_NAME'].'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							<div class="form-group">
								<label for="PRESENT_SALARY" class="col-md-4 control-label">PRESENT SALARY</label>
								<div class="col-md-8">
									<input type="text" name="PRESENT_SALARY" value="<?php echo ($this->input->post('PRESENT_SALARY') ? $this->input->post('PRESENT_SALARY') : $customer_detail['PRESENT_SALARY']); ?>" class="form-control" id="PRESENT_SALARY" />
								</div>
							</div>
							<div class="form-group">
								<label for="JOBSECTOR_ID" class="col-md-4 control-label">JOBSECTOR ID</label>
								<div class="col-md-8">
									<input type="text" name="JOBSECTOR_ID" value="<?php echo ($this->input->post('JOBSECTOR_ID') ? $this->input->post('JOBSECTOR_ID') : $customer_detail['JOBSECTOR_ID']); ?>" class="form-control" id="JOBSECTOR_ID" />
								</div>
							</div>
							<div class="form-group">
								<label for="YEARS_OR_SERVICE_YEARS" class="col-md-4 control-label">YEARS OR SERVICE YEARS</label>
								<div class="col-md-8">
									<input type="text" name="YEARS_OR_SERVICE_YEARS" value="<?php echo ($this->input->post('YEARS_OR_SERVICE_YEARS') ? $this->input->post('YEARS_OR_SERVICE_YEARS') : $customer_detail['YEARS_OR_SERVICE_YEARS']); ?>" class="form-control" id="YEARS_OR_SERVICE_YEARS" />
								</div>
							</div>
							<div class="form-group">
								<label for="YEARS_OR_SERVICE_MONTHS" class="col-md-4 control-label">YEARS OR SERVICE MONTHS</label>
								<div class="col-md-8">
									<input type="text" name="YEARS_OR_SERVICE_MONTHS" value="<?php echo ($this->input->post('YEARS_OR_SERVICE_MONTHS') ? $this->input->post('YEARS_OR_SERVICE_MONTHS') : $customer_detail['YEARS_OR_SERVICE_MONTHS']); ?>" class="form-control" id="YEARS_OR_SERVICE_MONTHS" />
								</div>
							</div>
							<div class="form-group">
								<label for="CREDIT_LIMIT" class="col-md-4 control-label">CREDIT LIMIT</label>
								<div class="col-md-8">
									<input type="text" name="CREDIT_LIMIT" value="<?php echo ($this->input->post('CREDIT_LIMIT') ? $this->input->post('CREDIT_LIMIT') : $customer_detail['CREDIT_LIMIT']); ?>" class="form-control" id="CREDIT_LIMIT" />
								</div>
							</div>
						</div>
					 </div>
				   </div>
				  <div class="col-md-6" style="padding-left:0px;">
                     <div class="box box-info" style="padding-left:0px;">
                        <div class="box-header with-border">
                           <h3 class="box-title">Customer Account Information</h3>
                        </div>
                        <div class="col-md-12" style="padding-left:30px;">
                        	<div class="form-group">
								<label for="BANK_ID" class="col-md-4 control-label">BANK ID</label>
								<div class="col-md-8">
									<select name="BANK_ID" class="form-control">
										<option value="">select masters_cust_bank</option>
										<?php 
										foreach($all_masters_cust_bank as $masters_cust_bank)
										{
											$selected = ($masters_cust_bank['BANK_ID'] == $customer_detail['BANK_ID']) ? ' selected="selected"' : "";

											echo '<option value="'.$masters_cust_bank['BANK_ID'].'" '.$selected.'>'.$masters_cust_bank['BANK_NAME'].'</option>';
										} 
										?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="BANK_ACCOUNTNO" class="col-md-4 control-label">BANK ACCOUNTNO</label>
								<div class="col-md-8">
									<input type="text" name="BANK_ACCOUNTNO" value="<?php echo ($this->input->post('BANK_ACCOUNTNO') ? $this->input->post('BANK_ACCOUNTNO') : $customer_detail['BANK_ACCOUNTNO']); ?>" class="form-control" id="BANK_ACCOUNTNO" />
								</div>
							</div>
							<div class="form-group">
								<label for="BANK_ATM_CARD_NO" class="col-md-4 control-label">BANK ATM CARD NO</label>
								<div class="col-md-8">
									<input type="text" name="BANK_ATM_CARD_NO" value="<?php echo ($this->input->post('BANK_ATM_CARD_NO') ? $this->input->post('BANK_ATM_CARD_NO') : $customer_detail['BANK_ATM_CARD_NO']); ?>" class="form-control" id="BANK_ATM_CARD_NO" />
								</div>
							</div>
							<div class="form-group">
								<label for="BANK_ATM_CARD_PIN_NO" class="col-md-4 control-label">BANK ATM CARD PIN NO</label>
								<div class="col-md-8">
									<input type="text" name="BANK_ATM_CARD_PIN_NO" value="<?php echo ($this->input->post('BANK_ATM_CARD_PIN_NO') ? $this->input->post('BANK_ATM_CARD_PIN_NO') : $customer_detail['BANK_ATM_CARD_PIN_NO']); ?>" class="form-control" id="BANK_ATM_CARD_PIN_NO" />
								</div>
							</div>
							<div class="form-group">
								<label for="BANK_ATM_CARD_VALIDITY" class="col-md-4 control-label">BANK ATM CARD VALIDITY</label>
								<div class="col-md-8">
									<input type="text" name="BANK_ATM_CARD_VALIDITY" value="<?php echo ($this->input->post('BANK_ATM_CARD_VALIDITY') ? $this->input->post('BANK_ATM_CARD_VALIDITY') : $customer_detail['BANK_ATM_CARD_VALIDITY']); ?>" class="form-control" id="BANK_ATM_CARD_VALIDITY" />
								</div>
							</div>
						</div>
					 </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="padding-right:0px;">
                     <div class="box box-info" style="border-top-color: #eee;">
                        <div class="box-header with-border">
                           <h3 class="box-title">Customer Internet Banking Details</h3>
                        </div>
                        <div class="col-md-12" style="padding-right:0px;border-right: 1px solid #00c0ef;margin-left: 23px;padding-left: 0px;">
	                     
							<div class="form-group">
								<label for="INTERNET_BANKING_USER_NAME" class="col-md-4 control-label">INTERNET BANKING USER NAME</label>
								<div class="col-md-8">
									<input type="text" name="INTERNET_BANKING_USER_NAME" value="<?php echo ($this->input->post('INTERNET_BANKING_USER_NAME') ? $this->input->post('INTERNET_BANKING_USER_NAME') : $customer_detail['INTERNET_BANKING_USER_NAME']); ?>" class="form-control" id="INTERNET_BANKING_USER_NAME" />
								</div>
							</div>
							<div class="form-group">
								<label for="INTERNET_BANKING_PASSWORD" class="col-md-4 control-label">INTERNET BANKING PASSWORD</label>
								<div class="col-md-8">
									<input type="text" name="INTERNET_BANKING_PASSWORD" value="<?php echo ($this->input->post('INTERNET_BANKING_PASSWORD') ? $this->input->post('INTERNET_BANKING_PASSWORD') : $customer_detail['INTERNET_BANKING_PASSWORD']); ?>" class="form-control" id="INTERNET_BANKING_PASSWORD" />
								</div>
							</div>
						</div>
					  </div>
				  </div>
				  <div class="col-md-6" style="padding-left:0px;">
                     <div class="box box-info" style="border-top-color: #eee;">
                        <div class="box-header with-border">
                           <h3 class="box-title">Another Account Information</h3>
                        </div>
                        <div class="col-md-12" style="padding-right:0px;">
	                
							<div class="form-group">
								<label for="MONEY_DEPOSIT_BANK_ID" class="col-md-4 control-label">MONEY DEPOSIT BANK ID</label>
								<div class="col-md-8">
									<input type="text" name="MONEY_DEPOSIT_BANK_ID" value="<?php echo ($this->input->post('MONEY_DEPOSIT_BANK_ID') ? $this->input->post('MONEY_DEPOSIT_BANK_ID') : $customer_detail['MONEY_DEPOSIT_BANK_ID']); ?>" class="form-control" id="MONEY_DEPOSIT_BANK_ID" />
								</div>
							</div>
							<div class="form-group">
								<label for="MONEY_DEPOSIT_ACCOUNT_NO" class="col-md-4 control-label">MONEY DEPOSIT ACCOUNT NO</label>
								<div class="col-md-8">
									<input type="text" name="MONEY_DEPOSIT_ACCOUNT_NO" value="<?php echo ($this->input->post('MONEY_DEPOSIT_ACCOUNT_NO') ? $this->input->post('MONEY_DEPOSIT_ACCOUNT_NO') : $customer_detail['MONEY_DEPOSIT_ACCOUNT_NO']); ?>" class="form-control" id="MONEY_DEPOSIT_ACCOUNT_NO" />
								</div>
							</div>
							<div class="form-group">
								<label for="MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME" class="col-md-4 control-label">MONEY DEPOSIT ACCOUNT HOLDER NAME</label>
								<div class="col-md-8">
									<input type="text" name="MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME" value="<?php echo ($this->input->post('MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME') ? $this->input->post('MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME') : $customer_detail['MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME']); ?>" class="form-control" id="MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME" />
								</div>
							</div>
						</div>
					 </div>
				  </div>
				</div>
			</div>
			 <div class="tab-pane" id="tab_3">
                <div class="row">
                	<div class="col-md-12">
                		<div class="col-md-6" style="padding:0px;">
	                     	<div class="box box-info" style="padding-right:0px;">
		                        <div class="box-header with-border">
		                           <h3 class="box-title">Spouse Information</h3>
		                        </div>
		                        <div class="col-md-12" style="padding:0px;">
			                        <div class="col-md-5"></div>
			                    	<div class="box box-primary col-md-6" style="border-radius:0px;height:130px;box-shadow:none;border:0px;border-right:1px solid #00c0ef;margin-bottom:0px;">
										<div class="box-body box-profile" style="border:0px;">
											<div class="profile-img-container img-circle" style="margin:0 40%;">
					  							<input type="file" />
											    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/default-user.png" alt="User profile picture">
											</div>
										</div>
										<!-- /.box-body -->
									</div>
								</div>
								<div class="col-md-12" style="border-right:1px solid #00c0ef;">
									<div class="form-group">
										<label for="SPOUSE_IDNO" class="col-md-4 control-label">SPOUSE IDNO</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_IDNO" value="<?php echo ($this->input->post('SPOUSE_IDNO') ? $this->input->post('SPOUSE_IDNO') : $customer_detail['SPOUSE_IDNO']); ?>" class="form-control" id="SPOUSE_IDNO" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_NAME" class="col-md-4 control-label">SPOUSE NAME</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_NAME" value="<?php echo ($this->input->post('SPOUSE_NAME') ? $this->input->post('SPOUSE_NAME') : $customer_detail['SPOUSE_NAME']); ?>" class="form-control" id="SPOUSE_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_FATHERS_NAME" class="col-md-4 control-label">SPOUSE FATHERS NAME</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_FATHERS_NAME" value="<?php echo ($this->input->post('SPOUSE_FATHERS_NAME') ? $this->input->post('SPOUSE_FATHERS_NAME') : $customer_detail['SPOUSE_FATHERS_NAME']); ?>" class="form-control" id="SPOUSE_FATHERS_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_MOTHERS_NAME" class="col-md-4 control-label">SPOUSE MOTHERS NAME</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_MOTHERS_NAME" value="<?php echo ($this->input->post('SPOUSE_MOTHERS_NAME') ? $this->input->post('SPOUSE_MOTHERS_NAME') : $customer_detail['SPOUSE_MOTHERS_NAME']); ?>" class="form-control" id="SPOUSE_MOTHERS_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_EMAILID" class="col-md-4 control-label">SPOUSE EMAILID</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_EMAILID" value="<?php echo ($this->input->post('SPOUSE_EMAILID') ? $this->input->post('SPOUSE_EMAILID') : $customer_detail['SPOUSE_EMAILID']); ?>" class="form-control" id="SPOUSE_EMAILID" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_HOME_PHONE" class="col-md-4 control-label">SPOUSE HOME PHONE</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_HOME_PHONE" value="<?php echo ($this->input->post('SPOUSE_HOME_PHONE') ? $this->input->post('SPOUSE_HOME_PHONE') : $customer_detail['SPOUSE_HOME_PHONE']); ?>" class="form-control" id="SPOUSE_HOME_PHONE" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_HAND_PHONE" class="col-md-4 control-label">SPOUSE HAND PHONE</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_HAND_PHONE" value="<?php echo ($this->input->post('SPOUSE_HAND_PHONE') ? $this->input->post('SPOUSE_HAND_PHONE') : $customer_detail['SPOUSE_HAND_PHONE']); ?>" class="form-control" id="SPOUSE_HAND_PHONE" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_ADDRESS" class="col-md-4 control-label">SPOUSE ADDRESS</label>
										<div class="col-md-8">
											<textarea name="SPOUSE_ADDRESS" class="form-control" id="SPOUSE_ADDRESS"><?php echo ($this->input->post('SPOUSE_ADDRESS') ? $this->input->post('SPOUSE_ADDRESS') : $customer_detail['SPOUSE_ADDRESS']); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
										<label for="SPOUSE_ADDRESS" class="col-md-4 control-label">SPOUSE ADDRESS</label>
										<div class="col-md-8">
											<textarea class="form-control" id="SPOUSE_ADDRESS"><?php echo ($this->input->post('SPOUSE_ADDRESS') ? $this->input->post('SPOUSE_ADDRESS') : $customer_detail['SPOUSE_ADDRESS']); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
										<label for="SPOUSE_ADDRESS" class="col-md-4 control-label">SPOUSE ADDRESS</label>
										<div class="col-md-8">
											<textarea class="form-control" id="SPOUSE_ADDRESS"><?php echo ($this->input->post('SPOUSE_ADDRESS') ? $this->input->post('SPOUSE_ADDRESS') : $customer_detail['SPOUSE_ADDRESS']); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
										<label for="SPOUSE_ADDRESS" class="col-md-4 control-label">SPOUSE ADDRESS</label>
										<div class="col-md-8">
											<textarea class="form-control" id="SPOUSE_ADDRESS"><?php echo ($this->input->post('SPOUSE_ADDRESS') ? $this->input->post('SPOUSE_ADDRESS') : $customer_detail['SPOUSE_ADDRESS']); ?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
 						<div class="col-md-6" style="padding-left:0px;">							 	
	 						<div class="box box-info" style="padding-left:0px;">
				                <div class="box-header with-border">
				                    <h3 class="box-title">Other Information</h3>
				                </div>
				                <div class="col-md-11 col-md-offset-1" style="padding-left:10px;">

									<div class="form-group">
										<label for="SPOUSE_DOB" class="col-md-4 control-label">SPOUSE DOB</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_DOB" value="<?php echo ($this->input->post('SPOUSE_DOB') ? $this->input->post('SPOUSE_DOB') : $customer_detail['SPOUSE_DOB']); ?>" class="form-control" id="SPOUSE_DOB" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_AGE" class="col-md-4 control-label">SPOUSE AGE</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_AGE" value="<?php echo ($this->input->post('SPOUSE_AGE') ? $this->input->post('SPOUSE_AGE') : $customer_detail['SPOUSE_AGE']); ?>" class="form-control" id="SPOUSE_AGE" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_NO_OF_CHILDREN" class="col-md-4 control-label">SPOUSE NO OF CHILDREN</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_NO_OF_CHILDREN" value="<?php echo ($this->input->post('SPOUSE_NO_OF_CHILDREN') ? $this->input->post('SPOUSE_NO_OF_CHILDREN') : $customer_detail['SPOUSE_NO_OF_CHILDREN']); ?>" class="form-control" id="SPOUSE_NO_OF_CHILDREN" />
										</div>
									</div>
									<div class="form-group">
											<label for="SPOUSE_GENDER" class="col-md-4 control-label">SPOUSE GENDER</label>
											<div class="col-md-8">
												<select name="SPOUSE_GENDER" class="form-control">
													<option value="">select</option>
													<?php 
													$SPOUSE_GENDER_values = array(
										'1'=>'Male',
										'2'=>'Female',
									);

													foreach($SPOUSE_GENDER_values as $value => $display_text)
													{
														$selected = ($value == $customer_detail['SPOUSE_GENDER']) ? ' selected="selected"' : "";

														echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
													} 
													?>
												</select>
											</div>
										</div>

								</div>
							</div>
						</div>
						<div class="col-md-6" style="padding-left:0px;">
		                    <div class="box box-info" style="padding-bottom: 0px;border-top: 1px solid #ccc;padding-top: 0px;">
		                        <div class="box-header with-border">
		                           <h3 class="box-title">Working Information</h3>
		                        </div>
		                    </div>
							<div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
									<div class="form-group">
											<label for="SPOUSE_RACE_ID" class="col-md-4 control-label">SPOUSE RACE ID</label>
											<div class="col-md-8">
												<select name="SPOUSE_RACE_ID" class="form-control">
													<option value="">select masters_race</option>
													<?php 
													foreach($all_masters_race as $masters_race)
													{
														$selected = ($masters_race['RACE_ID'] == $customer_detail['SPOUSE_RACE_ID']) ? ' selected="selected"' : "";

														echo '<option value="'.$masters_race['RACE_ID'].'" '.$selected.'>'.$masters_race['RACE_NAME'].'</option>';
													} 
													?>
												</select>
											</div>
										</div>
									<div class="form-group">
											<label for="SPOUSE_COMPANY_NAME" class="col-md-4 control-label">SPOUSE COMPANY NAME</label>
											<div class="col-md-8">
												<select name="SPOUSE_COMPANY_NAME" class="form-control">
													<option value="">select masters_cust_comp_info</option>
													<?php 
													foreach($all_masters_cust_comp_info as $masters_cust_comp_info)
													{
														$selected = ($masters_cust_comp_info['COMPANY_ID'] == $customer_detail['SPOUSE_COMPANY_NAME']) ? ' selected="selected"' : "";

														echo '<option value="'.$masters_cust_comp_info['COMPANY_ID'].'" '.$selected.'>'.$masters_cust_comp_info['COMPANY_NAME'].'</option>';
													} 
													?>
												</select>
											</div>
										</div>
									<div class="form-group">
										<label for="SPOUSE_OCCUPATION_DEPT" class="col-md-4 control-label">SPOUSE OCCUPATION DEPT</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_OCCUPATION_DEPT" value="<?php echo ($this->input->post('SPOUSE_OCCUPATION_DEPT') ? $this->input->post('SPOUSE_OCCUPATION_DEPT') : $customer_detail['SPOUSE_OCCUPATION_DEPT']); ?>" class="form-control" id="SPOUSE_OCCUPATION_DEPT" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_YEARS_OF_SERVICE_YEAR" class="col-md-4 control-label">SPOUSE YEARS OF SERVICE YEAR</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_YEARS_OF_SERVICE_YEAR" value="<?php echo ($this->input->post('SPOUSE_YEARS_OF_SERVICE_YEAR') ? $this->input->post('SPOUSE_YEARS_OF_SERVICE_YEAR') : $customer_detail['SPOUSE_YEARS_OF_SERVICE_YEAR']); ?>" class="form-control" id="SPOUSE_YEARS_OF_SERVICE_YEAR" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_YEARS_OF_SERVICE_MONTH" class="col-md-4 control-label">SPOUSE YEARS OF SERVICE MONTH</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_YEARS_OF_SERVICE_MONTH" value="<?php echo ($this->input->post('SPOUSE_YEARS_OF_SERVICE_MONTH') ? $this->input->post('SPOUSE_YEARS_OF_SERVICE_MONTH') : $customer_detail['SPOUSE_YEARS_OF_SERVICE_MONTH']); ?>" class="form-control" id="SPOUSE_YEARS_OF_SERVICE_MONTH" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_SALARY" class="col-md-4 control-label">SPOUSE SALARY</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_SALARY" value="<?php echo ($this->input->post('SPOUSE_SALARY') ? $this->input->post('SPOUSE_SALARY') : $customer_detail['SPOUSE_SALARY']); ?>" class="form-control" id="SPOUSE_SALARY" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_OFFICE_PHONE1" class="col-md-4 control-label">SPOUSE OFFICE PHONE1</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_OFFICE_PHONE1" value="<?php echo ($this->input->post('SPOUSE_OFFICE_PHONE1') ? $this->input->post('SPOUSE_OFFICE_PHONE1') : $customer_detail['SPOUSE_OFFICE_PHONE1']); ?>" class="form-control" id="SPOUSE_OFFICE_PHONE1" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_OFFICE_PHONE2" class="col-md-4 control-label">SPOUSE OFFICE PHONE2</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_OFFICE_PHONE2" value="<?php echo ($this->input->post('SPOUSE_OFFICE_PHONE2') ? $this->input->post('SPOUSE_OFFICE_PHONE2') : $customer_detail['SPOUSE_OFFICE_PHONE2']); ?>" class="form-control" id="SPOUSE_OFFICE_PHONE2" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label">SPOUSE OFFICE ADDRESS</label>
										<div class="col-md-8">
											<textarea name="SPOUSE_OFFICE_ADDRESS" class="form-control" id="SPOUSE_OFFICE_ADDRESS"><?php echo ($this->input->post('SPOUSE_OFFICE_ADDRESS') ? $this->input->post('SPOUSE_OFFICE_ADDRESS') : $customer_detail['SPOUSE_OFFICE_ADDRESS']); ?></textarea>
										</div>
									</div>
							</div>

						</div>
                  	</div>
				</div>
			</div>
            <!-- /.tab-pane -->
           <div class="tab-pane" id="tab_4">
                <div class="row">
                	<div class="col-md-12">
                		<div class="col-md-6" style="padding:0px;">
	                     	<div class="box box-info" style="padding-right:0px;">
		                        <div class="box-header with-border">
		                           <h3 class="box-title">Gurantor Information</h3>
		                        </div>
		                        <div class="col-md-12" style="padding:0px;">
			                        <div class="col-md-5"></div>
			                    	<div class="box box-primary col-md-6" style="border-radius:0px;height:130px;box-shadow:none;border:0px;border-right:1px solid #00c0ef;margin-bottom:0px;">
										<div class="box-body box-profile" style="border:0px;">
											<div class="profile-img-container img-circle" style="margin:0 40%;">
					  							<input type="file" />
											    <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/default-user.png" alt="User profile picture">
											</div>
										</div>
										<!-- /.box-body -->
									</div>
								</div>
								<div class="col-md-12" style="border-right:1px solid #00c0ef;">
			                   
									
									<div class="form-group">
										<label for="GUARANTER_IDNO" class="col-md-4 control-label">GUARANTER IDNO</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_IDNO" value="<?php echo ($this->input->post('GUARANTER_IDNO') ? $this->input->post('GUARANTER_IDNO') : $customer_detail['GUARANTER_IDNO']); ?>" class="form-control" id="GUARANTER_IDNO" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_NAME" class="col-md-4 control-label">GUARANTER NAME</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_NAME" value="<?php echo ($this->input->post('GUARANTER_NAME') ? $this->input->post('GUARANTER_NAME') : $customer_detail['GUARANTER_NAME']); ?>" class="form-control" id="GUARANTER_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_FATHERS_NAME" class="col-md-4 control-label">GUARANTER FATHERS NAME</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_FATHERS_NAME" value="<?php echo ($this->input->post('GUARANTER_FATHERS_NAME') ? $this->input->post('GUARANTER_FATHERS_NAME') : $customer_detail['GUARANTER_FATHERS_NAME']); ?>" class="form-control" id="GUARANTER_FATHERS_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_MOTHERS_NAME" class="col-md-4 control-label">GUARANTER MOTHERS NAME</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_MOTHERS_NAME" value="<?php echo ($this->input->post('GUARANTER_MOTHERS_NAME') ? $this->input->post('GUARANTER_MOTHERS_NAME') : $customer_detail['GUARANTER_MOTHERS_NAME']); ?>" class="form-control" id="GUARANTER_MOTHERS_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_EMAILID" class="col-md-4 control-label">GUARANTER EMAILID</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_EMAILID" value="<?php echo ($this->input->post('GUARANTER_EMAILID') ? $this->input->post('GUARANTER_EMAILID') : $customer_detail['GUARANTER_EMAILID']); ?>" class="form-control" id="GUARANTER_EMAILID" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_HOME_PHONE" class="col-md-4 control-label">GUARANTER HOME PHONE</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_HOME_PHONE" value="<?php echo ($this->input->post('GUARANTER_HOME_PHONE') ? $this->input->post('GUARANTER_HOME_PHONE') : $customer_detail['GUARANTER_HOME_PHONE']); ?>" class="form-control" id="GUARANTER_HOME_PHONE" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_HAND_PHONE" class="col-md-4 control-label">GUARANTER HAND PHONE</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_HAND_PHONE" value="<?php echo ($this->input->post('GUARANTER_HAND_PHONE') ? $this->input->post('GUARANTER_HAND_PHONE') : $customer_detail['GUARANTER_HAND_PHONE']); ?>" class="form-control" id="GUARANTER_HAND_PHONE" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_ADDRESS" class="col-md-4 control-label">GUARANTER ADDRESS</label>
										<div class="col-md-8">
											<textarea name="GUARANTER_ADDRESS" class="form-control" id="GUARANTER_ADDRESS"><?php echo ($this->input->post('GUARANTER_ADDRESS') ? $this->input->post('GUARANTER_ADDRESS') : $customer_detail['GUARANTER_ADDRESS']); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
										<label for="GUARANTER_ADDRESS" class="col-md-4 control-label">GUARANTER ADDRESS</label>
										<div class="col-md-8">
											<textarea class="form-control" id="GUARANTER_ADDRESS"><?php echo ($this->input->post('GUARANTER_ADDRESS') ? $this->input->post('GUARANTER_ADDRESS') : $customer_detail['GUARANTER_ADDRESS']); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
										<label for="GUARANTER_ADDRESS" class="col-md-4 control-label">GUARANTER ADDRESS</label>
										<div class="col-md-8">
											<textarea class="form-control" id="GUARANTER_ADDRESS"><?php echo ($this->input->post('GUARANTER_ADDRESS') ? $this->input->post('GUARANTER_ADDRESS') : $customer_detail['GUARANTER_ADDRESS']); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
										<label for="GUARANTER_ADDRESS" class="col-md-4 control-label">GUARANTER ADDRESS</label>
										<div class="col-md-8">
											<textarea class="form-control" id="GUARANTER_ADDRESS"><?php echo ($this->input->post('GUARANTER_ADDRESS') ? $this->input->post('GUARANTER_ADDRESS') : $customer_detail['GUARANTER_ADDRESS']); ?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
 						<div class="col-md-6" style="padding-left:0px;">							 	
	 						<div class="box box-info" style="padding-left:0px;">
				                <div class="box-header with-border">
				                    <h3 class="box-title">Other Information</h3>
				                </div>
				                <div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
							
									<div class="form-group">
										<label for="GUARANTER_DOB" class="col-md-4 control-label">GUARANTER DOB</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_DOB" value="<?php echo ($this->input->post('GUARANTER_DOB') ? $this->input->post('GUARANTER_DOB') : $customer_detail['GUARANTER_DOB']); ?>" class="form-control" id="GUARANTER_DOB" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_AGE" class="col-md-4 control-label">GUARANTER AGE</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_AGE" value="<?php echo ($this->input->post('GUARANTER_AGE') ? $this->input->post('GUARANTER_AGE') : $customer_detail['GUARANTER_AGE']); ?>" class="form-control" id="GUARANTER_AGE" />
										</div>
									</div>
									<div class="form-group">
										<label for="GUARANTER_NO_OF_CHILDREN" class="col-md-4 control-label">GUARANTER NO OF CHILDREN</label>
										<div class="col-md-8">
											<input type="text" name="GUARANTER_NO_OF_CHILDREN" value="<?php echo ($this->input->post('GUARANTER_NO_OF_CHILDREN') ? $this->input->post('GUARANTER_NO_OF_CHILDREN') : $customer_detail['GUARANTER_NO_OF_CHILDREN']); ?>" class="form-control" id="GUARANTER_NO_OF_CHILDREN" />
										</div>
									</div>
									<div class="form-group">
											<label for="GUARANTER_GENDER" class="col-md-4 control-label">GUARANTER GENDER</label>
											<div class="col-md-8">
												<select name="GUARANTER_GENDER" class="form-control">
													<option value="">select</option>
													<?php 
													$GUARANTER_GENDER_values = array(
										'1'=>'Male',
										'2'=>'Female',
									);

													foreach($GUARANTER_GENDER_values as $value => $display_text)
													{
														$selected = ($value == $customer_detail['GUARANTER_GENDER']) ? ' selected="selected"' : "";

														echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
													} 
													?>
												</select>
											</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6" style="padding-left:0px;">
				            <div class="box box-info" style="padding-bottom: 0px;border-top: 1px solid #ccc;padding-top: 0px;">
				                    <div class="box-header with-border">
				                        <h3 class="box-title">Working Information</h3>
				                    </div>
				            </div>
							<div class="col-md-11 col-md-offset-1" style="padding-left:10px;">
								<div class="form-group">
										<label for="GUARANTER_RACE_ID" class="col-md-4 control-label">GUARANTER RACE ID</label>
										<div class="col-md-8">
											<select name="GUARANTER_RACE_ID" class="form-control">
												<option value="">select masters_race</option>
												<?php 
												foreach($all_masters_race as $masters_race)
												{
													$selected = ($masters_race['RACE_ID'] == $customer_detail['GUARANTER_RACE_ID']) ? ' selected="selected"' : "";

													echo '<option value="'.$masters_race['RACE_ID'].'" '.$selected.'>'.$masters_race['RACE_NAME'].'</option>';
												} 
												?>
											</select>
										</div>
									</div>
								<div class="form-group">
										<label for="GUARANTER_COMPANY_NAME" class="col-md-4 control-label">GUARANTER COMPANY NAME</label>
										<div class="col-md-8">
											<select name="GUARANTER_COMPANY_NAME" class="form-control">
												<option value="">select masters_cust_comp_info</option>
												<?php 
												foreach($all_masters_cust_comp_info as $masters_cust_comp_info)
												{
													$selected = ($masters_cust_comp_info['COMPANY_ID'] == $customer_detail['GUARANTER_COMPANY_NAME']) ? ' selected="selected"' : "";

													echo '<option value="'.$masters_cust_comp_info['COMPANY_ID'].'" '.$selected.'>'.$masters_cust_comp_info['COMPANY_NAME'].'</option>';
												} 
												?>
											</select>
										</div>
									</div>
								<div class="form-group">
									<label for="GUARANTER_OCCUPATION_DEPT" class="col-md-4 control-label">GUARANTER OCCUPATION DEPT</label>
									<div class="col-md-8">
										<input type="text" name="GUARANTER_OCCUPATION_DEPT" value="<?php echo ($this->input->post('GUARANTER_OCCUPATION_DEPT') ? $this->input->post('GUARANTER_OCCUPATION_DEPT') : $customer_detail['GUARANTER_OCCUPATION_DEPT']); ?>" class="form-control" id="GUARANTER_OCCUPATION_DEPT" />
									</div>
								</div>
								<div class="form-group">
									<label for="GUARANTER_YEARS_OF_SERVICE_YEAR" class="col-md-4 control-label">GUARANTER YEARS OF SERVICE YEAR</label>
									<div class="col-md-8">
										<input type="text" name="GUARANTER_YEARS_OF_SERVICE_YEAR" value="<?php echo ($this->input->post('GUARANTER_YEARS_OF_SERVICE_YEAR') ? $this->input->post('GUARANTER_YEARS_OF_SERVICE_YEAR') : $customer_detail['GUARANTER_YEARS_OF_SERVICE_YEAR']); ?>" class="form-control" id="GUARANTER_YEARS_OF_SERVICE_YEAR" />
									</div>
								</div>
								<div class="form-group">
									<label for="GUARANTER_YEARS_OF_SERVICE_MONTH" class="col-md-4 control-label">GUARANTER YEARS OF SERVICE MONTH</label>
									<div class="col-md-8">
										<input type="text" name="GUARANTER_YEARS_OF_SERVICE_MONTH" value="<?php echo ($this->input->post('GUARANTER_YEARS_OF_SERVICE_MONTH') ? $this->input->post('GUARANTER_YEARS_OF_SERVICE_MONTH') : $customer_detail['GUARANTER_YEARS_OF_SERVICE_MONTH']); ?>" class="form-control" id="GUARANTER_YEARS_OF_SERVICE_MONTH" />
									</div>
								</div>
								<div class="form-group">
									<label for="GUARANTER_SALARY" class="col-md-4 control-label">GUARANTER SALARY</label>
									<div class="col-md-8">
										<input type="text" name="GUARANTER_SALARY" value="<?php echo ($this->input->post('GUARANTER_SALARY') ? $this->input->post('GUARANTER_SALARY') : $customer_detail['GUARANTER_SALARY']); ?>" class="form-control" id="GUARANTER_SALARY" />
									</div>
								</div>
								<div class="form-group">
									<label for="GUARANTER_OFFICE_PHONE1" class="col-md-4 control-label">GUARANTER OFFICE PHONE1</label>
									<div class="col-md-8">
										<input type="text" name="GUARANTER_OFFICE_PHONE1" value="<?php echo ($this->input->post('GUARANTER_OFFICE_PHONE1') ? $this->input->post('GUARANTER_OFFICE_PHONE1') : $customer_detail['GUARANTER_OFFICE_PHONE1']); ?>" class="form-control" id="GUARANTER_OFFICE_PHONE1" />
									</div>
								</div>
								<div class="form-group">
									<label for="GUARANTER_OFFICE_PHONE2" class="col-md-4 control-label">GUARANTER OFFICE PHONE2</label>
									<div class="col-md-8">
										<input type="text" name="GUARANTER_OFFICE_PHONE2" value="<?php echo ($this->input->post('GUARANTER_OFFICE_PHONE2') ? $this->input->post('GUARANTER_OFFICE_PHONE2') : $customer_detail['GUARANTER_OFFICE_PHONE2']); ?>" class="form-control" id="GUARANTER_OFFICE_PHONE2" />
									</div>
								</div>
								<div class="form-group">
									<label for="GUARANTER_OFFICE_ADDRESS" class="col-md-4 control-label">GUARANTER OFFICE ADDRESS</label>
									<div class="col-md-8">
										<textarea name="GUARANTER_OFFICE_ADDRESS" class="form-control" id="GUARANTER_OFFICE_ADDRESS"><?php echo ($this->input->post('GUARANTER_OFFICE_ADDRESS') ? $this->input->post('GUARANTER_OFFICE_ADDRESS') : $customer_detail['GUARANTER_OFFICE_ADDRESS']); ?></textarea>
									</div>
								</div>
		                	</div>
						</div>
					</div>
				</div>
			</div>
            <div class="tab-pane" id="tab_5">
            	<div class="row">
                  <div class="col-md-12">
                     <div class="box box-info">
                        <div class="box-header with-border">
                           <h3 class="box-title">Verification Information</h3>
                        </div>
                        <div class="col-md-6" style="padding-left:30px;">
							
							<div class="form-group">
								<label for="CUSTOMER_POPUP_NOTES" class="col-md-4 control-label">CUSTOMER POPUP NOTES</label>
								<div class="col-md-8">
									<textarea name="CUSTOMER_POPUP_NOTES" class="form-control" id="CUSTOMER_POPUP_NOTES"><?php echo ($this->input->post('CUSTOMER_POPUP_NOTES') ? $this->input->post('CUSTOMER_POPUP_NOTES') : $customer_detail['CUSTOMER_POPUP_NOTES']); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_HR_INFO" class="col-md-4 control-label">VERIFICATION HR INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_HR_INFO" class="form-control" id="VERIFICATION_HR_INFO"><?php echo ($this->input->post('VERIFICATION_HR_INFO') ? $this->input->post('VERIFICATION_HR_INFO') : $customer_detail['VERIFICATION_HR_INFO']); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_SPOUSE_INFO" class="col-md-4 control-label">VERIFICATION SPOUSE INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_SPOUSE_INFO" class="form-control" id="VERIFICATION_SPOUSE_INFO"><?php echo ($this->input->post('VERIFICATION_SPOUSE_INFO') ? $this->input->post('VERIFICATION_SPOUSE_INFO') : $customer_detail['VERIFICATION_SPOUSE_INFO']); ?></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6" style="padding-left:30px;">
							<div class="form-group">
								<label for="VERIFICATION_REFERENCE_INFO" class="col-md-4 control-label">VERIFICATION REFERENCE INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_REFERENCE_INFO" class="form-control" id="VERIFICATION_REFERENCE_INFO"><?php echo ($this->input->post('VERIFICATION_REFERENCE_INFO') ? $this->input->post('VERIFICATION_REFERENCE_INFO') : $customer_detail['VERIFICATION_REFERENCE_INFO']); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_OTHER_INFO" class="col-md-4 control-label">VERIFICATION OTHER INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_OTHER_INFO" class="form-control" id="VERIFICATION_OTHER_INFO"><?php echo ($this->input->post('VERIFICATION_OTHER_INFO') ? $this->input->post('VERIFICATION_OTHER_INFO') : $customer_detail['VERIFICATION_OTHER_INFO']); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_CTOS_INFO" class="col-md-4 control-label">VERIFICATION CTOS INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_CTOS_INFO" class="form-control" id="VERIFICATION_CTOS_INFO"><?php echo ($this->input->post('VERIFICATION_CTOS_INFO') ? $this->input->post('VERIFICATION_CTOS_INFO') : $customer_detail['VERIFICATION_CTOS_INFO']); ?></textarea>
								</div>
							</div>
						</div>
                     </div>
                  </div>
                </div>
            </div>
             <div class="tab-pane" id="tab_6">
            	<div class="row">
                  <div class="col-md-12">
                     <div class="box box-info">
                        <div class="box-header with-border">
                           <h3 class="box-title" style="padding-right:10px;">Other Information</h3>
                           <button type="button" class="btn btn-primary btn-xs addMore">
					            <i class="fa fa-plus"></i>
					        </button>
                        </div>
                         <div class="col-md-6" style="padding-left:30px;">
							<div class="form-group">
								<label for="VERIFICATION_COMPLETED" class="col-md-4 control-label">VERIFICATION COMPLETED</label>
								<div class="col-md-8">
									<input type="checkbox" name="VERIFICATION_COMPLETED" value="1" <?php echo ($customer_detail['VERIFICATION_COMPLETED']==1 ? 'checked="checked"' : ''); ?> id='VERIFICATION_COMPLETED' />
								</div>
							</div>
							<div class="form-group">
								<label for="APPLICATION_APPROVED_REJECTED_STATUS" class="col-md-4 control-label">APPLICATION APPROVED REJECTED STATUS</label>
								<div class="col-md-8">
									<input type="checkbox" name="APPLICATION_APPROVED_REJECTED_STATUS" value="1" <?php echo ($customer_detail['APPLICATION_APPROVED_REJECTED_STATUS']==1 ? 'checked="checked"' : ''); ?> id='APPLICATION_APPROVED_REJECTED_STATUS' />
								</div>
							</div>
							<div class="form-group">
								<label for="DIRECTOR_NAME2" class="col-md-4 control-label">DIRECTOR NAME2</label>
								<div class="col-md-8">
									<input type="text" name="DIRECTOR_NAME2" value="<?php echo ($this->input->post('DIRECTOR_NAME2') ? $this->input->post('DIRECTOR_NAME2') : $customer_detail['DIRECTOR_NAME2']); ?>" class="form-control" id="DIRECTOR_NAME2" />
								</div>
							</div>
							<div class="form-group">
								<label for="DIRECTOR2_OCCUPATION_DEPT_NAME" class="col-md-4 control-label">DIRECTOR2 OCCUPATION DEPT NAME</label>
								<div class="col-md-8">
									<input type="text" name="DIRECTOR2_OCCUPATION_DEPT_NAME" value="<?php echo ($this->input->post('DIRECTOR2_OCCUPATION_DEPT_NAME') ? $this->input->post('DIRECTOR2_OCCUPATION_DEPT_NAME') : $customer_detail['DIRECTOR2_OCCUPATION_DEPT_NAME']); ?>" class="form-control" id="DIRECTOR2_OCCUPATION_DEPT_NAME" />
								</div>
							</div>
							<div class="form-group">
								<label for="DIRECTOR_NAME3" class="col-md-4 control-label">DIRECTOR NAME3</label>
								<div class="col-md-8">
									<input type="text" name="DIRECTOR_NAME3" value="<?php echo ($this->input->post('DIRECTOR_NAME3') ? $this->input->post('DIRECTOR_NAME3') : $customer_detail['DIRECTOR_NAME3']); ?>" class="form-control" id="DIRECTOR_NAME3" />
								</div>
							</div>
							<div class="form-group">
								<label for="DIRECTOR3_OCCUPATION_DEPT_NAME" class="col-md-4 control-label">DIRECTOR3 OCCUPATION DEPT NAME</label>
								<div class="col-md-8">
									<input type="text" name="DIRECTOR3_OCCUPATION_DEPT_NAME" value="<?php echo ($this->input->post('DIRECTOR3_OCCUPATION_DEPT_NAME') ? $this->input->post('DIRECTOR3_OCCUPATION_DEPT_NAME') : $customer_detail['DIRECTOR3_OCCUPATION_DEPT_NAME']); ?>" class="form-control" id="DIRECTOR3_OCCUPATION_DEPT_NAME" />
								</div>
							</div>
						</div>
						<div class="col-md-6" style="padding-left:30px;">
							<div class="form-group">
								<label for="PAID_UP_CAPITAL" class="col-md-4 control-label">PAID UP CAPITAL</label>
								<div class="col-md-8">
									<input type="text" name="PAID_UP_CAPITAL" value="<?php echo ($this->input->post('PAID_UP_CAPITAL') ? $this->input->post('PAID_UP_CAPITAL') : $customer_detail['PAID_UP_CAPITAL']); ?>" class="form-control" id="PAID_UP_CAPITAL" />
								</div>
							</div>
							<div class="form-group">
								<label for="ORGTYPE_ID" class="col-md-4 control-label">ORGTYPE ID</label>
								<div class="col-md-8">
									<input type="text" name="ORGTYPE_ID" value="<?php echo ($this->input->post('ORGTYPE_ID') ? $this->input->post('ORGTYPE_ID') : $customer_detail['ORGTYPE_ID']); ?>" class="form-control" id="ORGTYPE_ID" />
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_GUARANTER_INFO" class="col-md-4 control-label">VERIFICATION GUARANTER INFO</label>
								<div class="col-md-8">
									<input type="text" name="VERIFICATION_GUARANTER_INFO" value="<?php echo ($this->input->post('VERIFICATION_GUARANTER_INFO') ? $this->input->post('VERIFICATION_GUARANTER_INFO') : $customer_detail['VERIFICATION_GUARANTER_INFO']); ?>" class="form-control" id="VERIFICATION_GUARANTER_INFO" />
								</div>
							</div>
							
							<div class="form-group">
									<label for="APPROVED_REJECTED_BY_EMP" class="col-md-4 control-label">APPROVED REJECTED BY EMP</label>
									<div class="col-md-8">
										<select name="APPROVED_REJECTED_BY_EMP" class="form-control">
											<option value="">select</option>
											<?php 
											$APPROVED_REJECTED_BY_EMP_values = array(
								'1'=>'Approved',
								'2'=>'Rejected',
							);

											foreach($APPROVED_REJECTED_BY_EMP_values as $value => $display_text)
											{
												$selected = ($value == $customer_detail['APPROVED_REJECTED_BY_EMP']) ? ' selected="selected"' : "";

												echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
											} 
											?>
										</select>
									</div>
								</div>
							
							<div class="form-group">
								<label for="APPLICABLE_AMOUNT" class="col-md-4 control-label">APPLICABLE AMOUNT</label>
								<div class="col-md-8">
									<input type="text" name="APPLICABLE_AMOUNT" value="<?php echo ($this->input->post('APPLICABLE_AMOUNT') ? $this->input->post('APPLICABLE_AMOUNT') : $customer_detail['APPLICABLE_AMOUNT']); ?>" class="form-control" id="APPLICABLE_AMOUNT" />
								</div>
							</div>
							<div class="form-group">
								<label for="APPLIED_AMOUNT" class="col-md-4 control-label">APPLIED AMOUNT</label>
								<div class="col-md-8">
									<input type="text" name="APPLIED_AMOUNT" value="<?php echo ($this->input->post('APPLIED_AMOUNT') ? $this->input->post('APPLIED_AMOUNT') : $customer_detail['APPLIED_AMOUNT']); ?>" class="form-control" id="APPLIED_AMOUNT" />
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
			 </div>

				<div class="box-footer">
                	<div class="form-group">
              			<div class="col-md-4"></div>
          				<div class="col-md-8">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-check"></i> Save
							</button>
						</div>
					</div>
		        </div>
				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>