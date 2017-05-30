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
</style>

<div class="row">
   <div class="col-md-12">
    <?php //echo validation_errors(); ?>
  <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>customer_detail/add" method="post">

			<?php //echo form_open('customer_detail/add',array("class"=>"form-horizontal")); ?>
  
		                              <div class="col-md-2" style="float:right;margin-top: 4px;">
		                                 <select name="CUSTOMER_TYPE" class="form-control">
		                                    <option value="">Select Type</option>
		                                    <?php 
		                                       $CUSTOMER_TYPE_values = array(
		                                       '1'=>'Individual',
		                                       '2'=>'Company',
		                                       );
		                                       
		                                       foreach($CUSTOMER_TYPE_values as $value => $display_text)
		                                       {
		                                       	$selected = ($value == $this->input->post('CUSTOMER_TYPE')) ? ' selected="selected"' : "";
		                                       
		                                       	echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
		                                       } 
		                                       ?>
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
            <li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">Contact us</a></li>
            <li class=""><a href="#tab_7" data-toggle="tab" aria-expanded="false">References</a></li>
            <li class=""><a href="#tab_8" data-toggle="tab" aria-expanded="false">Docs</a></li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
               <div class="row">
                  <div class="col-md-12">
                     <div class="box box-info">
                        <div class="box-header with-border">
                           <h3 class="box-title">Customer Information</h3>
                        </div>
                        <?php echo validation_errors(); ?>
                        <?php //echo form_open('customer_detail/add',array("class"=>"form-horizontal")); ?>
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
						          <!-- <div class="form-group">
		                              <label for="CUSTOMER_TYPE" class="col-md-4 control-label">TYPE</label>
		                             
		                              <div class="col-md-8">
		                                 <select name="CUSTOMER_TYPE" class="form-control">
		                                    <option value="">select</option>
		                                    <?php 
		                                       $CUSTOMER_TYPE_values = array(
		                                       '1'=>'Individual',
		                                       '2'=>'Company',
		                                       );
		                                       
		                                       foreach($CUSTOMER_TYPE_values as $value => $display_text)
		                                       {
		                                       	$selected = ($value == $this->input->post('CUSTOMER_TYPE')) ? ' selected="selected"' : "";
		                                       
		                                       	echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
		                                       } 
		                                       ?>
		                                 </select>
		                              </div>
		                           </div>-->
		                          
		                           <div class="form-group">
		                              <label for="CUSTOMER_IDNO" class="col-md-4 control-label">ID NO</label>
		                              <div class="col-md-8">
		                                 <input type="text" name="CUSTOMER_IDNO" value="<?php echo $this->input->post('CUSTOMER_IDNO'); ?>" class="form-control" id="CUSTOMER_IDNO" />
		                              </div>
		                           </div>
		                           <div class="form-group">
		                              <label for="CUSTOMER_NAME" class="col-md-4 control-label">NAME</label>
		                              <div class="col-md-8">
		                                 <input type="text" name="CUSTOMER_NAME" value="<?php echo $this->input->post('CUSTOMER_NAME'); ?>" class="form-control" id="CUSTOMER_NAME" />
		                              </div>
		                           </div>
		                            <div class="form-group">
                              <label for="DOB" class="col-md-4 control-label">DOB</label>
                              <div class="col-md-8">
                                 <input type="text" name="DOB" value="<?php echo $this->input->post('DOB'); ?>" class="form-control" id="DOB" readonly/>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="AGE" class="col-md-4 control-label">AGE</label>
                              <div class="col-md-8">
                                 <input type="text" name="AGE" value="<?php echo $this->input->post('AGE'); ?>" class="form-control" id="AGE" readonly/>
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
                                       	$selected = ($value == $this->input->post('GENDER')) ? ' selected="selected"' : "";
                                       
                                       	echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                       } 
                                       ?>
                                 </select>
                              </div>
                           </div>
                            <div class="form-group">
                              <label for="EMAIL_ID" class="col-md-4 control-label">EMAIL ID</label>
                              <div class="col-md-8">
                                 <input type="text" name="EMAIL_ID" value="<?php echo $this->input->post('EMAIL_ID'); ?>" class="form-control" id="EMAIL_ID" />
                              </div>
                           </div>
		                    </div>
                        </div>
                        <div class="box-body col-md-6 col-md-offset-1" style="border-left:1px solid #00c0ef;padding-left:30px;">
                          
                           <div class="form-group">
                              <label for="FILE_NO" class="col-md-4 control-label">FILE NO</label>
                              <div class="col-md-8">
                                 <input type="text" name="FILE_NO" value="<?php echo $this->input->post('FILE_NO'); ?>" class="form-control" id="FILE_NO" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="OLDIC_NO" class="col-md-4 control-label">OLD IC NO</label>
                              <div class="col-md-8">
                                 <input type="text" name="OLDIC_NO" value="<?php echo $this->input->post('OLDIC_NO'); ?>" class="form-control" id="OLDIC_NO" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="NON_ICNO" class="col-md-4 control-label">NON IC NO</label>
                              <div class="col-md-8">
                                 <input type="text" name="NON_ICNO" value="<?php echo $this->input->post('NON_ICNO'); ?>" class="form-control" id="NON_ICNO" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="APPLICATION_DATE" class="col-md-4 control-label">APPLICATION DATE</label>
                              <div class="col-md-8">
                                 <input type="text" name="APPLICATION_DATE" value="<?php echo $this->input->post('APPLICATION_DATE'); ?>" class="form-control" id="APPLICATION_DATE" />
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
                                       	$selected = ($masters_agent_info['AGENT_ID'] == $this->input->post('AGENT_ID')) ? ' selected="selected"' : "";
                                       
                                       	echo '<option value="'.$masters_agent_info['AGENT_ID'].'" '.$selected.'>'.$masters_agent_info['AGENT_NAME'].'</option>';
                                       } 
                                       ?>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="VEHICLE_NO" class="col-md-4 control-label">VEHICLE NO</label>
                              <div class="col-md-8">
                                 <input type="text" name="VEHICLE_NO" value="<?php echo $this->input->post('VEHICLE_NO'); ?>" class="form-control" id="VEHICLE_NO" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="RELATED_TO_EMP" class="col-md-4 control-label">RELATED TO EMP</label>
                              <div class="col-md-8">
                                 <input type="text" name="RELATED_TO_EMP" value="<?php echo $this->input->post('RELATED_TO_EMP'); ?>" class="form-control" id="RELATED_TO_EMP" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="ADVERTISEMENT_ID" class="col-md-4 control-label">ADVERTISEMENT</label>
                              <div class="col-md-8">
                                 <select name="ADVERTISEMENT_ID" class="form-control">
                                    <option value="">select masters_advertisement</option>
                                    <?php 
                                       foreach($all_masters_advertisements as $masters_advertisement)
                                       {
                                       	$selected = ($masters_advertisement['ADVERTISEMENT_ID'] == $this->input->post('ADVERTISEMENT_ID')) ? ' selected="selected"' : "";
                                       
                                       	echo '<option value="'.$masters_advertisement['ADVERTISEMENT_ID'].'" '.$selected.'>'.$masters_advertisement['ADVERTISEMENT_NAME'].'</option>';
                                       } 
                                       ?>
                                 </select>
                              </div>
                           </div>
                          
                           <div class="form-group">
                              <label for="HOUSESTATUS_ID" class="col-md-4 control-label">HOUSE STATUS</label>
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
                                       	$selected = ($value == $this->input->post('HOUSESTATUS_ID')) ? ' selected="selected"' : "";
                                       
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
                                       	$selected = ($value == $this->input->post('MARTIAL_STATUS')) ? ' selected="selected"' : "";
                                       
                                       	echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                       } 
                                       ?>
                                 </select>
                              </div>
                           </div>
                          
                           <div class="form-group">
                              <label for="APPLIED_BRANCH_ID" class="col-md-4 control-label">APPLIED BRANCH</label>
                              <div class="col-md-8">
                                 <input type="text" name="APPLIED_BRANCH_ID" value="<?php echo $this->input->post('APPLIED_BRANCH_ID'); ?>" class="form-control" id="APPLIED_BRANCH_ID" />
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
	                           <label for="COMPANY_ID" class="col-md-4 control-label">COMPANY</label>
	                           <div class="col-md-8">
	                              <select name="COMPANY_ID" class="form-control">
	                                 <option value="">select administration_comp_profile</option>
	                                 <?php 
	                                    foreach($all_administration_comp_profile as $administration_comp_profile)
	                                    {
	                                    	$selected = ($administration_comp_profile['BRANCH_ID'] == $this->input->post('COMPANY_ID')) ? ' selected="selected"' : "";
	                                    
	                                    	echo '<option value="'.$administration_comp_profile['BRANCH_ID'].'" '.$selected.'>'.$administration_comp_profile['BRANCH_NAME'].'</option>';
	                                    } 
	                                    ?>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="OCCUPATION_DEPT_NAME" class="col-md-4 control-label">OCCUPATION DEPT NAME</label>
	                           <div class="col-md-8">
	                              <input type="text" name="OCCUPATION_DEPT_NAME" value="<?php echo $this->input->post('OCCUPATION_DEPT_NAME'); ?>" class="form-control" id="OCCUPATION_DEPT_NAME" />
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
	                                    	$selected = ($masters_race['RACE_ID'] == $this->input->post('RACE_ID')) ? ' selected="selected"' : "";
	                                    
	                                    	echo '<option value="'.$masters_race['RACE_ID'].'" '.$selected.'>'.$masters_race['RACE_NAME'].'</option>';
	                                    } 
	                                    ?>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="PRESENT_SALARY" class="col-md-4 control-label">PRESENT SALARY</label>
	                           <div class="col-md-8">
	                              <input type="text" name="PRESENT_SALARY" value="<?php echo $this->input->post('PRESENT_SALARY'); ?>" class="form-control" id="PRESENT_SALARY" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="JOBSECTOR_ID" class="col-md-4 control-label">JOBSECTOR ID</label>
	                           <div class="col-md-8">
	                              <input type="text" name="JOBSECTOR_ID" value="<?php echo $this->input->post('JOBSECTOR_ID'); ?>" class="form-control" id="JOBSECTOR_ID" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="YEARS_OR_SERVICE_YEARS" class="col-md-4 control-label">YEARS OR SERVICE YEARS</label>
	                           <div class="col-md-8">
	                              <input type="text" name="YEARS_OR_SERVICE_YEARS" value="<?php echo $this->input->post('YEARS_OR_SERVICE_YEARS'); ?>" class="form-control" id="YEARS_OR_SERVICE_YEARS" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="YEARS_OR_SERVICE_MONTHS" class="col-md-4 control-label">YEARS OR SERVICE MONTHS</label>
	                           <div class="col-md-8">
	                              <input type="text" name="YEARS_OR_SERVICE_MONTHS" value="<?php echo $this->input->post('YEARS_OR_SERVICE_MONTHS'); ?>" class="form-control" id="YEARS_OR_SERVICE_MONTHS" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="CREDIT_LIMIT" class="col-md-4 control-label">CREDIT LIMIT</label>
	                           <div class="col-md-8">
	                              <input type="text" name="CREDIT_LIMIT" value="<?php echo $this->input->post('CREDIT_LIMIT'); ?>" class="form-control" id="CREDIT_LIMIT" />
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
	                                    	$selected = ($masters_cust_bank['BANK_ID'] == $this->input->post('BANK_ID')) ? ' selected="selected"' : "";
	                                    
	                                    	echo '<option value="'.$masters_cust_bank['BANK_ID'].'" '.$selected.'>'.$masters_cust_bank['BANK_NAME'].'</option>';
	                                    } 
	                                    ?>
	                              </select>
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="BANK_ACCOUNTNO" class="col-md-4 control-label">BANK ACCOUNTNO</label>
	                           <div class="col-md-8">
	                              <input type="text" name="BANK_ACCOUNTNO" value="<?php echo $this->input->post('BANK_ACCOUNTNO'); ?>" class="form-control" id="BANK_ACCOUNTNO" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="BANK_ATM_CARD_NO" class="col-md-4 control-label">BANK ATM CARD NO</label>
	                           <div class="col-md-8">
	                              <input type="text" name="BANK_ATM_CARD_NO" value="<?php echo $this->input->post('BANK_ATM_CARD_NO'); ?>" class="form-control" id="BANK_ATM_CARD_NO" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="BANK_ATM_CARD_PIN_NO" class="col-md-4 control-label">BANK ATM CARD PIN NO</label>
	                           <div class="col-md-8">
	                              <input type="text" name="BANK_ATM_CARD_PIN_NO" value="<?php echo $this->input->post('BANK_ATM_CARD_PIN_NO'); ?>" class="form-control" id="BANK_ATM_CARD_PIN_NO" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="BANK_ATM_CARD_VALIDITY" class="col-md-4 control-label">BANK ATM CARD VALIDITY</label>
	                           <div class="col-md-8">
	                              <input type="text" name="BANK_ATM_CARD_VALIDITY" value="<?php echo $this->input->post('BANK_ATM_CARD_VALIDITY'); ?>" class="form-control" id="BANK_ATM_CARD_VALIDITY" />
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
	                           <label for="INTERNET_BANKING_USER_NAME" class="col-md-5 control-label">USER NAME</label>
	                           <div class="col-md-7">
	                              <input type="text" name="INTERNET_BANKING_USER_NAME" value="<?php echo $this->input->post('INTERNET_BANKING_USER_NAME'); ?>" class="form-control" id="INTERNET_BANKING_USER_NAME" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="INTERNET_BANKING_PASSWORD" class="col-md-5 control-label">PASSWORD</label>
	                           <div class="col-md-7">
	                              <input type="text" name="INTERNET_BANKING_PASSWORD" value="<?php echo $this->input->post('INTERNET_BANKING_PASSWORD'); ?>" class="form-control" id="INTERNET_BANKING_PASSWORD" />
	                           </div>
	                        </div>
	                         <div class="form-group" style="visibility:hidden;">
	                           <label for="INTERNET_BANKING_PASSWORD" class="col-md-5 control-label">PASSWORD</label>
	                           <div class="col-md-7">
	                              <input type="text" class="form-control" />
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
	                           <label for="MONEY_DEPOSIT_BANK_ID" class="col-md-4 control-label">MONEY DEPOSIT BANK</label>
	                           <div class="col-md-8">
	                              <input type="text" name="MONEY_DEPOSIT_BANK_ID" value="<?php echo $this->input->post('MONEY_DEPOSIT_BANK_ID'); ?>" class="form-control" id="MONEY_DEPOSIT_BANK_ID" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="MONEY_DEPOSIT_ACCOUNT_NO" class="col-md-4 control-label">MONEY DEPOSIT ACCOUNT NO</label>
	                           <div class="col-md-8">
	                              <input type="text" name="MONEY_DEPOSIT_ACCOUNT_NO" value="<?php echo $this->input->post('MONEY_DEPOSIT_ACCOUNT_NO'); ?>" class="form-control" id="MONEY_DEPOSIT_ACCOUNT_NO" />
	                           </div>
	                        </div>
	                        <div class="form-group">
	                           <label for="MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME" class="col-md-4 control-label">MONEY DEPOSIT ACCOUNT HOLDER NAME</label>
	                           <div class="col-md-8">
	                              <input type="text" name="MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME" value="<?php echo $this->input->post('MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME'); ?>" class="form-control" id="MONEY_DEPOSIT_ACCOUNT_HOLDER_NAME" />
	                           </div>
	                        </div>
	                    </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.tab-pane -->
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
										<label for="SPOUSE_IDNO" class="col-md-4 control-label">ID NO</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_IDNO" value="<?php echo $this->input->post('SPOUSE_IDNO'); ?>" class="form-control" id="SPOUSE_IDNO" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_NAME" class="col-md-4 control-label">NAME</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_NAME" value="<?php echo $this->input->post('SPOUSE_NAME'); ?>" class="form-control" id="SPOUSE_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_FATHERS_NAME" class="col-md-4 control-label"> FATHERS NAME</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_FATHERS_NAME" value="<?php echo $this->input->post('SPOUSE_FATHERS_NAME'); ?>" class="form-control" id="SPOUSE_FATHERS_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_MOTHERS_NAME" class="col-md-4 control-label"> MOTHERS NAME</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_MOTHERS_NAME" value="<?php echo $this->input->post('SPOUSE_MOTHERS_NAME'); ?>" class="form-control" id="SPOUSE_MOTHERS_NAME" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_EMAILID" class="col-md-4 control-label">EMAIL ID</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_EMAILID" value="<?php echo $this->input->post('SPOUSE_EMAILID'); ?>" class="form-control" id="SPOUSE_EMAILID" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_HOME_PHONE" class="col-md-4 control-label">HOME PHONE</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_HOME_PHONE" value="<?php echo $this->input->post('SPOUSE_HOME_PHONE'); ?>" class="form-control" id="SPOUSE_HOME_PHONE" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_HAND_PHONE" class="col-md-4 control-label"> HAND PHONE</label>
										<div class="col-md-8">
											<input type="text" name="SPOUSE_HAND_PHONE" value="<?php echo $this->input->post('SPOUSE_HAND_PHONE'); ?>" class="form-control" id="SPOUSE_HAND_PHONE" />
										</div>
									</div>
									<div class="form-group">
										<label for="SPOUSE_ADDRESS" class="col-md-4 control-label"> ADDRESS</label>
										<div class="col-md-8">
											<textarea name="SPOUSE_ADDRESS" class="form-control" id="SPOUSE_ADDRESS"><?php echo $this->input->post('SPOUSE_ADDRESS'); ?></textarea>
										</div>
									</div>
									<div class="form-group" style="visibility:hidden;">
									<label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
									<div class="col-md-8">
										<textarea  class="form-control" ></textarea>
									</div>
								</div>
								<div class="form-group" style="visibility:hidden;">
									<label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
									<div class="col-md-8">
										<textarea  class="form-control" ></textarea>
									</div>
								</div>
								<div class="form-group" style="visibility:hidden;">
									<label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
									<div class="col-md-8">
										<textarea  class="form-control" ></textarea>
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
										<label for="SPOUSE_DOB" class="col-md-4 control-label">DOB</label>
												<div class="col-md-8">
													<input type="text" name="SPOUSE_DOB" value="<?php echo $this->input->post('SPOUSE_DOB'); ?>" class="form-control" id="SPOUSE_DOB" />
												</div>
									</div>
										<div class="form-group">
											<label for="SPOUSE_AGE" class="col-md-4 control-label">AGE</label>
											<div class="col-md-8">
												<input type="text" name="SPOUSE_AGE" value="<?php echo $this->input->post('SPOUSE_AGE'); ?>" class="form-control" id="SPOUSE_AGE" />
											</div>
										</div>
										<div class="form-group">
											<label for="SPOUSE_NO_OF_CHILDREN" class="col-md-4 control-label">NO OF CHILDREN</label>
											<div class="col-md-8">
												<input type="text" name="SPOUSE_NO_OF_CHILDREN" value="<?php echo $this->input->post('SPOUSE_NO_OF_CHILDREN'); ?>" class="form-control" id="SPOUSE_NO_OF_CHILDREN" />
											</div>
										</div>
										<div class="form-group">
												<label for="SPOUSE_GENDER" class="col-md-4 control-label"> GENDER</label>
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
															$selected = ($value == $this->input->post('SPOUSE_GENDER')) ? ' selected="selected"' : "";

															echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
														} 
														?>
													</select>
												</div>
										</div>
										<div class="form-group">
												<label for="SPOUSE_RACE_ID" class="col-md-4 control-label"> RACE ID</label>
												<div class="col-md-8">
													<select name="SPOUSE_RACE_ID" class="form-control">
														<option value="">select masters_race</option>
														<?php 
														foreach($all_masters_race as $masters_race)
														{
															$selected = ($masters_race['RACE_ID'] == $this->input->post('SPOUSE_RACE_ID')) ? ' selected="selected"' : "";

															echo '<option value="'.$masters_race['RACE_ID'].'" '.$selected.'>'.$masters_race['RACE_NAME'].'</option>';
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
										<label for="SPOUSE_COMPANY_NAME" class="col-md-4 control-label"> COMPANY NAME</label>
										<div class="col-md-8">
											<select name="SPOUSE_COMPANY_NAME" class="form-control">
												<option value="">select masters_cust_comp_info</option>
												<?php 
												foreach($all_masters_cust_comp_info as $masters_cust_comp_info)
												{
													$selected = ($masters_cust_comp_info['COMPANY_ID'] == $this->input->post('SPOUSE_COMPANY_NAME')) ? ' selected="selected"' : "";

													echo '<option value="'.$masters_cust_comp_info['COMPANY_ID'].'" '.$selected.'>'.$masters_cust_comp_info['COMPANY_NAME'].'</option>';
												} 
												?>
											</select>
										</div>
									</div>
								<div class="form-group">
									<label for="SPOUSE_OCCUPATION_DEPT" class="col-md-4 control-label"> OCCUPATION DEPT</label>
									<div class="col-md-8">
										<input type="text" name="SPOUSE_OCCUPATION_DEPT" value="<?php echo $this->input->post('SPOUSE_OCCUPATION_DEPT'); ?>" class="form-control" id="SPOUSE_OCCUPATION_DEPT" />
									</div>
								</div>
								<div class="form-group">
									<label for="SPOUSE_YEARS_OF_SERVICE_YEAR" class="col-md-4 control-label"> YEARS OF SERVICE YEAR</label>
									<div class="col-md-8">
										<input type="text" name="SPOUSE_YEARS_OF_SERVICE_YEAR" value="<?php echo $this->input->post('SPOUSE_YEARS_OF_SERVICE_YEAR'); ?>" class="form-control" id="SPOUSE_YEARS_OF_SERVICE_YEAR" />
									</div>
								</div>
								<div class="form-group">
									<label for="SPOUSE_YEARS_OF_SERVICE_MONTH" class="col-md-4 control-label"> YEARS OF SERVICE MONTH</label>
									<div class="col-md-8">
										<input type="text" name="SPOUSE_YEARS_OF_SERVICE_MONTH" value="<?php echo $this->input->post('SPOUSE_YEARS_OF_SERVICE_MONTH'); ?>" class="form-control" id="SPOUSE_YEARS_OF_SERVICE_MONTH" />
									</div>
								</div>
								<div class="form-group">
									<label for="SPOUSE_SALARY" class="col-md-4 control-label"> SALARY</label>
									<div class="col-md-8">
										<input type="text" name="SPOUSE_SALARY" value="<?php echo $this->input->post('SPOUSE_SALARY'); ?>" class="form-control" id="SPOUSE_SALARY" />
									</div>
								</div>
								<div class="form-group">
									<label for="SPOUSE_OFFICE_PHONE1" class="col-md-4 control-label"> OFFICE PHONE1</label>
									<div class="col-md-8">
										<input type="text" name="SPOUSE_OFFICE_PHONE1" value="<?php echo $this->input->post('SPOUSE_OFFICE_PHONE1'); ?>" class="form-control" id="SPOUSE_OFFICE_PHONE1" />
									</div>
								</div>
								<div class="form-group">
									<label for="SPOUSE_OFFICE_PHONE2" class="col-md-4 control-label"> OFFICE PHONE2</label>
									<div class="col-md-8">
										<input type="text" name="SPOUSE_OFFICE_PHONE2" value="<?php echo $this->input->post('SPOUSE_OFFICE_PHONE2'); ?>" class="form-control" id="SPOUSE_OFFICE_PHONE2" />
									</div>
								</div>
								<div class="form-group">
									<label for="SPOUSE_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
									<div class="col-md-8">
										<textarea name="SPOUSE_OFFICE_ADDRESS" class="form-control" id="SPOUSE_OFFICE_ADDRESS"><?php echo $this->input->post('SPOUSE_OFFICE_ADDRESS'); ?></textarea>
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
						<label for="GUARANTER_IDNO" class="col-md-4 control-label"> ID NO</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_IDNO" value="<?php echo $this->input->post('GUARANTER_IDNO'); ?>" class="form-control" id="GUARANTER_IDNO" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_NAME" class="col-md-4 control-label"> NAME</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_NAME" value="<?php echo $this->input->post('GUARANTER_NAME'); ?>" class="form-control" id="GUARANTER_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_FATHERS_NAME" class="col-md-4 control-label"> FATHERS NAME</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_FATHERS_NAME" value="<?php echo $this->input->post('GUARANTER_FATHERS_NAME'); ?>" class="form-control" id="GUARANTER_FATHERS_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_MOTHERS_NAME" class="col-md-4 control-label"> MOTHERS NAME</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_MOTHERS_NAME" value="<?php echo $this->input->post('GUARANTER_MOTHERS_NAME'); ?>" class="form-control" id="GUARANTER_MOTHERS_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_EMAILID" class="col-md-4 control-label"> EMAILID</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_EMAILID" value="<?php echo $this->input->post('GUARANTER_EMAILID'); ?>" class="form-control" id="GUARANTER_EMAILID" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_HOME_PHONE" class="col-md-4 control-label"> HOME PHONE</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_HOME_PHONE" value="<?php echo $this->input->post('GUARANTER_HOME_PHONE'); ?>" class="form-control" id="GUARANTER_HOME_PHONE" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_HAND_PHONE" class="col-md-4 control-label"> HAND PHONE</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_HAND_PHONE" value="<?php echo $this->input->post('GUARANTER_HAND_PHONE'); ?>" class="form-control" id="GUARANTER_HAND_PHONE" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_ADDRESS" class="col-md-4 control-label"> ADDRESS</label>
						<div class="col-md-8">
							<textarea name="GUARANTER_ADDRESS" class="form-control" id="GUARANTER_ADDRESS"><?php echo $this->input->post('GUARANTER_ADDRESS'); ?></textarea>
						</div>
					</div>
					<div class="form-group" style="visibility:hidden;">
						<label for="GUARANTER_ADDRESS" class="col-md-4 control-label"> ADDRESS</label>
						<div class="col-md-8">
							<textarea class="form-control"> </textarea>
						</div>
					</div>
					<div class="form-group" style="visibility:hidden;">
						<label for="GUARANTER_ADDRESS" class="col-md-4 control-label"> ADDRESS</label>
						<div class="col-md-8">
							<textarea class="form-control"> </textarea>
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
						<label for="GUARANTER_DOB" class="col-md-4 control-label"> DOB</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_DOB" value="<?php echo $this->input->post('GUARANTER_DOB'); ?>" class="form-control" id="GUARANTER_DOB" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_AGE" class="col-md-4 control-label"> AGE</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_AGE" value="<?php echo $this->input->post('GUARANTER_AGE'); ?>" class="form-control" id="GUARANTER_AGE" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_NO_OF_CHILDREN" class="col-md-4 control-label"> NO OF CHILDREN</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_NO_OF_CHILDREN" value="<?php echo $this->input->post('GUARANTER_NO_OF_CHILDREN'); ?>" class="form-control" id="GUARANTER_NO_OF_CHILDREN" />
						</div>
					</div>
					<div class="form-group">
							<label for="GUARANTER_GENDER" class="col-md-4 control-label"> GENDER</label>
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
										$selected = ($value == $this->input->post('GUARANTER_GENDER')) ? ' selected="selected"' : "";

										echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
							<label for="GUARANTER_RACE_ID" class="col-md-4 control-label"> RACE</label>
							<div class="col-md-8">
								<select name="GUARANTER_RACE_ID" class="form-control">
									<option value="">select masters_race</option>
									<?php 
									foreach($all_masters_race as $masters_race)
									{
										$selected = ($masters_race['RACE_ID'] == $this->input->post('GUARANTER_RACE_ID')) ? ' selected="selected"' : "";

										echo '<option value="'.$masters_race['RACE_ID'].'" '.$selected.'>'.$masters_race['RACE_NAME'].'</option>';
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
							<label for="GUARANTER_COMPANY_NAME" class="col-md-4 control-label"> COMPANY NAME</label>
							<div class="col-md-8">
								<select name="GUARANTER_COMPANY_NAME" class="form-control">
									<option value="">select masters_cust_comp_info</option>
									<?php 
									foreach($all_masters_cust_comp_info as $masters_cust_comp_info)
									{
										$selected = ($masters_cust_comp_info['COMPANY_ID'] == $this->input->post('GUARANTER_COMPANY_NAME')) ? ' selected="selected"' : "";

										echo '<option value="'.$masters_cust_comp_info['COMPANY_ID'].'" '.$selected.'>'.$masters_cust_comp_info['COMPANY_NAME'].'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="GUARANTER_OCCUPATION_DEPT" class="col-md-4 control-label"> OCCUPATION DEPT</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_OCCUPATION_DEPT" value="<?php echo $this->input->post('GUARANTER_OCCUPATION_DEPT'); ?>" class="form-control" id="GUARANTER_OCCUPATION_DEPT" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_YEARS_OF_SERVICE_YEAR" class="col-md-4 control-label"> YEARS OF SERVICE YEAR</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_YEARS_OF_SERVICE_YEAR" value="<?php echo $this->input->post('GUARANTER_YEARS_OF_SERVICE_YEAR'); ?>" class="form-control" id="GUARANTER_YEARS_OF_SERVICE_YEAR" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_YEARS_OF_SERVICE_MONTH" class="col-md-4 control-label"> YEARS OF SERVICE MONTH</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_YEARS_OF_SERVICE_MONTH" value="<?php echo $this->input->post('GUARANTER_YEARS_OF_SERVICE_MONTH'); ?>" class="form-control" id="GUARANTER_YEARS_OF_SERVICE_MONTH" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_SALARY" class="col-md-4 control-label"> SALARY</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_SALARY" value="<?php echo $this->input->post('GUARANTER_SALARY'); ?>" class="form-control" id="GUARANTER_SALARY" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_OFFICE_PHONE1" class="col-md-4 control-label"> OFFICE PHONE</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_OFFICE_PHONE1" value="<?php echo $this->input->post('GUARANTER_OFFICE_PHONE1'); ?>" class="form-control" id="GUARANTER_OFFICE_PHONE1" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_OFFICE_PHONE2" class="col-md-4 control-label"> OFFICE Alt PHONE</label>
						<div class="col-md-8">
							<input type="text" name="GUARANTER_OFFICE_PHONE2" value="<?php echo $this->input->post('GUARANTER_OFFICE_PHONE2'); ?>" class="form-control" id="GUARANTER_OFFICE_PHONE2" />
						</div>
					</div>
					<div class="form-group">
						<label for="GUARANTER_OFFICE_ADDRESS" class="col-md-4 control-label"> OFFICE ADDRESS</label>
						<div class="col-md-8">
							<textarea name="GUARANTER_OFFICE_ADDRESS" class="form-control" id="GUARANTER_OFFICE_ADDRESS"><?php echo $this->input->post('GUARANTER_OFFICE_ADDRESS'); ?></textarea>
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
										<textarea name="CUSTOMER_POPUP_NOTES" class="form-control" id="CUSTOMER_POPUP_NOTES"><?php echo $this->input->post('CUSTOMER_POPUP_NOTES'); ?></textarea>
									</div>
								</div>
							<div class="form-group">
								<label for="VERIFICATION_HR_INFO" class="col-md-4 control-label"> HR INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_HR_INFO" class="form-control" id="VERIFICATION_HR_INFO"><?php echo $this->input->post('VERIFICATION_HR_INFO'); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_SPOUSE_INFO" class="col-md-4 control-label"> SPOUSE INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_SPOUSE_INFO" class="form-control" id="VERIFICATION_SPOUSE_INFO"><?php echo $this->input->post('VERIFICATION_SPOUSE_INFO'); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_REFERENCE_INFO" class="col-md-4 control-label"> REFERENCE INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_REFERENCE_INFO" class="form-control" id="VERIFICATION_REFERENCE_INFO"><?php echo $this->input->post('VERIFICATION_REFERENCE_INFO'); ?></textarea>
								</div>
							</div>
							</div>
                        <div class="col-md-6" style="padding-left:30px;">
							<div class="form-group">
								<label for="VERIFICATION_OTHER_INFO" class="col-md-4 control-label"> OTHER INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_OTHER_INFO" class="form-control" id="VERIFICATION_OTHER_INFO"><?php echo $this->input->post('VERIFICATION_OTHER_INFO'); ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="VERIFICATION_CTOS_INFO" class="col-md-4 control-label"> CTOS INFO</label>
								<div class="col-md-8">
									<textarea name="VERIFICATION_CTOS_INFO" class="form-control" id="VERIFICATION_CTOS_INFO"><?php echo $this->input->post('VERIFICATION_CTOS_INFO'); ?></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label for="VERIFICATION_COMPLETED" class="col-md-4 control-label"> COMPLETED</label>
								<div class="col-md-8">
									<input type="checkbox" name="VERIFICATION_COMPLETED" value="1"  id="VERIFICATION_COMPLETED" />
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
                           <h3 class="box-title" style="padding-right:10px;">Contact Information</h3>
                           <button type="button" class="btn btn-primary btn-xs addMore">
					            <i class="fa fa-plus"></i>
					        </button>
                        </div>
                         <div class="nav-tabs-custom">
					         <ul class="nav nav-tabs" id="contactUl">
					            <li class="active"><a href="#contact_1" data-toggle="tab" aria-expanded="true">Contact 1</a></li>
					         </ul>
					         <div class="tab-content contactContent" style="padding:0px;">
					            <div class="tab-pane active" id="contact_1" style="margin:10px;">
			                        <div class="col-md-6" style="padding-left:30px;">
					                        <div class="form-group">
												<label for="CUSTOMER_POPUP_NOTES" class="col-md-4 control-label">Address</label>
												<div class="col-md-8">
													<textarea name="Address" class="form-control" id="Address"><?php echo $this->input->post('Address'); ?></textarea>
												</div>
											</div>
										<div class="form-group">
											<label for="City" class="col-md-4 control-label"> City</label>
											<div class="col-md-8">
												<input type="text" name="City" class="form-control" id="City">
											</div>
										</div>
										<div class="form-group">
											<label for="State" class="col-md-4 control-label"> State</label>
											<div class="col-md-8">
												<input type="text" name="State" class="form-control" id="State">
											</div>
										</div>
										<div class="form-group">
											<label for="code" class="col-md-4 control-label"> Post code</label>
											<div class="col-md-8">
												<input type="text" name="code" class="form-control">
											</div>
										</div>
									</div>
			                        <div class="col-md-6" style="padding-left:30px;">
										<div class="form-group">
											<label for="phone1" class="col-md-4 control-label"> Phone</label>
											<div class="col-md-8">
												<input type="text" name="phone1" class="form-control" id="phone1">
											</div>
										</div>
										
										<div class="form-group">
											<label for="phone2" class="col-md-4 control-label"> Alt Phone</label>
											<div class="col-md-8">
												<input type="text" name="phone1" value=""  class="form-control" id="phone1" />
											</div>
										</div>
										<div class="form-group">
											<label for="fax" class="col-md-4 control-label"> Fax</label>
											<div class="col-md-8">
												<input type="text" name="fax" class="form-control" id="fax">
											</div>
										</div>
										
									</div>
								</div>
							</div>
                     	</div>
                  	</div>
                </div>
            </div>
             <!-- /.tab-content -->
      </div>
            <div class="tab-pane" id="tab_7">
            	<div class="row">
                  <div class="col-md-12">
                     <div class="box box-info">
                        <div class="box-header with-border">
                           <h3 class="box-title" style="padding-right:10px;">Reference Information</h3>
                           <button type="button" class="btn btn-primary btn-xs addMoreReference">
					            <i class="fa fa-plus"></i>
					        </button>
                        </div>
                         <div class="nav-tabs-custom">
					         <ul class="nav nav-tabs" id="referenceUl">
					            <li class="active"><a href="#reference_1" data-toggle="tab" aria-expanded="true">Reference 1</a></li>
					         </ul>
					         <div class="tab-content referenceContent" style="padding:0px;">
					            <div class="tab-pane active" id="reference_1" style="margin:10px;">
			                        <div class="col-md-6" style="padding-left:30px;">
					                        <div class="form-group">
												<label for="REFERENCE_NAME" class="col-md-4 control-label">REFERENCE NAME</label>
												<div class="col-md-8">
													<input type="text" name="REFERENCE_NAME" value="<?php echo $this->input->post('REFERENCE_NAME'); ?>" class="form-control" id="REFERENCE_NAME" />
												</div>
											</div>
											<div class="form-group">
												<label for="REFERENCE_IDNO" class="col-md-4 control-label">REFERENCE IDNO</label>
												<div class="col-md-8">
													<input type="text" name="REFERENCE_IDNO" value="<?php echo $this->input->post('REFERENCE_IDNO'); ?>" class="form-control" id="REFERENCE_IDNO" />
												</div>
											</div>
											<div class="form-group">
												<label for="REFERENCE_RELATION" class="col-md-4 control-label">REFERENCE RELATION</label>
												<div class="col-md-8">
													<input type="text" name="REFERENCE_RELATION" value="<?php echo $this->input->post('REFERENCE_RELATION'); ?>" class="form-control" id="REFERENCE_RELATION" />
												</div>
											</div>
											<div class="form-group">
												<label for="ADDRESS_KEY" class="col-md-4 control-label">ADDRESS KEY</label>
												<div class="col-md-8">
													<input type="text" name="ADDRESS_KEY" value="<?php echo $this->input->post('ADDRESS_KEY'); ?>" class="form-control" id="ADDRESS_KEY" />
												</div>
											</div>
											<div class="form-group">
												<label for="ACTUAL_ADDRESS" class="col-md-4 control-label">ACTUAL ADDRESS</label>
												<div class="col-md-8">
													<input type="text" name="ACTUAL_ADDRESS" value="<?php echo $this->input->post('ACTUAL_ADDRESS'); ?>" class="form-control" id="ACTUAL_ADDRESS" />
												</div>
											</div>
											<div class="form-group">
												<label for="CITY" class="col-md-4 control-label">CITY</label>
												<div class="col-md-8">
													<input type="text" name="CITY" value="<?php echo $this->input->post('CITY'); ?>" class="form-control" id="CITY" />
												</div>
											</div>
									</div>
			                        <div class="col-md-6" style="padding-left:30px;">
										<div class="form-group">
											<label for="STATE_ID" class="col-md-4 control-label">STATE ID</label>
											<div class="col-md-8">
												<input type="text" name="STATE_ID" value="<?php echo $this->input->post('STATE_ID'); ?>" class="form-control" id="STATE_ID" />
											</div>
										</div>
										<div class="form-group">
											<label for="POSTCODE" class="col-md-4 control-label">POSTCODE</label>
											<div class="col-md-8">
												<input type="text" name="POSTCODE" value="<?php echo $this->input->post('POSTCODE'); ?>" class="form-control" id="POSTCODE" />
											</div>
										</div>
										<div class="form-group">
											<label for="PHONE1" class="col-md-4 control-label">PHONE1</label>
											<div class="col-md-8">
												<input type="text" name="PHONE1" value="<?php echo $this->input->post('PHONE1'); ?>" class="form-control" id="PHONE1" />
											</div>
										</div>
										<div class="form-group">
											<label for="PHONE2" class="col-md-4 control-label">PHONE2</label>
											<div class="col-md-8">
												<input type="text" name="PHONE2" value="<?php echo $this->input->post('PHONE2'); ?>" class="form-control" id="PHONE2" />
											</div>
										</div>
										<div class="form-group">
											<label for="FAX" class="col-md-4 control-label">FAX</label>
											<div class="col-md-8">
												<input type="text" name="FAX" value="<?php echo $this->input->post('FAX'); ?>" class="form-control" id="FAX" />
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
  			<div class="tab-pane" id="tab_8">
            	<div class="row">
                  <div class="col-md-12">
                     <div class="box box-info">
                        <div class="box-header with-border">
                           <h3 class="box-title" style="padding-right:10px;">Upload Docs</h3>
                           <button type="button" class="btn btn-primary btn-xs addMoreDocs">
					            <i class="fa fa-plus"></i>
					        </button>
                        </div>
                        <div class="reference col-md-12">
					    <div class="col-md-4" style="padding-left:30px;">
					                       
									<div class="form-group">
		                              <label for="CUSTOMER_TYPE" class="col-md-4 control-label">Doc Name</label>
		                             
		                              <div class="col-md-6">
		                                 <select name="CUSTOMER_TYPE" class="form-control">
		                                    <option value="">select</option>
		                                    <?php 
		                                       $doc_TYPE_values = array(
		                                       '1'=>'AAdhar',
		                                       '2'=>'Pan',
		                                       );
		                                       
		                                       foreach($doc_TYPE_values as $value => $display_text)
		                                       {
		                                       	$selected = ($value == $this->input->post('CUSTOMER_TYPE')) ? ' selected="selected"' : "";
		                                       
		                                       	echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
		                                       } 
		                                       ?>
		                                 </select>
		                              </div>
		                           </div>
		                          </div>
					    <div class="col-md-6" style="padding-left:30px;">
		                           <div class="form-group">
		                             <label for="CUSTOMER_TYPE" class="col-md-2 control-label">Upload</label>
		                             <div class="col-md-8">
                                 <input type="file" name="userFiles[]" style="position:relative;opacity:1;">
											<!--<input type="file" class="filestyle" name="userFiles[]" data-buttonname="btn-primary" id="docs_1" tabindex="-1" style="position: absolute; clip: rect(0px 0px 0px 0px);">-->
										</div>
		                           </div>
		                        </div>
		                 </div>
							</div>
                     	</div>
                  	</div>
                </div>
            </div>
             <!-- /.tab-content -->
        
      <!-- nav-tabs-custom -->
      <div class="box-footer">
                	<div class="form-group">
              			<div class="col-md-5"></div>
          				<div class="col-md-6">
		                	<button type="submit" class="btn btn-success">
		                		<i class="fa fa-check"></i> Save
		                	</button>
	                	</div>
                	</div>
              	</div>
              
            <?php //echo form_close(); ?>
            </form>
   </div>
</div>

<link id="bsdp-css" href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var today=new Date();
	$('#DOB').datepicker({
		endDate: today
	});
	$('#DOB').change(function(){
		var dob=$("#DOB").val();
		dob = new Date(dob);
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		$('#AGE').val(age);
	});
     $(".addMore").click(function(){ 
     	var l=$('#contactUl li').length;
     	var li=parseInt(l)+parseInt(1);
         $("#contactUl").append('<li id="li_'+li+'"><a href="#contact_'+li+'" data-toggle="tab" aria-expanded="true">Contact '+li+'<button type="button" onClick="closes(this.id);" class="pull-right btn-box-tool" id="'+li+'"><i class="fa fa-times"></i></button></a></li>');
         $(".contactContent").append('<div class="tab-pane" id="contact_'+li+'" style="margin:10px;"></div>');
         var a = $('#contact_'+l).html();
		var b = $('#contact_'+li).html(a);
         //$("#contact_2").clone("#contact_1");
   }); 

      $(".addMoreReference").click(function(){ 
     	var l=$('#referenceUl li').length;
     	var li=parseInt(l)+parseInt(1);
         $("#referenceUl").append('<li id="li_'+li+'"><a href="#reference_'+li+'" data-toggle="tab" aria-expanded="true">Reference '+li+'<button type="button" onClick="closes(this.id);" class="pull-right btn-box-tool" id="'+li+'"><i class="fa fa-times"></i></button></a></li>');
         $(".referenceContent").append('<div class="tab-pane" id="reference_'+li+'" style="margin:10px;"></div>');
         var a = $('#reference_'+l).html();
		var b = $('#reference_'+li).html(a);
         //$("#contact_2").clone("#contact_1");
   }); 
     
     $(".addMoreDocs").click(function(){ 
    // 	console.log($(this).id);
     	var li=parseInt(1)+parseInt(1);
          $(".reference").after('<div id="docs_'+li+'" class="col-md-12"></div>');
         var a = $('.reference').html();
		var b = $('#docs_'+li).html(a);
         //$("#contact_2").clone("#contact_1");
   }); 
});
function closes(id){
     	$("#li_"+id).remove();
     	$("#contact_"+id).remove();
}
</script>