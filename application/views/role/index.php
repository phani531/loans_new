<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url() . "role/getAllRoles" ?>" id="roles_table">
                        <thead>
                            <tr>
                                <th>ROLE ID</th>
                                <th>ROLE NAME</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
