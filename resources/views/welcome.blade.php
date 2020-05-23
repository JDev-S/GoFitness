
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> Fitness - Multipurpose Theme </title> 
	
	<meta name="description" content="">
	<meta name="author" content="">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- **Favicon** -->
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
    <link id="default-css" href="/css/style.css" rel="stylesheet" media="all" />
    <link id="shortcodes-css" href="/css/shortcodes.css" rel="stylesheet" media="all" />
        
    <link id="skin-css" href="/css/style_1.css" rel="stylesheet" media="all" />    
    
    <link id="fancy-box" href="/css/jquery.fancybox.css" rel="stylesheet" media="all" />
    <link id="layer-slider" href="/css/layerslider.css" rel="stylesheet" media="all" /> 
    
    <!-- **Additional - stylesheets** -->
    <link href="/css/responsive.css" rel="stylesheet" media="all" />
    <link href="/css/pace-theme-loading-bar.css" rel="stylesheet" media="all" />
        
    <link href="/css/animations.css" rel="stylesheet" media="all" />
    
    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    
    <!-- **Google - Fonts** -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery-migrate.min.js"></script>

    <!-- **Modernizr** -->
	<script src="/js/modernizr.custom.js"></script>
    <script type="text/javascript">
	var mytheme_urls = {
 		stickynav : 'enable'
	};
	</script>
    </head>
<body>
	<div id="loader-wrapper">
    	<div class="loader">
        	<span class="fa fa-spinner fa-spin"></span>
        </div>
    </div>
	<!-- **Wrapper** -->
	<div class="wrapper">
    	<div class="inner-wrapper">
        	<!-- header-wrapper starts here -->
             <div id="logo">
                     <a title="Travel" href="index.html"><img title="Fitness" alt="Fitness" src="images/logo.jpg" width="200px" height="200px"></a>
            </div>
        	<div id="header-wrapper">
            	<header id="header" class="header4">
                    <div class="main-menu-container">
                    	<div class="main-menu">
                            <div id="primary-menu">
                                <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                                <nav id="main-menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="menu-item-simple-parent menu-item-depth-0 current_page_item"><a href="/"> <i class="fa fa-home"></i> Inicio</a></li>
                                        <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"><a href="/clases"><i class="fa fa-user"></i> Clases</a> </li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="/videos_demostrativos"><i class="fa fa-cubes"></i>Videos demostrativos</a>
                                        </li>
                                        <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> <a href="/acerca_de"> <i class="fa fa-gift"></i> Acerca de </a></li>
                                        
                                        <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"> <a href="/contacto" title=""> <i class="fa fa-pencil"></i> Contacto </a>
                                        </li>
                                        <li class="menu-item-megamenu-parent  megamenu-4-columns-group menu-item-depth-0"><a href="plan_fitness"> <i class="fa fa-camera"></i> Plan Fitness</a>
                                        </li>
                                        <li class="menu-item-simple-parent menu-item-depth-0"><a href="/iniciar_sesion"> <i class="fa fa-envelope"></i> Iniciar sesión</a>
                                           
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
				</header>
			</div>            <!-- header-wrapper ends here -->
            <div id="main">
               <!-- **Slider Section** -->
                
                
    
@yield('contenido')
                
           <footer id="footer">
            	<div class="footer-widgets-wrapper">
                	<div class="container">
                    	<div class="column dt-sc-one-fourth first">
                        	<aside class="widget widget_text">
                                <div class="textwidget">
                                	<h3 class="widgettitle"><span class="fa fa-user"></span>About Us</h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,  making it look like readable English. </p>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                </div>
                            </aside>
                        </div>
                        <div class="column dt-sc-one-fourth">
							<aside class="widget widget_text">
                            	<h3 class="widgettitle"><span class="fa fa-link"></span>Useful Links</h3>
                                <div class="textwidget">
                                    <ul>
                                        <li><a href="#">Fitness Tips</a></li>
                                        <li><a href="#">Faq's</a></li>
                                        <li><a href="#">Workout Programs</a></li>
                                        <li><a href="#">Fitness Camps</a></li>
                                        <li><a href="#">Blogs</a></li>
                                        <li><a href="#">Fitness Updates</a></li>
                                    </ul>
                                </div>
                            </aside>
						</div>

                        <div class="column dt-sc-one-fourth">
                        	<aside class="widget widget_recent_entries">
                            	<h3 class="widgettitle"><span class="fa fa-calendar"></span>Upcoming Events</h3>
                                <div class="recent-posts-widget">
                                	<ul>
                                    	<li>
                                        	<a href="#" class="entry-thumb"><img src="/images/blog-thumb.jpg" alt="" title=""></a>
                                            <h4><a href="#">Training with Dumbell</a></h4>
                                            <div class="entry-metadata">
                                            	<p class="date">26 May 2014</p>
                                            </div>
                                        </li>
                                        <li>
                                        	<a href="#" class="entry-thumb"><img src="/images/blog-thumb1.jpg" alt="" title=""></a>
                                            <h4><a href="#">Create the Adonis Effect</a></h4>
                                            <div class="entry-metadata">
                                            	<p class="date">24 May 2014</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
							</aside>
					    </div>
                    </div>
                    <div class="social-media-container">
                    	<div class="social-media">
                        	<div class="container">
                                <div class="dt-sc-contact-info dt-phone">
                                	<p><i class="fa fa-phone"></i> <span>953 224 2235 221</span> </p>
                                </div>
                                <ul class="dt-sc-social-icons">
                                    <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                                    <li class="google"><a href="#" class="fa fa-google-plus"></a></li>
                                    <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                    <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                                    <li class="rss"><a href="#" class="fa fa-rss"></a></li>
                                </ul>
                            </div>
                        </div>
					</div>
                </div>
                <div class="copyright">
                	<div class="container">
                    	<ul class="footer-links">
                        	<li><a href="#"> About Us </a></li>
                            <li><a href="#">  Help Centre </a></li>
                            <li><a href="#"> Site Map </a></li>
                        </ul>
                        <p>&copy; 2014 - FitnessMark. Design: BuddhaThemes</p>
                    </div>
                </div>
            </footer>
            <!-- footer ends here -->
            
	</div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->

<!-- **jQuery** -->
<script type="text/javascript" src="/js/jquery.plugins.min.js"></script>
<!--<script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script>-->

<script type="text/javascript" src="/js/pace.min.js"></script>
<script type="text/javascript" src="/js/jquery.tabs.min.js"></script>
<script type="text/javascript" src="/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="/js/jquery.ui.totop.min.js"></script>

<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>

<script type="text/javascript" src="/js/jquery-transit-modified.js"></script> 
<script type="text/javascript" src="/js/layerslider.kreaturamedia.jquery.js"></script> 
<script type='text/javascript' src="/js/greensock.js"></script> 
<script type='text/javascript' src="/js/layerslider.transitions.js"></script> 

<script type="text/javascript">var lsjQuery = jQuery;</script>
<script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_5','jquery'); } else { lsjQuery("#layerslider_5").layerSlider({responsiveUnder: 1240, layersContainer: 1170, skinsPath: 'css/'}) } }); </script>

<!--<script type="text/javascript" src="/js/retina.js"></script>-->
<!--<script type="text/javascript" src="/js/controlpanel.js"></script>-->



<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
</body>
</html>
