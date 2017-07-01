<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>

            <?php echo form_open('masters_locker_master/add', array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="LOCKER_STORAGE_BOX_NAME" class="col-md-4 control-label">LOCKER STORAGE BOX NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="LOCKER_STORAGE_BOX_NAME" value="<?php echo $this->input->post('LOCKER_STORAGE_BOX_NAME'); ?>" class="form-control" id="LOCKER_STORAGE_BOX_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="IS_OCCUPIED" class="col-md-4 control-label">IS OCCUPIED</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="IS_OCCUPIED" value="1"  id="IS_OCCUPIED" />
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