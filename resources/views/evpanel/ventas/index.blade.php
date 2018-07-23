@extends('layouts.layout_evpanel_web')

@section('content')


<div class="row tile_count  text-center">

<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">

    <span class="count_top"><i class="fa fa-clock-o"></i> Mes Anterior</span>
    <div class="count">$ ></div>
    <div class="count">#</div>

  </div>
</div>
<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <span class="count_top"><i class="fa fa-clock-o"></i> Ventas Mes</span>
    <div class="count">$ ></div>
    <div class="count">#</div>          
  </div>
</div>
<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <span class="count_top"><i class="fa fa-clock-o"></i> Ventas Hoy</span>
    <div class="count">$ </div>
    <div class="count">#</div>

  </div>
</div>
<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="tile-stats">
    <span class="count_top"><i class="fa fa-clock-o"></i>Proyectado Ventas</span>
    <div class="count">$</div>
    <div class="count">#</div>

  </div>
</div>
</div>
<div class="row tile_count  text-center">

<div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="tile-stats">

  <span class="count_top"><i class="fa fa-clock-o"></i>Ventas Aprobadas</span>
  <div class="count">$</div>
  <div class="count">#</div>

</div>
</div>
<div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="tile-stats">

  <span class="count_top"><i class="fa fa-clock-o"></i>Ventas Proceso Validacion</span>
  <div class="count">$</div>
  <div class="count">#</div>

</div>
</div>
</div>

 @endsection