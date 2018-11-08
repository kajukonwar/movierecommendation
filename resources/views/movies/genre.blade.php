@include('layouts/partials/header')
@include('layouts/partials/nav')

<div class="general_social_icons">
  <nav class="social">
    <ul>
      <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
      <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
      <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
      <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>          
    </ul>
  </nav>
</div>
<!-- /w3l-medile-movies-grids -->
  <div class="general-agileits-w3l">
    <div class="w3l-medile-movies-grids">

        <!-- /movie-browse-agile -->
        
              <div class="movie-browse-agile">
               <!--/browse-agile-w3ls -->
            <div class="browse-agile-w3ls general-w3ls">
                <div class="tittle-head">
                  <h4 class="latest-text">Family Movies </h4>
                  <div class="container">
                    <div class="agileits-single-top">
                      <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Genres</li>
                      </ol>
                    </div>
                  </div>
                </div>
                     <div class="container">
              <div class="browse-inner">
                @foreach ($movies as $movie)
                 <div class="col-md-2 w3l-movie-gride-agile">
                     <a href="single.html" class="hvr-shutter-out-horizontal"><img src="{{$movie->poster}}" title="album-name" alt=" " class="img-responsive"/>
                       <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                  </a>
                    <div class="mid-1">
                    <div class="w3l-movie-text">
                      <h6><a href="single.html">{{$movie->title}}</a></h6>             
                    </div>
                    <div class="mid-2">
                    
                      <p>{{$movie->release_year}}</p>
                      <div class="block-stars">
                        <ul class="w3l-ratings">
                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                              
                    
                        </ul>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                      
                  </div>
                    <div class="ribben two">
                    <p>NEW</p>
                  </div>  
                  </div>
                  @endforeach

                  

                      <div class="clearfix"> </div>
                </div>
              
             
                </div>
            </div>
        <!--//browse-agile-w3ls -->
          
          </div>
            <!-- //movie-browse-agile -->
           <!--body wrapper start-->
        <!--body wrapper start-->
           
    </div>
  <!-- //w3l-medile-movies-grids -->
  </div>

@include('layouts/partials/footer')