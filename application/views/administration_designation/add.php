<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            
			<?php echo form_open('administration_designation/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="DESIGNATION_NAME" class="col-md-4 control-label">DESIGNATION NAME</label>
						<div class="col-md-8">
							<input type="text" name="DESIGNATION_NAME" value="<?php echo $this->input->post('DESIGNATION_NAME'); ?>" class="form-control" id="DESIGNATION_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="DESIGNATION_DESC" class="col-md-4 control-label">DESIGNATION DESC</label>
						<div class="col-md-8">
							<input type="text" name="DESIGNATION_DESC" value="<?php echo $this->input->post('DESIGNATION_DESC'); ?>" class="form-control" id="DESIGNATION_DESC" />
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