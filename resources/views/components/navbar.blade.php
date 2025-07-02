<header>
<nav class="navbar navbar-expand-lg top fixed" >
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img  src="{{ asset('pictures/logo.png') }}" alt="logo" class="logo"> <strong class="logoTitle">FlowMenu</strong>
    </a>    
    <div class="fixed">
      <button class="btn mx-2" id='btn-login'>
        <a href="{{ url('/login') }}" class="btn-login">
          <strong>Login</strong>
        </a>
      </button>
      <button class="btn mx-2" id='btn-register'>
        <a href="{{ url('/registration') }}" class="btn-register">
          <strong>Start now</strong>
        </a>
      </button>
    </div>
  </div>
</nav>
</header>