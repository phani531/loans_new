<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_advertisement/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding">
                <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url() ?>masters_advertisement/getAllAdvertisements">
                    <thead>
                        <tr>
                            <th>ADVERTISEMENT ID</th>
                            <th>ADVERTISEMENT NAME</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
