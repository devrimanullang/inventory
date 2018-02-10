  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=site_url('Admin/');?>" class="site_title"><i class="fa fa-cube"></i> <span>Inventory Dishub</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
			
              <div class="profile_pic">
                <img src="<?php echo base_url()?>asset/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
			 
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $nama;?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=site_url('Admin/');?>"><i class="fa fa-home"></i> Home <span class="label label-success pull-right"></span></a></li>
                  <li><a><i class="fa fa-gavel"></i> Pekerjaan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('Admin/pekerjaan');?>">Daftar Pekerjaan</a></li>
					  <li><a href="<?=site_url('Admin/addPekerjaan');?>">Tambah Pekerjaan</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-edit"></i> Barang <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('Admin/barang');?>">Daftar Barang</a></li>
					  <li><a href="<?=site_url('Admin/addBarang');?>">Tambah Barang</a></li>
                      <li><a href="<?=site_url('Admin/jenis');?>">Jenis Barang</a></li>
					  <li><a href="<?=site_url('Admin/addJenis');?>">Tambah Jenis Barang</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Stock <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					<li><a href="<?=site_url('Admin/transaksi');?>">Transaksi</a></li>
                      <li><a href="<?=site_url('Admin/addMasuk');?>">Stock Masuk</a></li>
                      <li><a href="<?=site_url('Admin/addKeluar');?>">Stock Keluar</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-print"></i> Print <span class="fa fa-chevron-down"></span></a>
				    <ul class="nav child_menu">
					  <li><a href="<?=site_url('Admin/cetak');?>">Stock Barang</a></li>
                      <li><a href="<?=site_url('Admin/cetak2');?>">Pekerjaan </a></li>
					</ul>
				  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Admin</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=site_url('Admin/user');?>">Data User</a></li>
                      <li><a href="<?=site_url('Admin/pendingUser');?>">User Pending</a></li>
                    </ul>
                  </li>
                </ul>				
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen" id= "full" onclick="toggleFull()">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=site_url('Admin/logout/')?>"">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
		
		<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>asset/images/img.jpg" alt=""><?php echo $nama;?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?=site_url('Admin/logout/')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
		<script>
        function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }

        function toggleFull() {
            var elem = document.body; // Make the body go full screen.
            var isInFullScreen = (document.fullScreenElement && document.fullScreenElement !== null) ||  (document.mozFullScreen || document.webkitIsFullScreen);

            if (isInFullScreen) {
                cancelFullScreen(document);
            } else {
                requestFullScreen(elem);
            }
            return false;
        }
		</script> 		
		
