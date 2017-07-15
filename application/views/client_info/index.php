<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('client_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url() . "client_info/getAllClients" ?>" id="client_info_add">
                        <thead>
                            <tr>
                                <th>CLIENT ID</th>
                                <th>CLIENT CODE</th>
                                <th>CLIENT NAME</th>
                                <th class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
