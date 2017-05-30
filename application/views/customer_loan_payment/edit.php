<?php echo validation_errors(); ?>
<?php echo form_open('customer_loan_payment/edit/'.$customer_loan_payment['payment_id'],array("class"=>"form-horizontal")); ?>

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
					$selected = ($value == $customer_loan_payment['payment_method']) ? ' selected="selected"' : "";

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
					$selected = ($administration_employee['EMP_ID'] == $customer_loan_payment['wd_by']) ? ' selected="selected"' : "";

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