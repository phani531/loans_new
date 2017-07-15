<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo form_open('administration_employee/edit/' . $administration_employee['EMP_ID'], array("class" => "form-horizontal", "name" => "admin_employee_form", "id" => "admin_employee_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="EMP_NAME" class="col-md-4 control-label">EMP NAME</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['EMP_NAME']) && $administration_employee['EMP_NAME'] != "") ? $administration_employee['EMP_NAME'] : set_value('EMP_NAME');
                        $emp_name = array(
                            'name' => 'EMP_NAME',
                            'id' => 'EMP_NAME',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($emp_name);
                        echo form_error("EMP_NAME");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
                    <div class="col-md-5">
                        <?php
                        $client_options = array("" => "Select");
                        $name_value = "";
                        foreach ($all_client_info as $client_info) {
                            $client_options[$client_info['CLIENT_ID']] = $client_info['CLIENT_NAME'];
                            if ($client_info['CLIENT_ID'] == $administration_employee['CLIENT_ID'])
                                $name_value = $client_info['CLIENT_ID'];
                        }
                        $js = 'id="ROLE_ID" class="form-control required"';
                        echo form_dropdown('CLIENT_ID', $client_options, $name_value, $js);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="IC_NO" class="col-md-4 control-label">IC NO</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['IC_NO']) && $administration_employee['IC_NO'] != "") ? $administration_employee['IC_NO'] : set_value('IC_NO');
                        $ic_no = array(
                            'name' => 'IC_NO',
                            'id' => 'IC_NO',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($ic_no);
                        echo form_error("IC_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="STAFF_NO" class="col-md-4 control-label">STAFF NO</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['STAFF_NO']) && $administration_employee['STAFF_NO'] != "") ? $administration_employee['STAFF_NO'] : set_value('STAFF_NO');
                        $staff_no = array(
                            'name' => 'STAFF_NO',
                            'id' => 'STAFF_NO',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($staff_no);
                        echo form_error("STAFF_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ADDRESS" class="col-md-4 control-label">ADDRESS</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['ADDRESS']) && $administration_employee['ADDRESS'] != "") ? $administration_employee['ADDRESS'] : set_value('ADDRESS');
                        $address = array(
                            'name' => 'ADDRESS',
                            'id' => 'ADDRESS',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_textarea($address);
                        echo form_error("ADDRESS");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="MOBILE_NO" class="col-md-4 control-label">MOBILE NO</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['MOBILE_NO']) && $administration_employee['MOBILE_NO'] != "") ? $administration_employee['MOBILE_NO'] : set_value('MOBILE_NO');
                        $mobile_no = array(
                            'name' => 'MOBILE_NO',
                            'id' => 'MOBILE_NO',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($mobile_no);
                        echo form_error("MOBILE_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="PHONE_NO" class="col-md-4 control-label">PHONE NO</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['PHONE_NO']) && $administration_employee['PHONE_NO'] != "") ? $administration_employee['PHONE_NO'] : set_value('PHONE_NO');
                        $phone_no = array(
                            'name' => 'PHONE_NO',
                            'id' => 'PHONE_NO',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($phone_no);
                        echo form_error("PHONE_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="EMAIL_ID" class="col-md-4 control-label">EMAIL ID</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['EMAIL_ID']) && $administration_employee['EMAIL_ID'] != "") ? $administration_employee['EMAIL_ID'] : set_value('EMAIL_ID');
                        $email = array(
                            'name' => 'EMAIL_ID',
                            'id' => 'EMAIL_ID',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($email);
                        echo form_error("EMAIL_ID");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="GENDER" class="col-md-4 control-label">GENDER</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['GENDER']) && $administration_employee['GENDER'] != "") ? $administration_employee['GENDER'] : set_value('GENDER');
                        $gender = array(
                            'name' => 'GENDER',
                            'id' => 'GENDER',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($gender);
                        echo form_error("GENDER");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="DESIGNATION_ID" class="col-md-4 control-label">DESIGNATION ID</label>
                    <div class="col-md-5">
                        <?php
                        $admin_options = array("" => "Select");
                        $name_value = "";
                        foreach ($all_administration_designation as $value) {
                            $admin_options[$value['DESIGNATION_ID']] = $value['DESIGNATION_NAME'];
                            if ($value['DESIGNATION_ID'] == $administration_employee['DESIGNATION_ID'])
                                $name_value = $value['DESIGNATION_ID'];
                        }
                        $js = 'id="DESIGNATION_ID" class="form-control required"';
                        echo form_dropdown('DESIGNATION_ID', $admin_options, $name_value, $js);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ACTIVE_STATUS" class="col-md-4 control-label">ACTIVE STATUS</label>
                    <div class="col-md-5">
                        <?php $checked = (isset($administration_employee['ACTIVE_STATUS']) && $administration_employee['ACTIVE_STATUS'] == 1) ? "checked='checked'" : ""; ?>
                        <input type="checkbox" name="ACTIVE_STATUS" value=""  id="ACTIVE_STATUS" <?php echo $checked ?>  />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BASIC_SALARY" class="col-md-4 control-label">BASIC SALARY</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['BASIC_SALARY']) && $administration_employee['BASIC_SALARY'] != "") ? $administration_employee['BASIC_SALARY'] : set_value('BASIC_SALARY');
                        $basic_salary = array(
                            'name' => 'BASIC_SALARY',
                            'id' => 'BASIC_SALARY',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($basic_salary);
                        echo form_error("BASIC_SALARY");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LANGUAGE" class="col-md-4 control-label">LANGUAGE</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['LANGUAGE']) && $administration_employee['LANGUAGE'] != "") ? $administration_employee['LANGUAGE'] : set_value('LANGUAGE');
                        $language = array(
                            'name' => 'LANGUAGE',
                            'id' => 'LANGUAGE',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($language);
                        echo form_error("LANGUAGE");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="EMPLOYEE_PIC_PATH" class="col-md-4 control-label">EMPLOYEE PIC PATH</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_employee['EMPLOYEE_PIC_PATH']) && $administration_employee['EMPLOYEE_PIC_PATH'] != "") ? $administration_employee['EMPLOYEE_PIC_PATH'] : set_value('EMPLOYEE_PIC_PATH');
                        $emp_path = array(
                            'name' => 'EMPLOYEE_PIC_PATH',
                            'id' => 'EMPLOYEE_PIC_PATH',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($emp_path);
                        echo form_error("EMPLOYEE_PIC_PATH");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="VIEW_OTHER_BRANCH_DETAILS" class="col-md-4 control-label">VIEW OTHER BRANCH DETAILS</label>
                    <div class="col-md-5">
                        <?php $checked = (isset($administration_employee['VIEW_OTHER_BRANCH_DETAILS']) && $administration_employee['VIEW_OTHER_BRANCH_DETAILS'] == 1) ? "checked='checked'" : ""; ?>
                        <input type="checkbox" name="VIEW_OTHER_BRANCH_DETAILS" value="1"  id="VIEW_OTHER_BRANCH_DETAILS" <?php echo $checked ?> />
                    </div>
                </div>
                <div class="form-group">
                    <label for="MULTIPLE_LOGINS" class="col-md-4 control-label">MULTIPLE LOGINS</label>
                    <div class="col-md-5">
                        <?php $checked = (isset($administration_employee['MULTIPLE_LOGINS']) && $administration_employee['MULTIPLE_LOGINS'] == 1) ? "checked='checked'" : ""; ?>
                        <input type="checkbox" name="MULTIPLE_LOGINS" value="1"  id="MULTIPLE_LOGINS" <?php echo $checked ?>/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ROLE_ID" class="col-md-4 control-label">ROLE ID</label>
                    <div class="col-md-5">
                        <?php
                        $roles_options = array("" => "Select");
                        $name_value = "";
                        foreach ($all_roles as $rolevalue) {
                            $roles_options[$rolevalue['ROLE_ID']] = $rolevalue['ROLE_NAME'];
                            if ($rolevalue['ROLE_ID'] == $administration_employee['ROLE_ID'])
                                $name_value = $rolevalue['ROLE_ID'];
                        }
                        $js = 'id="ROLE_ID" class="form-control required"';
                        echo form_dropdown('ROLE_ID', $roles_options, $name_value, $js);
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