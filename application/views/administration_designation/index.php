<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_designation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding table-responsive">
                <div class="col-md-12"> 
                    <table class="table table-striped table-bordered admin-datatable" id="employee_designation_table" data-href="<?php echo base_url(); ?>administration_designation/getAllAdminDesignationDetails">
                        <thead>
                            <tr>
                                <th>DESIGNATION ID</th>
                                <th>DESIGNATION NAME</th>
                                <th>DESIGNATION DESC</th>
                                <th class="text-center">ACTIONS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
