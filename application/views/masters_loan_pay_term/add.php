<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
			<?php echo form_open('masters_loan_pay_term/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="LOANTERM_PAYTERM" class="col-md-4 control-label">LOANTERM PAYTERM</label>
						<div class="col-md-8">
							<input type="text" name="LOANTERM_PAYTERM" value="<?php echo $this->input->post('LOANTERM_PAYTERM'); ?>" class="form-control" id="LOANTERM_PAYTERM" />
						</div>
					</div>
					<div class="form-group">
							<label for="LOANTERM_PAYTYPE" class="col-md-4 control-label">LOANTERM PAYTYPE</label>
							<div class="col-md-8">
								<select name="LOANTERM_PAYTYPE" class="form-control">
									<option value="">select</option>
									<?php 
									$LOANTERM_PAYTYPE_values = array(
						'1'=>'Daily',
						'2'=>'Monthly',
						'3'=>'Quaterly',
						'4'=>'Yearly',
					);

									foreach($LOANTERM_PAYTYPE_values as $value => $display_text)
									{
										$selected = ($value == $this->input->post('LOANTERM_PAYTYPE')) ? ' selected="selected"' : "";

										echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="LOANTERM_NOOFTERMS" class="col-md-4 control-label">LOANTERM NOOFTERMS</label>
						<div class="col-md-8">
							<input type="text" name="LOANTERM_NOOFTERMS" value="<?php echo $this->input->post('LOANTERM_NOOFTERMS'); ?>" class="form-control" id="LOANTERM_NOOFTERMS" />
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