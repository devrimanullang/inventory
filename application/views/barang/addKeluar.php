    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Stock Barang</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Stock Barang Keluar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php echo form_open_multipart($prev.'/stockout','novalidate class="form-horizontal form-label-left"'); ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						   <select id="country" name="kode_barang" class="form-control">
						   </select>
                        </div>
                      </div>
					  
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input required="required" class="form-control col-md-7 col-xs-12" type="text" name="keterangan">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input required="required" class="form-control col-md-7 col-xs-12" type="number" name="jumlah">
                        </div>
                      </div>
					  
					  <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						  <fieldset>
							  <div class="control-group">
								<div class="controls">
								  
									<input type="text" class="form-control has-feedback-left" id="single_cal3" name="tanggal" aria-describedby="inputSuccess2Status4">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
									<span id="inputSuccess2Status4" class="sr-only">(success)</span>
								  
								</div>
							  </div>
							</fieldset>
						</div>
					   </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penerima <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input required="required" class="form-control col-md-7 col-xs-12" type="text" name="penerima">
                        </div>
                      </div>					   
					   
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="file" name="userfile">
                        </div>
                      </div>					   
					  
					  <div class="item form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Stock </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="seksi" class="form-control" disabled>
							<option value="" disabled hidden>Pilih seksi</option>
							<option value = "1">Transaksi Masuk</option>
							<option value = "2" selected>Transaksi Keluar</option>
						   </select>
                        </div>
                      </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href ="<?=site_url('Admin/');?>" class="btn btn-primary" type="button">Cancel</a>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var country = <?php echo $q ?>;
			$("#country").select2({
			  data: country
			});
		});
	</script>	
	<!-- jQuery -->
    <script src="<?php //echo base_url()?>bootstrap/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
    <script src="<?php echo base_url()?>bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url()?>bootstrap/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>	
	<!-- FastClick -->
    <script src="<?php echo base_url()?>bootstrap/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
    <script src="<?php echo base_url()?>bootstrap/vendors/nprogress/nprogress.js"></script>
	<!-- validator -->
    <script src="<?php echo base_url()?>bootstrap/vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>bootstrap/build/js/custom.js"></script>	
  </body>
</html>	