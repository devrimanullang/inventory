    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url()?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Barang</h3>
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
                    <h2>Tambah Barang</h2>
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
                   <?php echo form_open_multipart($prev.'/regBarang','novalidate class="form-horizontal form-label-left"'); ?>

				   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						   <select id="pekerjaan" name="pekerjaan" class="form-control">
						   </select>					  
                        </div>
                      </div>
				   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						   <select id="barang" name="jenis_barang" class="form-control">
						   </select>					  
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Barang <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="jumlah_barang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Letak/Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="letak" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Penerima <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="penerima" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>				   
					   
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="file" name="userfile">
                        </div>
                      </div>						   
					   
					  <div class="item form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Seksi </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <select name="seksi" class="form-control" required>
							<option value="" disabled selected hidden>Pilih seksi</option>
							<?php if ($bagian == 'Pengembangan') { ?>
							<option value = "1">Pengembangan</option>
							<option value = "2" disabled>Pemeliharaan</option>
							<?php }
							else if ($bagian == 'Pemeliharaan') {?>
							<option value = "1"disabled>Pengembangan</option>
							<option value = "2" >Pemeliharaan</option>
							<?php }
							else {
								echo '<option value = "1">Pengembangan</option>';
								echo '<option value = "2">Pemeliharaan</option>';
							}?>
						   </select>
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
			var barang = <?php echo $q ?>;
			$("#barang").select2({
			  data: barang
			});
		});
		
		$(document).ready(function() {
			var pekerjaan = <?php echo $r ?>;
			$("#pekerjaan").select2({
			  data: pekerjaan
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
    <!-- iCheck -->
    <script src="<?php echo base_url()?>bootstrap/vendors/iCheck/icheck.min.js"></script>
	<!-- validator -->
    <script src="<?php echo base_url()?>bootstrap/vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>bootstrap/build/js/custom.js"></script>	
  </body>
</html>	