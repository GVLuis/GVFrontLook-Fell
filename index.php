<!DOCTYPE html>
<html lang="es">
	<!-- Head -->
	<?php include 'includes/login/head-login.php';?>
	<!-- /head -->
	
	<body class="login-container">

		<!-- Page container -->
		<div class="page-container login-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">

					<!-- Login -->
					<form action="#">
						<div class="panel panel-body login-form">
							<div class="text-center">
							<img src="global_assets/images/logo.png" class="img-responsive img-login">
								<h1>Login</h1>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<label>Usuario</label>
								<input type="text" class="form-control" autocomplete="username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<label>Contraseña</label>
								<input type="password" class="form-control" autocomplete="current-password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<label>Sucursal</label>
								<input type="number" class="form-control">
								<div class="form-control-feedback">
									<i class="icon-office text-muted"></i>
								</div>
							</div>

							<div class="form-group text-center">
								<a href="welcome.php" class="btn btn-alpha-log w50">Entrar</a>
							</div>

						</div>
					</form>
					<!-- /login -->


					<!-- Footer -->
					<div class="footer text-muted text-center alpha5">
						&copy; 2019. Vision Center. Powered by Grand Vision.
					</div>
					<!-- /footer -->

					</div>
					<!-- /content area -->

				</div>
				<!-- /main content -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

	</body>
</html>
