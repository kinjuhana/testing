<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
<body id="lighy">
        <nav class="navbar navbar-inverse navbar-static-top">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbars" aria-expanded="false" aria-controls="navbars">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="/" class="navbar-brand logo"><img src="/images/logo.png" width="50" class="logo" title="Watch Full Movies Online Free | <?php echo config('sitename') ?>" alt="Watch Full Movies Online Free | <?php echo config('sitename') ?>"></a></h1>
                </div>
                <div id="navbars" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-video-camera"></i> Movies <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeIn" role="menu">
                            <div class="col-md-6">
                            <li><a title="Now Playing Movies" href="/movies/playing/">Now Playing</a></li>
                            <li><a title="Popular Movies" href="/movies/popular/">Popular</a></li>
                            </div>
                            <div class="col-md-6">
                            <li><a title="Upcoming Movies" href="/movies/upcoming/">Upcoming</a></li>
                            <li><a title="Top Rated Movies" href="/movies/toprated/">Top Rated</a></li>
                            </div>
                        </ul>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-television"></i> TV Shows <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeIn" role="menu">
                        <li><a title="Airing TV Series" href="/movies/tv-airing/">Airing TV Series</a></li>
                        <li><a title="Popular TV Series" href="/movies/tv-popular/">Popular TV Series</a></li>
                        <li><a title="On the Air TV Series" href="/movies/tv-ontheair/">On the Air TV Series</a></li>
                        </ul>
                        </li>

                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open-o"></i> Genres <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeIn" role="menu">
                                <div class="col-md-6">
                                <li><a title="Action Movies" href="/genre/action/28/">Action</a></li>
                                <li><a title="Adventure Movies" href="/genre/adventure/12/">Adventure</a></li>
                                <li><a title="Animation Movies" href="/genre/animation/16/">Animation</a></li>
                                <li><a title="Comedy Movies" href="/genre/comedy/35/">Comedy</a></li>
                                <li><a title="Crime Movies" href="/genre/crime/80/">Crime</a></li>
                                <li><a title="Documentary Movies" href="/genre/documentary/99/">Documentary</a></li>
                                <li><a title="Drama Movies" href="/genre/drama/18/">Drama</a></li>
                                <li><a title="Family Movies" href="/genre/family/10751/">Family</a></li>
                                <li><a title="Fantasy Movies" href="/genre/fantasy/14/">Fantasy</a></li>
                                <li><a title="History Movies" href="/genre/history/36/">History</a></li>
                                </div>
                                <div class="col-md-6">
                                <li><a title="Horror Movies" href="/genre/horror/27/">Horror</a></li>
                                <li><a title="Music Movies" href="/genre/music/10402/">Music</a></li>
                                <li><a title="Mystery Movies" href="/genre/mystery/9648/">Mystery</a></li>
                                <li><a title="Romance Movies" href="/genre/romance/10749/">Romance</a></li>
                                <li><a title="Science Fiction Movies" href="/genre/science-fiction/878/">Science Fiction</a></li>
                                <li><a title="TV-Movie Movies" href="/genre/tv-movie/10770/">TV-Movie</a></li>
                                <li><a title="Thriller Movies" href="/genre/thriller/53/">Thriller</a></li>
                                <li><a title="War Movies" href="/genre/war/10752/">War</a></li>
                                <li><a title="Western Movies" href="/genre/western/37/">Western</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left hidden-xs" action="/" method="GET">
                            <div class="input-group input-group-md">
                                <input type="text" class="form-control" placeholder="Search..." name="s" id="srch-term">
                                    <div class="input-group-btn">
                                    <button class="btn btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <li><a rel="nofollow" href="/register?movie=Full Movie HD" class="btn subss">Register</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
        </nav>
        <nav class="navbar navbar-inverse navbar-static-top monly">
            <form class="navbar-form navbar-left" action="/" method="GET">
                            <div class="input-group input-group-md">
                                <input type="text" class="form-control" placeholder="Search..." name="s" id="srch-term">
                                    <div class="input-group-btn">
                                    <button class="btn btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
            </form>
        </nav>
        
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="topic">
                        <h1>Contact Us</h1>
                </div>
                
                     <div class="row">
                        <div class="col-md-4">
                           <p>Someone finds it difficult to understand your creative idea? There is a better visualisation, share your views with us. It is quick and easy, just drop us a line and ask for anything with which you think we could be helpful. We’re looking forward to hearing from you. Remember, it’s good to talk!</p>
                        </div>
                        <div class="col-md-8">
                           <form id="contact-form" method="POST" class="clearfix">
                              <div class="input-group">
                                 <span class="input-group-addon" id="sizing-addon1">
                                 <span class="icon-user"></span>
                                 </span>
                                 <input type="text" class="form-control required" name="contact-name" placeholder="Your Real Name" aria-describedby="sizing-addon1" required>
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon" id="sizing-addon2">
                                 <span class="icon-envelope"></span>
                                 </span>
                                 <input type="text" class="form-control required" name="contact-email" placeholder="Your Valid Email Address" aria-describedby="sizing-addon2" required>
                              </div>
                              <div class="input-group">
                                 <span class="input-group-addon" id="sizing-addon3">
                                 <span class="icon-pin"></span>
                                 </span>
                                 <input type="text" class="form-control required" name="contact-title" placeholder="Give your message a title" aria-describedby="sizing-addon3" required>
                              </div>
                              <div class="input-group">
                                  <span class="input-group-addon" id="sizing-addon4">
                                 <span class="icon-pin"></span>
                                 </span>
                                 <textarea class="form-control required" name="contact-message" rows="5" placeholder="Your Message..." required></textarea>
                              </div>
                              <div class="input-group">
                                 <div class="text-right">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                  </div>
        </div>
    </div> <!-- /row -->
</div> <!-- /container -->
    <div class="clearfix"></div>
<?php get_footer(); ?>