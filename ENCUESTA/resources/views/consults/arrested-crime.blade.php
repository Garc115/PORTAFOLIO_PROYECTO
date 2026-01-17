@extends('layouts.app')

@section('style')
    <link href="{{ asset('datatables/Buttons-2.0.1/css/buttons.dataTables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row justify-content-center" style="margin-top:1em">
        <div class="col-12">

            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
                    <div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
                        Gestión de Consultas (Hecho Probablemente Delictivo)
                    </div>
                </div>
                <hr />
                <div class="card-body" style="padding:0em 2em 2em 2em">

                    <form id="search_by_date_range" method="GET"
                        action="{{ route('consultants.arrested-crime-search-by-date-range') }}">
                        @include('partials.formSearchByDateRage')
                    </form>

                    <div class="row justify-content-center" style="margin-top:0.2em">
                        <div class="col-12 table-responsive">
                            <table id="table_info" class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Folio Bitácora</th>
                                        <th>Mes</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Día</th>
                                        <th>Hora de Ingreso</th>
                                        <th>RND</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Nombres</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Alias</th>
                                        <th>Calle del Domicilio</th>
                                        <th>Número del Domicilio</th>
                                        <th>Número Interior del Domicilio</th>
                                        <th>Colonia del Domicilio</th>
                                        <th>Código Postal del Domicilio</th>
                                        <th>Municipio del Domicilio</th>
                                        <th>Estado del Domicilio</th>
                                        <th>Calle de la Detención</th>
                                        <th>Calle del Lugar de Intervención</th>
                                        <th>Número del Lugar de Intervención</th>
                                        <th>Número del Lugar de Intervención</th>
                                        <th>Colonia del Lugar de Intervención</th>
                                        <th>Código Postal del Lugar de Intervención</th>
                                        <th>Municipio del Lugar de Intervención</th>
                                        <th>Estado del Lugar de Intervención</th>
                                        <th>Número de la Detención</th>
                                        <th>Número Interior de la Detención</th>
                                        <th>Colonia de la Detención</th>
                                        <th>Código Postal de la Detención</th>
                                        <th>Municipio de la Detención</th>
                                        <th>Estado de la Detención</th>
                                        <th>Nacionalidad</th>
                                        <th>Primer Respondiente</th>
                                        <th>Remitido por la Unidad Policial</th>
                                        <th>Institución</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arrested as $person)
                                        <tr>
                                            @isset( $person->generalDataCrime )
                                            <th>{{ $person->generalDataCrime->code }}</th>
                                            <th>{{ $person->generalDataCrime->log_sheet_id }}</th>
                                            <th>{{ $person->generalDataCrime->carbon_arrival_date->monthName }}</th>
                                            <th>{{ $person->generalDataCrime->arrival_date }}</th>
                                            <th>{{ $person->generalDataCrime->carbon_arrival_date->dayName }}</th>
                                            <th>{{ $person->generalDataCrime->arrival_hour }}</th>
                                            @else
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            @endisset
                                            <th>{{ $person->rnd }}</th>
                                            <th>{{ $person->arrested_first_lastname }}</th>
                                            <th>{{ $person->arrested_second_lastname }}</th>
                                            <th>{{ $person->arrested_name }}</th>
                                            <th>{{ $person->arrested_birthday }}</th>
                                            <th>{{ $person->age }}</th>
                                            <th>{{ $person->arrested_gender }}</th>
                                            <th>{{ $person->arrested_alias }}</th>
                                            <th>{{ $person->street_address }}</th>
                                            <th>{{ $person->exterior_number_address }}</th>
                                            <th>{{ $person->interior_number_address }}</th>
                                            <th>{{ $person->colony_address }}</th>
                                            <th>{{ $person->postal_code_address }}</th>
                                            <th>{{ $person->township_address }}</th>
                                            <th>{{ $person->state_address }}</th>
                                            @if(isset($person->generalDataCrime))
                                            <th>{{ $person->generalDataCrime->street }}</th>
                                            <th>{{ $person->generalDataCrime->exterior_number }}</th>
                                            <th>{{ $person->generalDataCrime->interior_number }}</th>
                                            <th>{{ $person->generalDataCrime->postal_code }}</th>
                                            <th>{{ $person->generalDataCrime->colony }}</th>
                                            <th>{{ $person->generalDataCrime->general_township }}</th>
                                            <th>{{ $person->generalDataCrime->state }}</th>
                                            @else
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            <th>Sin datos generales vinculados</th>
                                            @endif
                                            @if( $person->same_place_intervention_detention == 'si' and isset($person->generalDataCrime) )
                                            <th>La misma que la de Intervención</th>
                                            <th>La misma que la de Intervención</th>
                                            <th>La misma que la de Intervención</th>
                                            <th>La misma que la de Intervención</th>
                                            <th>La misma que la de Intervención</th>
                                            <th>La misma que la de Intervención</th>
                                            <th>La misma que la de Intervención</th>
                                            @else
                                            <th>{{ $person->street_detention }}</th>
                                            <th>{{ $person->exterior_number_detention }}</th>
                                            <th>{{ $person->interior_number_detention }}</th>
                                            <th>{{ $person->postal_code_detention }}</th>
                                            <th>{{ $person->colony_detention }}</th>
                                            <th>{{ $person->township_detention }}</th>
                                            <th>{{ $person->state_detention }}</th>
                                            @endif
                                            <th>{{ $person->nationality }}</th>
                                            <th>{{ $person->firstRespondent->full_name }}</th>
                                            @isset($person->generalDataCrime)
                                            <th>{{ $person->generalDataCrime->unit_name }}</th>
                                            @else
                                            <th>Sin datos generales vinculados</th>
                                            @endisset
                                            @isset($person->firstRespondent->institution->institution )
                                            <th>{{ $person->firstRespondent->institution->institution }}</th>
                                            @else
                                            <th>Sin datos generales vinculados</th>
                                            @endisset
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
@section('js_files')
    <script src="{{ asset('jszip-v3.10.1/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('pdfmake-0.2.7/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('pdfmake-0.2.7/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-2.0.1/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-2.0.1/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('datatables/Buttons-2.0.1/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalerts.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_info').DataTable({
                language: {
                    url: 'datatables/Spanish.json'
                },
                dom: 'Bfrtip',
                searching: true,
                paging: true,
                ordering: true,
                bLengthChange: false,
            });
        });
    </script>
@endsection
