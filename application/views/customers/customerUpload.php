<div class="row">
    <div class="col-md-6">
      	<div class="box box-info col-md-3">
            <div class="box-header with-border">
              	<h3 class="box-title">Customer Upload</h3>
              	<?php if($this->session->flashdata('message')) { ?>
				<div class='alert alert-success'>
					<?php echo $this->session->flashdata('message'); ?>
				</div>
				<?php } ?>
            </div>
            <?php echo validation_errors(); ?>
			<form id="myform" method="post" enctype="multipart/form-data" class="form-horizontal" 
			action="<?php echo base_url(); ?>index.php/Customers/fileUpload">

              	<div class="box-body">
                	<div class="form-group">
						<label for="BRANCH_NAME" class="col-md-3 control-label">Upload</label>
						<div class="col-md-3">
							<input  type="file" name="customers" accept=".xls,.xlsx" required/>
						</div>
						<div class="col-md-6">
							<input type="submit" class="btn btn-sm btn-primary" value="Submit">
							<button type="reset" class="btn btn-sm">Reset</button>
						</div>
					</div>
				</div>
			</form>
      	</div>
    </div>
    <?php if(isset($header['1']) && count($header)>0) { ?>
    <div class="col-md-6">
      	<div class="box box-info col-xs-12 col-sm-9">
            <div class="box-header with-border">
              	<h3 class="box-title">Match columns</h3>
            </div>
            <?php echo validation_errors(); ?>
			<form class="form-horizontal" role="form" method="post"
			action="<?php echo base_url(); ?>index.php/Customers/fileUploadInsert">

              	<div class="box-body">
                	<div class="form-group">
						<label for="NAME" class="col-md-4 control-label">NAME</label>
						<div class="col-md-8">
							<select class="chosen-select form-control" name="name" id="form-field-select-3" 
							data-placeholder="Choose a State..." style="display: none;">
								<option value="">  </option>
								<?php if(isset($header['1']) && count($header)>0) { 
									foreach($header['1'] as $key => $columns){ ?>
									<option value="<?php echo $key; ?>"><?php echo $columns; ?></option>
								<?php } } ?>
							</select>
						</div>
					</div>
                	<div class="form-group">
						<label for="EMAIL" class="col-md-4 control-label">EMAIL</label>
						<div class="col-md-8">
							<select class="chosen-select form-control" name="email" id="form-field-select-3"
							 data-placeholder="Choose a State..." style="display: none;">
								<option value="">  </option>
								<?php if(isset($header['1']) && count($header)>0) { 
									foreach($header['1'] as $key => $columns){ ?>
									<option value="<?php echo $key; ?>"><?php echo $columns; ?></option>
								<?php } } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="FIRST NAME" class="col-md-4 control-label">PHONE</label>
						<div class="col-md-8">
							<select class="chosen-select form-control" name="phone" id="form-field-select-3"
								 data-placeholder="Choose a State..." style="display: none;">
									<option value="">  </option>
									<?php if(isset($header['1']) && count($header)>0) { 
										foreach($header['1'] as $key => $columns){ ?>
										<option value="<?php echo $key; ?>"><?php echo $columns; ?></option>
									<?php } } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="LAST NAME" class="col-md-4 control-label">FIRST NAME</label>
						<div class="col-md-8">
							<select class="chosen-select form-control" name="firstName" id="form-field-select-3"
							 data-placeholder="Choose a State..." style="display: none;">
								<option value="">  </option>
								<?php if(isset($header['1']) && count($header)>0) { 
									foreach($header['1'] as $key => $columns){ ?>
									<option value="<?php echo $key; ?>"><?php echo $columns; ?></option>
								<?php } } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="LAST NAME" class="col-md-4 control-label">LAST NAME</label>
						<div class="col-md-8">
							<select class="chosen-select form-control" name="lastName" id="form-field-select-3"
							 data-placeholder="Choose a State..." style="display: none;">
								<option value="">  </option>
								<?php if(isset($header['1']) && count($header)>0) { 
									foreach($header['1'] as $key => $columns){ ?>
									<option value="<?php echo $key; ?>"><?php echo $columns; ?></option>
								<?php } } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="LAST NAME" class="col-md-8 control-label"></label>
						<div class="col-md-4">
									<?php //echo "<pre>"; print_r($values);
		 					if(isset($values) && count($values)>0){
		 					 foreach($values as $coulmn){
		 					 	foreach($coulmn as $key=>$val){ ?>
								<input type="hidden" name="values[<?php echo isset($key) ? $key : ''; ?>][]" value="<?php echo isset($val) ? $val : ''; ?>">
							<?php } } } ?>
							<input type="submit" class="btn btn-sm btn-primary" value="Match">
							<button type="reset" class="btn btn-sm">Reset</button>
							
						</div>
					</div>
				</div>
			</form>
      	</div>
    </div>
    <?php } ?>
</div>
<link rel="stylesheet" href="<?php echo base_url(); ?>theme/aceadmin/assets/css/chosen.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>theme/aceadmin/assets/css/jquery-ui.custom.css">
		<script src="<?php echo base_url(); ?>theme/aceadmin/assets/js/ace-extra.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url(); ?>theme/aceadmin/assets/js/jquery-ui.custom.js"></script>
		<script src="<?php echo base_url(); ?>theme/aceadmin/assets/js/chosen.jquery.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo base_url(); ?>theme/aceadmin/assets/js/ace/elements.fileinput.js"></script>
		<script src="<?php echo base_url(); ?>theme/aceadmin/assets/js/ace/ace.searchbox-autocomplete.js"></script>

<script type="text/javascript">
jQuery(function($) {
	$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
					});
					</script>