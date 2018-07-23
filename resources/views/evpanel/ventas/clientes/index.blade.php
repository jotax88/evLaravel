@extends('layouts.layout_evpanel_web')

@section('content')

<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form-center">Busca Cliente</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							<li><a data-action="close"><i class="icon-cross2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-body collapse in" aria-expanded="true" style="">
					<div class="card-block">
                    {{ Form::open(['route' => 'buscar_cliente.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}
                                <div class="row">
                                  <div class="col-md-4 position-relative has-icon-left">
                                    <input type="text" id="timesheetinput1" class="form-control" placeholder="Rut" name="rut">
                                         <div class="form-control-position">
                                             <i class="far fa-address-card"></i>
                                         </div>
                                  </div>
                <div class="col-md-4 position-relative has-icon-left">
                    <input type="text" id="timesheetinput1" class="form-control" placeholder="Nombre o Razon Social" name="razon_social">
         <div class="form-control-position">
        <i class="far fa-address-book"></i>
        </div>
    </div>
    <div class="col-md-4">
  <button type="submit" class="btn btn-info btn-md">
    <i class="fas fa-search"></i> Buscar
  </button>
  </div>
								</div>
                                {{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
    </div>

    <div id="crud" class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form-center">Listado de Clientes Web</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							<li><a data-action="close"><i class="icon-cross2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-body collapse in" aria-expanded="true" style="">
					<div class="card-block">
						<form class="form">
                                <div class="row">                                

                                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered mb-0">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Id</th>
                                <th>Rut</th>
                                <th>Razon Social</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th>Tipo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>                  
                            <tr  v-for="cliente in clientes ">
                                <td>@{{ cliente.id }}</td>
                                <td>@{{ cliente.rut }}</td> 

                            </tr>
                  
                            
                        </tbody>
                    </table>
                    {!! $clientes->render() !!}
                    <div>
    <pre>
        @{{ $data }}
</pre>
</div>
        </div>
    
								</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
    </div>



							

 @endsection