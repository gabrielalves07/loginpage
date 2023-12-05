<div class="campologin">
    <div class="welcome">
        <div>
            <img src="../resources/img/orbii.png" alt="logo da empresa">
            <p>Orbii</p>
        </div>
        <h1>Faça login com sua conta</h1>
        <p>Bem-vindo de volta! Selecione um método para fazer login:</p>
    </div>

    <div class="metodos">
        <a href="#" class="ccgoogle">
            <div>
                <img src="../resources/img/google.png">
            </div>
            <p>Google</p>
        </a>
        <a href="#" class="ccface">
            <div>
                <img src="../resources/img/facebook.png">
            </div>
            <p>Facebook</p>
        </a>
    </div>

    <p style="text-align: center; margin: 10px 0; font-size: 12px;">ou continue com email</p>

    <form id="formlogin" method="POST" action="{{ route('login.auth') }}">
        @csrf
        <div class="input-group mb-3 email">
            <div class="iconemail">
                <i class="material-icons">email</i>
            </div>
            <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3 pass">
            <div class="iconpass">
                <i class="material-icons">lock</i>
            </div>
            <input type="password"  name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
        </div>
        <div class="form-group form-check">
            <div>
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">me lembre</label>
            </div>
            <a href="#" class="esqueceusenha">Esqueceu a senha?</a>
        </div>
        <button type="submit" class="btn btn-block btn-purple">Fazer login</button>
        <p class="ntconta">Não tem uma conta? <a href="#" class="paracadastro">Crie uma conta</a></p>
      </form>
</div>
