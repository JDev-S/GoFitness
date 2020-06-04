@extends('welcome') 

@section('contenido')
<div class="breadcrumb-wrapper">
            	<div class="container">
                	<h1>Videos demostrativos</h1>
                </div>
            </div>

<div id="main">
                <!-- main-content starts here -->
                <div id="main-content">
                	<div class="container">
                    	<div class="dt-sc-hr-invisible"></div>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">
                            <aside class="widget widget_popular_entries">
                                <div class="widgettitle">
	                                <h3>Latest Gallery</h3>
                                    <span></span>
                                </div>
                                <div class="recent-gallery-widget">
                                    <ul>
                                        <li>
                                            <a class="entry-thumb" href="#"><img alt="Training with Dumbell" src="images/blog-thumb.jpg"></a>
                                            <h6><a href="#">Training with Dumbell</a></h6>
                                            <p>Nulla luctus ligula ut metus iaculis fringilla. Aliquam venenatis,...</p>
                                        </li>
                                        <li>
                                            <a class="entry-thumb" href="#"><img alt="Create the Adonis Effect" src="images/blog-thumb1.jpg"></a>
                                            <h6><a href="#">Create the Adonis Effect</a></h6>
                                            <p>Nulla luctus ligula ut metus iaculis fringilla. Aliquam venenatis,...</p>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="widget widget_search">
                                <div class="widgettitle">
	                                <h3>Search</h3>
                                    <span></span>
                                </div>
                                <form action="#" id="searchform" method="get">
                                    <input type="text" placeholder="Enter Keyword" class="text_input" value="" name="s" id="s">
                                    <input type="submit" value="submit" name="submit" class="dt-sc-button small">
                                </form>
                            </aside>
                            <aside class="widget widget_categories">
                                <div class="widgettitle">
	                                <h3>Categories</h3>
                                    <span></span>
                                </div>
                                <ul>
                                    <li class="cat-item"><a title="#" href="#">Corporate<span> 2</span></a></li>
                                    <li class="cat-item"><a title="#" href="#">Design<span> 3</span></a></li>
                                    <li class="cat-item"><a title="#" href="#">Learning<span> 2</span></a></li>
                                    <li class="cat-item"><a title="#" href="#">Tools<span> 1</span></a></li>
                                    <li class="cat-item"><a title="#" href="#">Training<span> 3</span></a></li>
                                </ul>
							</aside>
                        </section>
                        <section id="primary" class="page-with-sidebar page-with-left-sidebar">
                            <div class="dt-sc-sorting-container">
                                <a class="first active-sort" data-filter="*" href="#">All</a>
                                <a data-filter=".agility" href="#">Agility</a>
                                <a data-filter=".coordination" href="#">Coordination</a>
                                <a data-filter=".flexibility" href="#">Flexibility</a>
                                <a data-filter=".games" href="#">Games</a>
                                <a data-filter=".quickness" href="#">Quickness</a>
                            </div>
                            <div class="dt-sc-portfolio-container isotope" style="position: relative; overflow: hidden; height: 3152px;">
	                            <div class="portfolio dt-sc-one-fourth column flexibility games isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                <div class="portfolio-thumb">
                                    <!--<img src="images/portfolio1.jpg" alt="" title="">-->
                                   <!--<iframe width="420" height="200" src=" https://www.youtube.com/embed/'.$items->url.'"?disablekb=1&start=0&end=60&modestbranding=1&rel=0&showinfo=1&controls=0"; ?>" ></iframe>-->
                                    <iframe src="https://www.youtube.com/embed/r0pL5djBbSM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    <!--<div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail.html">Flexible Muscle Stretches</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column agility coordination quickness isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 394px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio2.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio2.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail-with-left-sidebar.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail-with-left-sidebar.html">Shoulder Press</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column flexibility games quickness isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 788px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio3.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio3.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail-with-right-sidebar.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail-with-right-sidebar.html">Squats are for everyone</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column agility coordination isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1182px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio4.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio4.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail.html">Gymnastic Shots</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column flexibility quickness isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1576px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio5.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio5.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail-with-left-sidebar.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail-with-left-sidebar.html">Perfect Abs</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column agility coordination games isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1970px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio6.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio6.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail-with-right-sidebar.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail-with-right-sidebar.html">Dumbell Tricks</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column coordination flexibility isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 2364px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio7.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio7.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="gallery-detail.html">Beautiful Woman Stretches</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio dt-sc-one-fourth column quickness agility isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 2758px, 0px);">
                                <div class="portfolio-thumb">
                                    <img src="images/portfolio8.jpg" alt="" title="">
                                    <div class="image-overlay">
                                        <div class="fig-content-wrapper">
                                            <div class="fig-overlay">
                                              <p>
                                                  <a href="images/portfolio8.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-plus"> </span></a>
                                                  <a href="gallery-detail-with-left-sidebar.html" class="link"> <span class="fa fa-link"> </span> </a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-detail">
                                    <div class="portfolio-title">
                                        <h4><a href="#">Shoulder Press</a></h4>
                                        <p><a href="#">Events</a></p>
                                    </div>
                                    <div class="views">
                                        <span><i class="fa fa-heart-o"></i><br><a href="#" class="likeThis">13 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </section>
					</div>
                    <div class="dt-sc-hr-invisible-large"></div>
				</div>
                <!-- main-content ends here -->
            </div>
@section('scripts')
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
@stop
@stop