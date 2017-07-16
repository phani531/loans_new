<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo form_open('administration_fundallocation/edit/' . $administration_fundallocation['FA_ID'], array("class" => "form-horizontal", "name" => "admin_fund_form", "id" => "admin_fund_form")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="FA_DATE" class="col-md-4 control-label">FA DATE</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_fundallocation['FA_DATE']) && $administration_fundallocation['FA_DATE'] != "") ? $administration_fundallocation['FA_DATE'] : set_value('FA_DATE');
                        $fa_date = array(
                            'name' => 'FA_DATE',
                            'id' => 'FA_DATE',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required date-picker"
                        );

                        echo form_input($fa_date);
                        echo form_error("FA_DATE");
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_fundallocation['EMP_ID']) && $administration_fundallocation['EMP_ID'] != "") ? $administration_fundallocation['EMP_ID'] : set_value('EMP_ID');
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
                    <label for="Amount" class="col-md-4 control-label">Amount</label>
                    <div class="col-md-5">
                        <?php
                        $name_value = (isset($administration_fundallocation['Amount']) && $administration_fundallocation['Amount'] != "") ? $administration_fundallocation['Amount'] : set_value('Amount');
                        $amount = array(
                            'name' => 'Amount',
                            'id' => 'Amount',
                            'value' => $name_value,
                            'maxlength' => '50',
                            "class" => "form-control required"
                        );

                        echo form_input($amount);
                        echo form_error("Amount");
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