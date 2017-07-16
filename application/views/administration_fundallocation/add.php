<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
                <?php echo form_open('administration_fundallocation/add', array("class" => "form-horizontal", "name" => "admin_fund_form", "id" => "admin_fund_form")); ?>

                <div class="box-body">
                    <div class="form-group">
                        <label for="FA_DATE" class="col-md-4 control-label">FA DATE</label>
                        <div class="col-md-5">
                            <?php
                            $fa_date = array(
                                'name' => 'FA_DATE',
                                'id' => 'FA_DATE',
                                'value' => set_value('FA_DATE'),
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
                            $a_options = array("" => "Select");
                            foreach ($all_administration_employees as $administration_employee) {
                                $a_options[$administration_employee['EMP_ID']] = $administration_employee['EMP_NAME'];
                            }
                            $name_value = set_value("EMP_ID");
                            $js = 'id="EMP_ID" class="form-control required"';
                            echo form_dropdown('EMP_ID', $a_options, $name_value, $js);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Amount" class="col-md-4 control-label">Amount</label>
                        <div class="col-md-5">
                            <?php
                            $amount = array(
                                'name' => 'Amount',
                                'id' => 'Amount',
                                'value' => set_value('Amount'),
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