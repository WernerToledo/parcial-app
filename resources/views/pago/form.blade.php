<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ventas') }}
            {{ Form::text('id_ventas', $pago->id_ventas, ['class' => 'form-control' . ($errors->has('id_ventas') ? ' is-invalid' : ''), 'placeholder' => 'Id Ventas']) }}
            {!! $errors->first('id_ventas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $pago->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $pago->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descuento') }}
            {{ Form::text('descuento', $pago->descuento, ['class' => 'form-control' . ($errors->has('descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_cuota') }}
            {{ Form::text('monto_cuota', $pago->monto_cuota, ['class' => 'form-control' . ($errors->has('monto_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Monto Cuota']) }}
            {!! $errors->first('monto_cuota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pago_cuota') }}
            {{ Form::text('pago_cuota', $pago->pago_cuota, ['class' => 'form-control' . ($errors->has('pago_cuota') ? ' is-invalid' : ''), 'placeholder' => 'Pago Cuota']) }}
            {!! $errors->first('pago_cuota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_pagar') }}
            {{ Form::text('total_pagar', $pago->total_pagar, ['class' => 'form-control' . ($errors->has('total_pagar') ? ' is-invalid' : ''), 'placeholder' => 'Total Pagar']) }}
            {!! $errors->first('total_pagar', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>