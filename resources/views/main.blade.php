@extends('layout')

@section('titulo', 'Orbii')

@section('conteudo')

    @push('style')
        <link rel="stylesheet" href="../resources/css/app.css">
        <link rel="stylesheet" href="../resources/css/medias.css" media="screen">
    @endpush

    @if ($errors->any())
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded mr-2" alt="...">
          <strong class="mr-auto">Bootstrap</strong>
          <small>11 mins ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
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
        <script src="../resources/js/validate.js"></script>
        <script src="../resources/js/toasts.js"></script>
    @endpush

@endsection
