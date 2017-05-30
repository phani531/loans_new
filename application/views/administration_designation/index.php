<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_designation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>DESIGNATION ID</th>
						<th>DESIGNATION NAME</th>
						<th>DESIGNATION DESC</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($administration_designation as $a){ ?>
                    <tr>
						<td><?php echo $a['DESIGNATION_ID']; ?></td>
						<td><?php echo $a['DESIGNATION_NAME']; ?></td>
						<td><?php echo $a['DESIGNATION_DESC']; ?></td>
						<td>
                            <a href="<?php echo site_url('administration_designation/edit/'.$a['DESIGNATION_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('administration_designation/remove/'.$a['DESIGNATION_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
