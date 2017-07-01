<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_holiday_info/edit/' . $masters_holiday_info['HOLIDAY_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="HOLIDAY_NAME" class="col-md-4 control-label">HOLIDAY NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="HOLIDAY_NAME" value="<?php echo ($this->input->post('HOLIDAY_NAME') ? $this->input->post('HOLIDAY_NAME') : $masters_holiday_info['HOLIDAY_NAME']); ?>" class="form-control" id="HOLIDAY_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="HOLIDAY_FROM_DATE" class="col-md-4 control-label">HOLIDAY FROM DATE</label>
                    <div class="col-md-8">
                        <input type="text" name="HOLIDAY_FROM_DATE" value="<?php echo ($this->input->post('HOLIDAY_FROM_DATE') ? $this->input->post('HOLIDAY_FROM_DATE') : $masters_holiday_info['HOLIDAY_FROM_DATE']); ?>" class="form-control" id="HOLIDAY_FROM_DATE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="HOLIDAY_TO_DATE" class="col-md-4 control-label">HOLIDAY TO DATE</label>
                    <div class="col-md-8">
                        <input type="text" name="HOLIDAY_TO_DATE" value="<?php echo ($this->input->post('HOLIDAY_TO_DATE') ? $this->input->post('HOLIDAY_TO_DATE') : $masters_holiday_info['HOLIDAY_TO_DATE']); ?>" class="form-control" id="HOLIDAY_TO_DATE" />
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