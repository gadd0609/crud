@extends('layouts.app')

@section('template_title')
    Mail
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mail') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('mails.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Destinatario</th>
										<th>Asunto</th>
										<th>Mensaje</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mails as $mail)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $mail->destinatario }}</td>
											<td>{{ $mail->asunto }}</td>
											<td>{{ $mail->mensaje }}</td>

                                            <td>
                                                <form action="{{ route('mails.destroy',$mail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mails.show',$mail->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mails.edit',$mail->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>

                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $mails->links() !!}
            </div>
        </div>
    </div>
@endsection
