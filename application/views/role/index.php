<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>ROLE ID</th>
						<th>ROLE NAME</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($roles as $r){ ?>
                    <tr>
						<td><?php echo $r['ROLE_ID']; ?></td>
						<td><?php echo $r['ROLE_NAME']; ?></td>
						<td><?php echo $r['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('role/edit/'.$r['ROLE_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('role/remove/'.$r['ROLE_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>