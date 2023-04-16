@extends('layouts.app')

@section('template_title')
    {{ $mail->name ?? "{{ __('Show') Mail" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mails.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Destinatario:</strong>
                            {{ $mail->destinatario }}
                        </div>
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $mail->asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Mensaje:</strong>
                            {{ $mail->mensaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
