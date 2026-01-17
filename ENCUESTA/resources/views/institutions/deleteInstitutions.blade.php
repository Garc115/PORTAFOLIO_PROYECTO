@extends('layouts.app')

@section('content')
	<div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">

			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
					<div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
						Eliminación de Instituciones
					</div>
				</div>
				<hr/>
				<div class="card-body" style="padding:0em 2em 2em 2em">
					<form method="POST" action="{{ route('destroyInstitutions') }}">
					@csrf

						<input type="hidden" id="id" value="{{ $institution->id }}" name="id">

						<div class="row justify-content-center">
							<div class="col-12">
								<a href="{{route('instituciones')}}" style="cursor: pointer;text-decoration: none;color:darkslateblue;font-size:1.1em">
									<strong>
										<i class="fas fa-arrow-left"></i> Volver
									</strong>
								</a>
							</div>
						</div>

						<div class="row justify-content-center" style="margin-top:1em">
							<div class="col-12" align="center" style="color:red;font-size:1.3em">
								<strong>
									Verifique que los datos sean correctos y presione el botón "Eliminar institución" para finalizar la acción
								</strong>
							</div>
						</div>
						<div class="row justify-content-start" style="margin-top:1em">
							<div class="col-1">
							</div>
							<div class="col-6">
								<label for="institution" class="form-label"><strong>Institución</strong></label>
								<p>
									{{ $institution->institution }}
								</p>
							</div>
							<div class="col-4" align="right" style="margin-top:0.5em">
								<button type="submit" class="btn btn-danger btn-block">Eliminar institución</button>
							</div>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
@endsection

@section('js-files')

	<script type="text/javascript">

		$( document ).ready(function() {
			document.getElementById('myCollapse').setAttribute("aria-expanded", true);
			document.getElementById('layouts').classList.add("show");
		});

	</script>

@endsection
