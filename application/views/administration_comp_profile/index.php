<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_comp_profile/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>BRANCH ID</th>
						<th>BRANCH NAME</th>
						<th>BRANCH TYPE</th>
						<th>BRANCH CODE</th>
						<th>BRANCH REG NO</th>
						<th>BRANCH LICENCE NO</th>
						<th>BRANCH ADDRESS</th>
						<th>BRANCH OFFICE NO</th>
						<th>BRANCH FAX NO</th>
						<th>BRANCH EMAILID</th>
						<th>BRANCH WEBSITE</th>
						<th>BRANCH LOGO PIC PATH</th>
						<th>LAWYER NAME</th>
						<th>LAWYER ADDRESS</th>
						<th>LAWYER OFFICE NO</th>
						<th>LAWYER FAX NO</th>
						<th>LAWYER EMAILID</th>
						<th>FINANCIAL YEAR FROM</th>
						<th>FINANCIAL YEAR TO</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>OWNER NAME</th>
						<th>OFFICE EXTENSION NUMBER</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($administration_comp_profile as $a){ ?>
                    <tr>
						<td><?php echo $a['BRANCH_ID']; ?></td>
						<td><?php echo $a['BRANCH_NAME']; ?></td>
						<td><?php echo $a['BRANCH_TYPE']; ?></td>
						<td><?php echo $a['BRANCH_CODE']; ?></td>
						<td><?php echo $a['BRANCH_REG_NO']; ?></td>
						<td><?php echo $a['BRANCH_LICENCE_NO']; ?></td>
						<td><?php echo $a['BRANCH_ADDRESS']; ?></td>
						<td><?php echo $a['BRANCH_OFFICE_NO']; ?></td>
						<td><?php echo $a['BRANCH_FAX_NO']; ?></td>
						<td><?php echo $a['BRANCH_EMAILID']; ?></td>
						<td><?php echo $a['BRANCH_WEBSITE']; ?></td>
						<td><?php echo $a['BRANCH_LOGO_PIC_PATH']; ?></td>
						<td><?php echo $a['LAWYER_NAME']; ?></td>
						<td><?php echo $a['LAWYER_ADDRESS']; ?></td>
						<td><?php echo $a['LAWYER_OFFICE_NO']; ?></td>
						<td><?php echo $a['LAWYER_FAX_NO']; ?></td>
						<td><?php echo $a['LAWYER_EMAILID']; ?></td>
						<td><?php echo $a['FINANCIAL_YEAR_FROM']; ?></td>
						<td><?php echo $a['FINANCIAL_YEAR_TO']; ?></td>
						<td><?php echo $a['CREATED_DATE']; ?></td>
						<td><?php echo $a['CREATED_BY']; ?></td>
						<td><?php echo $a['MODIFIED_DATE']; ?></td>
						<td><?php echo $a['MODIFIED_BY']; ?></td>
						<td><?php echo $a['CLIENT_ID']; ?></td>
						<td><?php echo $a['IS_ACTIVE']; ?></td>
						<td><?php echo $a['OWNER_NAME']; ?></td>
						<td><?php echo $a['OFFICE_EXTENSION_NUMBER']; ?></td>
						<td>
                            <a href="<?php echo site_url('administration_comp_profile/edit/'.$a['BRANCH_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('administration_comp_profile/remove/'.$a['BRANCH_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
