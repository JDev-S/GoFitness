@extends('welcome') 
@section('head')
<?php
 $paginacion= $numero_videos[0]->numero_videos/15;
                   $paginacion=ceil($paginacion); 
                    if($pagina==1)
                    {
                       echo '<meta name="robots" content="index, follow" />';
                        echo'<link rel="next" href="/videos_demostrativos/'.($pagina+1).'">';
                    }
                    else
                    {
                        echo '<meta name="robots" content="noindex, follow" />';
                        if($pagina>$paginacion)
                       {
                         
                           echo'<link rel="prev" href="/videos_demostrativos/'.$paginacion.'">';
                       }
                       else
                       {
                           
                           echo'<link rel="prev" href="/videos_demostrativos/'.($pagina-1).'">';
                       }
                    }
                     if($pagina<$paginacion && $pagina!=1)
                   {
                       
                       echo'<link rel="next" href="/videos_demostrativos/'.($pagina+1).'">';
                   }
?>
@stop


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
	                                <h3>Noticias</h3>
                                    <span></span>
                                </div>
                                <div class="recent-gallery-widget">
                                    <ul>
                                        @foreach($noticias as $noticia)
                                        <li>
                                            <a class="entry-thumb" href="#"><img alt="Training with Dumbell" src='{{$noticia->imagen}}'></a>
                                            <h6><a href="#">{{$noticia->nombre_noticia}}</a></h6>
                                            <p>{{$noticia->descripcion}}</p>
                                        </li>
                                        @endforeach
                                        
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

                        </section>
                        <section id="primary" class="page-with-sidebar page-with-left-sidebar">
                            <div class="dt-sc-sorting-container">
                                @foreach($categorias as $categoria)
                                <a class="first active-sort" data-filter="*" href="#">{{$categoria->nombre_categoria}}</a>
                               
                                @endforeach
                            </div>
                            <div class="dt-sc-portfolio-container isotope" style="position: relative; overflow: hidden; height: 3152px;">
                                
                                @foreach($videos_demostrativos as $videos)
	                            <div class="portfolio dt-sc-one-fourth column flexibility games isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                <div class="portfolio-thumb">
                                    <!--<img src="images/portfolio1.jpg" alt="" title="">-->
                                   <!--<iframe width="420" height="200" src=" https://www.youtube.com/embed/'.$items->url.'"?disablekb=1&start=0&end=60&modestbranding=1&rel=0&showinfo=1&controls=0"; ?>" ></iframe>-->
                                    <iframe src='https://www.youtube.com/embed/{{$videos->video_youtube}}' frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
                                        <h4><a href="gallery-detail.html">{{$videos->nombre_video}}</a></h4>
                                        <p><a href="#">{{$videos->nombre_categoria}}</a></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </section>
					</div>
                    <div class="dt-sc-hr-invisible-large"></div>
				</div>
                <!-- main-content ends here -->
    
                           <div class="pagination-nav d-flex justify-content-center">
               <ul class="pagination">
                   <?php
                   $paginacion= $numero_videos[0]->numero_videos/15;
                   $paginacion=ceil($paginacion); 
                   
                   if($pagina>1)
                   {
                       if($pagina>$paginacion)
                       {
                           echo'<li><a href="/videos_demostrativos/'.$paginacion.'">«</a></li>';
                       }
                       else
                       {
                           echo'<li><a href="/videos_demostrativos/'.($pagina-1).'">«</a></li>';
                       }
                       
                   }                
                

                   for($i=1;$i<=ceil($numero_videos[0]->numero_videos/15);$i++)
                   {
                       if($i==$pagina)
                       {
                           echo'<li class="active"><a  href="/videos_demostrativos/'.$i.'">'.$i.'</a></li>';
                           
                       }
                       else
                       {
                           echo'<li><a  href="/videos_demostrativos/'.$i.'">'.$i.'</a></li>';
                       }
                     
                   }
                    
                   if($pagina<$paginacion)
                   {
                       echo'<li><a href="/videos_demostrativos/'.($pagina+1).'">»</a></li>';
                   }
                  
                   ?>
             </ul>
          </div>
            </div>
@section('scripts')
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
@stop
@stop