<div class="box box-info padding-1">

        <div class="box-body">
            <div class="form-group" >
                {{ Form::label('destinatario', 'Mail') }}
                {{ Form::email('destinatario', null, ['class' => 'form-control' . ($errors->has('destinatario') ? ' is-invalid' : ''), 'placeholder' => 'Destinatario', 'required' => 'required']) }}
                {!! $errors->first('destinatario', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('asunto', 'Subject') }}
                {{ Form::text('asunto', null, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto', 'required' => 'required']) }}
                {!! $errors->first('asunto', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('mensaje', 'Message') }}
                {{ Form::textarea('mensaje', null, ['class' => 'form-control' . ($errors->has('mensaje') ? ' is-invalid' : ''), 'placeholder' => 'Mensaje', 'rows' => 3, 'required' => 'required']) }}
                {!! $errors->first('mensaje', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('attached', 'Attached') }}
                {{ Form::file('attached', ['class' => 'form-control']) }}
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>

</div>
