<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>
            <?php echo form_open('administration_comp_profile/add', array("class" => "form-horizontal", "name" => "admin_comp_profile_form", "id" => "admin_comp_profile_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="BRANCH_NAME" class="col-md-4 control-label">BRANCH NAME</label>
                    <div class="col-md-5">
                        <?php
                        $branch_name = array(
                            'name' => 'BRANCH_NAME',
                            'id' => 'BRANCH_NAME',
                            'value' => set_value('BRANCH_NAME'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_name);
                        echo form_error("BRANCH_NAME");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_TYPE" class="col-md-4 control-label">BRANCH TYPE</label>
                    <div class="col-md-5">
                        <?php
                        $BRANCH_TYPE_values = array(
                            '' => "Select",
                            '1' => 'Money Lender',
                            '2' => 'Gold',
                        );
                        $name_value = set_value("BRANCH_TYPE");
                        $js = 'id="BRANCH_TYPE" class="form-control required"';
                        echo form_dropdown('BRANCH_TYPE', $BRANCH_TYPE_values, $name_value, $js);
                        echo form_error("BRANCH_TYPE");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_CODE" class="col-md-4 control-label">BRANCH CODE</label>
                    <div class="col-md-5">
                        <?php
                        $branch_code = array(
                            'name' => 'BRANCH_CODE',
                            'id' => 'BRANCH_CODE',
                            'value' => set_value('BRANCH_CODE'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_code);
                        echo form_error("BRANCH_CODE");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_REG_NO" class="col-md-4 control-label">BRANCH REG NO</label>
                    <div class="col-md-5">
                        <?php
                        $branch_reg_code = array(
                            'name' => 'BRANCH_REG_NO',
                            'id' => 'BRANCH_REG_NO',
                            'value' => set_value('BRANCH_REG_NO'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_reg_code);
                        echo form_error("BRANCH_REG_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_LICENCE_NO" class="col-md-4 control-label">BRANCH LICENCE NO</label>
                    <div class="col-md-5">
                        <?php
                        $branch_lic_no = array(
                            'name' => 'BRANCH_LICENCE_NO',
                            'id' => 'BRANCH_LICENCE_NO',
                            'value' => set_value('BRANCH_LICENCE_NO'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_lic_no);
                        echo form_error("BRANCH_LICENCE_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_ADDRESS" class="col-md-4 control-label">BRANCH ADDRESS</label>
                    <div class="col-md-5">
                        <?php
                        $branch_address = array(
                            'name' => 'BRANCH_ADDRESS',
                            'id' => 'BRANCH_ADDRESS',
                            'value' => set_value('BRANCH_ADDRESS'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_address);
                        echo form_error("BRANCH_ADDRESS");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_OFFICE_NO" class="col-md-4 control-label">BRANCH OFFICE NO</label>
                    <div class="col-md-5">
                        <?php
                        $branch_off_no = array(
                            'name' => 'BRANCH_OFFICE_NO',
                            'id' => 'BRANCH_OFFICE_NO',
                            'value' => set_value('BRANCH_OFFICE_NO'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_off_no);
                        echo form_error("BRANCH_OFFICE_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_FAX_NO" class="col-md-4 control-label">BRANCH FAX NO</label>
                    <div class="col-md-5">
                        <?php
                        $branch_fax_no = array(
                            'name' => 'BRANCH_FAX_NO',
                            'id' => 'BRANCH_FAX_NO',
                            'value' => set_value('BRANCH_FAX_NO'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_fax_no);
                        echo form_error("BRANCH_FAX_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_EMAILID" class="col-md-4 control-label">BRANCH EMAILID</label>
                    <div class="col-md-5">
                        <?php
                        $branch_email = array(
                            'name' => 'BRANCH_EMAILID',
                            'id' => 'BRANCH_EMAILID',
                            'value' => set_value('BRANCH_EMAILID'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_email);
                        echo form_error("BRANCH_EMAILID");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_WEBSITE" class="col-md-4 control-label">BRANCH WEBSITE</label>
                    <div class="col-md-5">
                        <?php
                        $branch_web = array(
                            'name' => 'BRANCH_WEBSITE',
                            'id' => 'BRANCH_WEBSITE',
                            'value' => set_value('BRANCH_WEBSITE'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_web);
                        echo form_error("BRANCH_WEBSITE");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_LOGO_PIC_PATH" class="col-md-4 control-label">BRANCH LOGO PIC PATH</label>
                    <div class="col-md-5">
                        <?php
                        $branch_logo_path = array(
                            'name' => 'BRANCH_LOGO_PIC_PATH',
                            'id' => 'BRANCH_LOGO_PIC_PATH',
                            'value' => set_value('BRANCH_LOGO_PIC_PATH'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($branch_logo_path);
                        echo form_error("BRANCH_LOGO_PIC_PATH");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_NAME" class="col-md-4 control-label">LAWYER NAME</label>
                    <div class="col-md-5">
                        <?php
                        $lawyer_name = array(
                            'name' => 'LAWYER_NAME',
                            'id' => 'LAWYER_NAME',
                            'value' => set_value('LAWYER_NAME'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($lawyer_name);
                        echo form_error("LAWYER_NAME");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_ADDRESS" class="col-md-4 control-label">LAWYER ADDRESS</label>
                    <div class="col-md-5">
                        <?php
                        $lawyer_address = array(
                            'name' => 'LAWYER_ADDRESS',
                            'id' => 'LAWYER_ADDRESS',
                            'value' => set_value('LAWYER_ADDRESS'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($lawyer_address);
                        echo form_error("LAWYER_ADDRESS");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_OFFICE_NO" class="col-md-4 control-label">LAWYER OFFICE NO</label>
                    <div class="col-md-5">
                        <?php
                        $lawyer_office_no = array(
                            'name' => 'LAWYER_OFFICE_NO',
                            'id' => 'LAWYER_OFFICE_NO',
                            'value' => set_value('LAWYER_OFFICE_NO'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($lawyer_office_no);
                        echo form_error("LAWYER_OFFICE_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_FAX_NO" class="col-md-4 control-label">LAWYER FAX NO</label>
                    <div class="col-md-5">
                        <?php
                        $lawyer_fax_no = array(
                            'name' => 'LAWYER_FAX_NO',
                            'id' => 'LAWYER_FAX_NO',
                            'value' => set_value('LAWYER_FAX_NO'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($lawyer_fax_no);
                        echo form_error("LAWYER_FAX_NO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_EMAILID" class="col-md-4 control-label">LAWYER EMAILID</label>
                    <div class="col-md-5">
                        <?php
                        $lawyer_email = array(
                            'name' => 'LAWYER_EMAILID',
                            'id' => 'LAWYER_EMAILID',
                            'value' => set_value('LAWYER_EMAILID'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($lawyer_email);
                        echo form_error("LAWYER_EMAILID");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="FINANCIAL_YEAR_FROM" class="col-md-4 control-label">FINANCIAL YEAR FROM</label>
                    <div class="col-md-5">
                        <?php
                        $fina_year_frm = array(
                            'name' => 'FINANCIAL_YEAR_FROM',
                            'id' => 'FINANCIAL_YEAR_FROM',
                            'value' => set_value('FINANCIAL_YEAR_FROM'),
                            'maxlength' => '50',
                            "class" => "form-control required date-picker"
                        );

                        echo form_input($fina_year_frm);
                        echo form_error("FINANCIAL_YEAR_FROM");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="FINANCIAL_YEAR_TO" class="col-md-4 control-label">FINANCIAL YEAR TO</label>
                    <div class="col-md-5">
                        <?php
                        $fina_year_to = array(
                            'name' => 'FINANCIAL_YEAR_TO',
                            'id' => 'FINANCIAL_YEAR_TO',
                            'value' => set_value('FINANCIAL_YEAR_TO'),
                            'maxlength' => '50',
                            "class" => "form-control required date-picker"
                        );

                        echo form_input($fina_year_to);
                        echo form_error("FINANCIAL_YEAR_TO");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
                    <div class="col-md-5">
                        <?php
                        $client_options = array();
                        $client_options[''] = "Select";
                        foreach ($all_client_info as $client_info) {
                            $client_options[$client_info['CLIENT_ID']] = $client_info['CLIENT_NAME'];
                        }
                        $name_value = set_value("CLIENT_ID");
                        $js = 'id="CLIENT_ID" class="form-control required"';
                        echo form_dropdown('CLIENT_ID', $client_options, $name_value, $js);
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="OWNER_NAME" class="col-md-4 control-label">OWNER NAME</label>
                    <div class="col-md-5">
                        <?php
                        $owner_name = array(
                            'name' => 'OWNER_NAME',
                            'id' => 'OWNER_NAME',
                            'value' => set_value('OWNER_NAME'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($owner_name);
                        echo form_error("OWNER_NAME");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="OFFICE_EXTENSION_NUMBER" class="col-md-4 control-label">OFFICE EXTENSION NUMBER</label>
                    <div class="col-md-5">
                        <?php
                        $ext_no = array(
                            'name' => 'OFFICE_EXTENSION_NUMBER',
                            'id' => 'OFFICE_EXTENSION_NUMBER',
                            'value' => set_value('OFFICE_EXTENSION_NUMBER'),
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($ext_no);
                        echo form_error("OFFICE_EXTENSION_NUMBER");
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