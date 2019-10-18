<?php
    if($username)
    {
		$_SESSION['username'] = $username;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (120 * 60);
        header('Location: index');
    }
?>
<?php
startHeader();
setTitle('Login page');
vendorStyle('@coreui/icons/css/coreui-icons.min.css');
vendorStyle('flag-icon-css/css/flag-icon.min.css');
vendorStyle('font-awesome/css/font-awesome.min.css');
vendorStyle('simple-line-icons/css/simple-line-icons.css');
includeStyle('style.css');
vendorStyle('pace-progress/css/pace.min.css');
endHeader();
?>
<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
	  <form action="" method="post">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
			
			<?php 
				if($error)
				{
			  ?>

					  <div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <?php echo '<strong>'. T_('Error').'</strong> ' . $error;?>
					  <button class="close" type="button" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					  </button>
					  </div>
				
			  <?php             
				}
			  ?>
              <h1>Login</h1>
              <p class="text-muted">Sign In to your account</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <input class="form-control" type="text" placeholder="Username" name="username">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" placeholder="Password" name="password">
              </div>
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-primary px-4" type="submit">Login</button>
                </div>
                <div class="col-6 text-right">
                  <button class="btn btn-link px-0" type="button">Forgot password?</button>
                </div>
              </div>
			  
            </div>
          </div>
          <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
            <div class="card-body text-center">
              <div>
                <h2>Sign up</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
              </div>
            </div>
          </div>
        </div>
		</form>
      </div>
    </div>
  </div>

<?php
vendorScript('jquery/js/jquery.min.js');
vendorScript('popper.js/js/popper.min.js');
vendorScript('bootstrap/js/bootstrap.min.js');
vendorScript('pace-progress/js/pace.min.js');
vendorScript('perfect-scrollbar/js/perfect-scrollbar.min.js');
vendorScript('@coreui/coreui-pro/js/coreui.min.js');
endFooter();
?>