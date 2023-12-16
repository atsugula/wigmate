<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('id_categoria',__('Category')) }}
                    {{ Form::select('id_categoria', $categorias, $producto->id_categoria, ['class' => 'form-control select2' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => __('Select the category')]) }}
                    {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('id_proveedor',__('Provider')) }}
                    {{ Form::select('id_proveedor', $proveedores, $producto->id_proveedor, ['class' => 'form-control select2' . ($errors->has('id_proveedor') ? ' is-invalid' : ''), 'placeholder' => __('Select the provider')]) }}
                    {!! $errors->first('id_proveedor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('codigo',__('Code')) }}
                    {{ Form::text('codigo', $producto->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''),'readonly', 'placeholder' => __('Code')]) }}
                    {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('nombre',__('Name')) }}
                    {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => __('Name')]) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="form-group">
                    {{ Form::label('marca',__('Branch')) }}
                    {{ Form::text('marca', $producto->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => __('Branch')]) }}
                    {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    {{ Form::label('estanteria',__('Shelf')) }}
                    {{ Form::text('estanteria', $producto->estanteria, ['class' => 'form-control' . ($errors->has('estanteria') ? ' is-invalid' : ''), 'placeholder' => __('Shelf')]) }}
                    {!! $errors->first('estanteria', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    {{ Form::label('nivel',__('Level')) }}
                    {{ Form::text('nivel', $producto->nivel, ['class' => 'form-control' . ($errors->has('nivel') ? ' is-invalid' : ''), 'placeholder' => __('Level')]) }}
                    {!! $errors->first('nivel', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="form-group">
                    {{ Form::label('precio_costo',__('Cost price')) }}
                    {{ Form::number('precio_costo', $producto->precio_costo, ['class' => 'form-control pCosto' . ($errors->has('precio_costo') ? ' is-invalid' : ''), 'min'=>'0','placeholder' => __('Cost price')]) }}
                    {!! $errors->first('precio_costo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    {{ Form::label('porcentaje',__('Porcentage')) }}
                    {{ Form::number('porcentaje', $producto->porcentaje, ['class' => 'form-control porcentaje' . ($errors->has('porcentaje') ? ' is-invalid' : ''), 'min'=>'0', 'max'=>'1000','onkeyup'=>'if(parseInt(this.value)>1000){this.value=1000; return false;}','onmousedown'=>'calcularGanancia()','placeholder' => __('Porcentage')]) }}
                    {!! $errors->first('porcentaje', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    {{ Form::label('precio_venta',__('Sale price')) }}
                    {{ Form::number('precio_venta', $producto->precio_venta, ['class' => 'form-control pVenta' . ($errors->has('precio_venta') ? ' is-invalid' : ''), 'min'=>'0','placeholder' => __('Sale price')]) }}
                    {!! $errors->first('precio_venta', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="form-group">
                    {{ Form::label('stock',__('Stock')) }}
                    {{ Form::number('stock', $producto->stock, ['class' => 'form-control stock' . ($errors->has('stock') ? ' is-invalid' : ''), 'min'=>'0','placeholder' => __('Stock')]) }}
                    {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('observaciones',__('Observations')) }}
            {{ Form::textArea('observaciones', $producto->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => __('Observations')]) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    @include('layouts.btn-submit')
</div>
