@extends('../layout')

@section('titulo', 'conteudo')

@section('conteudo')

</div>
    <ul class="nav nav-tabs justify-content-end" style="background-color: #6A4EA6; padding: 3px;">
        <li class="nav-item">
            <a class="nav-link disabled" href="#" style="color: #fff;">{{ auth()->user()->name }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('login.logout') }}" class="nav-link" style="color: #fff;">Sair</a>
        </li>
    </ul>
    <div style="margin: 0 auto; max-width: 700px; padding: 40px; 20px;">
        <h1>Lorem ipsum dolor sit amet </h1>
        <p style="text-align: justify; margin-top: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque minima ab ad quae architecto incidunt illum ducimus consequuntur aperiam vel, quo dicta dolor repudiandae, quos repellendus necessitatibus atque molestiae laboriosam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni eius nostrum placeat consequuntur! Debitis, fugit. Porro aliquid ad, placeat accusantium, at eaque nisi maxime sapiente modi recusandae totam inventore esse.</p>
        <p style="text-align: justify; margin-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dolor, sed itaque odio perspiciatis voluptate soluta eos id tempora eveniet, aspernatur ex corrupti rem nemo ducimus hic architecto, dicta culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur provident facere possimus quas recusandae ratione dignissimos architecto, iure quidem esse distinctio atque sed magnam eum harum quod a natus!</p>
        <h2>1. Lorem ipsum dolor</h2>
        <p style="text-align: justify; margin-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dolor, sed itaque odio perspiciatis voluptate soluta eos id tempora eveniet, aspernatur ex corrupti rem nemo ducimus hic architecto, dicta culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur provident facere possimus quas recusandae ratione dignissimos architecto, iure quidem esse distinctio atque sed magnam eum harum quod a natus!</p>
        <p style="text-align: justify; margin-top: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum dolor, sed itaque odio perspiciatis voluptate soluta eos id tempora eveniet, aspernatur ex corrupti rem nemo ducimus hic architecto, dicta culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur provident facere possimus quas recusandae ratione dignissimos architecto, iure quidem esse distinctio atque sed magnam eum harum quod a natus!</p>
    </div>
@endsection
