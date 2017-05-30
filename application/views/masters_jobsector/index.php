<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_jobsector/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>JOBSECTOR ID</th>
						<th>JOBSECTOR NAME</th>
						<th>LOAN TYPE</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($masters_jobsector as $m){ ?>
                    <tr>
						<td><?php echo $m['JOBSECTOR_ID']; ?></td>
						<td><?php echo $m['JOBSECTOR_NAME']; ?></td>
						<td><?php echo $m['LOAN_TYPE']; ?></td>
						<td><?php echo $m['CREATED_DATE']; ?></td>
						<td><?php echo $m['CREATED_BY']; ?></td>
						<td><?php echo $m['MODIFIED_DATE']; ?></td>
						<td><?php echo $m['MODIFIED_BY']; ?></td>
						<td><?php echo $m['CLIENT_ID']; ?></td>
						<td><?php echo $m['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('masters_jobsector/edit/'.$m['JOBSECTOR_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('masters_jobsector/remove/'.$m['JOBSECTOR_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
