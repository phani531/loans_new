<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('masters_cust_bank/add', array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="BANK_CODE" class="col-md-4 control-label">BANK CODE</label>
                    <div class="col-md-8">
                        <input type="text" name="BANK_CODE" value="<?php echo $this->input->post('BANK_CODE'); ?>" class="form-control" id="BANK_CODE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BANK_NAME" class="col-md-4 control-label">BANK NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="BANK_NAME" value="<?php echo $this->input->post('BANK_NAME'); ?>" class="form-control" id="BANK_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BANK_BRANCH" class="col-md-4 control-label">BANK BRANCH</label>
                    <div class="col-md-8">
                        <input type="text" name="BANK_BRANCH" value="<?php echo $this->input->post('BANK_BRANCH'); ?>" class="form-control" id="BANK_BRANCH" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
                    <div class="col-md-8">
                        <select name="CLIENT_ID" class="form-control">
                            <option value="">select client_info</option>
                            <?php
                            foreach ($all_client_info as $client_info) {
                                $selected = ($client_info['CLIENT_ID'] == $this->input->post('CLIENT_ID')) ? ' selected="selected"' : "";

                                echo '<option value="' . $client_info['CLIENT_ID'] . '" ' . $selected . '>' . $client_info['CLIENT_NAME'] . '</option>';
                            }
                            ?>
                        </select>
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