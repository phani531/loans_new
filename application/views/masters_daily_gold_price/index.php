<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_daily_gold_price/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
						<th>GOLD PRICE ID</th>
						<th>CARAT ID</th>
						<th>GOLD PRICE DATE</th>
						<th>GOLD PRICE</th>
						<th>GOLD PRICE FACTOR</th>
						<th>GOLD PRICE BASIS</th>
						<th>CREATED DATE</th>
						<th>CREATED BY</th>
						<th>MODIFIED DATE</th>
						<th>MODIFIED BY</th>
						<th>CLIENT ID</th>
						<th>IS ACTIVE</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($masters_daily_gold_price as $m){ ?>
                    <tr>
						<td><?php echo $m['GOLD_PRICE_ID']; ?></td>
						<td><?php echo $m['CARAT_ID']; ?></td>
						<td><?php echo $m['GOLD_PRICE_DATE']; ?></td>
						<td><?php echo $m['GOLD_PRICE']; ?></td>
						<td><?php echo $m['GOLD_PRICE_FACTOR']; ?></td>
						<td><?php echo $m['GOLD_PRICE_BASIS']; ?></td>
						<td><?php echo $m['CREATED_DATE']; ?></td>
						<td><?php echo $m['CREATED_BY']; ?></td>
						<td><?php echo $m['MODIFIED_DATE']; ?></td>
						<td><?php echo $m['MODIFIED_BY']; ?></td>
						<td><?php echo $m['CLIENT_ID']; ?></td>
						<td><?php echo $m['IS_ACTIVE']; ?></td>
						<td>
                            <a href="<?php echo site_url('masters_daily_gold_price/edit/'.$m['GOLD_PRICE_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('masters_daily_gold_price/remove/'.$m['GOLD_PRICE_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
