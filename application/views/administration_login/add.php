<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>

            <?php echo form_open('administration_login/add', array("class" => "form-horizontal", "name" => "admin_login_form", "id" => "admin_login_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
                    <div class="col-md-5">
                        <?php
                        $employee_options = array();
                        $employee_options[''] = "Select";
                        foreach ($admin_employee_data as $admin_employee) {
                            $employee_options[$admin_employee['EMP_ID']] = $admin_employee['EMP_NAME'];
                        }
                        $name_value = set_value("EMP_ID");
                        $js = 'id="EMP_ID" class="form-control required"';
                        echo form_dropdown('EMP_ID', $employee_options, $name_value, $js);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LOGIN_USERNAME" class="col-md-4 control-label">LOGIN USERNAME</label>
                    <div class="col-md-5">
                        <?php
                        $user_name = array(
                            'name' => 'LOGIN_USERNAME',
                            'id' => 'LOGIN_USERNAME',
                            'value' => set_value('LOGIN_USERNAME'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($user_name);
                        echo form_error("LOGIN_USERNAME");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LOGIN_PASSWORD" class="col-md-4 control-label">LOGIN PASSWORD</label>
                    <div class="col-md-5">
                        <?php
                        $user_pwd = array(
                            'name' => 'LOGIN_PASSWORD',
                            'id' => 'LOGIN_PASSWORD',
                            'value' => set_value('LOGIN_PASSWORD'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_password($user_pwd);
                        echo form_error("LOGIN_PASSWORD");
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