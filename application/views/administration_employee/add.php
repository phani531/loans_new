<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
			<?php echo form_open('administration_employee/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="EMP_NAME" class="col-md-4 control-label">EMP NAME</label>
						<div class="col-md-8">
							<input type="text" name="EMP_NAME" value="<?php echo $this->input->post('EMP_NAME'); ?>" class="form-control" id="EMP_NAME" />
						</div>
					</div>
					<div class="form-group">
							<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
							<div class="col-md-8">
								<select name="CLIENT_ID" class="form-control">
									<option value="">select client_info</option>
									<?php 
									foreach($all_client_info as $client_info)
									{
										$selected = ($client_info['CLIENT_ID'] == $this->input->post('CLIENT_ID')) ? ' selected="selected"' : "";

										echo '<option value="'.$client_info['CLIENT_ID'].'" '.$selected.'>'.$client_info['CLIENT_NAME'].'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1"  id="IS_ACTIVE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo $this->input->post('CREATED_DATE'); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo $this->input->post('CREATED_BY'); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo $this->input->post('MODIFIED_DATE'); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo $this->input->post('MODIFIED_BY'); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="IC_NO" class="col-md-4 control-label">IC NO</label>
						<div class="col-md-8">
							<input type="text" name="IC_NO" value="<?php echo $this->input->post('IC_NO'); ?>" class="form-control" id="IC_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="STAFF_NO" class="col-md-4 control-label">STAFF NO</label>
						<div class="col-md-8">
							<input type="text" name="STAFF_NO" value="<?php echo $this->input->post('STAFF_NO'); ?>" class="form-control" id="STAFF_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="ADDRESS" class="col-md-4 control-label">ADDRESS</label>
						<div class="col-md-8">
							<textarea name="ADDRESS" class="form-control" id="ADDRESS"><?php echo $this->input->post('ADDRESS'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="MOBILE_NO" class="col-md-4 control-label">MOBILE NO</label>
						<div class="col-md-8">
							<input type="text" name="MOBILE_NO" value="<?php echo $this->input->post('MOBILE_NO'); ?>" class="form-control" id="MOBILE_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="PHONE_NO" class="col-md-4 control-label">PHONE NO</label>
						<div class="col-md-8">
							<input type="text" name="PHONE_NO" value="<?php echo $this->input->post('PHONE_NO'); ?>" class="form-control" id="PHONE_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="EMAIL_ID" class="col-md-4 control-label">EMAIL ID</label>
						<div class="col-md-8">
							<input type="text" name="EMAIL_ID" value="<?php echo $this->input->post('EMAIL_ID'); ?>" class="form-control" id="EMAIL_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="GENDER" class="col-md-4 control-label">GENDER</label>
						<div class="col-md-8">
							<input type="text" name="GENDER" value="<?php echo $this->input->post('GENDER'); ?>" class="form-control" id="GENDER" />
						</div>
					</div>
					<div class="form-group">
							<label for="DESIGNATION_ID" class="col-md-4 control-label">DESIGNATION ID</label>
							<div class="col-md-8">
								<select name="DESIGNATION_ID" class="form-control">
									<option value="">select administration_designation</option>
									<?php 
									foreach($all_administration_designation as $administration_designation)
									{
										$selected = ($administration_designation['DESIGNATION_ID'] == $this->input->post('DESIGNATION_ID')) ? ' selected="selected"' : "";

										echo '<option value="'.$administration_designation['DESIGNATION_ID'].'" '.$selected.'>'.$administration_designation['DESIGNATION_NAME'].'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="ACTIVE_STATUS" class="col-md-4 control-label">ACTIVE STATUS</label>
						<div class="col-md-8">
							<input type="checkbox" name="ACTIVE_STATUS" value="1"  id="ACTIVE_STATUS" />
						</div>
					</div>
					<div class="form-group">
						<label for="BASIC_SALARY" class="col-md-4 control-label">BASIC SALARY</label>
						<div class="col-md-8">
							<input type="text" name="BASIC_SALARY" value="<?php echo $this->input->post('BASIC_SALARY'); ?>" class="form-control" id="BASIC_SALARY" />
						</div>
					</div>
					<div class="form-group">
						<label for="LANGUAGE" class="col-md-4 control-label">LANGUAGE</label>
						<div class="col-md-8">
							<input type="text" name="LANGUAGE" value="<?php echo $this->input->post('LANGUAGE'); ?>" class="form-control" id="LANGUAGE" />
						</div>
					</div>
					<div class="form-group">
						<label for="EMPLOYEE_PIC_PATH" class="col-md-4 control-label">EMPLOYEE PIC PATH</label>
						<div class="col-md-8">
							<input type="text" name="EMPLOYEE_PIC_PATH" value="<?php echo $this->input->post('EMPLOYEE_PIC_PATH'); ?>" class="form-control" id="EMPLOYEE_PIC_PATH" />
						</div>
					</div>
					<div class="form-group">
						<label for="VIEW_OTHER_BRANCH_DETAILS" class="col-md-4 control-label">VIEW OTHER BRANCH DETAILS</label>
						<div class="col-md-8">
							<input type="checkbox" name="VIEW_OTHER_BRANCH_DETAILS" value="1"  id="VIEW_OTHER_BRANCH_DETAILS" />
						</div>
					</div>
					<div class="form-group">
						<label for="MULTIPLE_LOGINS" class="col-md-4 control-label">MULTIPLE LOGINS</label>
						<div class="col-md-8">
							<input type="checkbox" name="MULTIPLE_LOGINS" value="1"  id="MULTIPLE_LOGINS" />
						</div>
					</div>
					<div class="form-group">
						<label for="ROLE_ID" class="col-md-4 control-label">ROLE ID</label>
						<div class="col-md-8">
							<input type="text" name="ROLE_ID" value="<?php echo $this->input->post('ROLE_ID'); ?>" class="form-control" id="ROLE_ID" />
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