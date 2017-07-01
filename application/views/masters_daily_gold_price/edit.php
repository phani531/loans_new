<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit</h3>
            </div>

            <?php echo form_open('masters_daily_gold_price/edit/' . $masters_daily_gold_price['GOLD_PRICE_ID'], array("class" => "form-horizontal")); ?>

            <div class="box-body">
                <div class="form-group">
                    <label for="CARAT_ID" class="col-md-4 control-label">CARAT ID</label>
                    <div class="col-md-8">
                        <input type="text" name="CARAT_ID" value="<?php echo ($this->input->post('CARAT_ID') ? $this->input->post('CARAT_ID') : $masters_daily_gold_price['CARAT_ID']); ?>" class="form-control" id="CARAT_ID" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="GOLD_PRICE_DATE" class="col-md-4 control-label">GOLD PRICE DATE</label>
                    <div class="col-md-8">
                        <input type="text" name="GOLD_PRICE_DATE" value="<?php echo ($this->input->post('GOLD_PRICE_DATE') ? $this->input->post('GOLD_PRICE_DATE') : $masters_daily_gold_price['GOLD_PRICE_DATE']); ?>" class="form-control" id="GOLD_PRICE_DATE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="GOLD_PRICE" class="col-md-4 control-label">GOLD PRICE</label>
                    <div class="col-md-8">
                        <input type="text" name="GOLD_PRICE" value="<?php echo ($this->input->post('GOLD_PRICE') ? $this->input->post('GOLD_PRICE') : $masters_daily_gold_price['GOLD_PRICE']); ?>" class="form-control" id="GOLD_PRICE" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="GOLD_PRICE_FACTOR" class="col-md-4 control-label">GOLD PRICE FACTOR</label>
                    <div class="col-md-8">
                        <input type="text" name="GOLD_PRICE_FACTOR" value="<?php echo ($this->input->post('GOLD_PRICE_FACTOR') ? $this->input->post('GOLD_PRICE_FACTOR') : $masters_daily_gold_price['GOLD_PRICE_FACTOR']); ?>" class="form-control" id="GOLD_PRICE_FACTOR" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="GOLD_PRICE_BASIS" class="col-md-4 control-label">GOLD PRICE BASIS</label>
                    <div class="col-md-8">
                        <input type="text" name="GOLD_PRICE_BASIS" value="<?php echo ($this->input->post('GOLD_PRICE_BASIS') ? $this->input->post('GOLD_PRICE_BASIS') : $masters_daily_gold_price['GOLD_PRICE_BASIS']); ?>" class="form-control" id="GOLD_PRICE_BASIS" />
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