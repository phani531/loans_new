<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			<?php echo validation_errors(); ?>
			<?php echo form_open('masters_agent_info/edit/'.$masters_agent_info['AGENT_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="AGENT_IDNO" class="col-md-4 control-label">AGENT IDNO</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_IDNO" value="<?php echo ($this->input->post('AGENT_IDNO') ? $this->input->post('AGENT_IDNO') : $masters_agent_info['AGENT_IDNO']); ?>" class="form-control" id="AGENT_IDNO" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_NAME" class="col-md-4 control-label">AGENT NAME</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_NAME" value="<?php echo ($this->input->post('AGENT_NAME') ? $this->input->post('AGENT_NAME') : $masters_agent_info['AGENT_NAME']); ?>" class="form-control" id="AGENT_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_ADDRESS" class="col-md-4 control-label">AGENT ADDRESS</label>
						<div class="col-md-8">
							<textarea name="AGENT_ADDRESS" class="form-control" id="AGENT_ADDRESS"><?php echo ($this->input->post('AGENT_ADDRESS') ? $this->input->post('AGENT_ADDRESS') : $masters_agent_info['AGENT_ADDRESS']); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_HOUSE_CTC_NO" class="col-md-4 control-label">AGENT HOUSE CTC NO</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_HOUSE_CTC_NO" value="<?php echo ($this->input->post('AGENT_HOUSE_CTC_NO') ? $this->input->post('AGENT_HOUSE_CTC_NO') : $masters_agent_info['AGENT_HOUSE_CTC_NO']); ?>" class="form-control" id="AGENT_HOUSE_CTC_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_MOBILE_CTC_NO" class="col-md-4 control-label">AGENT MOBILE CTC NO</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_MOBILE_CTC_NO" value="<?php echo ($this->input->post('AGENT_MOBILE_CTC_NO') ? $this->input->post('AGENT_MOBILE_CTC_NO') : $masters_agent_info['AGENT_MOBILE_CTC_NO']); ?>" class="form-control" id="AGENT_MOBILE_CTC_NO" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_COMPANY_NAME" class="col-md-4 control-label">AGENT COMPANY NAME</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_COMPANY_NAME" value="<?php echo ($this->input->post('AGENT_COMPANY_NAME') ? $this->input->post('AGENT_COMPANY_NAME') : $masters_agent_info['AGENT_COMPANY_NAME']); ?>" class="form-control" id="AGENT_COMPANY_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_COMPANY_ADDRESS" class="col-md-4 control-label">AGENT COMPANY ADDRESS</label>
						<div class="col-md-8">
							<textarea name="AGENT_COMPANY_ADDRESS" class="form-control" id="AGENT_COMPANY_ADDRESS"><?php echo ($this->input->post('AGENT_COMPANY_ADDRESS') ? $this->input->post('AGENT_COMPANY_ADDRESS') : $masters_agent_info['AGENT_COMPANY_ADDRESS']); ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_COMPANY_CTC_NO" class="col-md-4 control-label">AGENT COMPANY CTC NO</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_COMPANY_CTC_NO" value="<?php echo ($this->input->post('AGENT_COMPANY_CTC_NO') ? $this->input->post('AGENT_COMPANY_CTC_NO') : $masters_agent_info['AGENT_COMPANY_CTC_NO']); ?>" class="form-control" id="AGENT_COMPANY_CTC_NO" />
						</div>
					</div>
					<div class="form-group">
							<label for="AGENT_COMMISSION_TYPE" class="col-md-4 control-label">AGENT COMMISSION TYPE</label>
							<div class="col-md-8">
								<select name="AGENT_COMMISSION_TYPE" class="form-control">
									<option value="">select</option>
									<?php 
									$AGENT_COMMISSION_TYPE_values = array(
						'1'=>'Percentage',
						'2'=>'Fixed',
					);

									foreach($AGENT_COMMISSION_TYPE_values as $value => $display_text)
									{
										$selected = ($value == $masters_agent_info['AGENT_COMMISSION_TYPE']) ? ' selected="selected"' : "";

										echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="AGENT_COMMISSION_AMOUNT" class="col-md-4 control-label">AGENT COMMISSION AMOUNT</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_COMMISSION_AMOUNT" value="<?php echo ($this->input->post('AGENT_COMMISSION_AMOUNT') ? $this->input->post('AGENT_COMMISSION_AMOUNT') : $masters_agent_info['AGENT_COMMISSION_AMOUNT']); ?>" class="form-control" id="AGENT_COMMISSION_AMOUNT" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_COMMISSION_PERCENTAGE" class="col-md-4 control-label">AGENT COMMISSION PERCENTAGE</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_COMMISSION_PERCENTAGE" value="<?php echo ($this->input->post('AGENT_COMMISSION_PERCENTAGE') ? $this->input->post('AGENT_COMMISSION_PERCENTAGE') : $masters_agent_info['AGENT_COMMISSION_PERCENTAGE']); ?>" class="form-control" id="AGENT_COMMISSION_PERCENTAGE" />
						</div>
					</div>
					<div class="form-group">
						<label for="AGENT_PIC_PATH" class="col-md-4 control-label">AGENT PIC PATH</label>
						<div class="col-md-8">
							<input type="text" name="AGENT_PIC_PATH" value="<?php echo ($this->input->post('AGENT_PIC_PATH') ? $this->input->post('AGENT_PIC_PATH') : $masters_agent_info['AGENT_PIC_PATH']); ?>" class="form-control" id="AGENT_PIC_PATH" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $masters_agent_info['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $masters_agent_info['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo ($this->input->post('MODIFIED_DATE') ? $this->input->post('MODIFIED_DATE') : $masters_agent_info['MODIFIED_DATE']); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo ($this->input->post('MODIFIED_BY') ? $this->input->post('MODIFIED_BY') : $masters_agent_info['MODIFIED_BY']); ?>" class="form-control" id="MODIFIED_BY" />
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
										$selected = ($client_info['CLIENT_ID'] == $masters_agent_info['CLIENT_ID']) ? ' selected="selected"' : "";

										echo '<option value="'.$client_info['CLIENT_ID'].'" '.$selected.'>'.$client_info['CLIENT_NAME'].'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($masters_agent_info['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
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