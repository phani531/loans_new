<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_agent_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>AGENT ID</th>
						<th>AGENT IDNO</th>
						<th>AGENT NAME</th>
						<th>AGENT ADDRESS</th>
						<th>AGENT HOUSE CTC NO</th>
						<th>AGENT MOBILE CTC NO</th>
						<th>AGENT COMPANY NAME</th>
						<th>AGENT COMPANY ADDRESS</th>
						<th>AGENT COMPANY CTC NO</th>
						<th>AGENT COMMISSION TYPE</th>
						<th>AGENT COMMISSION AMOUNT</th>
						<th>AGENT COMMISSION PERCENTAGE</th>
						<th>AGENT PIC PATH</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($masters_agent_info as $m){ ?>
                    <tr>
						<td><?php echo $m['AGENT_ID']; ?></td>
						<td><?php echo $m['AGENT_IDNO']; ?></td>
						<td><?php echo $m['AGENT_NAME']; ?></td>
						<td><?php echo $m['AGENT_ADDRESS']; ?></td>
						<td><?php echo $m['AGENT_HOUSE_CTC_NO']; ?></td>
						<td><?php echo $m['AGENT_MOBILE_CTC_NO']; ?></td>
						<td><?php echo $m['AGENT_COMPANY_NAME']; ?></td>
						<td><?php echo $m['AGENT_COMPANY_ADDRESS']; ?></td>
						<td><?php echo $m['AGENT_COMPANY_CTC_NO']; ?></td>
						<td><?php echo $m['AGENT_COMMISSION_TYPE']; ?></td>
						<td><?php echo $m['AGENT_COMMISSION_AMOUNT']; ?></td>
						<td><?php echo $m['AGENT_COMMISSION_PERCENTAGE']; ?></td>
						<td><?php echo $m['AGENT_PIC_PATH']; ?></td>
						<td><?php echo $m['CREATED_DATE']; ?></td>
						<td><?php echo $m['CREATED_BY']; ?></td>
						<td><?php echo $m['MODIFIED_DATE']; ?></td>
						<td><?php echo $m['MODIFIED_BY']; ?></td>
						<td><?php echo $m['CLIENT_ID']; ?></td>
						<td><?php echo $m['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('masters_agent_info/edit/'.$m['AGENT_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('masters_agent_info/remove/'.$m['AGENT_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
