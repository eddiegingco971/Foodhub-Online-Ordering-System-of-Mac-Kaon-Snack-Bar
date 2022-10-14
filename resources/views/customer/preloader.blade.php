<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTELogo" height="200" width="200">

    @if (session('status'))
        <div class="alert alert-warning m-2" role="alert">
            {{ session('status') }}
        </div>
    @endif
  </div>