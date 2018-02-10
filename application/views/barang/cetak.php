    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Print Stock Barang</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
				  <br />
                   <?php echo form_open('Admin/cetakdata','novalidate class="form-horizontal form-label-left"'); ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Masukkan Kode Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="kode_barang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="ln_solid"></div>
					  <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
					</form> 
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
                  </div>
                </div>
              </div>
			</div>
		</div>
	</div>
	<!-- /page content -->
	
	<!-- footer content -->
        <footer>
          <div class="pull-right">
            Inventory Dishub - Sarana Prasarana by <a href="#">Cyber Crime</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url()?>bootstrap/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url()?>bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>bootstrap/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>		
    <!-- FastClick -->
    <script src="<?php echo base_url()?>bootstrap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>bootstrap/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>bootstrap/vendors/iCheck/icheck.min.js"></script>
	<!-- validator -->
    <script src="<?php echo base_url()?>bootstrap/vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>bootstrap/build/js/custom.js"></script>
  </body>
</html>	