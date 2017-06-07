<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_holiday_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>HOLIDAY ID</th>
						<th>HOLIDAY NAME</th>
						<th>HOLIDAY FROM DATE</th>
						<th>HOLIDAY TO DATE</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($masters_holiday_info as $m){ ?>
                    <tr>
						<td><?php echo $m['HOLIDAY_ID']; ?></td>
						<td><?php echo $m['HOLIDAY_NAME']; ?></td>
						<td><?php echo $m['HOLIDAY_FROM_DATE']; ?></td>
						<td><?php echo $m['HOLIDAY_TO_DATE']; ?></td>
						<td><?php echo $m['CREATED_DATE']; ?></td>
						<td><?php echo $m['CREATED_BY']; ?></td>
						<td><?php echo $m['MODIFIED_DATE']; ?></td>
						<td><?php echo $m['MODIFIED_BY']; ?></td>
						<td><?php echo $m['CLIENT_ID']; ?></td>
						<td><?php echo $m['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('masters_holiday_info/edit/'.$m['HOLIDAY_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('masters_holiday_info/remove/'.$m['HOLIDAY_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>