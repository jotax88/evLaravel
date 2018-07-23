@extends('layouts.dashboard')

@section('title')
    EV Panel-Mantenedores
@endsection
@section('menu')
<li class=" nav-item"><a href="index.html"><i class="fas fa-home"></i><span data-i18n="nav.dash.main" class="menu-title">Inicio</span></a>
            <ul class="menu-content">
              <li class="active"><a href="index.html" data-i18n="nav.dash.main" class="menu-item">Inicio</a>
              </li>
              <li><a href="dashboard-2.html" data-i18n="nav.dash.main" class="menu-item">Edita Cliente</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-box-open"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Productos</span></a>
            <ul class="menu-content">
              <li><a href="{{ route('producto.index') }}" data-i18n="nav.page_layouts.1_column" class="menu-item">Todos</a>
              </li>
              <li><a href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns" class="menu-item">Programacion Estados</a>
              </li>
              <li><a href="layout-boxed.html" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">Sin Publicar</a>
              </li>             
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-boxes"></i><span data-i18n="nav.project.main" class="menu-title">Familias</span></a>
            <ul class="menu-content">
              <li><a href="invoice-template.html" data-i18n="nav.invoice.invoice_template" class="menu-item">Listado Familia 1</a>
              </li>              
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-users"></i><span data-i18n="nav.cards.main" class="menu-title">Usuarios</span></a>
            <ul class="menu-content">
              <li><a href="card-bootstrap.html" data-i18n="nav.cards.card_bootstrap" class="menu-item">Activos</a>
              </li>
              <li><a href="card-actions.html" data-i18n="nav.cards.card_actions" class="menu-item">Bloqueados</a>
              </li>
              <li><a href="card-actions.html" data-i18n="nav.cards.card_actions" class="menu-item">Todos</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-chalkboard-teacher"></i><span data-i18n="nav.cards.main" class="menu-title">Clientes web</span></a>
            <ul class="menu-content">              
              <li><a href="{{ route('buscar_cliente.index') }}" data-i18n="nav.cards.card_actions" class="menu-item">Todos</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-file-archive"></i><span data-i18n="nav.advance_cards.main" class="menu-title">Archivos</span></a>
            <ul class="menu-content">
              <li><a href="card-statistics.html" data-i18n="nav.cards.card_statistics" class="menu-item">Listar</a>
              </li>              
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-sliders-h"></i><span data-i18n="nav.content.main" class="menu-title">Web</span></a>
            <ul class="menu-content">
              <li><a href="content-grid.html" data-i18n="nav.content.content_grid" class="menu-item">Listado Sliders</a>
              </li>
              <li><a href="content-typography.html" data-i18n="nav.content.content_typography" class="menu-item">Home</a>
              </li>              
            </ul>
          </li>
          <li class=" nav-item"><a href="#"><i class="fas fa-briefcase"></i><span data-i18n="nav.components.main" class="menu-title">Cargos</span></a>
            <ul class="menu-content">
              <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">Todos</a>
              </li>             
            </ul>
          </li>
         
          
          
@endsection