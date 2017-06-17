<?php echo validation_errors(); ?>
<?php echo form_open('loan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="applied_amount" class="col-md-4 control-label">Applied Amount</label>
		<div class="col-md-8">
			<input type="text" name="applied_amount" value="<?php echo $this->input->post('applied_amount'); ?>" class="form-control" id="applied_amount" />
		</div>
	</div>
	<div class="form-group">
		<label for="approved_rejected" class="col-md-4 control-label">Approved Rejected</label>
		<div class="col-md-8">
			<input type="text" name="approved_rejected" value="<?php echo $this->input->post('approved_rejected'); ?>" class="form-control" id="approved_rejected" />
		</div>
	</div>
	<div class="form-group">
		<label for="approved_rejected_date" class="col-md-4 control-label">Approved Rejected Date</label>
		<div class="col-md-8">
			<input type="text" name="approved_rejected_date" value="<?php echo $this->input->post('approved_rejected_date'); ?>" class="form-control" id="approved_rejected_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="approved_amount" class="col-md-4 control-label">Approved Amount</label>
		<div class="col-md-8">
			<input type="text" name="approved_amount" value="<?php echo $this->input->post('approved_amount'); ?>" class="form-control" id="approved_amount" />
		</div>
	</div>
	<div class="form-group">
		<label for="fixed_running" class="col-md-4 control-label">Fixed Running</label>
		<div class="col-md-8">
			<input type="text" name="fixed_running" value="<?php echo $this->input->post('fixed_running'); ?>" class="form-control" id="fixed_running" />
		</div>
	</div>
	<div class="form-group">
		<label for="fixed_interest" class="col-md-4 control-label">Fixed Interest</label>
		<div class="col-md-8">
			<input type="text" name="fixed_interest" value="<?php echo $this->input->post('fixed_interest'); ?>" class="form-control" id="fixed_interest" />
		</div>
	</div>
	<div class="form-group">
		<label for="processing_fees" class="col-md-4 control-label">Processing Fees</label>
		<div class="col-md-8">
			<input type="text" name="processing_fees" value="<?php echo $this->input->post('processing_fees'); ?>" class="form-control" id="processing_fees" />
		</div>
	</div>
	<div class="form-group">
		<label for="staming_charges" class="col-md-4 control-label">Staming Charges</label>
		<div class="col-md-8">
			<input type="text" name="staming_charges" value="<?php echo $this->input->post('staming_charges'); ?>" class="form-control" id="staming_charges" />
		</div>
	</div>
	<div class="form-group">
		<label for="filing_charges" class="col-md-4 control-label">Filing Charges</label>
		<div class="col-md-8">
			<input type="text" name="filing_charges" value="<?php echo $this->input->post('filing_charges'); ?>" class="form-control" id="filing_charges" />
		</div>
	</div>
	<div class="form-group">
		<label for="other_chargers" class="col-md-4 control-label">Other Chargers</label>
		<div class="col-md-8">
			<input type="text" name="other_chargers" value="<?php echo $this->input->post('other_chargers'); ?>" class="form-control" id="other_chargers" />
		</div>
	</div>
	<div class="form-group">
		<label for="due_date" class="col-md-4 control-label">Due Date</label>
		<div class="col-md-8">
			<input type="text" name="due_date" value="<?php echo $this->input->post('due_date'); ?>" class="form-control" id="due_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="new_due_date" class="col-md-4 control-label">New Due Date</label>
		<div class="col-md-8">
			<input type="text" name="new_due_date" value="<?php echo $this->input->post('new_due_date'); ?>" class="form-control" id="new_due_date" />
		</div>
	</div>
	<div class="form-group">
		<label for="loan_application_no" class="col-md-4 control-label">Loan Application No</label>
		<div class="col-md-8">
			<input type="text" name="loan_application_no" value="<?php echo $this->input->post('loan_application_no'); ?>" class="form-control" id="loan_application_no" />
		</div>
	</div>
	<div class="form-group">
		<label for="client_id" class="col-md-4 control-label">Client Id</label>
		<div class="col-md-8">
			<input type="text" name="client_id" value="<?php echo $this->input->post('client_id'); ?>" class="form-control" id="client_id" />
		</div>
	</div>
	<div class="form-group">
		<label for="created_by" class="col-md-4 control-label">Created By</label>
		<div class="col-md-8">
			<input type="text" name="created_by" value="<?php echo $this->input->post('created_by'); ?>" class="form-control" id="created_by" />
		</div>
	</div>
	<div class="form-group">
		<label for="created_on" class="col-md-4 control-label">Created On</label>
		<div class="col-md-8">
			<input type="text" name="created_on" value="<?php echo $this->input->post('created_on'); ?>" class="form-control" id="created_on" />
		</div>
	</div>
	<div class="form-group">
		<label for="modified_by" class="col-md-4 control-label">Modified By</label>
		<div class="col-md-8">
			<input type="text" name="modified_by" value="<?php echo $this->input->post('modified_by'); ?>" class="form-control" id="modified_by" />
		</div>
	</div>
	<div class="form-group">
		<label for="modified_on" class="col-md-4 control-label">Modified On</label>
		<div class="col-md-8">
			<input type="text" name="modified_on" value="<?php echo $this->input->post('modified_on'); ?>" class="form-control" id="modified_on" />
		</div>
	</div>
	<div class="form-group">
		<label for="customer_id" class="col-md-4 control-label">Customer Id</label>
		<div class="col-md-8">
			<select name="customer_id" class="form-control">
				<option value="">select customer_detail</option>
				<?php 
				foreach($all_customer_details as $customer_detail)
				{
					$selected = ($customer_detail['CUSTOMER_ID'] == $this->input->post('customer_id')) ? ' selected="selected"' : "";

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
					$selected = ($value == $this->input->post('loan_type')) ? ' selected="selected"' : "";

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
					$selected = ($masters_loan_pay_term['LOANTERM_ID'] == $this->input->post('loan_duration')) ? ' selected="selected"' : "";

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