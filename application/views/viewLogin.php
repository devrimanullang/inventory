<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url()?>bootstrap/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>bootstrap/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">		  			  
			  <?php echo form_open('VerifyLogin','novalidate'); ?>
              <h1>Login Form</h1>
				<?php echo validation_errors(); ?>
              <div class="item form-group">
                <input type="text" class="form-control" name = "username" placeholder="Username" required="" />
              </div>
              <div class="item form-group">
                <input type="password" class="form-control" name="passwordin" placeholder="Password" required="" />
              </div>
              <div>
				<button type="submit" class="btn btn-default submit">Log in</button>
				<a class="reset_pass" href="#">Lost your password?</a>
              </div>
			  
			  <div>
				
			  </div>
              <div class="clearfix"></div>
			  
              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-cube"></i> Inventory E-Dishub</h1>
                  <p>©2017 All Rights Reserved. Inventory Dinas Perhubungan Surabaya. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
			  <?php echo form_open('VerifyLogin/register','novalidate'); ?>
              <h1>Create Account</h1>
			  <?php echo validation_errors(); ?>
              <div class="item form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
              </div>
              <div class="item form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
			  <div class="item form-group">
                <input type="password" class="form-control" name ="passconf" placeholder="Konfirmasi Password" data-validate-linked="password" required="" />
              </div>
			  <div class="item form-group">
                <input type="text" class="form-control" name ="nama" placeholder="Nama Lengkap" required="" />
              </div>
			  <div class="item form-group">
				<script>
                	function angka(e) {
						if (!/^[0-9]+$/.test(e.value)) {
							e.value = e.value.substring(0,e.value.length-1);
							}
						}
				</script>
                <input type="text" class="form-control" name ="telp" placeholder="Nomor Telp" required=""  onkeyup="angka(this);"/>
              </div>
			  <div class="form-group">
                <div>
                    <select name="seksi" class="form-control" required>
                        <option value="" disabled selected hidden>Pilih seksi</option>
                        <option value = "Pengembangan">Pengembangan</option>
						<option value = "Pemeliharaan">Pemeliharaan</option>
                    </select>
                </div>
              </div>	
              <div>
				<button type="submit" class="btn btn-default submit">Submit</button>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-cube"></i> Inventory E-Dishub</h1>
                  <p>©2017 All Rights Reserved. Inventory Dinas Perhubungan Surabaya. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
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
	<!-- validator -->
    <script src="<?php echo base_url()?>bootstrap/vendors/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url()?>bootstrap/build/js/custom.min.js"></script>	
  </body>
</html>
