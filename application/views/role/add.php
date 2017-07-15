<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>

            <?php echo form_open('role/add', array("class" => "form-horizontal", "id" => "role_form", "name" => "role_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="ROLE_NAME" class="col-md-4 control-label">ROLE NAME</label>
                    <div class="col-md-8">
                        <?php
                        $role_name = array(
                            'name' => 'ROLE_NAME',
                            'id' => 'ROLE_NAME',
                            'value' => set_value('ROLE_NAME'),
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