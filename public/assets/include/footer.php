<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-widget">
                        <div class="educa-info">
                            <img src="assets/images/logo-white.png" alt="" class="img-responsive" />
                            <div class="line-dec"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <div class="text-button">
                                <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="footer-widget res-mt50-991">
                        <div class="featured-links">
                            <h2>featured links</h2>
                            <div class="line-dec"></div>
                            <div class="row">
                            	<div class="col-md-4 col-sm-4 col-xs-12">
                                	<ul>
                                          <li><a href="#">News</a></li>
                                          <li><a href="#">Gadgets</a></li>
                                          <li><a href="#">Reviews</a></li>
                                          <li><a href="#">Science</a></li>
                                          <li><a href="#">Social</a></li>
                                          <li><a href="#">Videos</a></li>
                                          <li><a href="#">Contact Us</a></li>
                                      </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                	<ul>
                                    	  <li><a href="#">Advertise</a></li>
                                          <li><a href="#">Send Us A Tip</a></li>
                                          <li><a href="#">Dummy text</a></li>
                                          <li><a href="#">Dummy text</a></li>
                                          <li><a href="#">Dummy text</a></li>
                                          <li><a href="#">Dummy text</a></li>
                                          <li><a href="#">Dummy text</a></li>
                                      </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                	<ul>
                                      <li><a href="#">Dummy text</a></li>
                                      <li><a href="#">Dummy text</a></li>
                                      <li><a href="#">Dummy text</a></li>
                                      <li><a href="#">Dummy text</a></li>
                                      <li><a href="#">Dummy text</a></li>
                                      <li><a href="#">Dummy text</a></li>
                                      <li><a href="#">Dummy text</a></li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-widget res-mt50-991">
                        <div class="newsletters">
                            <h2>Subscribe</h2>
                            <div class="line-dec"></div>
                            <p>Latest headlines delivered to you daily</p>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter Email Address">
                              <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Subscribe</button>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-menu">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="copyright-text">
                                    <p>© 2016 AOL Inc. All rights reserved. </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <ul class="social_icons">
                                    <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
                                    <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="linkin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="gPlus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>-->
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    

    <script src="assets/javascripts/jquery.min.js"></script>
    <script src="assets/javascripts/bootstrap.min.js"></script>
    <script src="assets/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {
		  $("#video-carousel").owlCarousel({
			navigation : true,
			items : 4
		  });
		  
		  /* Replace all SVG images with inline SVG*/
			jQuery('img.svg').each(function(){
				var $img = jQuery(this);
				var imgID = $img.attr('id');
				var imgClass = $img.attr('class');
				var imgURL = $img.attr('src');
	
				jQuery.get(imgURL, function(data) {
					// Get the SVG tag, ignore the rest
					var $svg = jQuery(data).find('svg');
	
					// Add replaced image's ID to the new SVG
					if(typeof imgID !== 'undefined') {
						$svg = $svg.attr('id', imgID);
					}
					// Add replaced image's classes to the new SVG
					if(typeof imgClass !== 'undefined') {
						$svg = $svg.attr('class', imgClass+' replaced-svg');
					}
	
					// Remove any invalid XML tags as per http://validator.w3.org
					$svg = $svg.removeAttr('xmlns:a');
	
					// Replace image with new SVG
					$img.replaceWith($svg);
	
				}, 'xml');
	
			});
		});
	</script>
  </body>
</html>