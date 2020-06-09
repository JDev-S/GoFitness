@extends('welcome') 

@section('contenido')

<div class="breadcrumb-wrapper ">
    <div class="container">
        <h1>Planes fitness</h1>    </div>
</div>

<div class="fullwidth-section">
                            <div class="container">
                                <h3 class="border-title"> <span>Nuestros planes fitness</span> </h3>
                                @foreach($aTipo_membresia as $tipo)
                                <div class="dt-sc-one-third column first animate fadeInLeft" data-animation="fadeInLeft" data-delay="100" style=" margin-left:15.391px;">
                                    <div class="dt-sc-programs">
                                        <div class="dt-sc-pro-thumb">
                                            <a href="package-detail.html"><img title="" alt="" src="images/event4.jpg"></a>
                                        </div>
                                        <div class="dt-sc-pro-detail">
                                            <div class="dt-sc-pro-content">
                                                <div class="dt-sc-pro-title">
                                                    <h3>{{$tipo->nombre_membresia}}</h3>
                                                   
                                                </div>
                                                <ul class="dt-sc-fancy-list circle-o">
                                                   @foreach($tipo->descripcion as $tipo2)
                                                    <li>{{$tipo2->descripcion}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="dt-sc-pro-price">
                                                <form>
                                                 <select class="form-control" name="id_membresia" required  id="id_membresia" >
                                                    <option value="" disabled selected>Elige el periodo</option>
                                                        @foreach ($tipo->periodo_membresia as $item)
                                                        <option value="{{ $item->id_membresia   }}" > {{$item->periodo }} meses a ${{$item->precio}} </option>
                                                    @endforeach
                                                </select>
                                                <a href="#" class="dt-sc-button small" data-hover="Enroll Now">Enroll Now</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clear"></div>
                            </div>
                        </div>
@stop