<?php
$hack_title = 'Privacy Policy';
$hack_description = "If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at info@$hostname";
get_header();?>
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
    <div class="post-body" style="padding: 15px;">
        <div class="post-heading"><h1 style="margin: 0;font-size: 24px;">PRIVACY POLICY</h1></div>
        <hr/>
            <p>If you require any more information or have any questions about our privacy policy, please feel free to contact us.</p> 
            <p>At <?php echo $hostname;?>, the privacy of our visitors is of extreme importance to us. This privacy policy document outlines the types of personal information is received and collected by <?php echo $hostname;?> and how it is used. </p> 
            <p><b>Log Files</b><br> Like many other Web sites, <?php echo $hostname;?> makes use of log files. The information inside the log files includes internet protocol ( IP ) addresses, type of browser, Internet Service Provider ( ISP ), date/time stamp, referring/exit pages, and number of clicks to analyze trends, administer the site, track users movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable. </p> 
            <p><b>Cookies and Web Beacons</b><br> <?php echo $hostname;?> does use cookies to store information about visitors preferences, record user-specific information on which pages the user access or visit, customize Web page content based on visitors browser type or other information that the visitor sends via their browser. </p> 
            <b>DoubleClick DART Cookie</b><br> 
            <p> 
.:: Google, as a third party vendor, uses cookies to serve ads on <?php echo $hostname;?>.<br> 
.:: Google's use of the DART cookie enables it to serve ads to your users based on their visit to <?php echo $hostname;?>and other sites on the Internet. <br> 
.:: Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - http://www.google.com/privacy_ads.html </p> 
            <p>Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include ....... <br> Google Adsense
            <br></p> 
            <p>These third-party ad servers or ad networks use technology to the advertisements and links that appear on <?php echo $hostname;?> send directly to your browsers. They automatically receive your IP address when this occurs. Other technologies ( such as cookies, JavaScript, or Web Beacons ) may also be used by the third-party ad networks to measure the effectiveness of their advertisements and / or to personalize the advertising content that you see. </p> 
            <p><?php echo $hostname;?> has no access to or control over these cookies that are used by third-party advertisers. </p> 
            <p>You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. <?php echo $hostname;?>'s privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. </p> 
            <p>If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites. </p>
        <hr/>
    </div>
</div>
    </div> <!-- /row -->
</div> <!-- /container -->
    <div class="clearfix"></div>
<?php get_footer(); ?>