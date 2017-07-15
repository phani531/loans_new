<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>
            <?php echo form_open('administration_employee/add', array("class" => "form-horizontal", "name" => "admin_employee_form", "id" => "admin_employee_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="EMP_NAME" class="col-md-4 control-label">EMP NAME</label>
                    <div class="col-md-5">
                        <?php
                        $emp_name = array(
                            'name' => 'EMP_NAME',
                            'id' => 'EMP_NAME',
                            'value' => set_value('EMP_NAME'),
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
                            if ($client_info['CLIENT_ID'] == set_value('CLIENT_ID'))
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
                        $ic_no = array(
                            'name' => 'IC_NO',
                            'id' => 'IC_NO',
                            'value' => set_value('IC_NO'),
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
                        $staff_no = array(
                            'name' => 'STAFF_NO',
                            'id' => 'STAFF_NO',
                            'value' => set_value('STAFF_NO'),
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
                        $address = array(
                            'name' => 'ADDRESS',
                            'id' => 'ADDRESS',
                            'value' => set_value('ADDRESS'),
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
                        $mobile_no = array(
                            'name' => 'MOBILE_NO',
                            'id' => 'MOBILE_NO',
                            'value' => set_value('MOBILE_NO'),
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
                        $phone_no = array(
                            'name' => 'PHONE_NO',
                            'id' => 'PHONE_NO',
                            'value' => set_value('PHONE_NO'),
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
                        $email = array(
                            'name' => 'EMAIL_ID',
                            'id' => 'EMAIL_ID',
                            'value' => set_value('EMAIL_ID'),
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
                        $gender = array(
                            'name' => 'GENDER',
                            'id' => 'GENDER',
                            'value' => set_value('GENDER'),
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
                        foreach ($all_administration_designation as $administration_designation) {
                            $admin_options[$administration_designation['DESIGNATION_ID']] = $administration_designation['DESIGNATION_NAME'];
                            if ($administration_designation['DESIGNATION_ID'] == set_value('DESIGNATION_ID'))
                                $name_value = $administration_designation['DESIGNATION_ID'];
                        }
                        $js = 'id="DESIGNATION_ID" class="form-control required"';
                        echo form_dropdown('DESIGNATION_ID', $admin_options, $name_value, $js);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ACTIVE_STATUS" class="col-md-4 control-label">ACTIVE STATUS</label>
                    <div class="col-md-5">
                        <input type="checkbox" name="ACTIVE_STATUS" value="1"  id="ACTIVE_STATUS" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BASIC_SALARY" class="col-md-4 control-label">BASIC SALARY</label>
                    <div class="col-md-5">
                        <?php
                        $basic_salary = array(
                            'name' => 'BASIC_SALARY',
                            'id' => 'BASIC_SALARY',
                            'value' => set_value('BASIC_SALARY'),
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
                        $language = array(
                            'name' => 'LANGUAGE',
                            'id' => 'LANGUAGE',
                            'value' => set_value('LANGUAGE'),
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
                        $emp_path = array(
                            'name' => 'EMPLOYEE_PIC_PATH',
                            'id' => 'EMPLOYEE_PIC_PATH',
                            'value' => set_value('EMPLOYEE_PIC_PATH'),
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
                        <input type="checkbox" name="VIEW_OTHER_BRANCH_DETAILS" value="1"  id="VIEW_OTHER_BRANCH_DETAILS" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="MULTIPLE_LOGINS" class="col-md-4 control-label">MULTIPLE LOGINS</label>
                    <div class="col-md-5">
                        <input type="checkbox" name="MULTIPLE_LOGINS" value="1"  id="MULTIPLE_LOGINS" />
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
                            if ($rolevalue['ROLE_ID'] == set_value('ROLE_ID'))
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