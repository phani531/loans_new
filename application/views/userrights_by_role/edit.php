<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('userrights_by_role/edit/'.$userrights_by_role['UR_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="FORM_ID" class="col-md-4 control-label">FORM ID</label>
						<div class="col-md-8">
							<input type="text" name="FORM_ID" value="<?php echo ($this->input->post('FORM_ID') ? $this->input->post('FORM_ID') : $userrights_by_role['FORM_ID']); ?>" class="form-control" id="FORM_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_VIEW" class="col-md-4 control-label">FORM VIEW</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_VIEW" value="1" <?php echo ($userrights_by_role['FORM_VIEW']==1 ? 'checked="checked"' : ''); ?> id='FORM_VIEW' />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_ADD" class="col-md-4 control-label">FORM ADD</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_ADD" value="1" <?php echo ($userrights_by_role['FORM_ADD']==1 ? 'checked="checked"' : ''); ?> id='FORM_ADD' />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_EDIT" class="col-md-4 control-label">FORM EDIT</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_EDIT" value="1" <?php echo ($userrights_by_role['FORM_EDIT']==1 ? 'checked="checked"' : ''); ?> id='FORM_EDIT' />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_DELETE" class="col-md-4 control-label">FORM DELETE</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_DELETE" value="1" <?php echo ($userrights_by_role['FORM_DELETE']==1 ? 'checked="checked"' : ''); ?> id='FORM_DELETE' />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_REPORT" class="col-md-4 control-label">FORM REPORT</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_REPORT" value="1" <?php echo ($userrights_by_role['FORM_REPORT']==1 ? 'checked="checked"' : ''); ?> id='FORM_REPORT' />
						</div>
					</div>
					<div class="form-group">
						<label for="ROLE_ID" class="col-md-4 control-label">ROLE ID</label>
						<div class="col-md-8">
							<input type="text" name="ROLE_ID" value="<?php echo ($this->input->post('ROLE_ID') ? $this->input->post('ROLE_ID') : $userrights_by_role['ROLE_ID']); ?>" class="form-control" id="ROLE_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($userrights_by_role['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $userrights_by_role['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $userrights_by_role['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo ($this->input->post('MODIFIED_BY') ? $this->input->post('MODIFIED_BY') : $userrights_by_role['MODIFIED_BY']); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo ($this->input->post('MODIFIED_DATE') ? $this->input->post('MODIFIED_DATE') : $userrights_by_role['MODIFIED_DATE']); ?>" class="form-control" id="MODIFIED_DATE" />
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