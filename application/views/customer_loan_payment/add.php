<?php echo validation_errors(); ?>
<?php echo form_open('customer_loan_payment/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="payment_date" class="col-md-4 control-label">Payment Date</label>
		<div class="col-md-8">
			<input type="text" name="payment_date" value="<?php echo $this->input->post('payment_date'); ?>" class="form-control" id="payment_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="receipt_id" class="col-md-4 control-label">Receipt Id</label>
		<div class="col-md-8">
			<input type="text" name="receipt_id" value="<?php echo $this->input->post('receipt_id'); ?>" class="form-control" id="receipt_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="late_pay_charges" class="col-md-4 control-label">Late Pay Charges</label>
		<div class="col-md-8">
			<input type="text" name="late_pay_charges" value="<?php echo $this->input->post('late_pay_charges'); ?>" class="form-control" id="late_pay_charges" />
		</div>
	</div>
	<div class="form-group">
		<label for="lod_charges" class="col-md-4 control-label">Lod Charges</label>
		<div class="col-md-8">
			<input type="text" name="lod_charges" value="<?php echo $this->input->post('lod_charges'); ?>" class="form-control" id="lod_charges" />
		</div>
	</div>
	<div class="form-group">
		<label for="site_vist_charges" class="col-md-4 control-label">Site Vist Charges</label>
		<div class="col-md-8">
			<input type="text" name="site_vist_charges" value="<?php echo $this->input->post('site_vist_charges'); ?>" class="form-control" id="site_vist_charges" />
		</div>
	</div>
	<div class="form-group">
		<label for="other_charges" class="col-md-4 control-label">Other Charges</label>
		<div class="col-md-8">
			<input type="text" name="other_charges" value="<?php echo $this->input->post('other_charges'); ?>" class="form-control" id="other_charges" />
		</div>
	</div>
	<div class="form-group">
		<label for="wd_amount" class="col-md-4 control-label">Wd Amount</label>
		<div class="col-md-8">
			<input type="text" name="wd_amount" value="<?php echo $this->input->post('wd_amount'); ?>" class="form-control" id="wd_amount" />
		</div>
	</div>
	<div class="form-group">
		<label for="recevied_amount" class="col-md-4 control-label">Recevied Amount</label>
		<div class="col-md-8">
			<input type="text" name="recevied_amount" value="<?php echo $this->input->post('recevied_amount'); ?>" class="form-control" id="recevied_amount" />
		</div>
	</div>
	<div class="form-group">
		<label for="card_balance" class="col-md-4 control-label">Card Balance</label>
		<div class="col-md-8">
			<input type="text" name="card_balance" value="<?php echo $this->input->post('card_balance'); ?>" class="form-control" id="card_balance" />
		</div>
	</div>
	<div class="form-group">
		<label for="created_by" class="col-md-4 control-label">Created By</label>
		<div class="col-md-8">
			<input type="text" name="created_by" value="<?php echo $this->input->post('created_by'); ?>" class="form-control" id="created_by" />
		</div>
	</div>
	<div class="form-group">
		<label for="modified_by" class="col-md-4 control-label">Modified By</label>
		<div class="col-md-8">
			<input type="text" name="modified_by" value="<?php echo $this->input->post('modified_by'); ?>" class="form-control" id="modified_by" />
		</div>
	</div>
	<div class="form-group">
		<label for="created_date" class="col-md-4 control-label">Created Date</label>
		<div class="col-md-8">
			<input type="text" name="created_date" value="<?php echo $this->input->post('created_date'); ?>" class="form-control" id="created_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="modified_date" class="col-md-4 control-label">Modified Date</label>
		<div class="col-md-8">
			<input type="text" name="modified_date" value="<?php echo $this->input->post('modified_date'); ?>" class="form-control" id="modified_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="payment_method" class="col-md-4 control-label">Payment Method</label>
		<div class="col-md-8">
			<select name="payment_method" class="form-control">
				<option value="">select</option>
				<?php 
				$payment_method_values = array(
						'1'=>'Withdraw',
						'2'=>'Walkin',
					);

				foreach($payment_method_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('payment_method')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="wd_by" class="col-md-4 control-label">Wd By</label>
		<div class="col-md-8">
			<select name="wd_by" class="form-control">
				<option value="">select administration_employee</option>
				<?php 
				foreach($all_administration_employees as $administration_employee)
				{
					$selected = ($administration_employee['EMP_ID'] == $this->input->post('wd_by')) ? ' selected="selected"' : "";

					echo '<option value="'.$administration_employee['EMP_ID'].'" '.$selected.'>'.$administration_employee['EMP_NAME'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>