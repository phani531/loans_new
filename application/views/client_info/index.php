<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('client_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>CLIENT ID</th>
						<th>CLIENT CODE</th>
						<th>CLIENT NAME</th>
						<th>IS ACTIVE</th>
						<th>CREATED DATE</th>
						<th>MODIFIED DATE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($client_info as $c){ ?>
                    <tr>
						<td><?php echo $c['CLIENT_ID']; ?></td>
						<td><?php echo $c['CLIENT_CODE']; ?></td>
						<td><?php echo $c['CLIENT_NAME']; ?></td>
						<td><?php echo $c['IS_ACTIVE']; ?></td>
						<td><?php echo $c['CREATED_DATE']; ?></td>
						<td><?php echo $c['MODIFIED_DATE']; ?></td>
						<td>
                            <a href="<?php echo site_url('client_info/edit/'.$c['CLIENT_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('client_info/remove/'.$c['CLIENT_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
