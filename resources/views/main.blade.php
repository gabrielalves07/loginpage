@extends('layout')

@section('titulo', 'Orbii')

@section('conteudo')

    @push('style')
        <link rel="stylesheet" href="../resources/css/app.css">
        <link rel="stylesheet" href="../resources/css/medias.css" media="screen">
    @endpush

    @if ($mensagem = Session::get('erro'))
        <div class="alert alert-danger" role="alert" style="position: absolute; top: 0; right: 0; margin: 10px;">
            {{ $mensagem }}
      </div>
    @endif

    <div class="section">
        @component('components/login')
        @endcomponent

        @component('components/cadastro')
        @endcomponent
    </div>

    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="../resources/js/main.js"></script>
    @endpush

@endsection
