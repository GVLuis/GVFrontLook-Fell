<!DOCTYPE html>
<html lang="es">
	<!-- Head -->
	<?php include 'includes/counter-sale/head-counter-sale.php';?>
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
								<h4><span class="text-semibold">Venta Mostrador</span> - Carrito de Compras</h4>
							</div>
						</div>

						<div class="breadcrumb-line">
							<ul class="breadcrumb">
								<li><a href="welcome.php"><i class="icon-home2 position-left"></i> Inicio</a></li>
								<li><a href="counter-sale.php">Venta Mostrador</a></li>
								<li class="active">Carrito de Compras</li>
							</ul>
						</div>
					</div>
					<!-- /page header -->
					
					<!-- Content area -->
					<div class="content">

						<!-- Detached content -->
						<div class="container-detached">
							<div class="content-detached">
								<div id="advanced-serach-section" class="noDisplay">
									<!-- Advance Search section (No display)-->
									<div class="panel panel-alpha mb0">
										<div class="panel-heading bb0 pb0">
											<h5 class="panel-title">Búsqueda Avanzada
												<span class="text-muted">Ingresa por lo menos una de las opciones</span>
											</h5>
										</div>
										<div class="panel-body pb0">
											<form action="#">
												<div class="row">
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="SKU">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Modelo">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Tipo de artículo">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Marca">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Color">
														</div>
													</div>
												</div>
											</form>									
										</div>
									</div>
									<!-- Filter section -->
									<div class="panel panel-alpha mb0">
										<div class="panel-heading bb0 pb0">
											<h5 class="panel-title">Filtro</h5>
										</div>
										<div class="panel-body pb0">
											<form action="#">
												<div class="row">
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Descripción">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Precio">
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-group">
															<label class="el-switch mt5 pull-left">
																<input type="checkbox" name="switch" checked>
																<span class="el-switch-style"></span>
															</label>
															<label class="label-checkbox">Solo con existencias</label>
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
															<th>SKU</th>
															<th>Descripción</th>
															<th>Precio</th>
															<th>Existencia</th>
															<th class="text-center">Acción</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>0276984</td>
															<td>Lorem ipsum dolor.</td>
															<td>$2,750.ºº</td>
															<td class="text-center"><i class="icon-checkmark3"></i></td>
															<td>
																<div class="btn-group btn-action">
																	<button type="button" class="btn btn-xs btn-alpha btn-rounded">Agregar</button>
																	<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																	<ul class="action-submenu dropdown-menu dropdown-menu-right">
																		<li><a href="#" data-toggle="modal" data-target="#modal-availability">Disponibilidad</a></li>
																	</ul>
																</div>
															</td>
														</tr>
														<tr>
															<td>0276984</td>
															<td>Lorem ipsum dolor.</td>
															<td>$2,750.ºº</td>
															<td class="text-center"><i class="icon-checkmark3"></i></td>
															<td>
																<div class="btn-group btn-action">
																	<button type="button" class="btn btn-xs btn-alpha btn-rounded">Agregar</button>
																	<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																	<ul class="action-submenu dropdown-menu dropdown-menu-right">
																		<li><a href="#" data-toggle="modal" data-target="#modal-availability">Disponibilidad</a></li>
																	</ul>
																</div>
															</td>
														</tr>
														<tr>
															<td>0276984</td>
															<td>Lorem ipsum dolor.</td>
															<td>$2,750.ºº</td>
															<td class="text-center"><i class="icon-checkmark3"></i></td>
															<td>
																<div class="btn-group btn-action">
																	<button type="button" class="btn btn-xs btn-alpha btn-rounded">Agregar</button>
																	<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																	<ul class="action-submenu dropdown-menu dropdown-menu-right">
																		<li><a href="#" data-toggle="modal" data-target="#modal-availability">Disponibilidad</a></li>
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
												<button type="button" class="btn btn-alpha btn-rounded btn-std">Buscar</button>
											</div>
											<div id="btn-close-advanced-search" class="form-group pull-right">
												<button type="button" class="btn btn-alpha-border btn-rounded btn-std">Cerrar</button>
											</div>
										</div>									
									</div>
								</div>
							
								<!-- Products section -->
								<div class="panel panel-alpha">
									<div class="panel-heading">
										<h5 class="panel-title">Productos</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body">
										<div class="table-responsive all-tables">
											<table class="table table-framed">
												<thead>
													<tr>
														<th>SKU</th>
														<th>Descripción</th>
														<th>Cantidad</th>
														<th>Precio</th>
														<th>Total</th>
														<th>Promoción/Descuento</th>
														<th>Acción</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>1</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded" data-toggle="modal" data-target="#modal-edit-quantity">Editar cantidad</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-offer">Agregar promoción</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-discount">Agregar descuento</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-delete-item">Eliminar</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>1</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td>
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded" data-toggle="modal" data-target="#modal-edit-quantity">Editar cantidad</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-offer">Agregar promoción</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-discount">Agregar descuento</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-delete-item">Eliminar</a></li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>1</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-right">
															<div class="btn-group btn-action">
																<button type="button" class="btn btn-xs btn-alpha btn-rounded" data-toggle="modal" data-target="#modal-edit-quantity">Editar cantidad</button>
																<button type="button" class="btn-action-submenu btn btn-xs btn-alpha btn-rounded dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
																<ul class="action-submenu dropdown-menu dropdown-menu-right">
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-offer">Agregar promoción</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-add-discount">Agregar descuento</a></li>
																	<li><a href="#" data-toggle="modal" data-target="#modal-delete-item">Eliminar</a></li>
																</ul>
															</div>
														</td>
													</tr>

												</tbody>
											</table>
										</div>									
									</div>
								</div>

								<!-- Discounts section -->
								<div class="panel panel-alpha">
									<div class="panel-heading">
										<h5 class="panel-title">Descuentos</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
											</ul>
										</div>
									</div>
									<div class="panel-body">
										<div class="table-responsive all-tables">
											<table class="table table-framed">
												<thead>
													<tr>
														<th>Folio</th>
														<th>Descripción</th>
														<th>Monto mínimo</th>
														<th>Subtotal</th>
														<th>Descuento</th>
														<th>Total</th>
														<th class="text-center">Eliminar</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td>2</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-center"><button type="button" class="btn btn-delete-tr btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></button></td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td>2</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-center"><button type="button" class="btn btn-delete-tr btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></button></td>
													</tr>
													<tr>
														<td>0276984</td>
														<td>Lorem ipsum dolor.</td>
														<td>$2,750.ºº</td>
														<td>$2,750.ºº</td>
														<td>3</td>
														<td class="text-center"><i class="icon-checkmark3"></i></td>
														<td class="text-center"><button type="button" class="btn btn-delete-tr btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></button></td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- Payment & comments section -->
								<div class="row">
									<div class="col-sm-7">
										<div class="panel panel-alpha">
											<div class="panel-heading">
												<h5 class="panel-title">Pagos</h5>
												<div class="heading-elements">
													<ul class="icons-list">
														<li><a data-action="collapse"></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body">
												<div class="table-responsive all-tables">
													<table class="table table-framed">
														<thead>
															<tr>
																<th>Fecha</th>
																<th>Descripción</th>
																<th>Monto</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>12/08/19</td>
																<td>Lorem ipsum dolor.</td>
																<td>$2,750.ºº</td>
															</tr>
															<tr>
																<td>12/08/19</td>
																<td>Lorem ipsum dolor.</td>
																<td>$2,750.ºº</td>
															</tr>
															<tr>
																<td>12/08/19</td>
																<td>Lorem ipsum dolor.</td>
																<td>$2,750.ºº</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="panel panel-alpha">
											<div class="panel-heading">
												<h5 class="panel-title">Observaciones</h5>
												<div class="heading-elements">
													<ul class="icons-list">
														<li><a data-action="collapse"></a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body">
												<form action="#">
													<div class="form-group">
														<textarea rows="6" cols="5" class="form-control"></textarea>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /detached content -->

						<!-- Sidebar -->
						<?php include 'includes/counter-sale/sidebar-counter-sale.php';?>
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

		<!-- Modals -->
		<?php include 'includes/counter-sale/modal-payment.php';?>
		<?php include 'includes/counter-sale/modal-edit-quantity.php';?>
		<?php include 'includes/counter-sale/modal-add-offer.php';?>
		<?php include 'includes/counter-sale/modal-add-discount.php';?>
		<?php include 'includes/counter-sale/modal-receipt.php';?>
		<?php include 'includes/counter-sale/modal-availability.php';?>
		<!-- /modals -->
	</body>
</html>
