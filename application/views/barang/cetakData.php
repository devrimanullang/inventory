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
				<div id="printableArea">
                <div class="x_panel">
                  <div>
                    <h2><center>STOCK BARANG</center></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   <form class="form-horizontal form-label-left" novalidate>
					<?php setlocale(LC_ALL, 'IND'); ?>
                    <table>
					<tr><td>Nama SKPD</td>
						 <td>:&nbsp&nbsp</td>
						 <td>Dinas Perhubungan Kota Surabaya</td>
					</tr>
					<tr><td>Kegiatan</td>
						 <td>: </td>
						 <td>Pengembangan Sarana Prasarana Transportasi</td>
					</tr>
					<tr><td>Nama Barang</td>
						 <td>: </td>
						 <td><?php echo $q[0]->nama_jenis ?></td>
					</tr>
					<tr><td>Nama Pekerjaan&nbsp&nbsp</td>
						 <td>: </td>
						 <td><?php echo $q[0]->nama_pekerjaan?></td>
					</tr>
					<tr><td>Kode Kegiatan</td>
						 <td>: </td>
						 <td><?php echo $q[0]->kode_kegiatan?></td>
					</tr>
					<tr><td>Bulan</td>
						 <td>: </td>
						 <td><?php echo  strftime("%B %Y",strtotime($q[0]->created_at)); ?></td>
					</tr>	 
					 </table>
					  
					<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
						<tr>
							<th>No</th>
							<th>Tanggal </th>
							<th>Keterangan</th>
							<th>Masuk</th>
							<th>Keluar</th>
							<th>Sisa</th>
					  </thead>
					  <tbody>
						<?php 
							$a=1;
							$jumlah = 0;
							foreach ($q as $row){
								$tgl = strtotime($row->created_at);
								$tanggal = strftime('%d %B %Y',$tgl);
								$jumlah = $jumlah +$row->jumlah;
							echo '<tr>';
							echo '<td>'.$a++.'</td>';
							echo '<td>'.$tanggal.'</td>';
							echo '<td>'.$row->keterangan.'</td>';
							
							if ($row->jumlah < 0 ){
							echo '<td> </td>';
							echo '<td>'.substr($row->jumlah,1).' '.$row->satuan.'</td>';
							} else{
							echo '<td>'.$row->jumlah.' '.$row->satuan.'</td>';
							echo '<td></td>';
							}
							
							if($a==2){
								echo '<td> </td></tr>';
							}else {
									echo '<td>'.$jumlah.' '.$row->satuan.'</td>';
									echo '</tr>';
								}
							}
						?>
                      </tbody>
                    </table>

                    </form>
                  </div>
                </div>
				</div>
				<div class="col-lg-12">
					<input type="button" onclick="printDiv('printableArea')" value="print a div!" />
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
	<script>
					function printDiv(divName) {
						 var printContents = document.getElementById(divName).innerHTML;
						 var originalContents = document.body.innerHTML;

						 document.body.innerHTML = printContents;

						 //window.print();

						 //document.body.innerHTML = originalContents;
					}
					//window.onload = function() { window.print(); }
	</script>
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
	<!-- validator -->
    <script src="<?php echo base_url()?>bootstrap/vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>bootstrap/build/js/custom.min.js"></script>
  </body>
</html>	