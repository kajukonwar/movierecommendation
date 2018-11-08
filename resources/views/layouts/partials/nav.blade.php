<!-- nav -->
  <div class="movies_nav">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <nav>
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Genres <b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                  <li>
                  <div class="col-sm-4">
                    <ul class="multi-column-dropdown">

                      @foreach($genres_global as $genre_global)
                          
                      <li><a href="{{url('movies/genre', [$genre_global->internal_name])}}">{{$genre_global->name}}</a></li>
                      
                      @endforeach
                      
                    </ul>
                  </div>
                  
                  <div class="clearfix"></div>
                  </li>
                </ul>
              </li>
              <li><a href="series.html">tv - series</a></li>
              <li><a href="news.html">news</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Country <b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                  <li>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <li><a href="genres.html">Asia</a></li>
                        <li><a href="genres.html">France</a></li>
                        <li><a href="genres.html">Taiwan</a></li>
                        <li><a href="genres.html">United States</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <li><a href="genres.html">China</a></li>
                        <li><a href="genres.html">HongCong</a></li>
                        <li><a href="genres.html">Japan</a></li>
                        <li><a href="genres.html">Thailand</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <li><a href="genres.html">Euro</a></li>
                        <li><a href="genres.html">India</a></li>
                        <li><a href="genres.html">Korea</a></li>
                        <li><a href="genres.html">United Kingdom</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </li>
              <li><a href="short-codes.html">Short Codes</a></li>
              <li><a href="list.html">A - z list</a></li>
            </ul>
          </nav>
        </div>
      </nav>  
    </div>
  </div>
<!-- //nav -->