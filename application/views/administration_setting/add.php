<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            
			<?php echo form_open('administration_setting/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="BRANCH_ID" class="col-md-4 control-label">BRANCH ID</label>
						<div class="col-md-8">
							<input type="text" name="BRANCH_ID" value="<?php echo $this->input->post('BRANCH_ID'); ?>" class="form-control" id="BRANCH_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="LATE_PAYMENT_CHARGES" class="col-md-4 control-label">LATE PAYMENT CHARGES</label>
						<div class="col-md-8">
							<input type="text" name="LATE_PAYMENT_CHARGES" value="<?php echo $this->input->post('LATE_PAYMENT_CHARGES'); ?>" class="form-control" id="LATE_PAYMENT_CHARGES" />
						</div>
					</div>
					<div class="form-group">
						<label for="SITE_VISIT_CHARGES" class="col-md-4 control-label">SITE VISIT CHARGES</label>
						<div class="col-md-8">
							<input type="text" name="SITE_VISIT_CHARGES" value="<?php echo $this->input->post('SITE_VISIT_CHARGES'); ?>" class="form-control" id="SITE_VISIT_CHARGES" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOD_CHARGES" class="col-md-4 control-label">LOD CHARGES</label>
						<div class="col-md-8">
							<input type="text" name="LOD_CHARGES" value="<?php echo $this->input->post('LOD_CHARGES'); ?>" class="form-control" id="LOD_CHARGES" />
						</div>
					</div>
					<div class="form-group">
						<label for="OTHER_CHARGES" class="col-md-4 control-label">OTHER CHARGES</label>
						<div class="col-md-8">
							<input type="text" name="OTHER_CHARGES" value="<?php echo $this->input->post('OTHER_CHARGES'); ?>" class="form-control" id="OTHER_CHARGES" />
						</div>
					</div>
					<div class="form-group">
						<label for="GIVEN_DISCOUNT" class="col-md-4 control-label">GIVEN DISCOUNT</label>
						<div class="col-md-8">
							<input type="text" name="GIVEN_DISCOUNT" value="<?php echo $this->input->post('GIVEN_DISCOUNT'); ?>" class="form-control" id="GIVEN_DISCOUNT" />
						</div>
					</div>
					<div class="form-group">
						<label for="STAMPING_CHARGES" class="col-md-4 control-label">STAMPING CHARGES</label>
						<div class="col-md-8">
							<input type="text" name="STAMPING_CHARGES" value="<?php echo $this->input->post('STAMPING_CHARGES'); ?>" class="form-control" id="STAMPING_CHARGES" />
						</div>
					</div>
					<div class="form-group">
						<label for="PROCESSING_FEES" class="col-md-4 control-label">PROCESSING FEES</label>
						<div class="col-md-8">
							<input type="text" name="PROCESSING_FEES" value="<?php echo $this->input->post('PROCESSING_FEES'); ?>" class="form-control" id="PROCESSING_FEES" />
						</div>
					</div>
					<div class="form-group">
						<label for="FILING_CHARGES" class="col-md-4 control-label">FILING CHARGES</label>
						<div class="col-md-8">
							<input type="text" name="FILING_CHARGES" value="<?php echo $this->input->post('FILING_CHARGES'); ?>" class="form-control" id="FILING_CHARGES" />
						</div>
					</div>
					<div class="form-group">
						<label for="CASH_ACCOUNT" class="col-md-4 control-label">CASH ACCOUNT</label>
						<div class="col-md-8">
							<input type="text" name="CASH_ACCOUNT" value="<?php echo $this->input->post('CASH_ACCOUNT'); ?>" class="form-control" id="CASH_ACCOUNT" />
						</div>
					</div>
					<div class="form-group">
						<label for="BANK_ACCOUNT" class="col-md-4 control-label">BANK ACCOUNT</label>
						<div class="col-md-8">
							<input type="text" name="BANK_ACCOUNT" value="<?php echo $this->input->post('BANK_ACCOUNT'); ?>" class="form-control" id="BANK_ACCOUNT" />
						</div>
					</div>
					<div class="form-group">
						<label for="NEW_LOAN_ACCOUNT_GIVEN" class="col-md-4 control-label">NEW LOAN ACCOUNT GIVEN</label>
						<div class="col-md-8">
							<input type="text" name="NEW_LOAN_ACCOUNT_GIVEN" value="<?php echo $this->input->post('NEW_LOAN_ACCOUNT_GIVEN'); ?>" class="form-control" id="NEW_LOAN_ACCOUNT_GIVEN" />
						</div>
					</div>
					<div class="form-group">
						<label for="RECEIVED_CAPITAL" class="col-md-4 control-label">RECEIVED CAPITAL</label>
						<div class="col-md-8">
							<input type="text" name="RECEIVED_CAPITAL" value="<?php echo $this->input->post('RECEIVED_CAPITAL'); ?>" class="form-control" id="RECEIVED_CAPITAL" />
						</div>
					</div>
					<div class="form-group">
						<label for="RECEIVED_INTEREST" class="col-md-4 control-label">RECEIVED INTEREST</label>
						<div class="col-md-8">
							<input type="text" name="RECEIVED_INTEREST" value="<?php echo $this->input->post('RECEIVED_INTEREST'); ?>" class="form-control" id="RECEIVED_INTEREST" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOANS_TAKEN_INVESTMENT" class="col-md-4 control-label">LOANS TAKEN INVESTMENT</label>
						<div class="col-md-8">
							<input type="text" name="LOANS_TAKEN_INVESTMENT" value="<?php echo $this->input->post('LOANS_TAKEN_INVESTMENT'); ?>" class="form-control" id="LOANS_TAKEN_INVESTMENT" />
						</div>
					</div>
					<div class="form-group">
						<label for="PAID_CAPITAL_INVESTMENT" class="col-md-4 control-label">PAID CAPITAL INVESTMENT</label>
						<div class="col-md-8">
							<input type="text" name="PAID_CAPITAL_INVESTMENT" value="<?php echo $this->input->post('PAID_CAPITAL_INVESTMENT'); ?>" class="form-control" id="PAID_CAPITAL_INVESTMENT" />
						</div>
					</div>
					<div class="form-group">
						<label for="PAID_INTEREST" class="col-md-4 control-label">PAID INTEREST</label>
						<div class="col-md-8">
							<input type="text" name="PAID_INTEREST" value="<?php echo $this->input->post('PAID_INTEREST'); ?>" class="form-control" id="PAID_INTEREST" />
						</div>
					</div>
					<div class="form-group">
						<label for="APPLICATION_NO" class="col-md-4 control-label">APPLICATION NO</label>
						<div class="col-md-8">
							<input type="text" name="APPLICATION_NO" value="<?php echo $this->input->post('APPLICATION_NO'); ?>" class="form-control" id="APPLICATION_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="PAY_VOUCHER" class="col-md-4 control-label">PAY VOUCHER</label>
						<div class="col-md-8">
							<input type="text" name="PAY_VOUCHER" value="<?php echo $this->input->post('PAY_VOUCHER'); ?>" class="form-control" id="PAY_VOUCHER" />
						</div>
					</div>
					<div class="form-group">
						<label for="PERSONAL_LOAN_NO" class="col-md-4 control-label">PERSONAL LOAN NO</label>
						<div class="col-md-8">
							<input type="text" name="PERSONAL_LOAN_NO" value="<?php echo $this->input->post('PERSONAL_LOAN_NO'); ?>" class="form-control" id="PERSONAL_LOAN_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="CHEQUE_LOAN_NO" class="col-md-4 control-label">CHEQUE LOAN NO</label>
						<div class="col-md-8">
							<input type="text" name="CHEQUE_LOAN_NO" value="<?php echo $this->input->post('CHEQUE_LOAN_NO'); ?>" class="form-control" id="CHEQUE_LOAN_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="HIRE_PURCHASE_LOAN_NO" class="col-md-4 control-label">HIRE PURCHASE LOAN NO</label>
						<div class="col-md-8">
							<input type="text" name="HIRE_PURCHASE_LOAN_NO" value="<?php echo $this->input->post('HIRE_PURCHASE_LOAN_NO'); ?>" class="form-control" id="HIRE_PURCHASE_LOAN_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="SECURITY_LOAN_NO" class="col-md-4 control-label">SECURITY LOAN NO</label>
						<div class="col-md-8">
							<input type="text" name="SECURITY_LOAN_NO" value="<?php echo $this->input->post('SECURITY_LOAN_NO'); ?>" class="form-control" id="SECURITY_LOAN_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="CHEQUE_VS_LOAN" class="col-md-4 control-label">CHEQUE VS LOAN</label>
						<div class="col-md-8">
							<input type="text" name="CHEQUE_VS_LOAN" value="<?php echo $this->input->post('CHEQUE_VS_LOAN'); ?>" class="form-control" id="CHEQUE_VS_LOAN" />
						</div>
					</div>
					<div class="form-group">
						<label for="ALLOW_FUTURE_DATE" class="col-md-4 control-label">ALLOW FUTURE DATE</label>
						<div class="col-md-8">
							<input type="checkbox" name="ALLOW_FUTURE_DATE" value="1"  id="ALLOW_FUTURE_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CALCULATION_TYPE" class="col-md-4 control-label">CALCULATION TYPE</label>
						<div class="col-md-8">
							<input type="checkbox" name="CALCULATION_TYPE" value="1"  id="CALCULATION_TYPE" />
						</div>
					</div>
					<div class="form-group">
						<label for="ADVANCE_LOAN" class="col-md-4 control-label">ADVANCE LOAN</label>
						<div class="col-md-8">
							<input type="checkbox" name="ADVANCE_LOAN" value="1"  id="ADVANCE_LOAN" />
						</div>
					</div>
					<div class="form-group">
						<label for="STATEMENT" class="col-md-4 control-label">STATEMENT</label>
						<div class="col-md-8">
							<input type="checkbox" name="STATEMENT" value="1"  id="STATEMENT" />
						</div>
					</div>
					<div class="form-group">
						<label for="FLEXIBILITY_OF_INTEREST" class="col-md-4 control-label">FLEXIBILITY OF INTEREST</label>
						<div class="col-md-8">
							<input type="checkbox" name="FLEXIBILITY_OF_INTEREST" value="1"  id="FLEXIBILITY_OF_INTEREST" />
						</div>
					</div>
					<div class="form-group">
						<label for="INTEREST_TYPE" class="col-md-4 control-label">INTEREST TYPE</label>
						<div class="col-md-8">
							<input type="checkbox" name="INTEREST_TYPE" value="1"  id="INTEREST_TYPE" />
						</div>
					</div>
					<div class="form-group">
						<label for="PAYMENT_MODE" class="col-md-4 control-label">PAYMENT MODE</label>
						<div class="col-md-8">
							<input type="checkbox" name="PAYMENT_MODE" value="1"  id="PAYMENT_MODE" />
						</div>
					</div>
					<div class="form-group">
						<label for="GOLD_LOAN" class="col-md-4 control-label">GOLD LOAN</label>
						<div class="col-md-8">
							<input type="checkbox" name="GOLD_LOAN" value="1"  id="GOLD_LOAN" />
						</div>
					</div>
					<div class="form-group">
						<label for="A" class="col-md-4 control-label">A</label>
						<div class="col-md-8">
							<input type="text" name="A" value="<?php echo $this->input->post('A'); ?>" class="form-control" id="A" />
						</div>
					</div>
					<div class="form-group">
						<label for="B" class="col-md-4 control-label">B</label>
						<div class="col-md-8">
							<input type="text" name="B" value="<?php echo $this->input->post('B'); ?>" class="form-control" id="B" />
						</div>
					</div>
					<div class="form-group">
						<label for="C" class="col-md-4 control-label">C</label>
						<div class="col-md-8">
							<input type="text" name="C" value="<?php echo $this->input->post('C'); ?>" class="form-control" id="C" />
						</div>
					</div>
					<div class="form-group">
						<label for="D" class="col-md-4 control-label">D</label>
						<div class="col-md-8">
							<input type="text" name="D" value="<?php echo $this->input->post('D'); ?>" class="form-control" id="D" />
						</div>
					</div>
					<div class="form-group">
						<label for="E" class="col-md-4 control-label">E</label>
						<div class="col-md-8">
							<input type="text" name="E" value="<?php echo $this->input->post('E'); ?>" class="form-control" id="E" />
						</div>
					</div>
					<div class="form-group">
						<label for="F" class="col-md-4 control-label">F</label>
						<div class="col-md-8">
							<input type="text" name="F" value="<?php echo $this->input->post('F'); ?>" class="form-control" id="F" />
						</div>
					</div>
					<div class="form-group">
						<label for="G" class="col-md-4 control-label">G</label>
						<div class="col-md-8">
							<input type="text" name="G" value="<?php echo $this->input->post('G'); ?>" class="form-control" id="G" />
						</div>
					</div>
					<div class="form-group">
						<label for="H" class="col-md-4 control-label">H</label>
						<div class="col-md-8">
							<input type="text" name="H" value="<?php echo $this->input->post('H'); ?>" class="form-control" id="H" />
						</div>
					</div>
					<div class="form-group">
						<label for="MAX_SMS_PER_WEEK" class="col-md-4 control-label">MAX SMS PER WEEK</label>
						<div class="col-md-8">
							<input type="text" name="MAX_SMS_PER_WEEK" value="<?php echo $this->input->post('MAX_SMS_PER_WEEK'); ?>" class="form-control" id="MAX_SMS_PER_WEEK" />
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