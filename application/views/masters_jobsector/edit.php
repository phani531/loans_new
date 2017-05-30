<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('masters_jobsector/edit/'.$masters_jobsector['JOBSECTOR_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="JOBSECTOR_NAME" class="col-md-4 control-label">JOBSECTOR NAME</label>
						<div class="col-md-8">
							<input type="text" name="JOBSECTOR_NAME" value="<?php echo ($this->input->post('JOBSECTOR_NAME') ? $this->input->post('JOBSECTOR_NAME') : $masters_jobsector['JOBSECTOR_NAME']); ?>" class="form-control" id="JOBSECTOR_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOAN_TYPE" class="col-md-4 control-label">LOAN TYPE</label>
						<div class="col-md-8">
							<input type="checkbox" name="LOAN_TYPE" value="1" <?php echo ($masters_jobsector['LOAN_TYPE']==1 ? 'checked="checked"' : ''); ?> id='LOAN_TYPE' />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $masters_jobsector['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $masters_jobsector['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo ($this->input->post('MODIFIED_DATE') ? $this->input->post('MODIFIED_DATE') : $masters_jobsector['MODIFIED_DATE']); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo ($this->input->post('MODIFIED_BY') ? $this->input->post('MODIFIED_BY') : $masters_jobsector['MODIFIED_BY']); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo ($this->input->post('CLIENT_ID') ? $this->input->post('CLIENT_ID') : $masters_jobsector['CLIENT_ID']); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($masters_jobsector['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
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