<!DOCTYPE html>
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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIGP</title>
    <link rel="shortcut icon" href="{{ asset('images/logo_sspc.png') }}" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('twbs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('datatables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <link rel='stylesheet'
        href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css'
        type='text/css' />
    <link href="{{ asset('select2-4.1.0-rc.0/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('select2-bootstrap-5-theme-1.3.0/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('select2-bootstrap-5-theme-1.3.0/select2-bootstrap-5-theme.rtl.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    @yield('style')
</head>

<body style="font-family:Titillium Web;">
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="height:66px;">
        <div class="container-fluid" style="padding:0.1em 0em 0.1em 1em">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="{{ route('dashboard') }}"
                style="padding:0em 0em 0em 0em;margin:0em;font-size:2em;font-family:Soho Std;font-weight:bold;font-style:italic"
                align="center">
                <img src="{{ asset('images/flechas.png') }}" class="img-fluid" style="max-height:100%;height:1.5em;">
                SISTEMA INTEGRAL DE GESTIÓN POLICIAL
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar"
                aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="topNavBar">
                <div class="d-flex ms-auto my-3 my-lg-0">
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">

                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                </li>
                </ul>
            </div>

            @yield('top-nav-bar-menu')

        </div>
    </nav>
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    @if ($tUs == 'Administrador'|| $tUs == 'Subadministrador')
                        <hr class="dropdown-divider bg-light" style="margin-top:0em;margin-bottom:1em">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                ADMINISTRADOR
                            </div>
                        </li>
                        @if ($tUs == 'Administrador')
                        <li>
                            
                            <a href="{{ route('usuarios') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="fas fa-users"></i></span>
                                <span>Usuarios</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('general-data-logs.index') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="bi bi-card-text"></i></span>
                                <span>Registro de actividades</span>
                            </a>
                        </li>
                        <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                    @endif
                    @if ($tUs == 'Consultor')
                        <hr class="dropdown-divider bg-light" style="margin-top:0em;margin-bottom:1em">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                CONSULTOR
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('general-data-logs.index') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="bi bi-card-text"></i></span>
                                <span>Registro de actividades</span>
                            </a>
                        </li>
                        <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista General' || $tUs == 'Consultor' || $tUs == 'Juez' || $tUs == 'Subadministrador')
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                GENERAL
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista General' || $tUs == 'Consultor' || $tUs == 'Subadministrador')
                        <li>
                            <a id="myCollapse" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                                href="#layouts">
                                <span class="me-2"><i class="fas fa-archive"></i></span>
                                <span>Catálogos</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="layouts">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{ route('municipios') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-map-marked"></i></span>
                                            <span>Municipios</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('instituciones') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-building"></i></span>
                                            <span>Instituciones</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cargos') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-user-tie"></i></span>
                                            <span>Cargos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('grados') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-list-ol"></i></span>
                                            <span>Grados</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('elementos-policiacos') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-user-shield"></i></span>
                                            <span>Elementos policiacos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('traffic-incidents.index') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="bi bi-person-rolodex"></i></span>
                                            <span>Incidentes de tránsito</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista General' || $tUs == 'Consultor' || $tUs == 'Juez' || $tUs == 'Subadministrador')
                        <li>
                            <a id="offenseCollapse" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                                href="#offense">
                                <span class="me-2"><i class="fas fa-landmark"></i></span>
                                <span>Faltas administrativas</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="offense">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{ route('datos-generales') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-file-alt"></i></span>
                                            <span>Puesta a disposición</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('detenidos') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-address-card"></i></span>
                                            <span>Detenidos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('vehiculos') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-car"></i></span>
                                            <span>Vehículos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista General' || $tUs == 'Consultor'|| $tUs == 'Subadministrador')
                        <li>
                            <a id="criminalActCollapse" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                                href="#criminalAct">
                                <span class="me-2"><i class="fa fa-balance-scale" aria-hidden="true"></i></span>
                                <span>Hechos delictivos</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="criminalAct">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{ route('general-data-crimes.index') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-file-alt"></i></span>
                                            <span>Puesta a disposición</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('arrested-crimes.index') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-address-card"></i></span>
                                            <span>Detenidos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('use-of-force-crimes.index') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-user-injured"></i></span>
                                            <span>Uso de la fuerza</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('vehicle-crimes.index') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-car"></i></span>
                                            <span>Vehículos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('firearm-crimes.index') }}" class="nav-link px-3 active">

                                            <span class="me-2" style="color:white"><i
                                                    class="fas  fa-object-ungroup"></i></span>
                                            <span>Armas</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('item-crimes.index') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-inbox"></i></span>
                                            <span>Objetos</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('interview-crimes.index') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-paste"></i></span>
                                            <span>Entrevistas</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('transfer-intervention-crimes.index') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-map"></i></span>
                                            <span>Entrega lugar intervención</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Subadministrador' || $tUs == 'Alcaide')
                    <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            BIOMÉTRICO
                        </div>         
                        <a href="{{ route('createArrestedBelonging') }}" class="nav-link px-3 active">
                            <span class="me-2" style="color:white"><i class="fas fa-file-image"></i></span>
                            <span>
                                Registro de pertenencias
                            </span>
                        </a>

                        <a href="{{ route('showptArrestedBelonging') }}" class="nav-link px-3 active">
                            <span class="me-2" style="color:white"><i class="fas fa-file-image"></i></span>
                            <span>
                                Actas de pertenecias
                            </span>
                        </a>

                    </li>
                    @endif
                    @if (
                        $tUs == 'Administrador' ||
                            $tUs == 'Capturista Medico' ||
                            $tUs == 'Juez' ||
                            $tUs == 'Capturista General' ||
                            $tUs == 'Consultor' ||
                            $tUs == 'Capturista Socioeconomico'||
                            $tUs == 'Subadministrador')
                        <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                MÉDICO
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista Medico'|| $tUs == 'Subadministrador')
                        <li>
                            <a href="{{ route('editInformationOfMedics') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="fas fa-user"></i></span>
                                <span>Edición de información</span>
                            </a>
                        </li>
                    @endif
                    @if (
                        $tUs == 'Administrador' ||
                            $tUs == 'Capturista Medico' ||
                            $tUs == 'Juez' ||
                            $tUs == 'Capturista General' ||
                            $tUs == 'Consultor' ||
                            $tUs == 'Capturista Socioeconomico'|| 
                            $tUs == 'Subadministrador')
                        <li>
                            <a id="medicCertificatesCollapse" class="nav-link px-3 sidebar-link"
                                data-bs-toggle="collapse" href="#medicCertificates">
                                <span class="me-2"><i class="fas fa-file-alt"></i></span>
                                <span>Certificados médicos</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="medicCertificates">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{ route('indexMedicDataArrestedFaults') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-hospital-user"></i></span>
                                            <span>Falta administrativa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('indexMedicDataArrestedCrimes') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-user-injured"></i></span>
                                            <span>Hecho delictivo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('indexMedicDataArrestedCrimes') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-user-injured"></i></span>
                                            <span>C.M Confidencialidad</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista Psicosocial' || $tUs == 'Juez'|| $tUs == 'Subadministrador')
                        <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                PSICOSOCIAL
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Capturista Psicosocial' || $tUs == 'Administrador'|| $tUs == 'Subadministrador')
                        <li>
                            <a id="psychosocialCollapse" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                                href="#psychosocial">
                                <span class="me-2"><i class="fas fa-archive"></i></span>
                                <span>Catálogos</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="psychosocial">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{ route('fault-categories.index') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-clipboard"></i></span>
                                            <span>Categorías de faltas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faults.index') }}" class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-receipt"></i></span>
                                            <span>Descripción de faltas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('economic-activities.index') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-briefcase"></i></span>
                                            <span>Actividades económicas</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Capturista Psicosocial' || $tUs == 'Administrador' || $tUs == 'Juez' || $tUs == 'Consultor'|| $tUs == 'Subadministrador')
                        <li>
                            <a id="screeningCollapse" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                                href="#screening">
                                <span class="me-2"><i class="fa fa-clipboard"></i></span>
                                <span>Tamizajes</span>
                                <span class="ms-auto">
                                    <span class="right-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="collapse" id="screening">
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="{{ route('arrested_fault_screenings.index') }}"
                                            class="nav-link px-3 active">
                                            <span class="me-2" style="color:white"><i
                                                    class="fas fa-address-card"></i></span>
                                            <span>Detenidos</span>
                                        </a>
                                    </li>
                                    @if ($tUs == 'Capturista Psicosocial' || $tUs == 'Administrador' || $tUs == 'Consultor'|| $tUs == 'Subadministrador')
                                        <li>
                                            <a
                                                href="{{ route('search_fault_screening.index') }}"class="nav-link px-3 active">
                                                <span class="me-2" style="color:white"><i class="fa fa-search"
                                                        aria-hidden="true"></i></span>
                                                <span>Búsqueda</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Juez'|| $tUs == 'Subadministrador')
                        <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                JUEZ
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('formats.index') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="fas fa-file-image"></i></span>
                                <span>
                                    Formatos de Audiencia
                                </span>
                            </a>
                        </li>
                    @endif
                    @if (
                        $tUs == 'Administrador' ||
                            $tUs == 'Capturista General' ||
                            $tUs == 'Juez' ||
                            $tUs == 'Consultor' ||
                            $tUs == 'Capturista Medico' ||
                            $tUs == 'Capturista Socioeconomico'|| 
                            $tUs == 'Subadministrador')
                        <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                        <li>
                            <div class="text-muted small fw-bold text-uppercase px-3">
                                REPORTES
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('reportes-falta-administrativa') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="fas fa-file-image"></i></span>
                                <span>Falta administrativa</span>
                            </a>
                        </li>
                    @endif
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista General' || $tUs == 'Consultor'|| $tUs == 'Subadministrador')
                        <li>
                            <a href="{{ route('report-crimes.index') }}" class="nav-link px-3 active">
                                <span class="me-2" style="color:white"><i class="fas fa-file-image"></i></span>
                                <span>Hecho delictivo</span>
                            </a>
                        </li>
                    @endif
                    
         
                    <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            CONSULTOR
                        </div>
                        <ul class="nav flex-column">
                            <li>
                                <a id="arrested" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                                    href="#layouts">
                                    <span class="me-2"><i class="bi bi-person-video2"></i></span>
                                    <span>Detenidos</span>
                                    <span class="ms-auto">
                                        <span class="right-icon">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </span>
                                </a>
                                <div class="collapse" id="layouts">
                                    <ul class="navbar-nav ps-3">
                                        <li>
                                            <a href="{{ route('consultants.arrested-fault') }}"
                                                class="nav-link px-3 active">
                                                <span class="me-2" style="color:white"><i
                                                        class="bi bi-person-fill-slash"></i></span>
                                                <span>Falta administrativa</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('consultants.arrested-crime') }}"
                                                class="nav-link px-3 active">
                                                <span class="me-2" style="color:white"><i
                                                        class="bi bi-person-fill-lock"></i></span>
                                                <span>Hecho delictivo</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    @if ($tUs == 'Administrador' || $tUs == 'Capturista Mediacion' || $tUs == 'Juez'|| $tUs == 'Subadministrador')
                    <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            MEDIACIÓN
                        </div>
                    </li>
                @endif
                @if ($tUs == 'Capturista Mediacion' || $tUs == 'Administrador'|| $tUs == 'Subadministrador')
                    <li>
                        <a id="complaintsCollapse" class="nav-link px-3 sidebar-link" data-bs-toggle="collapse"
                            href="#complaints">
                            <span class="me-2"><i class="fas fa-archive"></i></span>
                            <span>Quejas</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="complaints">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{ route('citizen-complaints.index') }}" class="nav-link px-3 active">
                                        <span class="me-2" style="color:white"><i
                                                class="fas fa-clipboard"></i></span>
                                        <span>Ciudadania</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                    <hr class="dropdown-divider bg-light" style="margin-top:1em;margin-bottom:1em">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            Sesión
                        </div>
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                            <i class="fas fa-user"></i>
                            @if (Auth::check())
                                {{ Auth::user()->user }}
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                                </a>
                        </ul>
                    </li>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">

            @if (isset($alertType))
                @if ($alertType == 'success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertSuccess">
                        <i class="fas fa-check-circle"></i> {{ $msgAlert }}
                        <button type="button" class="btn-close" onclick="closeSuccess()"
                            aria-label="Close"></button>
                    </div>
                @endif
                @if ($alertType == 'error')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertError">
                        <i class="fas fa-exclamation-circle"></i> {{ $msgAlert }}
                        <button type="button" class="btn-close" onclick="closeError()" aria-label="Close"></button>
                    </div>
                @endif
                @if ($alertType == 'info')
                    <div class="alert alert-info alert-dismissible fade show" role="alert" id="alertInfo">
                        <i class="fas fa-info-circle"></i> {{ $msgAlert }}
                        <button type="button" class="btn-close" onclick="closeInfo()" aria-label="Close"></button>
                    </div>
                @endif
            @elseif(count($errors) > 0)
                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alertWarning">
                    <i class="fas fa-exclamation-circle"></i> Solucione las siguientes inconsistencia:
                    <button type="button" class="btn-close" onclick="closeWarning()" aria-label="Close"></button>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif

            @yield('content')
        </div>
    </main>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('select2-4.1.0-rc.0/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js'></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2({
                theme: "bootstrap-5",
            });
            $('.upper-case').keyup(function() {
                this.value = this.value.toUpperCase();
            });
            $('.mask-2-letters').mask('SS');
            $('.mask-3-digits').mask('000');
            $('.mask-4-digits').mask('0000');
            $('.mask-10-digits').mask('0000000000');
            $('.mask-23-digits').mask('00000000000000000000000');
            $('.mask-lng').mask("-099.0000000000000000");
            $('.mask-lat').mask("00.0000000000000000");
            $('.alpha-no-spaces').mask("A", {
                translation: {
                    "A": {
                        pattern: /[\w@\-.+]/,
                        recursive: true
                    }
                }
            });
        });

        function closeSuccess() {
            document.getElementById("alertSuccess").style.display = "none";
        }

        function closeError() {
            document.getElementById("alertError").style.display = "none";
        }

        function closeInfo() {
            document.getElementById("alertInfo").style.display = "none";
        }

			function closeWarning() {
				document.getElementById("alertWarning").style.display = "none";
			}
		</script>
		@yield('js-files')
    </body>
</html>
