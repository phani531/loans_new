<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add</h3>
            </div>
            
			<?php echo form_open('masters_daily_gold_price/add',array("class"=>"form-horizontal")); ?>

              	<div class="box-body">
                	<div class="form-group">
						<label for="CARAT_ID" class="col-md-4 control-label">CARAT ID</label>
						<div class="col-md-8">
							<input type="text" name="CARAT_ID" value="<?php echo $this->input->post('CARAT_ID'); ?>" class="form-control" id="CARAT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="GOLD_PRICE_DATE" class="col-md-4 control-label">GOLD PRICE DATE</label>
						<div class="col-md-8">
							<input type="text" name="GOLD_PRICE_DATE" value="<?php echo $this->input->post('GOLD_PRICE_DATE'); ?>" class="form-control" id="GOLD_PRICE_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="GOLD_PRICE" class="col-md-4 control-label">GOLD PRICE</label>
						<div class="col-md-8">
							<input type="text" name="GOLD_PRICE" value="<?php echo $this->input->post('GOLD_PRICE'); ?>" class="form-control" id="GOLD_PRICE" />
						</div>
					</div>
					<div class="form-group">
						<label for="GOLD_PRICE_FACTOR" class="col-md-4 control-label">GOLD PRICE FACTOR</label>
						<div class="col-md-8">
							<input type="text" name="GOLD_PRICE_FACTOR" value="<?php echo $this->input->post('GOLD_PRICE_FACTOR'); ?>" class="form-control" id="GOLD_PRICE_FACTOR" />
						</div>
					</div>
					<div class="form-group">
						<label for="GOLD_PRICE_BASIS" class="col-md-4 control-label">GOLD PRICE BASIS</label>
						<div class="col-md-8">
							<input type="text" name="GOLD_PRICE_BASIS" value="<?php echo $this->input->post('GOLD_PRICE_BASIS'); ?>" class="form-control" id="GOLD_PRICE_BASIS" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_DATE" class="col-md-4 control-label">CREATED DATE</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_DATE" value="<?php echo $this->input->post('CREATED_DATE'); ?>" class="form-control" id="CREATED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="CREATED_BY" class="col-md-4 control-label">CREATED BY</label>
						<div class="col-md-8">
							<input type="text" name="CREATED_BY" value="<?php echo $this->input->post('CREATED_BY'); ?>" class="form-control" id="CREATED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_DATE" class="col-md-4 control-label">MODIFIED DATE</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_DATE" value="<?php echo $this->input->post('MODIFIED_DATE'); ?>" class="form-control" id="MODIFIED_DATE" />
						</div>
					</div>
					<div class="form-group">
						<label for="MODIFIED_BY" class="col-md-4 control-label">MODIFIED BY</label>
						<div class="col-md-8">
							<input type="text" name="MODIFIED_BY" value="<?php echo $this->input->post('MODIFIED_BY'); ?>" class="form-control" id="MODIFIED_BY" />
						</div>
					</div>
					<div class="form-group">
						<label for="CLIENT_ID" class="col-md-4 control-label">CLIENT ID</label>
						<div class="col-md-8">
							<input type="text" name="CLIENT_ID" value="<?php echo $this->input->post('CLIENT_ID'); ?>" class="form-control" id="CLIENT_ID" />
						</div>
					</div>
					<div class="form-group">
						<label for="IS_ACTIVE" class="col-md-4 control-label">IS ACTIVE</label>
						<div class="col-md-8">
							<input type="checkbox" name="IS_ACTIVE" value="1"  id="IS_ACTIVE" />
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