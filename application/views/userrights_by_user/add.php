<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            
			<?php echo form_open('userrights_by_user/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="FORM_ID" class="col-md-4 control-label">FORM ID</label>
						<div class="col-md-8">
							<input type="text" name="FORM_ID" value="<?php echo $this->input->post('FORM_ID'); ?>" class="form-control" id="FORM_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_VIEW" class="col-md-4 control-label">FORM VIEW</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_VIEW" value="1"  id="FORM_VIEW" />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_ADD" class="col-md-4 control-label">FORM ADD</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_ADD" value="1"  id="FORM_ADD" />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_EDIT" class="col-md-4 control-label">FORM EDIT</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_EDIT" value="1"  id="FORM_EDIT" />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_DELETE" class="col-md-4 control-label">FORM DELETE</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_DELETE" value="1"  id="FORM_DELETE" />
						</div>
					</div>
					<div class="form-group">
						<label for="FORM_REPORT" class="col-md-4 control-label">FORM REPORT</label>
						<div class="col-md-8">
							<input type="checkbox" name="FORM_REPORT" value="1"  id="FORM_REPORT" />
						</div>
					</div>
					<div class="form-group">
						<label for="USER_ID" class="col-md-4 control-label">USER ID</label>
						<div class="col-md-8">
							<input type="text" name="USER_ID" value="<?php echo $this->input->post('USER_ID'); ?>" class="form-control" id="USER_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1"  id="IS_ACTIVE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo $this->input->post('CREATED_BY'); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo $this->input->post('CREATED_DATE'); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo $this->input->post('MODIFIED_BY'); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo $this->input->post('MODIFIED_DATE'); ?>" class="form-control" id="MODIFIED_DATE" />
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