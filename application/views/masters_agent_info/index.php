<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('masters_agent_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>

            <div class="box-body no-padding table-responsive">
                <table class="table table-striped table-bordered admin-datatable" data-href="<?php echo base_url(); ?>masters_agent_info/getAllMastersAgentInfo">
                    <thead>
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
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
