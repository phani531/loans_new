<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_login/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>LOGIN ID</th>
						<th>EMP ID</th>
						<th>LOGIN USERNAME</th>
						<th>LOGIN PASSWORD</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($administration_logins as $a){ ?>
                    <tr>
						<td><?php echo $a['LOGIN_ID']; ?></td>
						<td><?php echo $a['EMP_ID']; ?></td>
						<td><?php echo $a['LOGIN_USERNAME']; ?></td>
						<td><?php echo $a['LOGIN_PASSWORD']; ?></td>
						<td>
                            <a href="<?php echo site_url('administration_login/edit/'.$a['LOGIN_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('administration_login/remove/'.$a['LOGIN_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
