@extends('layouts.MasterLayout')
@section('title', 'Home')
@section('content')
  
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/portada2.jpg&quot;);color:rgba(255, 0, 0, 0.3);">
            <div class="text">
                <h2>Jitomates Alamilla</h2>
                <p>Jitomates Selectos de la mejor calidad de invernadero</p>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/jitomate.jpg"></div>
                    <div class="col-md-6">
                        <h3>Quienes Somos</h3>
                        <div class="getting-started-info">
                            <p>Somos una empresa mexicana proveniente de Hidalgo enfocados en el cultivo de jitomates en el ambiente de invernadero</p>
                        </div></div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Vision</h4>
                        <p>Cultivar y vender los mejores jitomates de invernadero tanto para la venta local como para la exportacion</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Mision</h4>
                        <p>Ser una empresa responsable con el medio ambiente y con la sociedad para asi ofrecer los mejores productos.</p>
                    </div>
                    
                </div>
            </div>
        </section>
     
       
    </main>
    
@endsection