<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
			<?php echo form_open('masters_cust_comp_info/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="COMPANY_CODE" class="col-md-4 control-label">COMPANY CODE</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_CODE" value="<?php echo $this->input->post('COMPANY_CODE'); ?>" class="form-control" id="COMPANY_CODE" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_NAME" class="col-md-4 control-label">COMPANY NAME</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_NAME" value="<?php echo $this->input->post('COMPANY_NAME'); ?>" class="form-control" id="COMPANY_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_ADDRESS" class="col-md-4 control-label">COMPANY ADDRESS</label>
						<div class="col-md-8">
							<textarea name="COMPANY_ADDRESS" class="form-control" id="COMPANY_ADDRESS"><?php echo $this->input->post('COMPANY_ADDRESS'); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_CITY" class="col-md-4 control-label">COMPANY CITY</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_CITY" value="<?php echo $this->input->post('COMPANY_CITY'); ?>" class="form-control" id="COMPANY_CITY" />
						</div>
					</div>
					<div class="form-group">
						<label for="STATE_ID" class="col-md-4 control-label">STATE ID</label>
						<div class="col-md-8">
							<input type="text" name="STATE_ID" value="<?php echo $this->input->post('STATE_ID'); ?>" class="form-control" id="STATE_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_POSTCODE" class="col-md-4 control-label">COMPANY POSTCODE</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_POSTCODE" value="<?php echo $this->input->post('COMPANY_POSTCODE'); ?>" class="form-control" id="COMPANY_POSTCODE" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_PHONE1" class="col-md-4 control-label">COMPANY PHONE1</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_PHONE1" value="<?php echo $this->input->post('COMPANY_PHONE1'); ?>" class="form-control" id="COMPANY_PHONE1" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_PHONE2" class="col-md-4 control-label">COMPANY PHONE2</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_PHONE2" value="<?php echo $this->input->post('COMPANY_PHONE2'); ?>" class="form-control" id="COMPANY_PHONE2" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_FAX" class="col-md-4 control-label">COMPANY FAX</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_FAX" value="<?php echo $this->input->post('COMPANY_FAX'); ?>" class="form-control" id="COMPANY_FAX" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_CREDIT_LIMIT" class="col-md-4 control-label">COMPANY CREDIT LIMIT</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_CREDIT_LIMIT" value="<?php echo $this->input->post('COMPANY_CREDIT_LIMIT'); ?>" class="form-control" id="COMPANY_CREDIT_LIMIT" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_SALARY_DAY_FROM1" class="col-md-4 control-label">COMPANY SALARY DAY FROM1</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_SALARY_DAY_FROM1" value="<?php echo $this->input->post('COMPANY_SALARY_DAY_FROM1'); ?>" class="form-control" id="COMPANY_SALARY_DAY_FROM1" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_SALARY_DAY_TO1" class="col-md-4 control-label">COMPANY SALARY DAY TO1</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_SALARY_DAY_TO1" value="<?php echo $this->input->post('COMPANY_SALARY_DAY_TO1'); ?>" class="form-control" id="COMPANY_SALARY_DAY_TO1" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_SALARY_DAY_FROM2" class="col-md-4 control-label">COMPANY SALARY DAY FROM2</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_SALARY_DAY_FROM2" value="<?php echo $this->input->post('COMPANY_SALARY_DAY_FROM2'); ?>" class="form-control" id="COMPANY_SALARY_DAY_FROM2" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_SALARY_DAY_TO2" class="col-md-4 control-label">COMPANY SALARY DAY TO2</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_SALARY_DAY_TO2" value="<?php echo $this->input->post('COMPANY_SALARY_DAY_TO2'); ?>" class="form-control" id="COMPANY_SALARY_DAY_TO2" />
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
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo $this->input->post('CLIENT_ID'); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1"  id="IS_ACTIVE" />
						</div>
					</div>
					<div class="form-group">
						<label for="PIC_NAME" class="col-md-4 control-label">PIC NAME</label>
						<div class="col-md-8">
							<input type="text" name="PIC_NAME" value="<?php echo $this->input->post('PIC_NAME'); ?>" class="form-control" id="PIC_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="PIC_DESIGNATION" class="col-md-4 control-label">PIC DESIGNATION</label>
						<div class="col-md-8">
							<input type="text" name="PIC_DESIGNATION" value="<?php echo $this->input->post('PIC_DESIGNATION'); ?>" class="form-control" id="PIC_DESIGNATION" />
						</div>
					</div>
					<div class="form-group">
						<label for="PIC_CONTACT_NO" class="col-md-4 control-label">PIC CONTACT NO</label>
						<div class="col-md-8">
							<input type="text" name="PIC_CONTACT_NO" value="<?php echo $this->input->post('PIC_CONTACT_NO'); ?>" class="form-control" id="PIC_CONTACT_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="PIC_MOBILE_NO" class="col-md-4 control-label">PIC MOBILE NO</label>
						<div class="col-md-8">
							<input type="text" name="PIC_MOBILE_NO" value="<?php echo $this->input->post('PIC_MOBILE_NO'); ?>" class="form-control" id="PIC_MOBILE_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="COMPANY_BALANCE_CREDIT_LIMIT" class="col-md-4 control-label">COMPANY BALANCE CREDIT LIMIT</label>
						<div class="col-md-8">
							<input type="text" name="COMPANY_BALANCE_CREDIT_LIMIT" value="<?php echo $this->input->post('COMPANY_BALANCE_CREDIT_LIMIT'); ?>" class="form-control" id="COMPANY_BALANCE_CREDIT_LIMIT" />
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