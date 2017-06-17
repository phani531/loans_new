<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_locker_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>DETAIL ID</th>
						<th>LOCKER ID</th>
						<th>LOCKER ASSIGNED BY</th>
						<th>LOCKER ASSIGNED DATE</th>
						<th>LOCKER TERMINATED DATE</th>
						<th>LOCKER TERMINATED BY</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($masters_locker_details as $m){ ?>
                    <tr>
						<td><?php echo $m['DETAIL_ID']; ?></td>
						<td><?php echo $m['LOCKER_ID']; ?></td>
						<td><?php echo $m['LOCKER_ASSIGNED_BY']; ?></td>
						<td><?php echo $m['LOCKER_ASSIGNED_DATE']; ?></td>
						<td><?php echo $m['LOCKER_TERMINATED_DATE']; ?></td>
						<td><?php echo $m['LOCKER_TERMINATED_BY']; ?></td>
						<td>
                            <a href="<?php echo site_url('masters_locker_detail/edit/'.$m['DETAIL_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('masters_locker_detail/remove/'.$m['DETAIL_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
