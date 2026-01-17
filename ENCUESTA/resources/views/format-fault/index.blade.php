@extends('layouts.app')

@section('content')
	<div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">

			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
					<div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
						Gestión de Formatos de Audiencia Para Detenidos (Falta Administrativa)

					</div>
				</div>
				<hr/>
				<div class="card-body" style="padding:0em 2em 2em 2em">
					<div class="row justify-content-center" style="margin-top:0.2em">
						<div class="col-12 table-responsive">
							<table id="table_info"  class="table table-bordered" style="width:100%">
								<thead>
								<tr>
									<th>Código</th>
									<th>RND</th>
									<th>Nombre</th>
									<th>Apellido Paterno</th>
									<th>Apellido Materno</th>
									<th>Sexo</th>
									<th>Formatos</th>																								
								</tr>
								</thead>
								<tbody>
									@for($i=0; $i<count($arrested) ;$i++)
                                    <tr>
											<th>{{$arrested[$i]->code}}</th>
											<th>{{$arrested[$i]->rnd}}</th>
											<th>{{$arrested[$i]->arrested_name}}</th>
											<th>{{$arrested[$i]->arrested_first_lastname}}</th>
											<th>{{$arrested[$i]->arrested_second_lastname}}</th>
                                            <th>{{$arrested[$i]->arrested_gender}}</th>
                                            <th><a class="text-success" href="{{ route('formats.list', $arrested[$i]->id) }}"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Ver</a></th>
											
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

			document.getElementById('medicCertificatesCollapse').setAttribute("aria-expanded", true);
			document.getElementById('medicCertificates').classList.add("show");

			$('#table_info').DataTable( {
				language: {url: 'datatables/Spanish.json'},
				dom: 'Bfrtip',
				searching:true,
				paging:true,
				ordering:true,
				bLengthChange: false,
			} );

		});

	</script>

@endsection