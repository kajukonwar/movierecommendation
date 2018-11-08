
<!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="w3ls_footer_grid">
        <div class="col-md-6 w3ls_footer_grid_left">
          <div class="w3ls_footer_grid_left1">
            <h2>Subscribe to us</h2>
            <div class="w3ls_footer_grid_left1_pos">
              <form action="#" method="post">
                <input type="email" name="email" placeholder="Your email..." required="">
                <input type="submit" value="Send">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 w3ls_footer_grid_right">
          <a href="index.html"><h2>One<span>Movies</span></h2></a>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="col-md-5 w3ls_footer_grid1_left">
        <p>&copy; 2016 One Movies. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>
      <div class="col-md-7 w3ls_footer_grid1_right">
        <ul>
          <li>
            <a href="genres.html">Movies</a>
          </li>
          <li>
            <a href="faq.html">FAQ</a>
          </li>
          <li>
            <a href="horror.html">Action</a>
          </li>
          <li>
            <a href="genres.html">Adventure</a>
          </li>
          <li>
            <a href="comedy.html">Comedy</a>
          </li>
          <li>
            <a href="icons.html">Icons</a>
          </li>
          <li>
            <a href="contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/vendor/template/bootstrap.min.js'
)}}"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->
</body>
</html>