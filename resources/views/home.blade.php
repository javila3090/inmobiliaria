@extends('app')
    
@section('content')

<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
<div class="container">
    <!--<ol class="breadcrumb" style="font-size: 12px;">
        <span><b>Est&aacute;s en:</b></span>
        <li><a href="{{ route('/') }}"><b>Inicio</b></a></li>       
    </ol>-->
    <div class="row" >
        <div class="col-lg-12">
            <div class="">
                <!-- Carousel -->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/living.jpg" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="assets/img/living2.jpg" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="assets/img/living3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div><!-- /carousel -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="jumbotron myBox"> 
                <div class="row">
                    <div class="col-lg-12 centered">
                        <h2>¡Encuentra lo que andas buscando!</h2>
                        <br>
                        {!! Form::open(['route' => 'store', 'method' => 'post', 'class' => 'form-inline']) !!}
                        
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInput">Tipo</label>
                            <select id="typology" name="typology" class="form-control myInput"> <option value="10">Obra nueva</option> <option value="1">Viviendas</option> <option value="7" disabled="" class="d-none">Habitación</option> <option value="5">Oficinas</option> <option value="6">Locales o naves</option> <option value="4">Garajes</option> <option value="12">Trasteros</option> <option value="13">Edificios</option> <option value="8">Terrenos</option> </select>
                        </div>
                            
                        <div class="form-group">
                            <label class="sr-only" for="inlineFormInput">Tipo</label>
                            <select id="typology" name="typology" class="form-control myInput"> <option value="1">Venta</option> <option value="2">Alquiler</option></select>
                        </div>
                            
                        <div class="form-group">
                            
                            <label class="sr-only" for="inlineFormInput">Localidad</label>
                            {!! Form::text('nombre', null, ['class' => 'form-control myInput' , 'required' => 'required', 'size' => '10', 'placeholder' => 'Nº Dormitorios', 'style' => '1px #189D90 solid']) !!}
                        </div>
                            
                            <div class="form-group">
                            
                            <label class="sr-only" for="inlineFormInput">Localidad</label>
                            {!! Form::text('nombre', null, ['class' => 'form-control myInput' , 'required' => 'required', 'size' => '40', 'placeholder' => 'Localidad a buscar', 'style' => '1px #189D90 solid']) !!}
                        </div>
                        <button type="submit" class="btn btn-default sharp myInput"><b>Buscar</b></button>
                        
                        {!! Form::close() !!} 
                    </div>  
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <hr style="border: 2px solid #189D90"/>
                        <br>
                        <h3>LO MÁS DESTACADO</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection