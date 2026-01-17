@extends('layouts.app')

@section('template_title')
    {{ $fault->name ?? 'Show Fault' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center" style="margin-top:1em">
            <div class="col-10">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
                        <div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
                            Visualización de descripción de faltas
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
                    <br> 
                    <div class="row justify-content-start" style="margin-top:0em">
                        <div class="col-12">
                            <label class="form-label">
                            <strong>Descripción:</strong>
                        </label>
                        <p>
                            {{ $fault->description }}
                        </p>
                        </div>
                        
                        <div class="row justify-content-start" style="margin-top:0em">
                            <div class="col-12">
                                <label class="form-label">
                            <strong>Clasificación:</strong>
                        </label>
                        <p>
                            {{ $fault->rating }}
                        </p>
                        </div>
                        <div class="row justify-content-start" style="margin-top:0em">
                            <div class="col-12">
                                <label class="form-label">
                            <strong>Categoría:</strong>
                        </label>
                        <p>
                            {{ $fault->faultCategory->name }}
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</section>
@endsection

