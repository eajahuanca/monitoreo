<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset(Auth::user()->us_foto)); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->us_cuenta); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menú de Navegación</li>

            <li>
                <a href="<?php echo e(url('/home')); ?>">
                    <i class="fa fa-home"></i> <span>Dashbord</span>
                </a>
            </li>
            
            <li>
                <a href="<?php echo e(url('/aevaluar')); ?>">
                    <i class="fa fa-list"></i> <span>Proyectos a Evaluar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Parametrizaciones</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo e(url('/entidad')); ?>">
                            <i class="fa fa-list"></i> <span>Entidades (UE)</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/unidad')); ?>">
                            <i class="fa fa-list"></i> <span>Unidades</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/provincia')); ?>">
                            <i class="fa fa-list"></i> <span>Provincias</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/municipio')); ?>">
                            <i class="fa fa-list"></i> <span>Municipios</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>