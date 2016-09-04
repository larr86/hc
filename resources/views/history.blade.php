@extends('layouts.app')

@section('htmlheader_title')
	Historia Clinica del Paciente
@endsection

@section('history-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Historia Clinica</div>

					<div class="panel-body">
						Esta es la seccion de la historia clinica
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('scripts')
@endsection