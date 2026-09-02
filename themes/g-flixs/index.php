<?php include('header.php');?>
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
        
<div class="jumbo-hero" style="background-image:url('/images/bg1.jpg')">
    <div class="container">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><li data-target="#carousel-example-generic" data-slide-to="1" class=""></li><li data-target="#carousel-example-generic" data-slide-to="2" class=""></li><li data-target="#carousel-example-generic" data-slide-to="3" class=""></li><li data-target="#carousel-example-generic" data-slide-to="4" class=""></li><li data-target="#carousel-example-generic" data-slide-to="5" class=""></li><li data-target="#carousel-example-generic" data-slide-to="6" class=""></li><li data-target="#carousel-example-generic" data-slide-to="7" class=""></li><li data-target="#carousel-example-generic" data-slide-to="8" class=""></li><li data-target="#carousel-example-generic" data-slide-to="9" class=""></li><li data-target="#carousel-example-generic" data-slide-to="10" class=""></li>			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active"><a href="/movie/385128/f9.html"><img src="https://image.tmdb.org/t/p/w1280/xXHZeb1yhJvnSHPzZDqee0zfMb6.jpg" alt="F9 (2021)"><div class="header-text hidden-xs"><div class="col-md-12 text-center"><h2><span><font color="white">F9 (2021)</font></span></h2><br><h3><span><font color="white">Dominic Toretto Is Leading A Quiet Life Off The Grid With Letty And His Son, Little Brian, But They Know That Danger...</font></span></h3><br><div class="btn btn-theme btn-sm btn-min-block">Watch Now</div></div></div></a></div>
			    
			    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( gsilvers_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 10) as $row ) {
                ?>
			    <div class="item "><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><img src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)"><div class="header-text hidden-xs"><div class="col-md-12 text-center"><h2><span><font color="white"><?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)</font></span></h2><br><h3><span><font color="white"><?php echo short ($row['overview']);?></font></span></h3><br><div class="btn btn-theme btn-sm btn-min-block">Watch Now</div></div></div></a></div>
		<?php 
                }
        endif; 
        ?>
			    </div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div><!-- /carousel -->
        <div class="jumbo-hero__inner">
            <h2 class="header">Stream Movies & TV Shows for Free</h2>
            <h4 class="text-large" style="margin-top: 30px;margin-bottom: 50px;font-size: 18px;">Browse and Watch all your favorite movies & series for free online!</h4>
            <a href="/register?movie=Full Movie HD" class="btn btn-outline-theme btn-lg mt-2 omh-goTo">Watch Now</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="topic">
                        <h3><a href="/movies/playing/">Now Playing Movies <i class="fa fa-angle-right ml-3" aria-hidden="true"></i></a></h3>
                </div>
                <div class="row">
                    <div class="col-md-wrap">
                        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( gsilvers_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="col-md-li"><a href="<?php echo seo_movie($row['id'],$row['title']);?>" rel="<?php echo seo_movie($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>"><span class="mli-quality"><i>HD</i></span><span class="mli-top-left"><span class="mli-vote"><i class="fa fa-star"></i> <?php echo $row['vote_average'];?></span></span><img data-original="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>" src="<?php echo $row['poster_path'];?>" style="display: inline-block;"><span class="mli-info"><h2><?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)</h2></span></a></div>
                        <?php 
                }
        endif; 
        ?>
                        </div>
                </div>
                <div class="clearfix"></div>
        </div>
        <div class="col-md-12">
                <div class="topic">
                        <h3><a href="/movies/tv-popular/">Popular TV Shows <i class="fa fa-angle-right ml-3" aria-hidden="true"></i></a></h3>
                </div>
                <div class="row">
                    <div class="col-md-wrap">
                        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( gsilvers_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="col-md-li"><a href="<?php echo seo_tv($row['id'],$row['title']);?>" rel="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>"><span class="mli-quality"><i>HD</i></span><span class="mli-top-left"><span class="mli-vote"><i class="fa fa-star"></i> <?php echo $row['vote_average'];?></span></span><img data-original="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>" src="<?php echo $row['poster_path'];?>" style="display: inline-block;"><span class="mli-info"><h2><?php echo $row['title'];?></h2></span></a></div>
                        <?php 
                }
        endif; 
        ?>
                        </div>
                </div>
                <div class="clearfix"></div>
        </div>
    </div> <!-- /row -->
</div> <!-- /container -->
    <div class="clearfix"></div>
<?php include('footer.php'); ?>