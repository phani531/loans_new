<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('module/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>MODULE ID</th>
						<th>MODULE NAME</th>
						<th>IS ACTIVE</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($modules as $m){ ?>
                    <tr>
						<td><?php echo $m['MODULE_ID']; ?></td>
						<td><?php echo $m['MODULE_NAME']; ?></td>
						<td><?php echo $m['IS_ACTIVE']; ?></td>
						<td><?php echo $m['CREATED_DATE']; ?></td>
						<td><?php echo $m['CREATED_BY']; ?></td>
						<td>
                            <a href="<?php echo site_url('module/edit/'.$m['MODULE_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('module/remove/'.$m['MODULE_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
