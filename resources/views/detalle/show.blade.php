@extends('layouts.app')

@section('template_title')
    {{ $detalle->name ?? "{{ __('Show') Detalle" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ventas:</strong>
                            {{ $detalle->id_ventas }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $detalle->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalle->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $detalle->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Total Pagar:</strong>
                            {{ $detalle->total_pagar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
