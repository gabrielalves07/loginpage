@extends('layout')

@section('titulo', 'conteudo')

@section('conteudo')
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#" style="color: #6A4EA6;">outro</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color: #6A4EA6;">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Logout</a>
        </li>
    </ul>
    <div style="margin: 0 auto; max-width: 700px; padding: 40px; 20px;">
        <h1>Lorem ipsum dolor sit amet </h1>
        <p style="text-align: justify; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minima ab ad quae architecto incidunt illum ducimus consequuntur aperiam vel, quo dicta dolor repudiandae, quos repellendus necessitatibus atque molestiae laboriosam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni eius nostrum placeat consequuntur! Debitis, fugit. Porro aliquid ad, placeat accusantium, at eaque nisi maxime sapiente modi recusandae totam inventore esse.</p>
        <br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dolor, sed itaque odio perspiciatis voluptate soluta eos id tempora eveniet, aspernatur ex corrupti rem nemo ducimus hic architecto, dicta culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur provident facere possimus quas recusandae ratione dignissimos architecto, iure quidem esse distinctio atque sed magnam eum harum quod a natus!</p>
        <br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dolor, sed itaque odio perspiciatis voluptate soluta eos id tempora eveniet, aspernatur ex corrupti rem nemo ducimus hic architecto, dicta culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur provident facere possimus quas recusandae ratione dignissimos architecto, iure quidem esse distinctio atque sed magnam eum harum quod a natus!</p>
    </div>
@endsection
