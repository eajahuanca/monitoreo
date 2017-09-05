<?php $__env->startSection('FormularioTitulo','Proyectos a Evaluar'); ?>
<?php $__env->startSection('FormularioDescripcion','en este formulario se pueden observar todos los proyectos a evaluar'); ?>
<?php $__env->startSection('FormularioActual','Proyectos a evaluar'); ?>
<?php $__env->startSection('FormularioDetalle','Proyectos'); ?>

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ContenidoPagina'); ?>

<!-- Main content -->
    <section class="content">
      	<!-- Small boxes (Stat box) -->
      	<div class="row">
        	<div class="col-lg-3 col-xs-6">
          		<!-- small box -->
          		<div class="small-box bg-aqua">
            		<div class="inner">
              			<h3>150</h3>
              			<p>New Orders</p>
            		</div>
            		<div class="icon">
              			<i class="ion ion-bag"></i>
            		</div>
            		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
        	</div>
        	<!-- ./col -->
        	<div class="col-lg-3 col-xs-6">
          		<!-- small box -->
          		<div class="small-box bg-green">
            		<div class="inner">
              			<h3>53<sup style="font-size: 20px">%</sup></h3>
              			<p>Bounce Rate</p>
            		</div>
            		<div class="icon">
              			<i class="ion ion-stats-bars"></i>
            		</div>
            		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
        	</div>
        	<!-- ./col -->
        	<div class="col-lg-3 col-xs-6">
          		<!-- small box -->
          		<div class="small-box bg-yellow">
            		<div class="inner">
              			<h3>44</h3>
              			<p>User Registrations</p>
            		</div>
            		<div class="icon">
              			<i class="ion ion-person-add"></i>
            		</div>
            		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
        	</div>
        	<!-- ./col -->
        	<div class="col-lg-3 col-xs-6">
          		<!-- small box -->
          		<div class="small-box bg-red">
            		<div class="inner">
              			<h3>65</h3>
              			<p>Unique Visitors</p>
            		</div>
            		<div class="icon">
              			<i class="ion ion-pie-graph"></i>
            		</div>
            		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          		</div>
        	</div>
        	<!-- ./col -->
      	</div>
      	<!-- /.row -->
      	<!-- Main row -->
      	<div class="row">
        	<!-- Left col -->
        	<section class="col-lg-12connectedSortable">
          		<!-- Custom tabs (Charts with tabs)-->
          		<div class="nav-tabs-custom">
            		<!-- Tabs within a box -->
            		<ul class="nav nav-tabs pull-right">
              			<li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              			<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
		              	<li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
	            	</ul>
            		<div class="tab-content no-padding">
              			<!-- Morris chart - Sales -->
              			<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              			<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            		</div>
          		</div>
          		<!-- /.nav-tabs-custom -->
			</section>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
	<!-- Sparkline -->
	<script src="<?php echo e(asset('plugin/plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.init', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>