<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add</h3>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('masters_loan_pay_term/add', array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="LOANTERM_PAYTERM" class="col-md-4 control-label">LOANTERM PAYTERM</label>
                    <div class="col-md-8">
                        <input type="text" name="LOANTERM_PAYTERM" value="<?php echo $this->input->post('LOANTERM_PAYTERM'); ?>" class="form-control" id="LOANTERM_PAYTERM" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="LOANTERM_PAYTYPE" class="col-md-4 control-label">LOANTERM PAYTYPE</label>
                    <div class="col-md-8">
                        <select name="LOANTERM_PAYTYPE" class="form-control">
                            <option value="">select</option>
                            <?php
                            $LOANTERM_PAYTYPE_values = array(
                                '1' => 'Daily',
                                '2' => 'Monthly',
                                '3' => 'Quaterly',
                                '4' => 'Yearly',
                            );

                            foreach ($LOANTERM_PAYTYPE_values as $value => $display_text) {
                                $selected = ($value == $this->input->post('LOANTERM_PAYTYPE')) ? ' selected="selected"' : "";

                                echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="LOANTERM_NOOFTERMS" class="col-md-4 control-label">LOANTERM NOOFTERMS</label>
                    <div class="col-md-8">
                        <input type="text" name="LOANTERM_NOOFTERMS" value="<?php echo $this->input->post('LOANTERM_NOOFTERMS'); ?>" class="form-control" id="LOANTERM_NOOFTERMS" />
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>