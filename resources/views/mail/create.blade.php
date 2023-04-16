@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Mail
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Mail</span>
                    </div>
                    <div class="card-body">
                        <form id="mail-form" method="POST" action="{{ route('mails.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('mail.form')

                            <div class="form-group">

                                <button type="button" class="btn btn-secondary" onclick="setSendMailAction()">{{ __('Send') }} Mail</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    function setSendMailAction() {
        var form = document.getElementById('mail-form');
        form.action = "{{ route('send-mail') }}";
        form.submit();
    }
</script>
