@extends('layout')

@section('titulo', 'Sign In')

@push('style')
    <link rel="stylesheet" href="../resources/css/app.css">
@endpush

@section('conteudo')

    <div id="section">
        <div id="campologin">
            <div class="welcome">
                <div>
                    <img src="../resources/img/orbii.png" alt="logo da empresa">
                    <p>Orbii</p>
                </div>
                <h1>Faça login com sua conta</h1>
                <p>Bem-vindo de volta! selecione um método de login</p>
            </div>

            <form id="form">
                <a href="#" class="ccgoogle">
                    <div>
                        <img src="../resources/img/google.png">
                    </div>
                    <p>Continue com o Google</p>
                </a>

                <p style="text-align: center; margin: 14px 0; font-size: 12px;">ou continue com email</p>
                <!-- Imput Email -->
                <div class="input-group mb-3 email">
                    <div class="iconemail">
                        <i class="material-icons">email</i>
                    </div>
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                </div>
                <!-- Imput Password -->
                <div class="input-group mb-3 pass">
                    <div class="iconpass">
                        <i class="material-icons">lock</i>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                  </div>
                <div class="form-group form-check">
                    <div>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">me lembre</label>
                    </div>
                    <a href="#" class="esqueceusenha">Esqueceu a senha?</a>
                </div>
                <button type="submit" class="btn btn-block btn-purple">Log in</button>
                <p class="ntconta">Não tem uma conta? <a href="#">Crie uma conta</a></p>
              </form>
        </div>
    </div>

    @push('script')
    <script src="../resources/js/signin.js"></script>
    @endpush

@endsection
