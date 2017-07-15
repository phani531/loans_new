<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo form_open('client_info/edit/' . $client_info['CLIENT_ID'], array("class" => "form-horizontal", "name" => "client_info_add_form", "id" => "client_info_add_form")); ?>

            <div class="box-body">
                <div class="box-body">
                    <div class="form-group">
                        <label for="CLIENT_CODE" class="col-md-4 control-label">CLIENT CODE</label>
                        <div class="col-md-5">
                            <?php
                            $name_value = (isset($client_info['CLIENT_CODE']) && $client_info['CLIENT_CODE'] != "") ? $client_info['CLIENT_CODE'] : set_value("CLIENT_CODE");
                            $client_code = array(
                                'name' => 'CLIENT_CODE',
                                'id' => 'CLIENT_CODE',
                                'value' => $name_value,
                                'maxlength' => '20',
                                "class" => "form-control required"
                            );

                            echo form_input($client_code);
                            echo form_error("CLIENT_CODE");
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="CLIENT_NAME" class="col-md-4 control-label">CLIENT NAME</label>
                        <div class="col-md-5">
                            <?php
                            $name_value = (isset($client_info['CLIENT_NAME']) && $client_info['CLIENT_NAME'] != "") ? $client_info['CLIENT_NAME'] : set_value("CLIENT_NAME");
                            $client_name = array(
                                'name' => 'CLIENT_NAME',
                                'id' => 'CLIENT_NAME',
                                'value' => $name_value,
                                'maxlength' => '20',
                                "class" => "form-control required"
                            );

                            echo form_input($client_name);
                            echo form_error("CLIENT_NAME");
                            ?>
                        </div>
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