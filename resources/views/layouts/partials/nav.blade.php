<div id="movie-nav">
  <div class="container container h-100 d-flex align-items-center">
   
    <nav class="navbar navbar-expand-lg navbar-light h-100">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse h-100" id="navbarNav">
        <ul class="nav nav-pills nav-fill h-100">
          <li class="nav-item active d-flex align-items-center">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown d-flex align-items-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Genres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Comedy</a>
              <a class="dropdown-item" href="#">Romance</a>
            </div>
          </li>
          
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link" href="#">A-Z list</a>
          </li>
          @if (Route::has('login'))
            @auth
            <li class="nav-item d-flex align-items-center">
              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            @else
             <li class="nav-item d-flex align-items-center">
              <a class="nav-link" href="{{url('/login')}}">Sign In</a>
            </li>
            @endauth
           @endif

          <li class="nav-item dropdown d-flex   align-items-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Algorithm
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Pearson</a>
              <a class="dropdown-item" href="#">Cosine</a>
            </div>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>