<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('customer_addres/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>CONTACT ID</th>
						<th>CUSTOMER ID</th>
						<th>ADDRESS KEY</th>
						<th>ACTUAL ADDRESS</th>
						<th>CITY</th>
						<th>STATE ID</th>
						<th>POSTCODE</th>
						<th>PHONE1</th>
						<th>PHONE2</th>
						<th>FAX</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($customer_address as $c){ ?>
                    <tr>
						<td><?php echo $c['CONTACT_ID']; ?></td>
						<td><?php echo $c['CUSTOMER_ID']; ?></td>
						<td><?php echo $c['ADDRESS_KEY']; ?></td>
						<td><?php echo $c['ACTUAL_ADDRESS']; ?></td>
						<td><?php echo $c['CITY']; ?></td>
						<td><?php echo $c['STATE_ID']; ?></td>
						<td><?php echo $c['POSTCODE']; ?></td>
						<td><?php echo $c['PHONE1']; ?></td>
						<td><?php echo $c['PHONE2']; ?></td>
						<td><?php echo $c['FAX']; ?></td>
						<td><?php echo $c['CREATED_DATE']; ?></td>
						<td><?php echo $c['CREATED_BY']; ?></td>
						<td><?php echo $c['MODIFIED_DATE']; ?></td>
						<td><?php echo $c['MODIFIED_BY']; ?></td>
						<td><?php echo $c['CLIENT_ID']; ?></td>
						<td><?php echo $c['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer_addres/edit/'.$c['CONTACT_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('customer_addres/remove/'.$c['CONTACT_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
