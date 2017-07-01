<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>

            <?php echo form_open('masters_jobsector/add', array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="JOBSECTOR_NAME" class="col-md-4 control-label">JOBSECTOR NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="JOBSECTOR_NAME" value="<?php echo $this->input->post('JOBSECTOR_NAME'); ?>" class="form-control" id="JOBSECTOR_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LOAN_TYPE" class="col-md-4 control-label">LOAN TYPE</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="LOAN_TYPE" value="1"  id="LOAN_TYPE" />
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