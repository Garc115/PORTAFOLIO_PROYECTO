@extends('layouts.app')

@section('template_title')
    Create Fault
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row justify-content-center" style="margin-top:1em">
        <div class="col-10">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
                    <div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
                        Registro de descripción de faltas
                    </div>
                </div>
                <hr/>
                <div class="card-body" style="padding:0em 2em 2em 2em">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <a href="{{ route('faults.index') }}" style="cursor: pointer;text-decoration: none;color:darkslateblue;font-size:1.1em">
                                <strong>
                                    <i class="fas fa-arrow-left"></i> Volver
                                </strong>
                            </a>
                        </div>
                    </div>
                    <div class="row justify-content-center" >
                        <div class="col-12">
                        <form method="POST" action="{{ route('faults.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('fault.form')
                        </div>
                        <div class="col-12" align="right" style="margin-top:2em">
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
    </section>
@endsection

