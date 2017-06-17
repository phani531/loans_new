 
<style>
.form-horizontal .col-sm-6{
  padding-left:0px !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    font-size: 15px;
    padding: 2px;
}
</style>
<link rel="stylesheet" type="text/css" href="https://almsaeedstudio.com/themes/AdminLTE/plugins/select2/select2.min.css">
</script>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <form method="post" name="myform" id="form" action="<?php echo base_url(); ?>loan/index"  >
            	
            	<select class="form-control select2 select2-hidden-accessible" name="customer_id" style="width: 100%;"
            	 tabindex="-1" aria-hidden="true" id="customer">
            	 <option value="">Select Customer</option>
					  <?php 
                        foreach($all_customers as $cus)
                        {
                        	$selected = ($cus['CUSTOMER_ID'] == $customer_id) ? ' selected="selected"' : "";
                        
                        	echo '<option value="'.$cus['CUSTOMER_ID'].'" '.$selected.'>'.ucfirst($cus['CUSTOMER_NAME']).'</option>';
                        } 
                        ?>
                </select> 
			</form>
              <h3 class="profile-username text-center"><?php echo $customer_detail['CUSTOMER_NAME']; ?></h3>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>FILE NO</b> <a class="pull-right"><?php echo $customer_detail['FILE_NO']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>FILE NO</b> <a class="pull-right"><?php echo $customer_detail['FILE_NO']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>FILE NO</b> <a class="pull-right"><?php echo $customer_detail['FILE_NO']; ?></a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Working Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-cc-jcb margin-r-5"></i> COMPANY</strong>

              <p class="text-muted">
                <?php echo $customer_detail['OCCUPATION_DEPT_NAME']; ?>
              </p>

              <hr>

              <strong><i class="fa fa-tag margin-r-5"></i> OCCUPATION</strong>

              <p class="text-muted">     <?php echo $customer_detail['OCCUPATION_DEPT_NAME']; ?>
</p>
                <hr>

              <strong><i class="fa fa-money margin-r-5"></i> Salary</strong>

              <p class="text-muted"><?php echo $customer_detail['PRESENT_SALARY']; ?></p>

              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            <!-- Contact Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <table class="table table-striped table-bordered">
			    <tr>
			    	<th>Action</th>
					<th>Loan Application No</th>
					<th>Amount</th>
					<th>Duration</th>
				</tr>
				<?php if(sizeof($loans)>0){ foreach($loans as $L){ ?>
			    <tr>
			    	<td><a href="<?php echo $_SERVER['PHP_SELF'].$L['loan_duration']; ?>" class="btn ">Select</a></td>
					<td><?php echo $L['loan_application_no']; ?></td>
			    	<td><?php echo $L['approved_amount']; ?></td>
			    	<td><?php echo $L['loan_duration']; ?></td>
			    </tr>
				<?php } } else { ?>
					<tr><td >No Records Found</td></tr>
				<?php } ?>
			</table>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>




        <div class="col-md-9">
          <div class="nav-tabs-custom">
        	<?php echo validation_errors(); ?>
<?php echo form_open('loan/add',array("class"=>"form-horizontal")); ?>
	<div class="form-group">
		<label for="loan_type" class="col-md-4 control-label">Loan Type</label>
		<div class="col-md-8">
			<select name="loan_type" id="loan_type" class="form-control">
				<option value="">select</option>
				<?php 
				$loan_type_values = array(
						'1'=>'Personal Loans',
						'2'=>'Security Loans',
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
		<label for="loan_duration" class="col-md-4 control-label loan_duration">Loan Duration</label>
		<div class="col-md-8">
			<select name="loan_duration" class="form-control loan_duration">
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
		<label for="applied_amount" class="col-md-4 control-label applied_amount">Applied Amount</label>
		<div class="col-md-8">
			<input type="text" name="applied_amount" value="<?php echo $this->input->post('applied_amount'); ?>"
			 class="form-control applied_amount" id="" />
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
		<label for="approved_rejected" class="col-md-4 control-label">Approved Rejected</label>
		<div class="col-md-8">
		<?php if($this->input->post('approved_rejected')){ $checked = "checked"; } else{ $checked = ""; } ?>
			<input type="radio" name="approved_rejected" value="1" <?php echo $checked; ?>>Approved
			<input type="radio" name="approved_rejected" value="0" <?php echo $checked; ?>>Rejected 
		</div>
	</div>

	<div class="form-group">
		<label for="approved_amount" class="col-md-4 control-label">Approved Amount</label>
		<div class="col-md-8">
			<input type="text" name="approved_amount" value="<?php echo $this->input->post('approved_amount'); ?>" class="form-control" id="approved_amount" />
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
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
        </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->


