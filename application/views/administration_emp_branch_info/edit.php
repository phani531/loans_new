<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			<?php echo validation_errors(); ?>
			<?php echo form_open('administration_emp_branch_info/edit/'.$administration_emp_branch_info['ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
							<label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
							<div class="col-md-8">
								<select name="EMP_ID" class="form-control">
									<option value="">select administration_employee</option>
									<?php 
									foreach($all_administration_employees as $administration_employee)
									{
										$selected = ($administration_employee['EMP_ID'] == $administration_emp_branch_info['EMP_ID']) ? ' selected="selected"' : "";

										echo '<option value="'.$administration_employee['EMP_ID'].'" '.$selected.'>'.$administration_employee['EMP_NAME'].'</option>';
									} 
									?>
								</select>
							</div>
						</div>
					<div class="form-group">
							<label for="BRANCH_ID" class="col-md-4 control-label">BRANCH ID</label>
							<div class="col-md-8">
								<select name="BRANCH_ID" class="form-control">
									<option value="">select administration_comp_profile</option>
									<?php 
									foreach($all_administration_comp_profile as $administration_comp_profile)
									{
										$selected = ($administration_comp_profile['BRANCH_ID'] == $administration_emp_branch_info['BRANCH_ID']) ? ' selected="selected"' : "";

										echo '<option value="'.$administration_comp_profile['BRANCH_ID'].'" '.$selected.'>'.$administration_comp_profile['BRANCH_NAME'].'</option>';
									} 
									?>
								</select>
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