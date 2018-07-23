@extends('layouts.dashboard')

@section('title')
    EV Panel-Clientes web
@endsection


@section('content')
<div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered mb-0">
                        <thead>
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
                  <a href="" class="btn btn-outline btn-primary" title="Editar"><span class="glyphicon glyphicon-pencil">Editar</span></a> Editar                 
                   <a href="javascript:void(0)" class="btn btn-outline btn-danger" data-toggle="modal" data-target=".modal_ausencia_<?php echo $cliente->id; ?>" title="Ingresar Ausencia"><span class="glyphicon glyphicon-plus-sign"></span></a>
                   <a href="javascript:void(0)" class="btn btn-outline btn-warning" data-toggle="modal" data-target=".modal_horario_<?php echo $cliente->id; ?>" title="Ingresar Horario"><span class="glyphicon glyphicon-time"></span>
                   
                </td>
                            </tr>
                       @endforeach
                            
                        </tbody>
                    </table>
                    {!! $clientes->render() !!}
                </div>

                @endsection