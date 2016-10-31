<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>::Techrevel:: @section('title')</title>
    @section('meta_keywords')
    <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
    <meta name="author" content="Jon Doe"/>
    @show @section('meta_description')
    <meta name="description"
    content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
    
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="/assets/stylesheets/bootstrap.css" rel="stylesheet">
    <link href="/assets/stylesheets/style.css" rel="stylesheet">
    <link href="/assets/stylesheets/font-awesome/font-awesome.css" rel="stylesheet">
    
    <link href="/assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/assets/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="/assets/owl-carousel/owl.transitions.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
      @include('partials.header')

      @yield('content')

      @include('partials.footer')
      <script src="/assets/javascripts/jquery.min.js"></script>
      <script src="/assets/javascripts/bootstrap.min.js"></script>
      <script src="/assets/owl-carousel/owl.carousel.min.js"></script>
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