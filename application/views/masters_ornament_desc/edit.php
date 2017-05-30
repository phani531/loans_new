<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('masters_ornament_desc/edit/'.$masters_ornament_desc['ORNAMENT_DESC_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="ORNAMENT_DESC_NAME" class="col-md-4 control-label">ORNAMENT DESC NAME</label>
						<div class="col-md-8">
							<input type="text" name="ORNAMENT_DESC_NAME" value="<?php echo ($this->input->post('ORNAMENT_DESC_NAME') ? $this->input->post('ORNAMENT_DESC_NAME') : $masters_ornament_desc['ORNAMENT_DESC_NAME']); ?>" class="form-control" id="ORNAMENT_DESC_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="ORNAMENT_DESCRIPTION" class="col-md-4 control-label">ORNAMENT DESCRIPTION</label>
						<div class="col-md-8">
							<input type="text" name="ORNAMENT_DESCRIPTION" value="<?php echo ($this->input->post('ORNAMENT_DESCRIPTION') ? $this->input->post('ORNAMENT_DESCRIPTION') : $masters_ornament_desc['ORNAMENT_DESCRIPTION']); ?>" class="form-control" id="ORNAMENT_DESCRIPTION" />
						</div>
					</div>
					<div class="form-group">
						<label for="ORNAMENT_TYPE" class="col-md-4 control-label">ORNAMENT TYPE</label>
						<div class="col-md-8">
							<input type="text" name="ORNAMENT_TYPE" value="<?php echo ($this->input->post('ORNAMENT_TYPE') ? $this->input->post('ORNAMENT_TYPE') : $masters_ornament_desc['ORNAMENT_TYPE']); ?>" class="form-control" id="ORNAMENT_TYPE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $masters_ornament_desc['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $masters_ornament_desc['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo ($this->input->post('MODIFIED_DATE') ? $this->input->post('MODIFIED_DATE') : $masters_ornament_desc['MODIFIED_DATE']); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo ($this->input->post('MODIFIED_BY') ? $this->input->post('MODIFIED_BY') : $masters_ornament_desc['MODIFIED_BY']); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo ($this->input->post('CLIENT_ID') ? $this->input->post('CLIENT_ID') : $masters_ornament_desc['CLIENT_ID']); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($masters_ornament_desc['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
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