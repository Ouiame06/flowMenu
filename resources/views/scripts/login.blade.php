@extends('layout.accueil')

@section('body')
<body class="contain">
  
  <div class="padding">
    <div class="log-in">
      <a class="navbar-brand d-flex justify-content-center" href="#">
        <img style="max-width:200px; " src="{{ asset('pictures/logo.png') }}" alt="logo">
      </a>
      <form action="{{route('login.post')}}" method="POST">
        @csrf
          <div class="form-group" >
            <label for="email">Adresse e-mail</label>
            <input type="mail" class="form-control mb-3" name="email" placeholder="Entrez votre email">
              @if($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
          </div>
          <div class="form-group " >
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control mb-3" name="password" placeholder="Entrez votre mot de passe">
              @if($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
              @endif
          </div>
        <a href="{{url('/registration')}}" style="color: #575757;">Rejoignez-nous maintenant !</a>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn" id='btn-register'>Se connecter</button>
        </div>
      </form>
    </div>
  </div>
</body>
@endsection