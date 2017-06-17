<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit</h3>
            </div>
			
			<?php echo form_open('customer_doc_checklist/edit/'.$customer_doc_checklist['CHECKLIST_ID'],array("class"=>"form-horizontal")); ?>

				<div class="box-body">
					<div class="form-group">
						<label for="CUSTOMER_ID" class="col-md-4 control-label">CUSTOMER ID</label>
						<div class="col-md-8">
							<input type="text" name="CUSTOMER_ID" value="<?php echo ($this->input->post('CUSTOMER_ID') ? $this->input->post('CUSTOMER_ID') : $customer_doc_checklist['CUSTOMER_ID']); ?>" class="form-control" id="CUSTOMER_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="DOCUMENT_ID" class="col-md-4 control-label">DOCUMENT ID</label>
						<div class="col-md-8">
							<input type="text" name="DOCUMENT_ID" value="<?php echo ($this->input->post('DOCUMENT_ID') ? $this->input->post('DOCUMENT_ID') : $customer_doc_checklist['DOCUMENT_ID']); ?>" class="form-control" id="DOCUMENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="DOCUMENT_PIC_PATH" class="col-md-4 control-label">DOCUMENT PIC PATH</label>
						<div class="col-md-8">
							<input type="text" name="DOCUMENT_PIC_PATH" value="<?php echo ($this->input->post('DOCUMENT_PIC_PATH') ? $this->input->post('DOCUMENT_PIC_PATH') : $customer_doc_checklist['DOCUMENT_PIC_PATH']); ?>" class="form-control" id="DOCUMENT_PIC_PATH" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo ($this->input->post('CREATED_DATE') ? $this->input->post('CREATED_DATE') : $customer_doc_checklist['CREATED_DATE']); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo ($this->input->post('CREATED_BY') ? $this->input->post('CREATED_BY') : $customer_doc_checklist['CREATED_BY']); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo ($this->input->post('MODIFIED_DATE') ? $this->input->post('MODIFIED_DATE') : $customer_doc_checklist['MODIFIED_DATE']); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo ($this->input->post('MODIFIED_BY') ? $this->input->post('MODIFIED_BY') : $customer_doc_checklist['MODIFIED_BY']); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo ($this->input->post('CLIENT_ID') ? $this->input->post('CLIENT_ID') : $customer_doc_checklist['CLIENT_ID']); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1" <?php echo ($customer_doc_checklist['IS_ACTIVE']==1 ? 'checked="checked"' : ''); ?> id='IS_ACTIVE' />
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