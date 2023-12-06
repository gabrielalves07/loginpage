@extends('layout')

@section('titulo', 'Orbii')

@push('style')
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="stylesheet" href="../resources/css/medias.css" media="screen">
@endpush

@section('conteudo')

    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: absolute; top: 0; right: 0; margin: 10px;">
                    <strong>Erro de validação!</strong> {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
              </div>
            @endforeach
    @endif

    <div class="section">
        @component('components/login')
        @endcomponent

        @component('components/cadastro')
        @endcomponent
    </div>

    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="../resources/js/validate.js"></script>
    @endpush

@endsection
