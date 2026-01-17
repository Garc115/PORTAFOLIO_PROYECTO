@extends('layouts.app')

@section('content')
	<div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">

			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
					<div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
						Edición de Municipios
					</div>
				</div>
				<hr/>
				<div class="card-body" style="padding:0em 2em 2em 2em">
					<form method="POST" action="{{ route('updateTownships') }}">
					@csrf

						<input type="hidden" id="id" value="{{ $township->id }}" name="id">

						<div class="row justify-content-center">
							<div class="col-12">
								<a href="{{route('municipios')}}" style="cursor: pointer;text-decoration: none;color:darkslateblue;font-size:1.1em">
									<strong>
										<i class="fas fa-arrow-left"></i> Volver
									</strong>
								</a>
							</div>
						</div>


						<div class="row justify-content-center" style="margin-top:1em">
							<div class="col-6">
								<label for="township" class="form-label">Municipio</label>
								<input id="township"  name="township" type="text" class="form-control" value="{{ $township->township }}"
								 required autofocus>
							</div>
							<div class="col-6">
								<label for="states" class="form-label">Estado</label>
								<select id="states" name="states" class="form-control select2" required>
									<option value="">-- Seleccione un valor --</option>
									@foreach($states as $item)
										@if($item['id'] == $township->states_id)
											<option value="{{ $item['id'] }}" selected>{{ $item['state'] }}</option>
										@else
											<option value="{{ $item['id'] }}">{{ $item['state'] }}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>

						<div class="row justify-content-center" style="margin-top:1em">
							<div class="col-12" align="right" style="margin-top:0em">
								<button type="submit" class="btn btn-primary btn-block">Actualizar</button>
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
