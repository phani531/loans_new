<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('administration_emp_branch_info/edit/' . $administration_emp_branch_info['ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_emp_branch_info['EMP_ID']) && $administration_emp_branch_info['EMP_ID'] != "") ? $administration_emp_branch_info['EMP_ID'] : set_value("EMP_ID");
                        $a_options = array("" => "Select");
                        foreach ($all_administration_employees as $administration_employee) {
                            $a_options[$administration_employee['EMP_ID']] = $administration_employee['EMP_NAME'];
                        }
                        $js = 'id="EMP_ID" class="form-control required"';
                        echo form_dropdown('EMP_ID', $a_options, $name_value, $js);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_ID" class="col-md-4 control-label">BRANCH ID</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_emp_branch_info['BRANCH_ID']) && $administration_emp_branch_info['BRANCH_ID'] != "") ? $administration_emp_branch_info['BRANCH_ID'] : set_value("BRANCH_ID");
                        $b_options = array("" => "Select");
                        foreach ($all_administration_comp_profile as $administration_comp_profile) {
                            $b_options[$administration_comp_profile['BRANCH_ID']] = $administration_comp_profile['BRANCH_NAME'];
                        }
                        $js = 'id="BRANCH_ID" class="form-control required"';
                        echo form_dropdown('BRANCH_ID', $b_options, $name_value, $js);
                        ?>
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