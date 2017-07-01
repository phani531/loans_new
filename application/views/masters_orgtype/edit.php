<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_orgtype/edit/' . $masters_orgtype['ORGTYPE_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="ORGTYPE_NAME" class="col-md-4 control-label">ORGTYPE NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="ORGTYPE_NAME" value="<?php echo ($this->input->post('ORGTYPE_NAME') ? $this->input->post('ORGTYPE_NAME') : $masters_orgtype['ORGTYPE_NAME']); ?>" class="form-control" id="ORGTYPE_NAME" />
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