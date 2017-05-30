<?php echo validation_errors(); ?>
<?php echo form_open('loan/edit/'.$loan['loan_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="customer_id" class="col-md-4 control-label">Customer Id</label>
		<div class="col-md-8">
			<select name="customer_id" class="form-control">
				<option value="">select customer_detail</option>
				<?php 
				foreach($all_customer_details as $customer_detail)
				{
					$selected = ($customer_detail['CUSTOMER_ID'] == $loan['customer_id']) ? ' selected="selected"' : "";

					echo '<option value="'.$customer_detail['CUSTOMER_ID'].'" '.$selected.'>'.$customer_detail['CUSTOMER_NAME'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="loan_type" class="col-md-4 control-label">Loan Type</label>
		<div class="col-md-8">
			<select name="loan_type" class="form-control">
				<option value="">select</option>
				<?php 
				$loan_type_values = array(
						'1'=>'Personal Loans',
						'2'=>'Flexi Loans',
					);

				foreach($loan_type_values as $value => $display_text)
				{
					$selected = ($value == $loan['loan_type']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="loan_duration" class="col-md-4 control-label">Loan Duration</label>
		<div class="col-md-8">
			<select name="loan_duration" class="form-control">
				<option value="">select masters_loan_pay_term</option>
				<?php 
				foreach($all_masters_loan_pay_terms as $masters_loan_pay_term)
				{
					$selected = ($masters_loan_pay_term['LOANTERM_ID'] == $loan['loan_duration']) ? ' selected="selected"' : "";

					echo '<option value="'.$masters_loan_pay_term['LOANTERM_ID'].'" '.$selected.'>'.$masters_loan_pay_term['LOANTERM_NOOFTERMS'].'</option>';
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