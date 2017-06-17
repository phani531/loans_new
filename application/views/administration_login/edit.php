<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('administration_login/edit/'.$administration_login['LOGIN_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
						<div class="col-md-8">
							<input type="text" name="EMP_ID" value="<?php echo ($this->input->post('EMP_ID') ? $this->input->post('EMP_ID') : $administration_login['EMP_ID']); ?>" class="form-control" id="EMP_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOGIN_USERNAME" class="col-md-4 control-label">LOGIN USERNAME</label>
						<div class="col-md-8">
							<input type="text" name="LOGIN_USERNAME" value="<?php echo ($this->input->post('LOGIN_USERNAME') ? $this->input->post('LOGIN_USERNAME') : $administration_login['LOGIN_USERNAME']); ?>" class="form-control" id="LOGIN_USERNAME" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOGIN_PASSWORD" class="col-md-4 control-label">LOGIN PASSWORD</label>
						<div class="col-md-8">
							<input type="text" name="LOGIN_PASSWORD" value="<?php echo ($this->input->post('LOGIN_PASSWORD') ? $this->input->post('LOGIN_PASSWORD') : $administration_login['LOGIN_PASSWORD']); ?>" class="form-control" id="LOGIN_PASSWORD" />
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