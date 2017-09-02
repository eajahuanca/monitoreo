<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset(Auth::user()->us_foto) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->us_cuenta }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menú de Navegación</li>

            <li>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-home"></i> <span>Dashbord</span>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/aevaluar') }}">
                    <i class="fa fa-list"></i> <span>Proyectos a Evaluar</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>