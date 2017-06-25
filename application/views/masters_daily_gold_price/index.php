<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_daily_gold_price/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding table-responsive">
                <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url() ?>masters_daily_gold_price/getAllMastesDailyGoldPrice">
                    <thead>
                        <tr>
                            <th>GOLD PRICE ID</th>
                            <th>CARAT ID</th>
                            <th>GOLD PRICE DATE</th>
                            <th>GOLD PRICE</th>
                            <th>GOLD PRICE FACTOR</th>
                            <th>GOLD PRICE BASIS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
