<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users</h3>
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
                    <h2>Daftar Pengguna Tidak Aktif</h2>
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
                    <p class="text-muted font-13 m-b-30">
                    </p>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Nama Lengkap</th>
                          <th>No Telp</th>
                          <th>Approved By</th>
                          <th>Tanggal Daftar</th>
                          <th>Tanggal Login Terakhir</th>
                          <th>Status</th>
						  <th>Level</th>
                          <th>ID Bidang</th>
                          <th>E-mail User</th>
						  <th>Bagian</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  
						<?php foreach ($q as $row){
							echo '<tr>';
							echo '<td>'.$row->username.'</td>';
							echo '<td>'.$row->nm_lengkap.'</td>';
							echo '<td>'.$row->no_telp.'</td>';
							echo '<td>'.$row->approved_by.'</td>';
							echo '<td>'.$row->tgl_daftar.'</td>';
							echo '<td>'.$row->tgl_login_terakhir.'</td>';
							echo '<td>'.$row->status.'</td>';
							echo '<td>'.$row->level.'</td>';
							echo '<td>'.$row->id_bidang.'</td>';
							echo '<td>'.$row->email_user.'</td>';
							echo '<td>'.$row->bagian.'</td>';
							if ($row->status=='f'){
							echo "<td><a href=". base_url(). 'index.php/admin/aktifkan/'.$row->username.">Aktifkan!!</a></td>";
							}else{
								echo "<td><a href=". base_url(). 'index.php/admin/nonaktifkan/'.$row->username.">Nonaktifkan!!</a></td>";
							}
							echo '</tr>';
							}
						?>                        
                      </tbody>
                    </table>
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