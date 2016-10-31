<!---------------------HEADER ------------------- -->
<section class="top-header">
    

    <div class="container">
        <div class="row top-sec">
        <div class="col-md-4 col-sm-3 col-xs-12"><a href="/" title="" class="logo"><img src="/assets/images/logo.png" alt="" class="img-responsive" /></a></div>
            <div class="col-md-8 col-sm-9 col-xs-12 mt12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span> </div>
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
        <div class="navigation-bar">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="collapse navbar-collapse plr0" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            @if(count($catagories)>0)
                            @foreach ($catagories as $cat)
                            <li><a href="{{url('categoty/'.$cat->_id.'')}}">{{ $cat->_id }}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>






    <div class="google-add v-add-none-767"><img src="assets/images/g-banner.jpg" alt="" class="img-responsive" /></div>
    <div class="header-marquee">
      <div class="container">
          <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="8" direction="left">
              <a class="item link" href="#">
                  Amazon Music Unlimited debuts with discounts for Prime members, cheap embers, cheap “Echo-only” plan. 
              </a>
              <a class="item link" href="#">
                  Amazon Music Unlimited debuts with discounts for Prime members, cheap embers, cheap “Echo-only” plan. 
              </a>
              <a class="item link" href="#">
                  Amazon Music Unlimited debuts with discounts for Prime members, cheap embers, cheap “Echo-only” plan. 
              </a>
          </marquee>              
      </div>
  </div>
</section>
<!-------------------END HEADER---------------- -->