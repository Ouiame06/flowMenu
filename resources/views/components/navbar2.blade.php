<header>
<nav class="navbar navbar-expand-lg top fixed" >
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img  src="{{ asset('pictures/logo.png') }}" alt="logo" class="logo"> <strong class="logoTitle">FlowMenu</strong>
    </a>    
    <div class="fixed">
      <button class="btn mx-2" id='btn-register'>
        <a href="{{ url('/logout') }}" class="btn-register">
          <strong>Log out</strong>
        </a>
      </button>
    </div>
  </div>
</nav>
</header>