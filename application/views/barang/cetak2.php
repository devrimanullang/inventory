<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Print Pekerjaan</h3>
              </div>
            </div>
            <div class="clearfix"></div>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
				  <br />
                   <?php echo form_open('Admin/cetakpekerjaan','novalidate class="form-horizontal form-label-left"'); ?>						
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						   <select id="pekerjaan" name="pekerjaan" class="form-control">
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
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<script type="text/javascript">		
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