<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_cust_comp_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>COMPANY ID</th>
						<th>COMPANY CODE</th>
						<th>COMPANY NAME</th>
						<th>COMPANY ADDRESS</th>
						<th>COMPANY CITY</th>
						<th>STATE ID</th>
						<th>COMPANY POSTCODE</th>
						<th>COMPANY PHONE1</th>
						<th>COMPANY PHONE2</th>
						<th>COMPANY FAX</th>
						<th>COMPANY CREDIT LIMIT</th>
						<th>COMPANY SALARY DAY FROM1</th>
						<th>COMPANY SALARY DAY TO1</th>
						<th>COMPANY SALARY DAY FROM2</th>
						<th>COMPANY SALARY DAY TO2</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>PIC NAME</th>
						<th>PIC DESIGNATION</th>
						<th>PIC CONTACT NO</th>
						<th>PIC MOBILE NO</th>
						<th>COMPANY BALANCE CREDIT LIMIT</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($masters_cust_comp_info as $m){ ?>
                    <tr>
						<td><?php echo $m['COMPANY_ID']; ?></td>
						<td><?php echo $m['COMPANY_CODE']; ?></td>
						<td><?php echo $m['COMPANY_NAME']; ?></td>
						<td><?php echo $m['COMPANY_ADDRESS']; ?></td>
						<td><?php echo $m['COMPANY_CITY']; ?></td>
						<td><?php echo $m['STATE_ID']; ?></td>
						<td><?php echo $m['COMPANY_POSTCODE']; ?></td>
						<td><?php echo $m['COMPANY_PHONE1']; ?></td>
						<td><?php echo $m['COMPANY_PHONE2']; ?></td>
						<td><?php echo $m['COMPANY_FAX']; ?></td>
						<td><?php echo $m['COMPANY_CREDIT_LIMIT']; ?></td>
						<td><?php echo $m['COMPANY_SALARY_DAY_FROM1']; ?></td>
						<td><?php echo $m['COMPANY_SALARY_DAY_TO1']; ?></td>
						<td><?php echo $m['COMPANY_SALARY_DAY_FROM2']; ?></td>
						<td><?php echo $m['COMPANY_SALARY_DAY_TO2']; ?></td>
						<td><?php echo $m['CREATED_DATE']; ?></td>
						<td><?php echo $m['CREATED_BY']; ?></td>
						<td><?php echo $m['MODIFIED_DATE']; ?></td>
						<td><?php echo $m['MODIFIED_BY']; ?></td>
						<td><?php echo $m['CLIENT_ID']; ?></td>
						<td><?php echo $m['IS_ACTIVE']; ?></td>
						<td><?php echo $m['PIC_NAME']; ?></td>
						<td><?php echo $m['PIC_DESIGNATION']; ?></td>
						<td><?php echo $m['PIC_CONTACT_NO']; ?></td>
						<td><?php echo $m['PIC_MOBILE_NO']; ?></td>
						<td><?php echo $m['COMPANY_BALANCE_CREDIT_LIMIT']; ?></td>
						<td>
                            <a href="<?php echo site_url('masters_cust_comp_info/edit/'.$m['COMPANY_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('masters_cust_comp_info/remove/'.$m['COMPANY_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
