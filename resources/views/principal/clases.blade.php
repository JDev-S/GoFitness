@extends('welcome') 

@section('contenido')


<div class="breadcrumb-wrapper ">
    <div class="container">
        <h1>Clases</h1>   
    </div>
</div>

<div id="main">
          <!-- main-content starts here -->
          <div id="main-content">
              <div class="container">

  
                    
                                          <section id="primary" class="page-with-sidebar page-with-right-sidebar">
                  
                  <article id="post-2632" class="workout-single post-2632 dt_workouts type-dt_workouts status-publish has-post-thumbnail hentry workout_entries-pilates workout_entries-pushups">
					  <h3 class="border-title"> <span>{{$rutinas[0]->nombre_video}}</span></h3>
                      <div class="dt-sc-workout-detail">
                          <div class="dt-excersise-title title">                                  <p class="count">
                                      <a href="javascript:void(0)">{{$num[0]->numero}}<br><span>Pasos</span></a>
                                  </p>                              <h5>{{$rutinas[0]->nombre_video}}</h5>
                          </div>
                          <div class="dt-sc-hr-invisible-small"></div>
                          <div class="dt-sc-one-half column first">
                              <div class="dt-excersise-thumb"><img width="439" height="300" src="https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-439x300.jpg" class="attachment-blog-threecol size-blog-threecol wp-post-image" alt="Dumbbell press bride on bosu" title="Dumbbell press bride on bosu" srcset="https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-439x300.jpg 439w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-300x205.jpg 300w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-1024x700.jpg 1024w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-772x528.jpg 772w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-588x402.jpg 588w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-568x388.jpg 568w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-445x304.jpg 445w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-420x287.jpg 420w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-441x301.jpg 441w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6-448x306.jpg 448w, https://fitnesszonewp.wpengine.com/wp-content/uploads/2015/02/blog6.jpg 1170w" sizes="(max-width: 439px) 100vw, 439px">                              </div>
                          </div>
                          <div class="dt-sc-one-half column">
                              <div class="dt-excersise-detail">	                                  <h4><a href="javascript:void(0)">{{$rutinas[0]->nombre_video}}</a></h4>									  <h6>Musculos a ejercitar:</h6><p class="dt-excersise-meta">{{$rutinas[0]->musculos_trabajar}} </p>									  

                                  <h6>Categoria:</h6>
                                  <p class="dt-excersise-meta"> {{$rutinas[0]->nombre_categoria}}</p>									  <h6>Equipamiento:</h6><p class="dt-excersise-meta">{{$rutinas[0]->equipamiento}}</p>
                                        <h6>Nombre del instructor:</h6><p class="dt-excersise-meta">{{$rutinas[0]->nombre}} </p>
                              </div>
                          </div>

                      </div><p>{{$rutinas[0]->descripcion_video}}.</p>
<div class="dt-sc-hr-invisible-small  "></div>
<h3 class="border-title "><span>Detalle de cada ejercicio de la rutina</span></h3>                  
                      
<?php
  $i=1;
if (empty($ejercicios))
{}
else                      
{
    

    foreach($ejercicios as $rutina) 
    {
    echo '<div class="dt-excersise-title title"><p class="count"><a href="javascript:void(0)">'.$i.' <br><span>paso</span></a></p><h5><a href="javascript:void(0)">'.$rutina->nombre_ejercicio.'</a></h5></div><p>'.$rutina->descripcion.'</p><div class="dt-sc-hr-invisible-small"></div>';
        $i++;
     }
}
?>
                                          
                      <div class="dt-sc-hr-invisible"></div>
                      <div class="dt-sc-clear"></div>


					  <div class="dt-sc-hr-invisible-small"></div>                  </article>
                  </section>

                                      <section class="secondary-sidebar secondary-has-right-sidebar" id="secondary-right"><aside id="my_recent_workouts-2" class="widget widget_recent_workouts"><div class="widgettitle"><h3>Ejercicios de la rutina</h3></div>
                                          <?php
                                          $i=1;
                                          if (empty($ejercicios))
                                          {}
                                          else 
                                          {
                                                foreach($ejercicios as $rutina) 
                                                {
                                                  echo'<div class="recent-workout-widget"><div class="dt-excersise-entry"><div class="dt-excersise-title title"><p class="count"><a href="javascript:void(0)">'.$i.' <br><span>paso</span></a></p><h5><a href="https://fitnesszonewp.wpengine.com/dt_workouts/dumbbell-press-bride-on-bosu/">'.$rutina->nombre_ejercicio.'</a></h5></div></div></div>';
                                                  $i++;
                                                }
                                          }
                                       
                                          ?>
                                          
                                          </aside>
                                         
                                          <aside id="text-5" class="widget widget_text"><div class="widgettitle"><h3>Ultimas rutinas</h3></div>			<div class="textwidget"><ul class="quick_links">
                                    @foreach($nombres as $nombre)              
                                    
                                        <li><a href='/clases?buscar={{$nombre->id_rutina}}'>{{$nombre->nombre_video}}</a></li>
                                    
                                              @endforeach
                                </ul></div>
		</aside></section>
                  
              </div>

          </div>
      </div>
@stop