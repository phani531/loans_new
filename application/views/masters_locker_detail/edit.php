<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('masters_locker_detail/edit/'.$masters_locker_detail['DETAIL_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="LOCKER_ID" class="col-md-4 control-label">LOCKER ID</label>
						<div class="col-md-8">
							<input type="text" name="LOCKER_ID" value="<?php echo ($this->input->post('LOCKER_ID') ? $this->input->post('LOCKER_ID') : $masters_locker_detail['LOCKER_ID']); ?>" class="form-control" id="LOCKER_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOCKER_ASSIGNED_BY" class="col-md-4 control-label">LOCKER ASSIGNED BY</label>
						<div class="col-md-8">
							<input type="text" name="LOCKER_ASSIGNED_BY" value="<?php echo ($this->input->post('LOCKER_ASSIGNED_BY') ? $this->input->post('LOCKER_ASSIGNED_BY') : $masters_locker_detail['LOCKER_ASSIGNED_BY']); ?>" class="form-control" id="LOCKER_ASSIGNED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOCKER_ASSIGNED_DATE" class="col-md-4 control-label">LOCKER ASSIGNED DATE</label>
						<div class="col-md-8">
							<input type="text" name="LOCKER_ASSIGNED_DATE" value="<?php echo ($this->input->post('LOCKER_ASSIGNED_DATE') ? $this->input->post('LOCKER_ASSIGNED_DATE') : $masters_locker_detail['LOCKER_ASSIGNED_DATE']); ?>" class="form-control" id="LOCKER_ASSIGNED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOCKER_TERMINATED_DATE" class="col-md-4 control-label">LOCKER TERMINATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="LOCKER_TERMINATED_DATE" value="<?php echo ($this->input->post('LOCKER_TERMINATED_DATE') ? $this->input->post('LOCKER_TERMINATED_DATE') : $masters_locker_detail['LOCKER_TERMINATED_DATE']); ?>" class="form-control" id="LOCKER_TERMINATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="LOCKER_TERMINATED_BY" class="col-md-4 control-label">LOCKER TERMINATED BY</label>
						<div class="col-md-8">
							<input type="text" name="LOCKER_TERMINATED_BY" value="<?php echo ($this->input->post('LOCKER_TERMINATED_BY') ? $this->input->post('LOCKER_TERMINATED_BY') : $masters_locker_detail['LOCKER_TERMINATED_BY']); ?>" class="form-control" id="LOCKER_TERMINATED_BY" />
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