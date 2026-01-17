@extends('layouts.app')

@section('content')
	<div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">

			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="card-body" style="padding:2em 2em 2em 2em">
					<div class="row justify-content-center" style="margin-top:1em;">
						<div class="col-12" align="center">
							<h1 style="font-size:3em;color:#23345B;font-family:Soho Std;font-weight:800;font-style:italic">
								SISTEMA INTEGRAL DE GESTIÓN POLICIAL
							<h1>
						</div>
					</div>
					<div class="row justify-content-center" style="margin-top:0.5em;margin-bottom:1em">
						<div class="col-6" align="center">
							<img src="{{ asset('images/escudo1.png') }}" class="img-fluid">
						</div>
						<div class="col-6" align="center" style="padding-top:2em">
							<img src="{{ asset('images/logo_sspc.png') }}" class="img-fluid" width="35%">
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection
