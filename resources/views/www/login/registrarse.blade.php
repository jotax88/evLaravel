@extends('layouts.layout_web')

@section('title')
  Electroventas-Registro de Cliente Web
@endsection


<div class="content center-content col-12" align="center">
    <section class="first-section ">
        <div class="container ">
            <h1 class="center page-title">Registro </h1>

                        
            <form action="{{ url('cliente') }}" class="" name="registro" style="padding-bottom: 100px" method="post">
              @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{ $error}}</p>
              @endforeach

            @include('common.success')  

            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
         <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Persona</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Empresa</label>
</div>


      <br><br>

       <div class="row">
    <div class="col">
      <label for="inputState">Nombre</label>
      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
    </div>
    <div class="col">
      <label for="inputState">Telefono</label>
      <input type="text" class="form-control" placeholder="Telefono">
    </div>
  </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">RUT</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">DNI</label>
</div>
  <div class="row">
    <div class="col">
      <label for="inputState">Rut</label>
      <input type="text" class="form-control" placeholder="Rut" name="rut">
    </div>
    <div class="col">
      <label for="inputState">Celular</label>
      <input type="text" class="form-control" placeholder="Celular">
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Correo</label>
      <input type="text" class="form-control"  placeholder="Correo" id="inputCity" name="correo">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Region</label>
      <select id="inputState" class="form-control">
        <option selected>Seleccione Region...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Comuna</label>
      <select id="inputState" class="form-control">
        <option selected>Seleccione Comuna...</option>
        <option>...</option>
      </select>
    </div>
       <div class="form-group col-md-6">
      <label for="inputCity">Repetir Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repetir Contraseña">
    </div>
     <div class="form-group col-md-6">
      <label for="inputCity">Dirección</label>
      <input type="text" class="form-control"  placeholder="Dirección" id="inputCity">
    </div>

<!--  <div class="form-group col-md-6">
     <label for="inputCity">Fecha de nacimiento
</label>
     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Repetir Contraseña">
   </div> -->
     <div class="form-group col-md-6">
       ¿Ya tienes cuenta? <a href="">Ingresa aquí </a></p>
    </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Continuar</button>
        </div>
    </section>
</div>


<script>
$(document).ready(function() {

  $('#dni_input_r').hide(0);


      $('input[type=radio][name=numero_identificador]').change(function() {
          if (this.value == 'rut') {
              $('#dni_input_r').hide(0).children('.dni').attr('name', '');
              $('#rut_input_r').fadeIn(200).children('.rut').attr('name', 'txtRut').addClass('rut_validator');


          }
          else if (this.value == 'dni') {
            $('#rut_input_r').hide(0).children('.rut').attr('name', '').removeClass('rut_validator');
            $('#dni_input_r').fadeIn(200).children('.dni').attr('name', 'txtRut');
            $('#btn-register').attr('disabled',false);


          }

      });

    </script>
    