<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('administration_comp_profile/add', array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="BRANCH_NAME" class="col-md-4 control-label">BRANCH NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_NAME" value="<?php echo $this->input->post('BRANCH_NAME'); ?>" class="form-control" id="BRANCH_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_TYPE" class="col-md-4 control-label">BRANCH TYPE</label>
                    <div class="col-md-8">
                        <select name="BRANCH_TYPE" class="form-control">
                            <option value="">select</option>
                            <?php
                            $BRANCH_TYPE_values = array(
                                '1' => 'Money Lender',
                                '2' => 'Gold',
                            );

                            foreach ($BRANCH_TYPE_values as $value => $display_text) {
                                $selected = ($value == $this->input->post('BRANCH_TYPE')) ? ' selected="selected"' : "";

                                echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_CODE" class="col-md-4 control-label">BRANCH CODE</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_CODE" value="<?php echo $this->input->post('BRANCH_CODE'); ?>" class="form-control" id="BRANCH_CODE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_REG_NO" class="col-md-4 control-label">BRANCH REG NO</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_REG_NO" value="<?php echo $this->input->post('BRANCH_REG_NO'); ?>" class="form-control" id="BRANCH_REG_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_LICENCE_NO" class="col-md-4 control-label">BRANCH LICENCE NO</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_LICENCE_NO" value="<?php echo $this->input->post('BRANCH_LICENCE_NO'); ?>" class="form-control" id="BRANCH_LICENCE_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_ADDRESS" class="col-md-4 control-label">BRANCH ADDRESS</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_ADDRESS" value="<?php echo $this->input->post('BRANCH_ADDRESS'); ?>" class="form-control" id="BRANCH_ADDRESS" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_OFFICE_NO" class="col-md-4 control-label">BRANCH OFFICE NO</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_OFFICE_NO" value="<?php echo $this->input->post('BRANCH_OFFICE_NO'); ?>" class="form-control" id="BRANCH_OFFICE_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_FAX_NO" class="col-md-4 control-label">BRANCH FAX NO</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_FAX_NO" value="<?php echo $this->input->post('BRANCH_FAX_NO'); ?>" class="form-control" id="BRANCH_FAX_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_EMAILID" class="col-md-4 control-label">BRANCH EMAILID</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_EMAILID" value="<?php echo $this->input->post('BRANCH_EMAILID'); ?>" class="form-control" id="BRANCH_EMAILID" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_WEBSITE" class="col-md-4 control-label">BRANCH WEBSITE</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_WEBSITE" value="<?php echo $this->input->post('BRANCH_WEBSITE'); ?>" class="form-control" id="BRANCH_WEBSITE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="BRANCH_LOGO_PIC_PATH" class="col-md-4 control-label">BRANCH LOGO PIC PATH</label>
                    <div class="col-md-8">
                        <input type="text" name="BRANCH_LOGO_PIC_PATH" value="<?php echo $this->input->post('BRANCH_LOGO_PIC_PATH'); ?>" class="form-control" id="BRANCH_LOGO_PIC_PATH" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_NAME" class="col-md-4 control-label">LAWYER NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="LAWYER_NAME" value="<?php echo $this->input->post('LAWYER_NAME'); ?>" class="form-control" id="LAWYER_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_ADDRESS" class="col-md-4 control-label">LAWYER ADDRESS</label>
                    <div class="col-md-8">
                        <input type="text" name="LAWYER_ADDRESS" value="<?php echo $this->input->post('LAWYER_ADDRESS'); ?>" class="form-control" id="LAWYER_ADDRESS" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_OFFICE_NO" class="col-md-4 control-label">LAWYER OFFICE NO</label>
                    <div class="col-md-8">
                        <input type="text" name="LAWYER_OFFICE_NO" value="<?php echo $this->input->post('LAWYER_OFFICE_NO'); ?>" class="form-control" id="LAWYER_OFFICE_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_FAX_NO" class="col-md-4 control-label">LAWYER FAX NO</label>
                    <div class="col-md-8">
                        <input type="text" name="LAWYER_FAX_NO" value="<?php echo $this->input->post('LAWYER_FAX_NO'); ?>" class="form-control" id="LAWYER_FAX_NO" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LAWYER_EMAILID" class="col-md-4 control-label">LAWYER EMAILID</label>
                    <div class="col-md-8">
                        <input type="text" name="LAWYER_EMAILID" value="<?php echo $this->input->post('LAWYER_EMAILID'); ?>" class="form-control" id="LAWYER_EMAILID" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="FINANCIAL_YEAR_FROM" class="col-md-4 control-label">FINANCIAL YEAR FROM</label>
                    <div class="col-md-8">
                        <input type="text" name="FINANCIAL_YEAR_FROM" value="<?php echo $this->input->post('FINANCIAL_YEAR_FROM'); ?>" class="form-control" id="FINANCIAL_YEAR_FROM" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="FINANCIAL_YEAR_TO" class="col-md-4 control-label">FINANCIAL YEAR TO</label>
                    <div class="col-md-8">
                        <input type="text" name="FINANCIAL_YEAR_TO" value="<?php echo $this->input->post('FINANCIAL_YEAR_TO'); ?>" class="form-control" id="FINANCIAL_YEAR_TO" />
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
                <div class="form-group">
                    <label for="OWNER_NAME" class="col-md-4 control-label">OWNER NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="OWNER_NAME" value="<?php echo $this->input->post('OWNER_NAME'); ?>" class="form-control" id="OWNER_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="OFFICE_EXTENSION_NUMBER" class="col-md-4 control-label">OFFICE EXTENSION NUMBER</label>
                    <div class="col-md-8">
                        <input type="text" name="OFFICE_EXTENSION_NUMBER" value="<?php echo $this->input->post('OFFICE_EXTENSION_NUMBER'); ?>" class="form-control" id="OFFICE_EXTENSION_NUMBER" />
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