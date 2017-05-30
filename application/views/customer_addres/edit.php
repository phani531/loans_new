<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('customer_addres/edit/'.$customer_addres['CONTACT_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="CUSTOMER_ID" class="col-md-4 control-label">CUSTOMER ID</label>
						<div class="col-md-8">
							<input type="text" name="CUSTOMER_ID" value="<?php echo ($this->input->post('CUSTOMER_ID') ? $this->input->post('CUSTOMER_ID') : $customer_addres['CUSTOMER_ID']); ?>" class="form-control" id="CUSTOMER_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="ADDRESS_KEY" class="col-md-4 control-label">ADDRESS KEY</label>
						<div class="col-md-8">
							<input type="text" name="ADDRESS_KEY" value="<?php echo ($this->input->post('ADDRESS_KEY') ? $this->input->post('ADDRESS_KEY') : $customer_addres['ADDRESS_KEY']); ?>" class="form-control" id="ADDRESS_KEY" />
						</div>
					</div>
					<div class="form-group">
						<label for="ACTUAL_ADDRESS" class="col-md-4 control-label">ACTUAL ADDRESS</label>
						<div class="col-md-8">
							<input type="text" name="ACTUAL_ADDRESS" value="<?php echo ($this->input->post('ACTUAL_ADDRESS') ? $this->input->post('ACTUAL_ADDRESS') : $customer_addres['ACTUAL_ADDRESS']); ?>" class="form-control" id="ACTUAL_ADDRESS" />
						</div>
					</div>
					<div class="form-group">
						<label for="CITY" class="col-md-4 control-label">CITY</label>
						<div class="col-md-8">
							<input type="text" name="CITY" value="<?php echo ($this->input->post('CITY') ? $this->input->post('CITY') : $customer_addres['CITY']); ?>" class="form-control" id="CITY" />
						</div>
					</div>
					<div class="form-group">
						<label for="STATE_ID" class="col-md-4 control-label">STATE ID</label>
						<div class="col-md-8">
							<input type="text" name="STATE_ID" value="<?php echo ($this->input->post('STATE_ID') ? $this->input->post('STATE_ID') : $customer_addres['STATE_ID']); ?>" class="form-control" id="STATE_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="POSTCODE" class="col-md-4 control-label">POSTCODE</label>
						<div class="col-md-8">
							<input type="text" name="POSTCODE" value="<?php echo ($this->input->post('POSTCODE') ? $this->input->post('POSTCODE') : $customer_addres['POSTCODE']); ?>" class="form-control" id="POSTCODE" />
						</div>
					</div>
					<div class="form-group">
						<label for="PHONE1" class="col-md-4 control-label">PHONE1</label>
						<div class="col-md-8">
							<input type="text" name="PHONE1" value="<?php echo ($this->input->post('PHONE1') ? $this->input->post('PHONE1') : $customer_addres['PHONE1']); ?>" class="form-control" id="PHONE1" />
						</div>
					</div>
					<div class="form-group">
						<label for="PHONE2" class="col-md-4 control-label">PHONE2</label>
						<div class="col-md-8">
							<input type="text" name="PHONE2" value="<?php echo ($this->input->post('PHONE2') ? $this->input->post('PHONE2') : $customer_addres['PHONE2']); ?>" class="form-control" id="PHONE2" />
						</div>
					</div>
					<div class="form-group">
						<label for="FAX" class="col-md-4 control-label">FAX</label>
						<div class="col-md-8">
							<input type="text" name="FAX" value="<?php echo ($this->input->post('FAX') ? $this->input->post('FAX') : $customer_addres['FAX']); ?>" class="form-control" id="FAX" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $customer_addres['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $customer_addres['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo ($this->input->post('MODIFIED_DATE') ? $this->input->post('MODIFIED_DATE') : $customer_addres['MODIFIED_DATE']); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo ($this->input->post('MODIFIED_BY') ? $this->input->post('MODIFIED_BY') : $customer_addres['MODIFIED_BY']); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo ($this->input->post('CLIENT_ID') ? $this->input->post('CLIENT_ID') : $customer_addres['CLIENT_ID']); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($customer_addres['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
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