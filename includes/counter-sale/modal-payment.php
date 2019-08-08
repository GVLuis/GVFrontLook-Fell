<div id="modal-payment" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-body">
                        <div class="panel panel-alpha mb0">
                            <div class="panel-heading">
                                <h5 class="panel-title">Realizar pago</h5>
                                
                                <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-8 mb20">
                                        <div class="media-middle pull-right">
                                            <div class="icon-object icon-payment"><i class="icon-credit-card2"></i></div>
                                        </div>
                                        <div class="media-body text-right pr10">
                                            <span class="text-uppercase text-size-mini text-muted">Saldo</span>
                                            <h3 class="no-margin text-semibold">$2,729.00</h3>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-4 mb20">
                                        <div class="media-middle pull-right">
                                            <div class="icon-object icon-payment"><i class="icon-wallet"></i></div>
                                        </div>
                                        <div class="media-body text-right pr10">
                                            <span class="text-uppercase text-size-mini text-muted">Pago mínimo</span>
                                            <h3 class="no-margin text-semibold">$729.00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body pb0">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="el-switch mt5 pull-left">
                                                    <input type="checkbox" name="switch" checked>
                                                    <span class="el-switch-style"></span>
                                                </label>
                                                <label class="label-checkbox">Pagar todo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Importe:</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input id="numBox" type="number" class="form-control easy-put">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default easy-get" type="button" data-toggle="modal" data-target="#modal-numpad"><i class="icon-calculator3"></i></button>
                                                </span>
                                            </div>                                                    
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="select-field">Tipo de pago</label>
                                                <div class="selectWrapper">
                                                    <select name="select" class="form-control  selectBox">
                                                        <option value="opt1">Uso de tarjeta de crédito</option>
                                                        <option value="opt2">Option 2</option>
                                                        <option value="opt3">Option 3</option>
                                                        <option value="opt4">Option 4</option>
                                                        <option value="opt5">Option 5</option>
                                                        <option value="opt6">Option 6</option>
                                                        <option value="opt7">Option 7</option>
                                                        <option value="opt8">Option 8</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="division mb10"></div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Número de tarjeta</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Terminación</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Autorización</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Dólares recibidos</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>ID</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>									
                            </div>
                            <div class="panel-footer pb0">
                                <div class="form-group ml10 pull-right">
                                    <button id="payment" type="button" class="btn btn-alpha btn-std btn-rounded w100" data-toggle="modal" data-target="#modal-receipt" data-dismiss="modal">Pagar</button>
                                </div>
                                <div id="btn-close-advanced-search" class="form-group pull-right">
                                    <button type="button" class="btn btn-alpha-border btn-std btn-rounded w100" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
