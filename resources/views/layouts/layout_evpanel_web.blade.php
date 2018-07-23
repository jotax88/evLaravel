@extends('layouts.dashboard')

@section('title')
    EV Panel-Web
@endsection
@section('menu')
<li class=" nav-item"><a href="index.html"><i class="fas fa-home"></i><span data-i18n="nav.dash.main" class="menu-title">Inicio</span></a>
            <ul class="menu-content">
              <li class="active"><a href="index.html" data-i18n="nav.dash.main" class="menu-item">Inicio</a>
              </li>
              <li><a href="{{ route('buscar_cliente.index') }}" data-i18n="nav.dash.main" class="menu-item">Edita Cliente</a>
              </li>
            </ul>
          </li>         
           <!-- main menu web-->
           <li class=" nav-item"><a href="#"><i class="fas fa-cart-arrow-down"></i><span data-i18n="nav.components.main" class="menu-title">Carro</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">En Proceso</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Descartados</a>
              </li>         
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-file-invoice-dollar"></i><span data-i18n="nav.components.main" class="menu-title">   Ventas</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Pago sin Respuesta</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Aprobadas</a>
              </li>
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Rechazadas</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Proceso Validacion</a>
              </li> 
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Historico</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Transferencias</a>
              </li>          
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-truck"></i><span data-i18n="nav.components.main" class="menu-title">Despacho</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Pago sin Respuesta</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Aprobadas</a>
              </li>
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Rechazadas</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Proceso Validacion</a>
              </li> 
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Historico</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Transferencias</a>
              </li>          
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-chart-bar"></i><span data-i18n="nav.components.main" class="menu-title">Reportes</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Top Vtas x Producto</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Tiempo Ventas Web</a>
              </li>
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Ventas Por Comuna</a>
              </li>     
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Productos Vendidos</a>
              </li>                      
            </ul>
          </li>
          
@endsection