<!DOCTYPE html>
<html lang="en">
	<!-- Head -->
	<?php include 'includes/ruc/head-ruc.php';?>
	<!-- /head -->

	<body class="has-detached-right sidebar-xs">

		<!-- Main navbar -->
		<?php include 'includes/main-navbar.php';?>
		<!-- /main navbar -->

		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main sidebar -->
				<?php include 'includes/main-sidebar.php';?>
				<!-- /main sidebar -->

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Page header -->
					<div class="page-header page-header-default">
						<div class="page-header-content">
							<div class="page-title">
								<h4><span class="text-semibold">RUC</span> - Facturación</h4>
							</div>
						</div>

						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="welcome.php"><i class="icon-home2 position-left"></i> Inicio</a></li>
								<li><a href="ruc.php">RUC</a></li>
								<li class="active">Facturación</li>
							</ul>
						</div>
					</div>
					<!-- /page header -->
					
					<!-- Content area -->
					<div class="content">

						<!-- Detached content -->
						<div class="container-detached">
							<div class="content-detached">
								<!-- Receipt section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading">
										<h5 class="panel-title">Comprobante físico</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body pb0">
										<form action="#">
											<div class="row">
												<div class="col-sm-4">
													<label>Número de boleta física</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Fecha de venta</label>
													<div class="input-group">
														<span class="input-group-addon"><i class="icon-calendar"></i></span>
														<input type="text" class="form-control datepicker">
													</div>
												</div>
											</div>
										</form>									
									</div>
								</div>
								<!-- Search RUC section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading">
										<h5 class="panel-title">Buscar RUC</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body pb0">
										<form action="#">
											<div class="row">
												<div class="col-sm-4">
													<label>RUC</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Nombre de empresa</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Dirección</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Filter section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading">
										<h5 class="panel-title">Filtro</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body pb0">
										<form action="#">
											<div class="row">
												<div class="col-sm-4">
													<label>RUC</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Nombre de empresa</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-sm-4">
													<label>Dirección</label>
													<div class="form-group">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- Results section -->
								<div class="panel panel-alpha mb0">
									<div class="panel-heading bb0 pb0">
										<h5 class="panel-title">Resultados</h5>
									</div>
									<div class="panel-body pb0">
										<div class="table-responsive all-tables">
											<table class="table table-framed">
												<thead>
													<tr>
														<th>RUC</th>
														<th>Nombre</th>
														<th>Dirección</th>
														<th>Acción</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>FYBU847238UNO</td>
														<td>Jorh Doe</td>
														<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded">Facturar</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-edit-ruc">Editar</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>FYBU847238UNO</td>
														<td>Jorh Doe</td>
														<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded">Facturar</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-edit-ruc">Editar</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>FYBU847238UNO</td>
														<td>Jorh Doe</td>
														<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded">Facturar</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-edit-ruc">Editar</a></li>
																</ul>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!-- Pagination -->
										<div class="row mt20">
											<div class="col-md-12 text-center">
												<ul class="pagination pagination-separated pagination-rounded">
													<li><a href="#">&lsaquo;</a></li>
													<li class="active"><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li class="disabled"><a href="#">4</a></li>
													<li><a href="#">5</a></li>
													<li><a href="#">&rsaquo;</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="panel-footer pb0">
										<div class="form-group ml10 pull-right">
											<button type="button" class="btn btn-alpha btn-std btn-rounded">Buscar</button>
										</div>
									</div>									
								</div>								
							</div>
						</div>

						<!-- Sidebar -->
						<?php include 'includes/ruc/sidebar-ruc.php';?>
						<!-- /sidebar -->

						<!-- Footer -->
						<?php include 'includes/footer.php';?>
						<!-- /footer -->

					</div>
					<!-- /content area -->

				</div>
				<!-- /main content -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

		<!-- Main sidebar -->
		<?php include 'includes/ruc/modal-add-ruc.php';?>
		<?php include 'includes/ruc/modal-edit-ruc.php';?>
		<!-- /main sidebar -->
	</body>
</html>
