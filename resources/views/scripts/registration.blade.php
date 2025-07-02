@extends('layout.accueil')

@section('body')
<body class="contain">
  
  <div class="padding">
    <div class="log-in">
    @if(session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
    @endif  
      <a class="navbar-brand d-flex justify-content-center" href="#">
        <img style="max-width:200px; " src="{{ asset('pictures/logo.png') }}" alt="logo">
      </a>
      <h3 class="text-center title_D">Inscrivez-vous maintenant</h3>
      <form action="{{route('registration.post')}}" method="POST">
        @csrf
          <div class="form-group" >
            <label class="form-label">Nom Complet</label>
            <input type="text" class="form-control mb-3" name="name" placeholder="Entrez votre nom">
          </div>
          <div class="form-group " >
            <label class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control mb-3" name="email" placeholder="Entrez votre email">
          </div>
          <div class="form-group " >
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control mb-3" name="password" placeholder="Entrez votre mot de passe">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn " id='btn-register'>Valider</button>
          </div>
        </form>
    </div>
  </div>
</body>
@endsection