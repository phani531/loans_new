<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_housestatu/edit/' . $masters_housestatu['HOUSESTATUS_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="HOUSESTATUS_NAME" class="col-md-4 control-label">HOUSESTATUS NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="HOUSESTATUS_NAME" value="<?php echo ($this->input->post('HOUSESTATUS_NAME') ? $this->input->post('HOUSESTATUS_NAME') : $masters_housestatu['HOUSESTATUS_NAME']); ?>" class="form-control" id="HOUSESTATUS_NAME" />
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