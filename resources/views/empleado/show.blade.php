@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? "{{ __('Show') Empleado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $empleado->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $empleado->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Contratacion:</strong>
                            {{ $empleado->fecha_contratacion }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $empleado->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            {{ $empleado->salario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
