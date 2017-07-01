<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_storage_fee/edit/' . $masters_storage_fee['STORAGE_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="STORAGE_CHARGE" class="col-md-4 control-label">STORAGE CHARGE</label>
                    <div class="col-md-8">
                        <input type="text" name="STORAGE_CHARGE" value="<?php echo ($this->input->post('STORAGE_CHARGE') ? $this->input->post('STORAGE_CHARGE') : $masters_storage_fee['STORAGE_CHARGE']); ?>" class="form-control" id="STORAGE_CHARGE" />
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