 
<style>
.form-horizontal .col-sm-6{
  padding-left:0px !important;
}
</style>
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/default-user.png" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>DOB</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Age</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Working Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-cc-jcb margin-r-5"></i> COMPANY</strong>

              <p class="text-muted">
                Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-tag margin-r-5"></i> OCCUPATION</strong>

              <p class="text-muted">Software</p>
                <hr>

              <strong><i class="fa fa-money margin-r-5"></i> Salary</strong>

              <p class="text-muted">232322</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Account Info</strong>3434343434

              <p>
                <span class="label label-danger">ACCOUNTNO</span><span style="float:right;">22212121212</span>
                </p>
                <p>
                <span class="label label-success">ATM CARD NO</span><span style="float:right;">43434343434343434</span>
                </p>
                <p>
                <span class="label label-info">PIN NO</span><span style="float:right;">4343</span>
                </p>
                <p>
                <span class="label label-warning">VALIDITY</span><span style="float:right;">04/08</span>
                </p>
                <p>
                <span class="label label-primary">CVV</span><span style="float:right;">232</span>
              </p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            <!-- Contact Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-location-arrow margin-r-5"></i> Address</strong>

              <p class="text-muted">
                Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-mobile margin-r-5"></i> Phone</strong>

              <p class="text-muted">676767676767</p>
                <hr>

              <strong><i class="fa fa-phone margin-r-5"></i> Alt Phone</strong>

              <p class="text-muted">232322</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#account" data-toggle="tab">Account Info</a></li>
              <li><a href="#paid" data-toggle="tab">Paid Terms</a></li>
              <li><a href="#loan" data-toggle="tab">Loan Schedule</a></li>
              <li><a href="#pending" data-toggle="tab">Pending Terms</a></li>
              <li><a href="#early" data-toggle="tab">Early Loan Settlement</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="account">
               
                <form class="form-horizontal" action="" method="post">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="amountFunding" class="col-sm-6 control-label">Amount Funding</label>

                    <div class="col-sm-6">
                      <input type="number" value="" class="form-control" id="amountFunding" name="amountFunding" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="paidLoan" class="col-sm-6 control-label">Paid Loan Years</label>

                    <div class="col-sm-6">
                      <input type="number" class="form-control" vallue="" id="paidLoan" name="paidLoan" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="totalTerms" class="col-sm-6 control-label">Total Terms</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="totalTerms" name="totalTerms" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="monthlyPayment" class="col-sm-6 control-label">Monthly Payment</label>

                    <div class="col-sm-6">
                      <input type="number" class="form-control" id="monthlyPayment" name="monthlyPayment" value="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="totalLoan" class="col-sm-6 control-label">Total Loan</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="totalLoan" name="totalLoan" value="" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="cop" class="col-sm-6 control-label">COP</label>

                    <div class="col-sm-6">
                      <input type="number" value="" class="form-control" id="cop" name="cop" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="profit" class="col-sm-6 control-label">Profit</label>

                    <div class="col-sm-6">
                      <input type="number" class="form-control" vallue="" id="profit" name="profit" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="outstandingCOP" class="col-sm-6 control-label">Outstanding COP</label>

                    <div class="col-sm-6">
                      <input type="text" value="" class="form-control" id="outstandingCOP" name="outstandingCOP" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="outstandingProfit" class="col-sm-6 control-label">Outstanding Profit</label>

                    <div class="col-sm-6">
                      <input type="number" value="" class="form-control" id="outstandingProfit" name="outstandingProfit" value="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="totalOutstanding" class="col-sm-6 control-label">Total Outstanding</label>

                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="totalOutstanding" name="totalOutstanding" value="" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group" style="visibility:hidden;">
                    <label for="cop" class="col-sm-2 control-label">COP</label>

                    <div class="col-sm-10">
                      <input type="number" value="" class="form-control"  placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="paidPrinciple" class="col-sm-6 control-label">Total Paid Principle</label>

                    <div class="col-sm-6">
                      <input type="number" class="form-control" vallue="" id="paidPrinciple" name="paidPrinciple" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="totalPaidInterest" class="col-sm-6 control-label">Total Paid Interest</label>

                    <div class="col-sm-6">
                      <input type="text" value="" class="form-control" id="totalPaidInterest" name="totalPaidInterest" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="totalPaid" class="col-sm-6 control-label">Total Paid</label>

                    <div class="col-sm-6">
                      <input type="number" value="" class="form-control" id="totalPaid" name="totalPaid" value="" placeholder="">
                    </div>
                  </div>
                  <div class="form-group" style="visibility:hidden;">
                    <label for="totalOutstanding" class="col-sm-2 control-label">Total Outstanding</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="" placeholder="">
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="paid">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Paid Terms 
                    </h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_length" id="example1_length">
                            <label>Show 
                              <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="10">10
                                </option>
                                <option value="25">25
                                </option>
                                <option value="50">50
                                </option>
                                <option value="100">100
                                </option>
                              </select> entries
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div id="example1_filter" class="dataTables_filter">
                            <label>Search:
                              <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Sno.
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Paid Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Term Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Term Principal
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Interest
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Outstanding Principle
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Outstanding Profit
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Maintanance
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Charge
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Status
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 2.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 3.0
                                </td>
                                <td>Win 2k+ / OSX.3+
                                </td>
                                <td>1.9
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Camino 1.0
                                </td>
                                <td>OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Camino 1.5
                                </td>
                                <td>OSX.3+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape 7.2
                                </td>
                                <td>Win 95+ / Mac OS 8.6-9.2
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape Browser 8
                                </td>
                                <td>Win 98SE+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape Navigator 9
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Mozilla 1.0
                                </td>
                                <td>Win 95+ / OSX.1+
                                </td>
                                <td>1
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                              <th rowspan="1" colspan="1">Sno.
                                </th>
                                <th rowspan="1" colspan="1">Paid Date
                                </th>
                                <th rowspan="1" colspan="1">Term date
                                </th>
                                <th rowspan="1" colspan="1">Term Principle
                                </th>
                                <th rowspan="1" colspan="1">Interest
                                </th>
                                <th rowspan="1" colspan="1">Outstanding Principle
                                </th>
                                 <th rowspan="1" colspan="1">Outstanding Profit
                                </th>
                                <th rowspan="1" colspan="1">Maintanance</th><th rowspan="1" colspan="1"> Charge
                                </th>
                                <th rowspan="1" colspan="1">Status
                                </th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                          </div>
                        </div>
                        <div class="col-sm-7">
                          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                              <li class="paginate_button previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous
                                </a>
                              </li>
                              <li class="paginate_button active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6
                                </a>
                              </li>
                              <li class="paginate_button next" id="example1_next">
                                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->


              <div class="tab-pane" id="loan">
                <div class="box">
                  <div class="box-header">
                   <div class="col-md-3" style="float:right;">
                      <select name="year" class="form-control">
                        <option value="">--Select Year--</option>
                        <?php for($i=2017;$i<2030;$i++){ ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                         <?php } ?>
                      </select>
                    </div>
                    <h3 class="box-title">Loan Schedules
                    </h3>

                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_length" id="example1_length">
                            <label>Show 
                              <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="10">10
                                </option>
                                <option value="25">25
                                </option>
                                <option value="50">50
                                </option>
                                <option value="100">100
                                </option>
                              </select> entries
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div id="example1_filter" class="dataTables_filter">
                            <label>Search:
                              <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Term
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Monthly Payment
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Profit
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">COP
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Paid Profit
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Paid COP
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Paid Maintanance Charge
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Maintanance Charge
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Payment
                                </th>
                               
                              </tr>
                            </thead>
                            <tbody>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.7
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 2.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 3.0
                                </td>
                                <td>Win 2k+ / OSX.3+
                                </td>
                                <td>1.9
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Camino 1.0
                                </td>
                                <td>OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Camino 1.5
                                </td>
                                <td>OSX.3+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape 7.2
                                </td>
                                <td>Win 95+ / Mac OS 8.6-9.2
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape Browser 8
                                </td>
                                <td>Win 98SE+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape Navigator 9
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Mozilla 1.0
                                </td>
                                <td>Win 95+ / OSX.1+
                                </td>
                                <td>1
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                              <th rowspan="1" colspan="1">Term
                                </th>
                                <th rowspan="1" colspan="1">Monthly Payment
                                </th>
                                <th rowspan="1" colspan="1">Profit 
                                </th>
                                <th rowspan="1" colspan="1">COP
                                </th>
                                <th rowspan="1" colspan="1">Paid Profit
                                </th>
                                <th rowspan="1" colspan="1">Paid COP
                                </th>
                                 <th rowspan="1" colspan="1">Paid Maintanance Charge
                                </th>
                                <th rowspan="1" colspan="1">Maintanance Charge</th>
                                <th rowspan="1" colspan="1"> Payment
                                </th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                          </div>
                        </div>
                        <div class="col-sm-7">
                          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                              <li class="paginate_button previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous
                                </a>
                              </li>
                              <li class="paginate_button active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6
                                </a>
                              </li>
                              <li class="paginate_button next" id="example1_next">
                                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="pending">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Pending Terms
                    </h3>
                   
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_length" id="example1_length">
                            <label>Show 
                              <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                <option value="10">10
                                </option>
                                <option value="25">25
                                </option>
                                <option value="50">50
                                </option>
                                <option value="100">100
                                </option>
                              </select> entries
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div id="example1_filter" class="dataTables_filter">
                            <label>Search:
                              <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="example2" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Term
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Term Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Principle
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Profit
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Pending Principle
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Pending Profit
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Maintanance Charge
                                </th>
                               
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Status
                                </th>
                               
                              </tr>
                            </thead>
                            <tbody>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 2.0
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 3.0
                                </td>
                                <td>Win 2k+ / OSX.3+
                                </td>
                                <td>1.9
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Camino 1.0
                                </td>
                                <td>OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Camino 1.5
                                </td>
                                <td>OSX.3+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape 7.2
                                </td>
                                <td>Win 95+ / Mac OS 8.6-9.2
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape Browser 8
                                </td>
                                <td>Win 98SE+
                                </td>
                                <td>1.7
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Netscape Navigator 9
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                                <td>1.8
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Mozilla 1.0
                                </td>
                                <td>Win 95+ / OSX.1+
                                </td>
                                <td>1
                                </td>
                                <td>A
                                </td>
                                <td class="sorting_1">Gecko
                                </td>
                                <td>Firefox 1.5
                                </td>
                                <td>Win 98+ / OSX.2+
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                              <th rowspan="1" colspan="1">Term
                                </th>
                                <th rowspan="1" colspan="1">Term Date
                                </th>
                                <th rowspan="1" colspan="1">Principle 
                                </th>
                                <th rowspan="1" colspan="1">Profit
                                </th>
                                <th rowspan="1" colspan="1">Pending Principle
                                </th>
                                <th rowspan="1" colspan="1">Pending Profit
                                </th>
                                 <th rowspan="1" colspan="1">Maintanance Charge
                                </th>
                                <th rowspan="1" colspan="1">Status</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                          <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                          </div>
                        </div>
                        <div class="col-sm-7">
                          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                              <li class="paginate_button previous disabled" id="example1_previous">
                                <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous
                                </a>
                              </li>
                              <li class="paginate_button active">
                                <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5
                                </a>
                              </li>
                              <li class="paginate_button ">
                                <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6
                                </a>
                              </li>
                              <li class="paginate_button next" id="example1_next">
                                <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
               <!-- /.tab-pane -->
               <div class="tab-pane" id="early">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Early Loan Settlement
                    </h3>
                   
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Description</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td>Settlement Principle</td>
                  <td>  29,700.00</td>
                </tr>
                <tr role="row" class="even">
                  <td>Settlement Interest</td> 
                  <td>4,103.58</td>
                </tr>
                <tr role="row" class="odd">
                  <td>Total Settlement Amount</td> 
                  <td>33,803.58</td>

                </tr>
                </tbody>
                </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->