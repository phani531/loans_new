<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('administration_fundallocation/edit/' . $administration_fundallocation['FA_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="FA_DATE" class="col-md-4 control-label">FA DATE</label>
                    <div class="col-md-8">
                        <input type="text" name="FA_DATE" value="<?php echo ($this->input->post('FA_DATE') ? $this->input->post('FA_DATE') : $administration_fundallocation['FA_DATE']); ?>" class="form-control" id="FA_DATE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="EMP_ID" class="col-md-4 control-label">EMP ID</label>
                    <div class="col-md-8">
                        <select name="EMP_ID" class="form-control">
                            <option value="">select administration_employee</option>
                            <?php
                            foreach ($all_administration_employees as $administration_employee) {
                                $selected = ($administration_employee['EMP_ID'] == $administration_fundallocation['EMP_ID']) ? ' selected="selected"' : "";

                                echo '<option value="' . $administration_employee['EMP_ID'] . '" ' . $selected . '>' . $administration_employee['EMP_NAME'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Amount" class="col-md-4 control-label">Amount</label>
                    <div class="col-md-8">
                        <input type="text" name="Amount" value="<?php echo ($this->input->post('Amount') ? $this->input->post('Amount') : $administration_fundallocation['Amount']); ?>" class="form-control" id="Amount" />
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