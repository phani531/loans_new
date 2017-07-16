<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('administration_login/edit/' . $administration_login['LOGIN_ID'], array("class" => "form-horizontal", "name" => "admin_login_form", "id" => "admin_login_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_login['EMP_ID']) && $administration_login['EMP_ID'] != "") ? $administration_login['EMP_ID'] : set_value('EMP_ID');
                        $emp_id = array(
                            'name' => 'EMP_ID',
                            'id' => 'EMP_ID',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($emp_id);
                        echo form_error("EMP_ID");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LOGIN_USERNAME" class="col-md-4 control-label">LOGIN USERNAME</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_login['LOGIN_USERNAME']) && $administration_login['LOGIN_USERNAME'] != "") ? $administration_login['LOGIN_USERNAME'] : set_value('LOGIN_USERNAME');
                        $user_name = array(
                            'name' => 'LOGIN_USERNAME',
                            'id' => 'LOGIN_USERNAME',
                            'value' => $name_value,
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