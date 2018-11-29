@extends('master')

@section('css')
<style type="text/css">
  #movie-nav {
    background-color: #FF8D1B;
    height: 80px;
  }

  #movie-nav .navbar {
    padding : 0;
  }
  #movie-nav .nav-item {
    border-right: 1px dotted #fff;
  }
  #movie-nav .nav-item:hover {
    background-color : #212121;
  }
  #movie-nav .nav-item.active {
    background-color : #212121;
    color : #fff;
  }

  #movie-nav .nav-link{
    
    color : #fff;
  }
  
  .mix-btn {
    background-color: #f3f1f1;
    color : #333;
  }

  .mix-btn:hover, .mix-btn:active {
    background-color: #FF8D1B;
    color: #fff;
  }
  
  .mix-btn:focus {
    box-shadow: none;
  }

  #footer {
      padding: 60px 0;
      background: #343a40 !important;
  }

  #footer .section-title {
      text-align: center;
      color: #007b5e;
      margin-bottom: 50px;
      text-transform: uppercase;
  }

  #footer h5{
      padding-left: 10px;
      border-left: 3px solid #eeeeee;
      padding-bottom: 6px;
      margin-bottom: 20px;
      color:#ffffff;
  }
  #footer a {
      color: #ffffff;
      text-decoration: none !important;
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
  }
  #footer ul.social li{
      padding: 3px 0;
  }
  #footer ul.social li a i {
      margin-right: 5px;
      font-size:25px;
      -webkit-transition: .5s all ease;
      -moz-transition: .5s all ease;
      transition: .5s all ease;
  }
  #footer ul.social li:hover a i {
      font-size:30px;
      margin-top:-10px;
  }
  #footer ul.social li a,
  #footer ul.quick-links li a{
      color:#ffffff;
  }
  #footer ul.social li a:hover{
      color:#eeeeee;
  }
  #footer ul.quick-links li{
      padding: 3px 0;
      -webkit-transition: .5s all ease;
      -moz-transition: .5s all ease;
      transition: .5s all ease;
  }
  #footer ul.quick-links li:hover{
      padding: 3px 0;
      margin-left:5px;
      font-weight:700;
  }
  #footer ul.quick-links li a i{
      margin-right: 5px;
  }
  #footer ul.quick-links li:hover a i {
      font-weight: 700;
  }

  .hvr-radial-out {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    position: relative;
    overflow: hidden;
    background: #e1e1e1;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
  }
  .hvr-radial-out:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #2098D1;
    border-radius: 100%;
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
  }
  .hvr-radial-out:hover, .hvr-radial-out:focus, .hvr-radial-out:active {
    color: white;
  }
  .hvr-radial-out:hover:before, .hvr-radial-out:focus:before, .hvr-radial-out:active:before {
    -webkit-transform: scale(2);
    transform: scale(2);
  }

  .owl-carousel .owl-item img {
      width: auto;

  }

  .nav-pills .nav-link.active, .nav-pills .show>.nav-link {

      background-color: #1b1b1b;
  }

</style>
@endsection

@section('content')
<div class="container-fluid px-0">
  <!-- Set up your HTML -->
  <div class="owl-carousel owl-theme" id="owl-carousel">
    <div class="item"> <img src="{{asset('images/2.jpg')}}"></div>
    <div class="item"><img src="{{asset('images/3.jpg')}}"></div>
    <div class="item"><img src="{{asset('images/4.jpg')}}"></div>
    <div class="item"><img src="{{asset('images/5.jpg')}}"></div>
  </div>
</div>

<section class="px-2">
  <div class="container-fluid">
    <h2 class="text-uppercase">Recommended Movies</h2>
  </div>
  <div class="container-fluid">
    <div class="owl-carousel owl-theme" id="owl-recommendations">
      <div class="item ">
        <div class="card">
          <figure class="imghvr-shutter-in-horiz">
            <img src="{{asset('images/m16.jpg')}}" class="card-img-top" alt="Card image cap">
            <figcaption>
               Hover Content
            </figcaption>
          </figure>

          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <select class="movie-ratings">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <figure class="imghvr-shutter-in-horiz">

              <img src="{{asset('images/m17.jpg')}}" alt="img01">
          
            <figcaption>
              <h3>Camera</h3>
              <span>Jacob Cummings</span>
              <a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
            </figcaption>
          </figure>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="card">
          <img class="card-img-top" src="{{asset('images/m17.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="px-2">
  <div class="container-fluid">
    <div class="controls mb-4">
        <button type="button" class="control btn mix-btn mixitup-control-active" data-filter=".popular">Most Popular</button>
        <button type="button" class="control btn mix-btn" data-filter=".most-viewed">Most Viewed</button>
    </div>

    <div  id="mix-container">
          <div class="row mix popular">
            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m15.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m16.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m17.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="row mix most-viewed">
            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m15.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m16.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m17.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <img class="card-img-top" src="{{asset('images/m18.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                 
                </div>
              </div>
            </div>
          </div>
     </div>
  </div>
</section>
@endsection

@section('javascript')
<script type="text/javascript">
  $(document).ready(function(){

    $('#owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
           
        }
    });


    $('#owl-recommendations').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        center : true,
        responsive:{
            0:{
                items:6
            },
           
        }
    });

  });

  var containerEl = document.querySelector('#mix-container');

  var mixer = mixitup(containerEl);

  $(function() {
        $('.movie-ratings').barrating({
          theme: 'fontawesome-stars'
        });
     });

</script>
@endsection

