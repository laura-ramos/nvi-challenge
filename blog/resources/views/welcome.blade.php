<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js"></script>
    </head>
    <body>
    @include('header')
        
        
        
<section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5>Best way to tour</h5>
                                <h1>Lorem ipsum dolor amet consec</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="images/globo.png">
                    </div>
                </div>
            </div>
</section>



<section class="search_your_country">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="search_form">
                    <form action="#">
                        <div class="form-row">
                            <div class="col-lg-4">
                                <div class="search_form_iner">
                                    <select class="form-control" id="inlineFormCustomSelect">
                                        <option selected>country</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                   
                                </div>
                            </div>
                            <div class="col-lg-4">
                                 <select class="form-control" id="inlineFormCustomSelect1">
                                        <option selected>city</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" class="btn">search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_donation_item">
                    <img src="img/icon/money_bag.svg" alt="#">
                    <h4>donation</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    </p>
                    <a href="#" class="read_btn">read more</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_donation_item">
                    <img src="img/icon/money_bag.svg" alt="#">
                    <h4>donation</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                    <a href="#" class="read_btn">read more</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_donation_item">
                    <img src="img/icon/money_bag.svg" alt="#">
                    <h4>donation</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna </p> 
                    <a href="#" class="read_btn">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
        

<section class="feature_part">
    <div class="container">
        <div class="row align-items-center justify-content-between">
        <div class="col-lg-7">
            <div class="feature_img">
                <img src="../images/viaje_2.jpeg" alt="">
            </div>
            </div>
            <div class="col-lg-5">
                <div class="feature_part_text">
                    
                    <h2>Tour Cañón del Sumidero y Chiapa de Corzo</h2>
                    <p>Como destino para viajar, Chiapas no te lo acabas; sus lugares mágicos, los climas y paisajes, las culturas que aquí afloran, su calidez pero también el orgullo por sus tradiciones, lo hacen diferente y grande.</p>
                    <span>La diversidad caracteriza a Chiapas, en lo cultural y en lo natural.</span>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="feature_part_text_iner">
                                <img src="images/pic-3.png" alt="">
                                <h4>london</h4>
                                <p>35 Places</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature_part_text_iner">
                                <img src="images/pic-3.png" alt="">
                                <h4>Kashmir</h4>
                                <p>75 Places</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="feature_part_text_iner">
                                <img src="images/pic-3.png" alt="">
                                <h4>chaina</h4>
                                <p>85 Places</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="popular_place">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section_tittle text-center">
                    <img src="images/globo.png" alt="">
                    <h2>Most Popular <span>place</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single_popular_place">
                    <img src="images/img_1.jpg" alt="">
                    <h4>Life of Egeft</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    <a href="#" class="btn1">book now</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_popular_place">
                    <img src="images/img_2.jpg" alt="">
                    <h4>Biking in Norway</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    <a href="#" class="btn1">book now</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_popular_place">
                    <img src="images/img_3.jpg" alt="">
                    <h4>Tour of iceland</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                    <a href="#" class="btn1">book now</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="place_details">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="place_detauls_text">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="place_details_content">
                                 <img src="images/globo_2.png" alt="">
                                <h2>Excursión de un día a Taxco</h2>
                                <p>Escape de la expansión de la Ciudad de México en un recorrido sin estrés por Taxco y Cuernavaca. Compre recuerdos de los célebres plateros de Taxco </p>
                                <span>Esta excursión le mostrará un poco más de la cultura mexicana y de las grandes ciudades.</span>
                            </div>
                        </div>
                    </div>
                    <img src="images/viaje_2.jpeg" alt="#">
                </div>
            </div>
            <div class="col-md-6">
                <div class="place_details_img">
                    <img src="images/viaje_3.jpg" alt="#">
                </div>
            </div>
        </div>
    </div>
    <div class="view_all_btn">
        <a href="#" class="view_btn">view all</a>
    </div>
</section>





<section class="cta_part">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-xl-7">
                <div class="cta_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter email address" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                        <div class="input-group-append" id="button-addon4">
                            <a href="#" class="btn">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="blog_part padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section_tittle">
                    <img src="img/section_tittle_img.png" alt="">
                    <h2>our blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_blog_part">
                    <img src="images/turismo.jpg" alt="">
                    <div class="blog_text">
                        <h2>Luxerious Car Rental</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <ul>
                            <li><i class="ti-calendar"></i>
                                <p>13th Dec</p>
                            </li>
                            <li><i class="ti-heart"></i>
                                <p>15</p>
                            </li>
                            <li><i class="far fa-comment-dots"></i>
                                <p>10</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_blog_part">
                    <img src="images/turismo.jpg" alt="">
                    <div class="blog_text">
                        <h2>Luxerious Car Rental</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <ul>
                            <li>
                                <i class="ti-calendar"></i>
                                <p>13th Dec</p>
                            </li>
                            <li>
                                <i class="ti-heart"></i>
                                <p>15</p>
                            </li>
                            <li>
                                <i class="far fa-comment-dots"></i>
                                <p>10</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_blog_part">
                    <img src="images/turismo.jpg" alt="">
                    <div class="blog_text">
                        <h2>Luxerious Car Rental</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <ul>
                            <li>
                                <i class="ti-calendar"></i>
                                <p>13th Dec</p>
                            </li>
                            <li>
                                <i class="ti-heart"></i>
                                <p>15</p>
                            </li>
                            <li>
                                <i class="far fa-comment-dots"></i>
                                <p>10</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



        
        
    @include('footer')
        
      <!--<h1>NVI CHALLENGE</h1>
      <p>El chanllenge consiste en recrear la homepage del siguiente <a href="https://colorlib.com/preview/theme/tourbi/">link</a>, maquetando el html y usando sass para generar los estilos.</p>

      <h2>hints</h2>
      <ul>
        <li>template a modificar: blog/resources/views/welcome.blade.php</li>
        <li>archivo sass que en el cual se agregaran los estilos: blog/resources/sass/app.scss</li>
        <li>Todas las imagenes y assets pueden ser harcodeados solo estamos evaluando la capacidad de hacer un maquetado en html y sass dentro de laravel.</li>
      </ul>-->
    </body>
</html>
