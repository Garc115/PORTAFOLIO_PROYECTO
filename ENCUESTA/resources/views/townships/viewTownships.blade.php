@extends('layouts.app')

@section('content')
	<div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">

			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
					<div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
						Gestión de Municipios
					</div>
				</div>
				<hr/>
				<div class="card-body" style="padding:0em 2em 2em 2em">
					@if($type == "Administrador" || $type == "Capturista General" || $type == "Subadministrador")
						<div class="row justify-content-center">
							<div class="col-12" style="" align="right">
								<a class="text-primary" href="{{route('registro-municipios')}}" style="cursor: pointer;text-decoration: none;font-size:1.2em;font-weight:bold">
								Nuevo
							</a>
							</div>
						</div>
					@endif
					<div class="row justify-content-center" style="margin-top:0.2em">
						<div class="col-12 table-responsive">
							<table id="table_info" class="table table-bordered table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Municipio</th>
										<th>Estado</th>
										@if ($type == 'Administrador'|| $type == "Subadministrador")
											<th></th><th></th>
										@elseif($type == "Capturista General")
											<th></th>
										@endif
									</tr>
								</thead>
								<tbody>
									@for($i=0; $i<count($townships);$i++)
										<tr>
											<th>{{$townships[$i]->township}}</th>
											<th>{{$townships[$i]->state}}</th>
											@if ($type == 'Administrador'|| $type == "Subadministrador")
											<th>{!!$townships[$i]->edit!!}</th>
												<th>{!!$townships[$i]->delete!!}</th>
											@elseif($type == "Capturista General")
												<th>{!!$townships[$i]->edit!!}</th>
											@endif
										</tr>
									@endfor
								</tbody>
							</table>
						</div>
					</div>

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

			$('#table_info').DataTable( {
				language: {url: 'datatables/Spanish.json'},
				dom: 'Bfrtip',
				searching:true,
				paging:true,
				ordering:false,
				bLengthChange: false,
			} );
		} );

	</script>

@endsection
