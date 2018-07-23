
									<!-- Modal -->
									<div class="modal fade text-xs-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
									  <div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">×</span>
											</button>
											<h4 class="modal-title" id="myModalLabel17">Detalle Cotizacion</h4>
										  </div>
                                          <!-- <form method="PUT" action="{{route('cliente.update', $cliente->id)}}" v-on:submit.prevent="updateKeep(fillKeep.id)" >  -->
                                              @csrf
                                              @method('put')
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Rut</label>
                                            
                                                {!! Form::text('rut', null, ['class' => 'form-control'])  !!}
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Razon Social</label>
                                                <input type="password" class="form-control" id="inputPassword4" >
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Usuario</label>
                                                <input type="email" class="form-control" id="inputEmail4" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Clave</label>
                                                <input type="password" class="form-control" id="inputPassword4" >
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Telefono</label>
                                                <input type="password" class="form-control" id="inputPassword4" >
                                            </div>
                                            </div>
                                            </form>
										  <div class="modal-footer">
											<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-outline-primary">Guardar</button>
										  </div>
										</div>
									  </div>
									</div>