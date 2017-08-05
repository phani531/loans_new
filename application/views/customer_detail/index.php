<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('customer_detail/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered admin-datatable" id="cust_profile_table" data-href="<?php echo base_url(); ?>customer_detail/getAllCustomers">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>CUSTOMER NAME</th>
                                <th>CUSTOMER IDNO</th>
                                <th>EMAIL ID</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
