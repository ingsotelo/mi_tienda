@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           		<div class="row justify-content-end">
            		<div class="col-6">
            			<div class="float-right">
                			<button type="button" class="btn btn-link" href="#">Facturación electrónica</button>
                			<button type="button" class="btn btn-link" href="#">Directorio de Tiendas</button>
            			</div>
            		</div>
            	</div>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="/img/bpd_LalaGo_150720-1.jpg">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="/img/bpd-alpura-200831.jpg">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="/img/bpd-great-value-servilletas-250820.jpg">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="/img/bpd-vyl-10945-200824-1.jpg">
				    </div>	

				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12" style="text-align: center;">
        	<br>
        	<hr>
			<a type="button" data-toggle="modal" data-target="#exampleModal">
        	<h1 style="color: #df483c;"><i class="fas fa-shopping-basket"></i> Departamentos</h1></a>
        	<hr>
    	</div>
	</div>

	<div class="row row-cols-1 row-cols-md-3">
	  
	  <div class="col mb-4">
	    <div class="card h-100">
	      <img src="/img/vinosylicores.jpg" class="card-img" style="width:100%; height:100%;">
	      <div class="card-img-overlay"><a href="#" style="color:black">
	      	<h3 class="card-footer depto" style="width:100%; background-color:rgba(255,255,0,0.8);"><b>Vinos y Licores</b></h3></a>
	      </div>
	    </div>
	  </div>

	  <div class="col mb-4">
	    <div class="card h-100">
	      <img src="/img/higiene.jpg" class="card-img" style="width:100%; height:100%;">
	      <div class="card-img-overlay"><a href="#" style="color:black">
	      	<h3 class="card-footer depto" style="width:100%; background-color:rgba(255,255,0,0.8);"><b>Higiene y Belleza</b></h3></a>
	      </div>
	    </div>
	  </div>

	  <div class="col mb-4">
	    <div class="card h-100">
	      <img src="/img/farmacia.jpeg" class="card-img" style="width:100%; height:100%;">
	      <div class="card-img-overlay"><a href="#" style="color:black">
	      	<h3 class="card-footer depto" style="width:100%; background-color:rgba(255,255,0,0.8);"><b>Farmacia</b></h3></a>
	      </div>
	    </div>
	  </div>

	  <div class="col mb-4">
	    <div class="card h-100">
	      <img src="/img/jugos-del-valle-tw.jpg" class="card-img" style="width:100%; height:100%;">
	      <div class="card-img-overlay"><a href="#" style="color:black">
	      	<h3 class="card-footer depto" style="width:100%; background-color:rgba(255,255,0,0.8);"><b>Jugos y Bebidas</b></h3></a>
	      </div>
	    </div>
	  </div>

	  <div class="col mb-4">
	    <div class="card h-100">
	      <img src="/img/limpieza.jpeg" class="card-img" style="width:100%; height:100%;">
	      <div class="card-img-overlay"><a href="#" style="color:black">
	      	<h3 class="card-footer depto" style="width:100%; background-color:rgba(255,255,0,0.8);"><b>Limpieza y Hogar</b></h3></a>
	      </div>
	    </div>
	  </div>

	  <div class="col mb-4">
	    <div class="card h-100">
	      <img src="/img/despensa.png" class="card-img" style="width:100%; height:100%;">
	      <div class="card-img-overlay"><a href="#" style="color:black">
	      	<h3 class="card-footer depto" style="width:100%; background-color:rgba(255,255,0,0.8);"><b>Despensa</b></h3></a>
	      </div>
	    </div>
	  </div>	 
	</div>

	<div class="row justify-content-center">
        <div class="col-md-12">
        	<br>
        	<hr>
        	<h1 style="text-align: center; color: #df483c;"><i class="fas fa-tags"></i> Ofertas</h1>
        	<hr>
    	</div>
	</div>

	<!-- Multi Item Carousel  -->
	<div class="container text-center my-3">
	    <div class="row mx-auto my-auto">
	        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
	            <div class="carousel-inner w-100" role="listbox">
	                <div class="carousel-item active">
	                    <div class="col-md-4">
	                        <div class="card card-body">
	                            <img class="img-fluid" src="/img/1.jpg">
	                            <p>Suavitel complete 2.8L - Acondicionador de telas fresca primavera.</p>
	                            <p><b>$81.50</b></p>
	                            <a href="#" class="btn btn-danger"><b>Agregar al Carrito</b></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="carousel-item">
	                    <div class="col-md-4">
	                        <div class="card card-body">
	                            <img class="img-fluid" src="/img/2.jpg">
	                            <p>Shampoo Got2b 200ml - En seco Schwarzkopf fresh it up frescura.</p>
	                            <p><b>$110.00</b></p>
	                            <a href="#" class="btn btn-danger"><b>Agregar al Carrito</b></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="carousel-item">
	                    <div class="col-md-4">
	                        <div class="card card-body">
	                            <img class="img-fluid" src="/img/3.jpg">
	                            <p>Pedigree Res 100g - Alimento para Perro Adulto.</p>
	                            <p><b>$10.50</b></p>
	                            <a href="#" class="btn btn-danger"><b>Agregar al Carrito</b></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="carousel-item">
	                    <div class="col-md-4">
	                        <div class="card card-body">
	                            <img class="img-fluid" src="/img/4.jpg">
	                            <p>Pond's bio 200ml - Loción desmaquillante hydratante dual.</p>
	                            <p><b>$81.50</b></p>
	                            <a href="#" class="btn btn-danger"><b>Agregar al Carrito</b></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="carousel-item">
	                    <div class="col-md-4">
	                        <div class="card card-body">
	                            <img class="img-fluid" src="/img/5.jpg">
	                            <p>Dove delicious care 400ml - Crema corporal todo tipo de piel.</p>
	                            <p><b>$64.00</b></p>
	                            <a href="#" class="btn btn-danger"><b>Agregar al Carrito</b></a>
	                        </div>
	                    </div>
	                </div>
	                <div class="carousel-item">
	                    <div class="col-md-4">
	                        <div class="card card-body">
	                            <img class="img-fluid" src="/img/6.jpg">
	                            <p>Atún Dolores 140g - Lomo de atún aleta amarilla en agua.</p>
	                            <p><b>$64.00</b></p>
	                            <a href="#" class="btn btn-danger"><b>Agregar al Carrito</b></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
	                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
	                <span class="sr-only">Anterior</span>
	            </a>
	            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
	                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
	                <span class="sr-only">Siguiente</span>
	            </a>
	        </div>
	    </div>
	</div>

	
</div>

	<div class="row justify-content-center" style="background-color:rgba(255,255,0,0.8);">
        <div class="col-md-12">
        	<p style="text-align: center; margin-top: 10px"><b>Todos los derechos reservados SAN RAFAEL ® 2020 Putla Villa de Guerrero, Oaxaca. Teléfono: 953 553 0227</b></p>
        	<p style="text-align: center; color: #df483c;">Los precios publicados en la página pueden variar con respecto a los publicados en tienda.</p>
    	</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header" style="background-color:rgba(255,255,0,0.8);">
	        <h3 style="color: #df483c;"><i class="fas fa-shopping-basket"></i> Departamentos</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
		        <div class="col-4">
		        	<ul>
					  	<li><a href="#">Restaurantes</a></li>
						<li><a href="#">Ferretería y Automotriz</a></li>
						<li><a href="#">Frutas y Verduras</a></li>
						<li><a href="#">Despensa</a></li>
						<li><a href="#">Lácteos, Congelados y Huevo</a></li>
						<li><a href="#">Quesos</a></li>
						<li><a href="#">Carnes y Aves</a></li>
						<li><a href="#">Pescado y Mariscos</a></li>
						<li><a href="#">Salchichonería</a></li>
					</ul>
		        </div>
		        <div class="col-4">
		        	<ul>
						<li><a href="#">Panadería y Tortillería</a></li>
						<li><a href="#">Jugos y Bebidas</a></li>
						<li><a href="#">Cervezas</a></li>
						<li><a href="#">Vinos y Licores</a></li>
						<li><a href="#">Enlatados y Conservas</a></li>
						<li><a href="#">Farmacia</a></li>
						<li><a href="#">Botanas</a></li>
						<li><a href="#">Higiene y Belleza</a></li>
						<li><a href="#">Limpieza y Hogar</a></li>
					</ul>
		        </div>
		        <div class="col-4">
		        	<ul>
						<li><a href="#">Bebés</a></li>
						<li><a href="#">Mascotas</a></li>
						<li><a href="#">Dulces</a></li>
						<li><a href="#">Desechables</a></li>
						<li><a href="#">Hogar y Entretenimiento</a></li>
						<li><a href="#">Deportes</a></li>
						<li><a href="#">Alimentos Preparados</a></li>
						<li><a href="#">Papeleria</a></li>
						<li><a href="#">Jugueteria</a></li>
					</ul>
		        </div>
	    	</div>
	      </div>
	    </div>
	  </div>
	</div>

</div><!-- Body -->
@endsection
@section('scripts')
	<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {
		/*
		    Carousel
		*/
		$('#recipeCarousel').carousel({
		  interval: 5000
		})

		$('.carousel .carousel-item').each(function(){
		    var minPerSlide = 3;
		    var next = $(this).next();
		    if (!next.length) {
		    next = $(this).siblings(':first');
		    }
		    next.children(':first-child').clone().appendTo($(this));
		    
		    for (var i=0;i<minPerSlide;i++) {
		        next=next.next();
		        if (!next.length) {
		        	next = $(this).siblings(':first');
		      	}
		        
		        next.children(':first-child').clone().appendTo($(this));
		      }
		});

		const animateCSS = (node, animation, prefix = 'animate__') =>
		  // We create a Promise and return it
		  new Promise((resolve, reject) => {
		    const animationName = `${prefix}${animation}`;
		    //const node = document.querySelector(element);

		    node.classList.add(`${prefix}animated`, animationName);

		    // When the animation ends, we clean the classes and resolve the Promise
		    function handleAnimationEnd() {
		      node.classList.remove(`${prefix}animated`, animationName);
		      node.removeEventListener('animationend', handleAnimationEnd);

		      resolve('Animation ended');
		    }

		    node.addEventListener('animationend', handleAnimationEnd);
		  });

		  var deptos = document.getElementsByClassName("depto");
		  for (var i = 0; i < deptos.length; i++) {
			deptos[i].onmouseenter = function() {
				animateCSS(this, 'pulse');
			}
		  }
	});
	</script>
@endsection
