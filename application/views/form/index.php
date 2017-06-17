<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('form/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>FORM ID</th>
						<th>FORM NAME</th>
						<th>MODULE ID</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>CREATED BY</th>
						<th>CREATED DATE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($forms as $f){ ?>
                    <tr>
						<td><?php echo $f['FORM_ID']; ?></td>
						<td><?php echo $f['FORM_NAME']; ?></td>
						<td><?php echo $f['MODULE_ID']; ?></td>
						<td><?php echo $f['CLIENT_ID']; ?></td>
						<td><?php echo $f['IS_ACTIVE']; ?></td>
						<td><?php echo $f['CREATED_BY']; ?></td>
						<td><?php echo $f['CREATED_DATE']; ?></td>
						<td>
                            <a href="<?php echo site_url('form/edit/'.$f['FORM_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('form/remove/'.$f['FORM_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
