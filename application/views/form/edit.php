<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('form/edit/'.$form['FORM_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="FORM_NAME" class="col-md-4 control-label">FORM NAME</label>
						<div class="col-md-8">
							<input type="text" name="FORM_NAME" value="<?php echo ($this->input->post('FORM_NAME') ? $this->input->post('FORM_NAME') : $form['FORM_NAME']); ?>" class="form-control" id="FORM_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODULE_ID" class="col-md-4 control-label">MODULE ID</label>
						<div class="col-md-8">
							<input type="text" name="MODULE_ID" value="<?php echo ($this->input->post('MODULE_ID') ? $this->input->post('MODULE_ID') : $form['MODULE_ID']); ?>" class="form-control" id="MODULE_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo ($this->input->post('CLIENT_ID') ? $this->input->post('CLIENT_ID') : $form['CLIENT_ID']); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($form['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $form['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $form['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
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