<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
			<?php echo form_open('client_info/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="CLIENT_CODE" class="col-md-4 control-label">CLIENT CODE</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_CODE" value="<?php echo $this->input->post('CLIENT_CODE'); ?>" class="form-control" id="CLIENT_CODE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_NAME" class="col-md-4 control-label">CLIENT NAME</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_NAME" value="<?php echo $this->input->post('CLIENT_NAME'); ?>" class="form-control" id="CLIENT_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="text" name="IS_ACTIVE" value="<?php echo $this->input->post('IS_ACTIVE'); ?>" class="form-control" id="IS_ACTIVE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo $this->input->post('CREATED_DATE'); ?>" class="form-control" id="CREATED_DATE" />
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