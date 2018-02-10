<!-- page content -->
    <div class="right_col" role="main">
		
        <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data <?php echo $bagian ?></h3>
              </div>
            </div>
			
            <div class="clearfix"></div>
		   
			<div class="row">
		<!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-th"></i> Total Barang</span>
              <div class="count"><?php echo $q[0]->barang ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-th-list"></i> Total Jenis Barang</span>
              <div class="count"><?php echo $q[0]->jenis ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-square"></i> Stock Barang </span>
              <div class="count green"><?php echo $q[0]->stock ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-square-o"></i> Barang Terpakai</span>
              <div class="count"><?php echo substr($q[0]->pakai,1) ?></div>
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
    <!-- FastClick -->
    <script src="<?php echo base_url()?>bootstrap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url()?>bootstrap/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url()?>bootstrap/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>bootstrap/build/js/custom.min.js"></script>
  </body>
</html>	