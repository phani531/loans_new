<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_carat/edit/' . $masters_carat['CARAT_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="CARAT_NAME" class="col-md-4 control-label">CARAT NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="CARAT_NAME" value="<?php echo ($this->input->post('CARAT_NAME') ? $this->input->post('CARAT_NAME') : $masters_carat['CARAT_NAME']); ?>" class="form-control" id="CARAT_NAME" />
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
                                $selected = ($selected == "" && $masters_carat['CLIENT_ID'] != "") ? (($client_info['CLIENT_ID'] == $masters_carat['CLIENT_ID']) ? "selected='selected'" : "") : "";

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