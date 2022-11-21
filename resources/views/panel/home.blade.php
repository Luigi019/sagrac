@extends("panel.layouts.master")

@section('title','Inicio')

@section('content')
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Panel de Administración</h1>
			{{--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
					class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>--}}
		</div>

		<!-- Content Row -->
		<div class="row">

			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Usuarios registrados actualmente
								</div>
								<div class="row no-gutters align-items-center">
									<div class="col-auto">
										<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$user->count()}}</div>
									</div>
									<div class="col">
										<div class="progress progress-sm mr-2">
											<div class="progress-bar bg-danger" role="progressbar"
												style="width: 10%" aria-valuenow="10" aria-valuemin="0"
												aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-users fa-3x text-danger-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-info shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Roles creados actualmente
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$role->count()}}</div>
						</div>
						<div class="col">
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-info" role="progressbar"
									style="width: 50%" aria-valuenow="43" aria-valuemin="0"
									aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<i class="fas fa-user-lock fa-3x text-gray-300"></i>
				</div>
			</div>
		</div>
	</div>
</div>
			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Solicitudes de Reclamos actualmente
								</div>
								<div class="row no-gutters align-items-center">
									<div class="col-auto">
										<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $basqyr01->count()}}</div>
									</div>
									<div class="col">
										<div class="progress progress-sm mr-2">
											<div class="progress-bar bg-warning" role="progressbar"
												style="width: 60%" aria-valuenow="60" aria-valuemin="0"
												aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-exclamation-circle fa-3x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Earnings (Monthly) Card Example -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Reclamos solventados actualmente
								</div>
								<div class="row no-gutters align-items-center">
									<div class="col-auto">
										<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $bashis01->count()}}</div>
									</div>
									<div class="col">
										<div class="progress progress-sm mr-2">
											<div class="progress-bar bg-success" role="progressbar"
												style="width: 30%" aria-valuenow="30" aria-valuemin="0"
												aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-check-circle fa-3x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			

		<!-- Content Row -->
		<style>
			.highcharts-credits{
				/* opacity: 0!important; */
				display: none !important;
			}
		</style>
			<div class="container mt-5 align-center">
				<div class="row">
					<div class="col-md-6">
						<div id="grafica-home"></div>
					</div>
					<div class="col-md-6">
						<div id="grafica-users"></div>
					</div>
				</div>
				
			</div>

		
	</div>
	<script>
		Highcharts.chart('grafica-home', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Estadistica de Efectividad'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Quejas y Reclamos actuales',
            y: {{ $basqyr01->count()}},
			
            sliced: true,
            selected: true,
			color: '#ffc107'
        }, {
            name: 'Quejas y reclamos solventados',
            y: {{ $bashis01->count()}},
			color: '28a745'
        }]
    }]
});

Highcharts.chart('grafica-users', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'column'
    },
    title: {
        text: 'Usuarios y Roles Registrados Actualmente'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        colum: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} '
            }
        }
    },
    series: [{
        name: 'Registros',
        colorByPoint: true,
        data: [{
            name: 'Usuarios',
            y: {{ $user->count()}},
			color: '#dc3545'
        }, {
            name: 'Roles',
            y: {{ $role->count()}}, 
			color: '#17a2b8'
        }]
    }]
});

	</script>
@endsection