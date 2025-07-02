@extends('layout.accueil')
@section('body')
    <body class="contain">
        <div class="row">
            <div class="col">
                <h1 class="h1-home">FlowMenu</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam laboriosam, illum blanditiis repellat amet voluptates veritatis debitis quas in non pariatur eius corrupti eaque autem, dolore enim quibusdam reprehenderit quidem.</p>
                <button class="btn mx-2" id='btn-register'> 
                    <a href="{{ url('/registration') }}" class="btn-register">
                        <strong><i class="bi bi-arrow-up-right"></i> Get started </strong>
                    </a>
                </button>
            </div>
            <div class="col">
                <div class="menu">
                    <img src="{{ asset('menu/beige menu.png') }}" alt="Menu_1">
                    <img src="{{ asset('menu/beige menu.png') }}" alt="Menu_2">
                    <img src="{{ asset('menu/beige menu.png') }}" alt="Menu_3">
                    <img src="{{ asset('menu/beige menu.png') }}" alt="Menu_4">
                </div>
            </div>
        </div>
    </body>
@endsection