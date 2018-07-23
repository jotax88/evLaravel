@extends('layouts.layout_evpanel_mantenedor')

@section('title')
    EV Panel-Productos
@endsection


@section('content')
<div class="col-lg-12">
    <div class="x_title">
      <h2>Buscar Productos</h2>      
    </div>
{{ Form::open(['route' => 'producto.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
  <div class="row">
  <div class="col-md-4 position-relative has-icon-left">
        <input type="text" id="timesheetinput1" class="form-control" placeholder="Codigo Producto" name="codigo">
        <div class="form-control-position">
            <i class="fas fa-key"></i>
        </div>
    </div>
    <div class="col-md-4 position-relative has-icon-left">
        <input type="text" id="timesheetinput1" class="form-control" placeholder="Nombre Producto" name="nombre">
        <div class="form-control-position">
            <i class="fas fa-box-open"></i>
        </div>
    </div>
    <div class="col-md-4">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
  
 
 
  {{ Form::close() }}
</div>



<div class="x_title">
      <h2>Todos los Productos</h2>      
    </div>

<div class="table-responsive">
                    <table class="table table-extend table-hover table-striped table-bordered mb-0" align="center">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Publicable</th>
                                <th>stock</th>
                                <th>P. Hermano</th>
                                <th>S. Hermano</th>
                                <th>Publicable Hermano</th>
                                <th>Opciones</th>
                                <th>Estados Publicacion</th>
                            </tr>
                        </thead>
                        <tbody class="table table-hover table-striped table-bordered mb-0">
                        @foreach ($productos as $producto)
                           
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->codigo }}</td> 
                                <td>{{ $producto->nombre}}</td>
                                <td>{{ $producto->publicar}}</td>
                                <td>{{ $producto->stock_total}}</td> 
                                <td>{{ $producto->codigo_hermano}}</td>
                                <td>{{ $producto->stock_hermano}}</td>  
                                <td>{{ $producto->publicar_hermano}}</td>     
                            </tr>
                       @endforeach
                            
                        </tbody>
                    </table>
                    {!! $productos->render() !!}
                </div>

                @endsection