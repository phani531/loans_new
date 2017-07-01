<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('masters_document/edit/' . $masters_document['DOCUMENT_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="DOCUMENT_NAME" class="col-md-4 control-label">DOCUMENT NAME</label>
                    <div class="col-md-8">
                        <input type="text" name="DOCUMENT_NAME" value="<?php echo ($this->input->post('DOCUMENT_NAME') ? $this->input->post('DOCUMENT_NAME') : $masters_document['DOCUMENT_NAME']); ?>" class="form-control" id="DOCUMENT_NAME" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="DOC_TYPE" class="col-md-4 control-label">DOC TYPE</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="DOC_TYPE" value="1" <?php echo ($masters_document['DOC_TYPE'] == 1 ? 'checked="checked"' : ''); ?> id='DOC_TYPE' />
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