<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('administration_comp_profile/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered admin-datatable" id="admin_comp_profile" data-href="<?php echo base_url(); ?>administration_comp_profile/getBranchList">
                        <thead>
                            <tr>
                                <th>BRANCH ID</th>
                                <th>BRANCH NAME</th>
                                <th>BRANCH TYPE</th>
                                <th>BRANCH CODE</th>
                                <th>BRANCH REG NO</th>
                                <th>BRANCH LICENCE NO</th>
                                <th>BRANCH ADDRESS</th>
                                <th>BRANCH OFFICE NO</th>
                                <th>BRANCH FAX NO</th>
                                <th>BRANCH EMAILID</th>
                                <th>BRANCH WEBSITE</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
