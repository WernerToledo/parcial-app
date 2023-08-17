@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? "{{ __('Show') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ventas:</strong>
                            {{ $pago->id_ventas }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pago->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pago->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $pago->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Cuota:</strong>
                            {{ $pago->monto_cuota }}
                        </div>
                        <div class="form-group">
                            <strong>Pago Cuota:</strong>
                            {{ $pago->pago_cuota }}
                        </div>
                        <div class="form-group">
                            <strong>Total Pagar:</strong>
                            {{ $pago->total_pagar }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
