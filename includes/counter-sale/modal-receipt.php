<div id="modal-receipt" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <div class="panel panel-alpha mb0">
                    <div class="panel-heading">
                        <h5 class="panel-title">Emitir comprobante</h5>
                    </div>
                    <div class="panel-body pb0">
                        <div class="row">
                            <div class="col-sm-12 text-center mt20">
                                <div class="form-group radio-group">
                                    <div class="el-radio">
                                        <input type="radio" name="radio2" id="3_1" value="option">
                                        <label class="el-radio-style" for="3_1"></label>
                                    </div>
                                    <label class="label-checkbox">Boleta</label>
                                </div>
                                <div class="form-group radio-group ml30">
                                    <div class="el-radio">
                                        <input type="radio" name="radio2" id="3_2" value="option">
                                        <label class="el-radio-style" for="3_2"></label>
                                    </div>
                                    <label class="label-checkbox">Factura</label>
                                </div>
                            </div>
                        </div>
                        <div class="division"></div>
                        <div class="row">
                            <div class="col-sm-12 text-center mt20">
                                    <h6 class="panel-title mb10">¿Registrar comprobante manual?</h6>
                                <div class="form-group radio-group">
                                    <div class="el-radio">
                                        <input type="radio" name="radio1" id="2_1" value="option">
                                        <label class="el-radio-style" for="2_1"></label>
                                    </div>
                                    <label class="label-checkbox">Si</label>
                                </div>
                                <div class="form-group radio-group ml30">
                                    <div class="el-radio">
                                        <input type="radio" name="radio1" id="2_2" value="option">
                                        <label class="el-radio-style" for="2_2"></label>
                                    </div>
                                    <label class="label-checkbox">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="receipt-data" class="panel panel-alpha mb0 ">
                    <div class="panel-heading">
                        <h5 class="panel-title">Datos de boleta</h5>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Nº boleta física</label>
                                <div class="form-group">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Fecha de venta</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                    <input type="text" class="form-control datepicker">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alpha-border btn-std btn-rounded" data-dismiss="modal">Cancelar</button>
                <a href="ruc.php" type="button" class="btn btn-alpha btn-std btn-rounded">Emitir</a>
            </div>
        </div>
    </div>
</div>
