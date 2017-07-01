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