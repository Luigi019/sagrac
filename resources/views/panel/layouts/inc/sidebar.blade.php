<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon">
            <img src="{{asset('assets/img/favicon.png')}}" alt="" style="width: 40px;">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="title-principal"style="font-size: 12px">Inmobiliaria Nacional - SAC</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Panel de Administración</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Módulos del sistema
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilidades:</h6>
                <a class="collapse-item" name='user' href="{{ route('admin.users.index') }}">Usuarios</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Otras funciones:</h6>
                <a class="collapse-item" href="{{ route('admin.roles.index') }}">Roles y Permisos</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Solicitudes -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComplains"
            aria-expanded="true" aria-controls="collapseComplains">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Solicitudes</span>
        </a>
        <div id="collapseComplains" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestionar funciones:</h6>
                <a class="collapse-item" name='user' href="{{ route('admin.quejas.index') }}">Quejas y Reclamos</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Otras funciones:</h6>
                <a class="collapse-item" href="{{ route('admin.historica.index') }}">Historica</a>
                </div>
        </div>
    </li>

   

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{asset('assets/img/undraw_rocket.svg')}}" alt="...">
        <p class="text-center mb-2"><strong>Lorem ipsum</strong> sit amet consectetur adipisicing elit.</p>
        <a class="btn btn-success btn-sm" >!Buenos días Eulices!</a>
    </div> --}}

</ul>