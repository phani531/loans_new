<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('userrights_by_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>UR ID</th>
						<th>FORM ID</th>
						<th>FORM VIEW</th>
						<th>FORM ADD</th>
						<th>FORM EDIT</th>
						<th>FORM DELETE</th>
						<th>FORM REPORT</th>
						<th>USER ID</th>
						<th>IS ACTIVE</th>
						<th>CREATED BY</th>
						<th>CREATED DATE</th>
						<th>MODIFIED BY</th>
						<th>MODIFIED DATE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($userrights_by_users as $u){ ?>
                    <tr>
						<td><?php echo $u['UR_ID']; ?></td>
						<td><?php echo $u['FORM_ID']; ?></td>
						<td><?php echo $u['FORM_VIEW']; ?></td>
						<td><?php echo $u['FORM_ADD']; ?></td>
						<td><?php echo $u['FORM_EDIT']; ?></td>
						<td><?php echo $u['FORM_DELETE']; ?></td>
						<td><?php echo $u['FORM_REPORT']; ?></td>
						<td><?php echo $u['USER_ID']; ?></td>
						<td><?php echo $u['IS_ACTIVE']; ?></td>
						<td><?php echo $u['CREATED_BY']; ?></td>
						<td><?php echo $u['CREATED_DATE']; ?></td>
						<td><?php echo $u['MODIFIED_BY']; ?></td>
						<td><?php echo $u['MODIFIED_DATE']; ?></td>
						<td>
                            <a href="<?php echo site_url('userrights_by_user/edit/'.$u['UR_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('userrights_by_user/remove/'.$u['UR_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
