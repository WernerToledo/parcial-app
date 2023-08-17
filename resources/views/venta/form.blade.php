<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_autos') }}
            {{ Form::text('id_autos', $venta->id_autos, ['class' => 'form-control' . ($errors->has('id_autos') ? ' is-invalid' : ''), 'placeholder' => 'Id Autos']) }}
            {!! $errors->first('id_autos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_clientes') }}
            {{ Form::text('id_clientes', $venta->id_clientes, ['class' => 'form-control' . ($errors->has('id_clientes') ? ' is-invalid' : ''), 'placeholder' => 'Id Clientes']) }}
            {!! $errors->first('id_clientes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_venta') }}
            {{ Form::text('fecha_venta', $venta->fecha_venta, ['class' => 'form-control' . ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venta']) }}
            {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_pago') }}
            {{ Form::text('tipo_pago', $venta->tipo_pago, ['class' => 'form-control' . ($errors->has('tipo_pago') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Pago']) }}
            {!! $errors->first('tipo_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>