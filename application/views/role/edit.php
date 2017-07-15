<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('role/edit/' . $role['ROLE_ID'], array("class" => "form-horizontal", "name" => "role_form", "id" => "role_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="ROLE_NAME" class="col-md-4 control-label">ROLE NAME</label>
                    <div class="col-md-8">
                        <?php
                        $name_value = (isset($role) && !empty($role)) ? $role['ROLE_NAME'] : set_value("ROLE_NAME");
                        $role_name = array(
                            'name' => 'ROLE_NAME',
                            'id' => 'ROLE_NAME',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($role_name);
                        echo form_error("ROLE_NAME");
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