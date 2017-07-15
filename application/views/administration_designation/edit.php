<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('administration_designation/edit/' . $administration_designation['DESIGNATION_ID'], array("class" => "form-horizontal", "name" => "admin_design_form", "id" => "admin_design_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="DESIGNATION_NAME" class="col-md-4 control-label">DESIGNATION NAME</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_designation['DESIGNATION_NAME']) && $administration_designation['DESIGNATION_NAME'] != "") ? $administration_designation['DESIGNATION_NAME'] : set_value('DESIGNATION_NAME');
                        $des_name = array(
                            'name' => 'DESIGNATION_NAME',
                            'id' => 'DESIGNATION_NAME',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($des_name);
                        echo form_error("DESIGNATION_NAME");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="DESIGNATION_DESC" class="col-md-4 control-label">DESIGNATION DESC</label>
                    <div class="col-md-8">
                        <?php
                        $name_value = (isset($administration_designation['DESIGNATION_DESC']) && $administration_designation['DESIGNATION_DESC'] != "") ? $administration_designation['DESIGNATION_DESC'] : set_value('DESIGNATION_DESC');
                        $des_name = array(
                            'name' => 'DESIGNATION_DESC',
                            'id' => 'DESIGNATION_DESC',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($des_name);
                        echo form_error("DESIGNATION_DESC");
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