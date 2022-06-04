
    <h6 class="navbar-heading text-muted">Gestion</h6>
    <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="./index.html">
              <i class="ni ni-tv-2 text-danger"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('/docentes')}} ">
              <i class="ni ni-circle-08 text-danger"></i> Docentes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ url('/especialidades')}} ">
              <i class="ni ni-hat-3 text-blue"></i> Especialidades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/maps.html">
              <i class="ni ni-collection text-info"></i> Inscripciones
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/profile.html">
              <i class="ni ni-calendar-grid-58 text-warning"></i> Horarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route ('logout')}}" onclick="event.preventDefault();document.getElementById('formLogout').submit();">
              <i class="fas fa-sign-in-alt"></i> Cerrar sesion
            </a>
            <form action="{{route ('logout')}}" method="POST" style="display:none;" id="formLogout">
            @csrf
            </form>
            
          </li>
    </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-chart-bar-32"></i> Reporte Estadistico
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-paper-diploma"></i> Trámites
            </a>
          </li>
        </ul>

 