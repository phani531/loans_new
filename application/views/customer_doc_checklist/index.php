<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('customer_doc_checklist/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>CHECKLIST ID</th>
						<th>CUSTOMER ID</th>
						<th>DOCUMENT ID</th>
						<th>DOCUMENT PIC PATH</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($customer_doc_checklist as $c){ ?>
                    <tr>
						<td><?php echo $c['CHECKLIST_ID']; ?></td>
						<td><?php echo $c['CUSTOMER_ID']; ?></td>
						<td><?php echo $c['DOCUMENT_ID']; ?></td>
						<td><?php echo $c['DOCUMENT_PIC_PATH']; ?></td>
						<td><?php echo $c['CREATED_DATE']; ?></td>
						<td><?php echo $c['CREATED_BY']; ?></td>
						<td><?php echo $c['MODIFIED_DATE']; ?></td>
						<td><?php echo $c['MODIFIED_BY']; ?></td>
						<td><?php echo $c['CLIENT_ID']; ?></td>
						<td><?php echo $c['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('customer_doc_checklist/edit/'.$c['CHECKLIST_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('customer_doc_checklist/remove/'.$c['CHECKLIST_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
