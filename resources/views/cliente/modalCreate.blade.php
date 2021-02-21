<div class="modal fade" id="modal_crear_cliente" tabindex="" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-sm" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Capturar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                
                <div class="container">        
                    <div class="row">            
                        <div class="col-md-12">                
                            <div class="card">
                                                    
                                <div class="card-body">
                                    
                                    <form method="POST" action="{{url('clientes')}}" enctype="multipart/form-data">
                                    @csrf  
                                        <div class="form-group form-row">                                  
                                       
                                            <div class="form-group col-md-4">                            
                                                <input type="text" class="form-control form-control-sm" data-toggle="tooltip" data-placement="top" title="Nombre" aria-describedby="nombre" id="nombre" name="nombre" placeholder="Nombre" required maxlength="50" value="{{ old('nombre') }}">
                                                <small id="nombre" class="form-text text-muted">
                                                    *Obligatorio
                                                </small>
                                            </div>

                                            <div class="form-group col-md-4">                            
                                                <input type="text" class="form-control form-control-sm" data-toggle="tooltip" data-placement="top" title="Apellido Paterno" aria-describedby="paterno" id="paterno" name="paterno" placeholder="Apellido paterno"  maxlength="50" value="{{ old('paterno') }}">
                                                
                                            </div>

                                            <div class="form-group col-md-4">                            
                                                <input type="text" class="form-control form-control-sm" data-toggle="tooltip" data-placement="top" title="Apellido materno" aria-describedby="materno" id="materno" name="materno" placeholder="Apellido materno"  maxlength="50" value="{{ old('materno') }}">
                                                
                                            </div>                                                                         
                                                               
                                        </div>

                                        <div class="form-group form-row">                                  
                                       
                                            <div class="form-group col-md-4">                            
                                                <input type="text" class="form-control form-control-sm" data-toggle="tooltip" data-placement="top" title="Calle" aria-describedby="calle" id="calle" name="calle" placeholder="Calle"  maxlength="50" value="{{ old('calle') }}">
                                                
                                            </div>

                                            <div class="form-group col-md-4">                            
                                                <input type="text" class="form-control form-control-sm" data-toggle="tooltip" data-placement="top" title="Colonia" aria-describedby="colonia" id="colonia" name="colonia" placeholder="Colonia"  maxlength="50" value="{{ old('colonia') }}">
                                                
                                            </div>

                                            <div class="form-group col-md-4">                            
                                                <input type="text" class="form-control form-control-sm" data-toggle="tooltip" data-placement="top" title="Ciudad" aria-describedby="ciudad" id="ciudad" name="ciudad" placeholder="Ciudad"  maxlength="50" value="{{ old('ciudad') }}">
                                                
                                            </div>                                                                         
                                                               
                                        </div> 

                                        <div class="form-group form-row">
                                            <div class="ml-auto">
                                                    
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close fa-1x"></i>&nbsp;Cancelar</button>
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save fa-1x"></i>&nbsp;Guardar</button>
                                                    
                                            </div>
                                        </div> 
                                                                  

                                    </form>                                    

                                </div>                    
                            </div>                
                        </div>            
                    </div>        
                </div>
            
            </div><!--Fin Modal Body-->            
            
        </div>
    </div>
</div>