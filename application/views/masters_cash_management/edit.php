<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_cash_management/edit/' . $masters_cash_management['CASHMANAGEMENT_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="CASHMANAGEMENT_DATE" class="col-md-4 control-label">CASHMANAGEMENT DATE</label>
                    <div class="col-md-8">
                        <input type="text" name="CASHMANAGEMENT_DATE" value="<?php echo ($this->input->post('CASHMANAGEMENT_DATE') ? $this->input->post('CASHMANAGEMENT_DATE') : $masters_cash_management['CASHMANAGEMENT_DATE']); ?>" class="form-control" id="CASHMANAGEMENT_DATE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="CASHMANAGEMENT_AMOUNT" class="col-md-4 control-label">CASHMANAGEMENT AMOUNT</label>
                    <div class="col-md-8">
                        <input type="text" name="CASHMANAGEMENT_AMOUNT" value="<?php echo ($this->input->post('CASHMANAGEMENT_AMOUNT') ? $this->input->post('CASHMANAGEMENT_AMOUNT') : $masters_cash_management['CASHMANAGEMENT_AMOUNT']); ?>" class="form-control" id="CASHMANAGEMENT_AMOUNT" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="CASHMANAGEMENT_RETURN_AMOUNT" class="col-md-4 control-label">CASHMANAGEMENT RETURN AMOUNT</label>
                    <div class="col-md-8">
                        <input type="text" name="CASHMANAGEMENT_RETURN_AMOUNT" value="<?php echo ($this->input->post('CASHMANAGEMENT_RETURN_AMOUNT') ? $this->input->post('CASHMANAGEMENT_RETURN_AMOUNT') : $masters_cash_management['CASHMANAGEMENT_RETURN_AMOUNT']); ?>" class="form-control" id="CASHMANAGEMENT_RETURN_AMOUNT" />
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
                                $selected = ($selected == "" && $masters_cash_management['CLIENT_ID'] != "") ? (($client_info['CLIENT_ID'] == $masters_cash_management['CLIENT_ID']) ? "selected='selected'" : "") : "";
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