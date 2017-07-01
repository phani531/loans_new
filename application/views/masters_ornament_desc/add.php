<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>

            <?php echo form_open('masters_ornament_desc/add', array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="ORNAMENT_DESC_NAME" class="col-md-4 control-label">ORNAMENT DESC NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="ORNAMENT_DESC_NAME" value="<?php echo $this->input->post('ORNAMENT_DESC_NAME'); ?>" class="form-control" id="ORNAMENT_DESC_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="ORNAMENT_DESCRIPTION" class="col-md-4 control-label">ORNAMENT DESCRIPTION</label>
                    <div class="col-md-8">
                        <input type="text" name="ORNAMENT_DESCRIPTION" value="<?php echo $this->input->post('ORNAMENT_DESCRIPTION'); ?>" class="form-control" id="ORNAMENT_DESCRIPTION" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="ORNAMENT_TYPE" class="col-md-4 control-label">ORNAMENT TYPE</label>
                    <div class="col-md-8">
                        <input type="text" name="ORNAMENT_TYPE" value="<?php echo $this->input->post('ORNAMENT_TYPE'); ?>" class="form-control" id="ORNAMENT_TYPE" />
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