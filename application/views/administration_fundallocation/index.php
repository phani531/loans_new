<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_fundallocation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>FA ID</th>
						<th>FA DATE</th>
						<th>EMP ID</th>
						<th>Amount</th>
						<th>IS ACTIVE</th>
						<th>CREATED BY</th>
						<th>CREATED DATE</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($administration_fundallocation as $a){ ?>
                    <tr>
						<td><?php echo $a['FA_ID']; ?></td>
						<td><?php echo $a['FA_DATE']; ?></td>
						<td><?php echo $a['EMP_ID']; ?></td>
						<td><?php echo $a['Amount']; ?></td>
						<td><?php echo $a['IS_ACTIVE']; ?></td>
						<td><?php echo $a['CREATED_BY']; ?></td>
						<td><?php echo $a['CREATED_DATE']; ?></td>
						<td><?php echo $a['MODIFIED_DATE']; ?></td>
						<td><?php echo $a['MODIFIED_BY']; ?></td>
						<td>
                            <a href="<?php echo site_url('administration_fundallocation/edit/'.$a['FA_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('administration_fundallocation/remove/'.$a['FA_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
