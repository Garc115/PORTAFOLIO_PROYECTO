@extends('layouts.app')

@section('content')
<?php
use App\Models\User_type;
$alertType = Session::has('alertType') ? Session::get('alertType') : null;
$msgAlert = Session::has('msgAlert') ? Session::get('msgAlert') : null;

$tUs = '';

if (Auth::check()) {
    $query = User_type::where('id', '=', Auth::user()->user_types_id)
        ->get()
        ->first();
    if (isset($query->id)) {
        $tUs = $query->user_type;
    }
}
?>
    <div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">

			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em">
					<div class="col-12" align="center">
						<h2>Listado de Formatos de Audiencia</h2>
                        <h4>Detenido: {{ $arrestedFault->full_name }}</h4>
                        <h4>RND: {{ $arrestedFault->rnd }}</h4>
                        <h4>Primer respondiente: {{ $arrestedFault->firstRespondent->full_name  }}</h4>
					</div>
				</div>
				<hr/>
				<div class="card-body" style="padding:1em 2em 2em 2em">
					<div class="row justify-content-center" style="margin-top:0.2em">
						<div class="col-12 table-responsive">
							<table id="table_info"  class="table table-bordered" style="width:100%">
								<thead>
                                    <tr>
                                        <th>Formato</th>
                                        <!-- @if ($tUs != 'Juez') Si el usuario no es un Juez 
                                            <th>Editar</th>
                                        @endif -->
                                        @if ($tUs == 'Juez'||$tUs == 'Administrador' ||$tUs == 'Subadministrador') <!-- Si el usuario es un Juez -->
                                            <th>Finalizar registro</th>
                                        @endif

                                        <th>Descargar PDF</th>
                                    </tr>
                                    

                
                                    <tr>
                                        <td>Cédula de Ingreso</td>
                                       <!-- @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif -->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th> 
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{ route('download_cedula_infractor_individual', $arrestedFault->id) }}" target='_blank' style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Constancia de Lectura de Derechos</td>
                                        <!-- @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif-->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th>    
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{ url('download_constancia_lectura',['id' => $arrestedFault->id ])}}"  target='_blank' style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Acta de Audiencia</td>
                                       <!-- @if ($tUs != 'Juez')
                                        <th><a class="text-info" href="{{ route('editArrestedBelonging', $arrestedFault->id) }}"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif -->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info" href="{{ route('createAdministrativeHearingRecord', $arrestedFault->id) }}"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th>    
                                        @endif
                                        @if ($tUs != 'Alcaide')
                                        <td class="text-center">
                                            <a class='text-dark' href="{{url('download_acta_audiencia',['general_data_fault_id' => $arrestedFault->general_data_fault_id ])}}"  target='_blank' style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>                                          
                                        </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td>Formato Médico Delito</td>
                                       <!-- @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif -->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th> 
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{url('download_formato_medico_delito',['id' => $arrestedFault->id ])}}"  target='_blank' style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Formato Médico Falta Administrativa</td>
                                       <!-- @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif -->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th> 
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{url('download_formato_medico_falta',['id' => $arrestedFault->id ])}}"  target='_blank' style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Formato Pertenencias</td>
                                       @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif 
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez'||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'></a></th> 
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{url('download_formato_pertenencias',['id' => $arrestedFault->id ])}}"  target='_blank'

                                                style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td>Formato Menores de Edad</td>
                                      <!--  @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif -->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th> 
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{url('download_formato_menores',['id' => $arrestedFault->id ])}}" style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Formato Barandilla</td>
                                       <!-- @if ($tUs != 'Juez')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Editar</a></th>
                                        @endif -->
                                        @if ($tUs == 'Administrador' || $tUs == 'Juez' ||$tUs == 'Subadministrador')
                                        <th><a class="text-info"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'>Registrar</a></th> 
                                        @endif
                                        <td class="text-center">
                                            <a class='text-dark' href="{{url('download_formato_barandilla',['id' => $arrestedFault->id ])}}" style='padding:0em 0.3em;'>
                                                <i class="fas fa-file-download text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
								</thead>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

@endsection
