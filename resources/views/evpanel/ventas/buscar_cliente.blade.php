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

    <div class="row match-height">
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
                        @foreach ($clientes as $cliente)
                           
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->rut }}</td> 
                                <td>{{ $cliente->razon_social}}</td>
                                <td>{{ $cliente->usuario}}</td>
                                <td>{{ $cliente->estado}}</td> 
                                <td>{{ $cliente->id_tipo}}</td>   
                                <td>
                   <a href="{{ route('mostrar_cliente.show', ['id' => $cliente->id]) }}" class="btn btn-outline btn-success" title="Editar" data-toggle="modal" data-target="#large" v-on:click.prevent="editKeep(keep)" ><span class="glyphicon glyphicon-pencil"></span><i class="fas fa-pen"></i></a>    
                   <a href="{{ route('mostrar_cliente.show', ['id' => $cliente->id]) }}">Ver </a>               
                   <a href="javascript:void(0)" class="btn btn-outline btn-danger" data-toggle="modal" data-target=".modal_ausencia_<?php echo $cliente->id; ?>" title="Cambiar estado"><span class="glyphicon glyphicon-plus-sign"></span><i class="fas fa-ban"></i></a>
                   <a href="javascript:void(0)" class="btn btn-outline btn-primary" data-toggle="modal" data-target=".modal_horario_<?php echo $cliente->id; ?>" title="Cambiar tipo"><span class="glyphicon glyphicon-time"></span><i class="fas fa-retweet"></i>
                   
                </td>
                            </tr>
                       @endforeach
                            
                        </tbody>
                    </table>
                    {!! $clientes->render() !!}
        </div>
    
								</div>
						</form>	
					</div>
				</div>
			</div>
		</div>
    </div>

{!! Form::model($cliente, ['route'=> ['cliente.update', $cliente->id], 'method' => 'PUT' ]) !!}

@include('evpanel.ventas.edit')

{!! Form::close() !!}
								

							

 @endsection