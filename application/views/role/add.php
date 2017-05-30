<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            
			<?php echo form_open('role/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="ROLE_NAME" class="col-md-4 control-label">ROLE NAME</label>
						<div class="col-md-8">
							<input type="text" name="ROLE_NAME" value="<?php echo $this->input->post('ROLE_NAME'); ?>" class="form-control" id="ROLE_NAME" />
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