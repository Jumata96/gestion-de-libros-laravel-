@extends('layoutPublico.app')
@section('titulo','HOME')
@section('main-content') 
<div id="shopify-section-1523944992312" class="shopify-section ishi-slider-section index-section">
  <div class="ishislider">
    <div class="slideshow-block">
      <div id="ishislideshow-carousel" class="ishislideshow-carousel-1523944992312 owl-carousel owl-theme logo-bar">
        @foreach ($carrusel as $carrusel_dato)
        <div class="slideshow__item" >
          <a href="/" class="slideshow__link">
          <img src="{{url($carrusel_dato->url_imagen)}}" alt="" class="logo-bar__image" />
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <script>
    jQuery(document).ready(function() {
       $('.ishislideshow-carousel-1523944992312').owlCarousel({
          nav: true,
          loop: true,
          autoplay:true,
          animateOut: 'fadeOut',
          autoplayTimeout:4000,
          navText: [
            '<i class=\'material-icons\'></i>',
            '<i class=\'material-icons\'></i>'
          ],
          items: 1,
          itemsDesktop: false,
          itemsDesktopSmall: false,
          itemsTablet: false,
          itemsMobile: false
      });
     
    });
  </script>
</div>
{{-- seccion 01 --}}
<div id="shopify-section-1559824560995" class="shopify-section index-section ishi-banner-block">
  <div class="ishibannerblock">
    <div class="page-width">
      <div class="ishibannerblock-container">
        <div class="row">
          @foreach ($inicio_seccion_det01 as $inicio_seccion_01)
          <div class="bannerblock3 bannerblock col-sm-4 col-xs-12">
            <div class="image-container">
              <a class="ishi-customhover-fadeinoutdoublevertical darkcolor " href="/collections/comics-book">
              <img 
                src="{{url('storage/'.$inicio_seccion_01->url_file)}}"
                data-src=""
                data-widths="[370]"
                data-sizes="auto"
                alt="">
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
{{-- seccion 02 --}}
<div id="shopify-section-1556534333075" class="shopify-section ishi-product-block-section">
  <div class="ishiproduct-block product-bgcolor">
    <div class="page-width">
      <div class="section-header text-center">
        <h2 class="home-title">Catálogo de Libros</h2>
      </div>
      <div id="ishiproduct-block-carousel" class="logo-bar">
        <div class="logo-bar__item" >
          <ul id="products-tab" class="nav nav-tabs products-tab clearfix">
            {{-- 
            <li class="nav-item active">
              <a  href="#allCat" class="nav-link " data-toggle="tab">
              TODOS
              </a>
            </li>
            --}}
            @php
            $cont_categoria=0;
            @endphp
            @foreach ($libro_categoria as $categoriasLib)
            @php
            $cont_categoria+=1;
            @endphp
            @if ($cont_categoria==1)
            <li class="nav-item active">
              <a  href="#linkproductblock1-{{$categoriasLib->codigo}}" class="nav-link " data-toggle="tab">
              {{$categoriasLib->nombre}}
              </a>
            </li>
            @else
            <li class="nav-item ">
              <a  href="#linkproductblock1-{{$categoriasLib->codigo}}" class="nav-link " data-toggle="tab">
              {{$categoriasLib->nombre}}
              </a>
            </li>
            @endif 
            @endforeach
          </ul>
        </div>
        @php
            $cont_categoriaDet=0;
        @endphp
        <div class="tab-content tab-pane active" id="allCat">
          @foreach ($libro_categoria as $categoriaDet)
          @php
              $cont_categoriaDet+=1;
          @endphp
          @if ( $cont_categoriaDet ==1)
              <div class="row tab_content tab-pane active " id="linkproductblock1-{{$categoriaDet->codigo}}">
          @else
              <div class="row tab_content tab-pane  " id="linkproductblock1-{{$categoriaDet->codigo}}">
          @endif 
            <div class="owl-carousel owl-theme grid grid--uniform grid--view-items products-display productblock1-1556534333075">
              @foreach ($libro as $lib)
              @if($categoriaDet->codigo == $lib->libro_categoria) 
              <div class="multilevel-item">
                <div class="item grid__item grid__item--1556534348472 ">
                  <div class="grid-view-item">
                    <div class="grid-view-item__link grid-view-item__image-container">
                      <div class="grid-view-item__image-wrapper js">
                        <a href="/collections/history-book/products/be-the-wrost">
                          <div class="image-inner">
                            <div class="reveal">
                              <img 
                                class="grid-view-item__image lazyload  main-img "
                                src="{{url($lib->file_url)}}"
                                alt="Be The Wrost">
                              <img class="extra-img" src="{{url($lib->file_url)}}" alt="Be The Wrost" />
                              <span class="outstock-overlay">SOLD OUT</span>
                            </div>
                            <div class="hide imgurl-for-quickview">
                              @foreach ($libro_imagenes as $imagenesLib)
                              @if ($imagenesLib->codigo_libro== $lib->codigo)
                                  <span>{{url($imagenesLib->url_file)}}</span> 
                              @endif
                              
                              @endforeach  
                            </div>
                            <div class="hide socialurl-for-quickview">
                              <span>
                              </span>
                            </div>
                          </div>
                        </a>
                        <span class="shopify-product-reviews-badge" data-id="4928314802262"></span>
                      </div>
                      <div class="product-description">
                        <div class="product-detail">
                          <a href="/collections/history-book/products/be-the-wrost">
                            <div class="h4 grid-view-item__title">{{$lib->nombre}}</div>
                          </a>
                        </div>
                        <div class="grid-view-item__meta">
                          <!-- snippet/product-price.liquid -->
                          <!-- <div class="flags">
                            <div class="new-lbl"> 
                                new
                            </div>
                            <div class="sale-lbl">
                            </div>
                            </div> -->
                          @if ($lib->precio_oferta !=null && $lib->precio_oferta <$lib->costo )
                          <span class="product-price__price product-price__sale">
                          <span class="qv-regularprice is-bold">${{$lib->precio_oferta}}</span> 
                          </span>
                          <span class="visually-hidden">Precio Regular</span>
                          <span class="regular qv-discountprice" style="text-decoration: line-through;">${{$lib->costo}}</span>
                          @else
                          <span class="visually-hidden">Precio Regular </span>
                          <span class="original is-bold qv-regularprice">${{$lib->costo}}</span>
                          @endif
                        </div>
                        <div class="product-desc"> 
                          {{$lib->descripcion}}
                        </div>
                        <div class="thumbnail-buttons">
                          <div class="product-block-hover grid-hover">
                            <div class="qv-cartmain add_to_cart_main grid-cart hide">
                              <form action="/cart/add" method="post" class="add-to-cart product-form product-form-1556534333075" data-section="1556534333075">
                                <div class="product-selector">
                                </div>
                                <select name="id" data-section="1556534333075" class="product-form__variants no-js">
                                  <option  selected="selected"  value="{{$lib->codigo}}" data-available="1" data-price="${{$lib->costo}}" data-compareatprice="" >Default Title</option>
                                </select>
                                <div class="product-form__item product-form__item--quantity">
                                  <div class="dec button qtyminus">-</div>
                                  <input name="quantity" value="1"  max="2" class="quantity">
                                  <div class="inc button qtyplus">+</div>
                                </div>
                                <div class="product-form__item product-form__item--submit">
                                  <a {{-- href="javascript: void(0)" --}}  class="qv-addToCart addToCart enable btn btnSeleccionar tooltipped " data-tooltip="Seleccionar"  data-id="{{$lib->codigo}}"> 
                                  <span class="value instock">
                                  Add To Cart
                                  </span>
                                  <span class="adding">
                                  Adding...
                                  </span>
                                  </a>

                                
                                  <script>
                                    	$('.btnSeleccionar').on('click',function () {
                                        var dataId = $(this).attr("data-id");   
                                        console.log(dataId); 
                                      }); 
                                  </script>


                                </div>
                                <input type="hidden" name="return_to" value="back" />
                              </form>
                            </div>
                            <div class="nm-cartmain add_to_cart_main grid-cart">
                              <form action="/cart/add" method="post" class="add-to-cart product-form product-form-1556534333075" data-section="1556534333075">
                                <select name="prduct-variant" data-section="1556534333075" class="product-form__variants no-js">
                                  <option  selected="selected"  value="{{$lib->codigo}}" data-available="1" >Default Title</option>
                                </select>
                                <input type="text" name="prduct-variant" value="{{$lib->codigo}}" class="product-form__input">
                                <input type="number" name="product-quantity" value="1" min="1" max="2" class="product-form__input">
                                <div class="product-form__item product-form__item--submit">
                                  <a href="javascript: void(0)"  class="nm-addToCart addToCart enable btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                      <symbol id="addtocart" viewBox="0 0 1100 1100">
                                        <title>addtocart</title>
                                        <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                          S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                          c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                        <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                          S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                          c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                        <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                          L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                          c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                          C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                      </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 30 30">
                                      <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                    </svg>
                                    <span class="value">
                                    Add To Cart
                                    </span>
                                  </a>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="quick-view">
                            <button class="btn" data-toggle="modal">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="quickview" viewBox="0 0 1000 1000">
                                  <title>quickview</title>
                                  <g>
                                    <g>
                                      <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                        c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                        C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                        c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                        C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                    </g>
                                  </g>
                                  <g>
                                    <g>
                                      <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                        s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                        s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                    </g>
                                  </g>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#quickview" x="25%" y="25%"></use>
                              </svg>
                              <span> Quick View</span>
                            </button>
                          </div>
                          <div class="add-to-wishlist">
                            <div class="show">
                              <div class="default-wishbutton-be-the-wrost loading">
                                <a class="add-in-wishlist-js btn" data-href="be-the-wrost">
                                  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                      <title>wishlist-outline</title>
                                      <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                        c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                        c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                        l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                        C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                        l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                        c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                        c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                        c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                    </symbol>
                                  </svg>
                                  <svg class="icon" viewBox="0 0 30 30">
                                    <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                                  </svg>
                                  <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                                </a>
                              </div>
                              <div class="loadding-wishbutton-be-the-wrost loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="be-the-wrost"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                              <div class="added-wishbutton-be-the-wrost loading" style="display: none;">
                                <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                                  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="wishlist" viewBox="0 0 1200 1200">
                                      <title>wishlist</title>
                                      <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                        c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                        C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                        c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                        C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                    </symbol>
                                  </svg>
                                  <svg class="icon" viewBox="0 0 30 30">
                                    <use xlink:href="#wishlist" x="30%" y="30%"></use>
                                  </svg>
                                  <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <noscript>
                        <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/2_8f3cb503-a1b5-4432-a422-04ed4caf4aac.png?v=1602667847" alt="Be The Wrost" style="max-width: 0.0px;">
                      </noscript>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              @endforeach 
            </div>
          </div>
          @endforeach 
        </div>
      </div>
    </div>
  </div>
</div>
{{-- seccion 03 --}}
<div id="shopify-section-1524029490964" class="shopify-section index-section manufacture-section">
  <div class="page-width manufacture-main">
    <div class="manufacture-block">
      <div id="manufacture-carousel" class="manufacture-carousel-1524029490964 owl-carousel owl-theme logo-bar">
        @foreach ($inicio_seccion_det03 as $inicio_seccion_03)
        <div class="logo-bar__item" >
          <a href="/" class="logo-bar__link">
          <img src="{{url('storage/'.$inicio_seccion_03->url_file)}}" alt="" class="{{url($inicio_seccion_03->name_file)}}" />
          </a>
        </div>
        @endforeach 
      </div>
    </div>
  </div>
  <style type="text/css"> 
    .ishi-product-block-section .productbgimage{
    background-image:url(//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c.gif);
    }
    .ishi-product-block-section .product-bgcolor{
    background-color: #fbfafd;
    }
    .ishi-product-block-section .ishiproduct-block{
    padding: 70px 0;
    }
    .ishi-product-block-section .ishiproduct-block .section-header h2{
    color: #373e4e;
    }
  </style>
  <script>
    jQuery(document).ready(function() {
        
        
            $(".productblock1-1556534333075").owlCarousel({
              nav: true, // Show next and prev buttons
              navText: [
                '<i class=\'material-icons\'></i>',
                '<i class=\'material-icons\'></i>'
              ],
              dots: false,
              rewind: true,
              loop: false,
              responsive: {
                0: {
                  items: 2
                },
                544: {
                  items: 2
                },
                768: {
                  items: 2
                },
                992: {
                  items: 3
                },
                1200: {
                  items: 4
                }
              }
            });
           
        
            $(".productblock2-1556534333075").owlCarousel({
              nav: true, // Show next and prev buttons
              navText: [
                '<i class=\'material-icons\'></i>',
                '<i class=\'material-icons\'></i>'
              ],
              dots: false,
              rewind: true,
              loop: false,
              responsive: {
                0: {
                  items: 2
                },
                544: {
                  items: 2
                },
                768: {
                  items: 2
                },
                992: {
                  items: 3
                },
                1200: {
                  items: 4
                }
              }
            });
           
        
            $(".productblock3-1556534333075").owlCarousel({
              nav: true, // Show next and prev buttons
              navText: [
                '<i class=\'material-icons\'></i>',
                '<i class=\'material-icons\'></i>'
              ],
              dots: false,
              rewind: true,
              loop: false,
              responsive: {
                0: {
                  items: 2
                },
                544: {
                  items: 2
                },
                768: {
                  items: 2
                },
                992: {
                  items: 3
                },
                1200: {
                  items: 4
                }
              }
            });
           
        
    });
  </script>
</div>
{{-- seccion 04 --}}
<div id="shopify-section-1559881983230" class="shopify-section ishi-testimonial-section">
  <div class="ishitestimonial">
    <div class="testimonial-block testimonialimage">
      <div class="page-width" >
        <div class="testimonial-inner-container testimonial-text-right">
          <div class="section-header text-center">
            <h2 class="home-title">Nuestros Clientes</h2>
          </div>
          <div id="ishitestimonials-carousel" class="ishitestimonials-carousel-1559881983230 owl-carousel owl-theme">
            @foreach ($inicio_seccion_det04 as $inicio_seccion04) 
            <div class="item">
              <div class="ishitestimonials-container">
                <div class="user-description">
                  <p> {{$inicio_seccion04->glosa}} </p>
                </div>
                <div class="user-info">
                  <div class="testimonial-img">
                    <img 
                      src="{{url('storage/'.$inicio_seccion04->url_file)}}"
                      data-src=""
                      data-widths="[140, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                      data-sizes="auto"
                      alt="">
                  </div>
                  <div class="user-content">
                    <span class="user-name"> {{$inicio_seccion04->titulo}}</span>
                    <span class="user-designation"> {{$inicio_seccion04->descripcion}}</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach 
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
    .ishi-testimonial-section .testimonialimage{
    background-image:url('layoutP/img/testimonialbackground.png');
    }
    .ishi-testimonial-section .testimonial-color{
    background:#ffffff;
    }
    .ishi-testimonial-section .testimonial-block{
    padding: 100px 0;
    }
    .ishi-testimonial-section .testimonial-text-right{
    float: right;
    }
    .ishi-testimonial-section .testimonial-text-left{
    float: left;
    }
    .ishi-testimonial-section .testimonial-text-center{
    margin: 0 auto;
    }
    .ishi-testimonial-section .testimonial-block .section-header h2{
    color:#373e4e;
    }
    .ishi-testimonial-section .ishitestimonials-container .user-name{
    color:#1a9bdc;
    }
    .ishi-testimonial-section .ishitestimonials-container .user-designation{
    color:#525d70;
    }
    .ishi-testimonial-section .ishitestimonials-container .user-description{
    color:#525d70;
    }
  </style>
  <script>
    jQuery(document).ready(function() {
      $('.ishitestimonials-carousel-1559881983230').owlCarousel({
          nav:true,
          dots:false,
          loop: false,
          rewind: true,
          autoplay:false,
          autoplayTimeout:2000,
          navText: [
            '<i class=\'material-icons\'></i>',
            '<i class=\'material-icons\'></i>'
          ],
          items: 1
        });
    });
  </script>
</div>
{{-- seccion  --}}
<div id="shopify-section-1553503412068" class="shopify-section ishi-service-section">
  <div class="ishiservices">
    <div class="page-width">
      <div class="ishiservices-content">
        <div class="service-block" id="services-1553503412068">
          <div class="services col-md-3 col-sm-6 col-xs-6">
            <a href="/">
              <div class="service-img-outer">
                <div class="service-img">
                  <img src="//cdn.shopify.com/s/files/1/0267/2073/1222/files/serviceicon1_cc2aba93-306d-48be-9c2c-e3974ac56a14_small.png?v=1602504742" alt="" />
                </div>
              </div>
              <div class="service-text">
                <div class="service-title">ENVÍO GRATIS</div>
                <!--                      <div class="service-desc"></div> -->
              </div>
            </a>
          </div>
          <div class="services col-md-3 col-sm-6 col-xs-6">
            <a href="/">
              <div class="service-img-outer">
                <div class="service-img">
                  <img src="//cdn.shopify.com/s/files/1/0267/2073/1222/files/serviceicon2_72dbc6e0-a43f-4339-ae56-391246bdb84e_small.png?v=1602504774" alt="" />
                </div>
              </div>
              <div class="service-text">
                <div class="service-title">COMPRE SEGURO</div>
                <!--                      <div class="service-desc"></div> -->
              </div>
            </a>
          </div>
          <div class="services col-md-3 col-sm-6 col-xs-6">
            <a href="/">
              <div class="service-img-outer">
                <div class="service-img">
                  <img src="//cdn.shopify.com/s/files/1/0267/2073/1222/files/serviceicon3_ad2d0cb5-4964-4658-89f7-516261511e42_small.png?v=1602504816" alt="" />
                </div>
              </div>
              <div class="service-text">
                <div class="service-title">ATENCIÓN EN LINEA</div>
                <!--                      <div class="service-desc"></div> -->
              </div>
            </a>
          </div>
          <div class="services col-md-3 col-sm-6 col-xs-6">
            <a href="/">
              <div class="service-img-outer">
                <div class="service-img">
                  <img src="//cdn.shopify.com/s/files/1/0267/2073/1222/files/serviceicon4_6b72fa0d-45ff-4e23-b0e3-64f08ef6e308_small.png?v=1602504834" alt="" />
                </div>
              </div>
              <div class="service-text">
                <div class="service-title">DESCUENTOS</div>
                <!--                      <div class="service-desc"></div> -->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css"> 
    .ishi-service-section .ishiservices .ishiservices-content{
    background-color: #1a9bdc;
    }
    .ishi-service-section .ishiservices .services .service-text .service-title{
    color: #ffffff;
    }
  </style>
</div>
{{-- seccion 05 --}}
<div id="shopify-section-160256949757278936" class="shopify-section ishi-deal-section">
  <div class="specialdeal-block deal-bgcolor">
    <div class="page-width">
      <div class="row">
        <div class="product_content">
          <div class="section-header text-center">
            <h2 class="home-title">Nuestro Top</h2>
          </div>
          <div id="specialdealcarousel" class="specialdealcarousel-160256949757278936 products-display owl-carousel owl-theme">
            @foreach ($inicio_seccion_det05 as $inicio_seccion_05) 
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2020-12-30 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/wreck-this-journal">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="{{url('storage/'.$inicio_seccion_05->url_file)}}"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="Wreck This Journal">
                          <img class="extra-img" src="{{url('storage/'.$inicio_seccion_05->url_file)}}" alt="Wreck This Journal" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        {{--                         
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/8_92261dbe-1bda-49ef-add2-15b58dddd862_1000x1000.png?v=1602668330</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_a544de3d-f76d-4ec9-86c1-c3dca303013a_1000x1000.png?v=1602668330</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/10_05fbb29b-b249-4a84-9955-63dd7772fbee_1000x1000.png?v=1602668330</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/11_d8f01122-703f-40c7-a5e6-2a4f970b5245_1000x1000.png?v=1602668330</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/12_78eec33e-fc14-4a7f-864c-3ea204513b9e_1000x1000.png?v=1602668330</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/13_58d568d0-1765-45da-a011-9cf01cef9e46_1000x1000.png?v=1602668330</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/14_a441eef7-cf8d-4fee-8f16-6ef9f7b812b6_1000x1000.png?v=1602668331</span>
                        </div>
                        --}}
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928320012374"></span>
                    <div id="productcountdown1" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/wreck-this-journal">
                        <div class="h4 grid-view-item__title">{{$inicio_seccion_05->titulo}}</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold">${{$inicio_seccion_05->precio}}</span> 
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="regular qv-discountprice" style="text-decoration: line-through;">$55.00</span>
                    </div>
                    <div class="product-desc"> 
                      {{$inicio_seccion_05->descripcion}}
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Size
                                </label>
                                <select class="single-option-selector" data-index="option1">
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                </select>
                              </div>
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Color
                                </label>
                                <select class="single-option-selector" data-index="option2">
                                  <option value="Black">Black</option>
                                  <option value="Red">Red</option>
                                  <option value="Yellow">Yellow</option>
                                </select>
                              </div>
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297022648406" data-available="1" data-price="${{$inicio_seccion_05->precio}}" data-compareatprice="$55.00" >S / Black</option>
                              <option  value="33297022681174" data-available="1" data-price="$51.00" data-compareatprice="$55.00" >S / Red</option>
                              <option  value="33297022713942" data-available="1" data-price="$51.00" data-compareatprice="$55.00" >S / Yellow</option>
                              <option  value="33297022746710" data-available="1" data-price="$53.00" data-compareatprice="$55.00" >M / Black</option>
                              <option  value="33297022779478" data-available="1" data-price="$53.00" data-compareatprice="$55.00" >M / Red</option>
                              <option  value="33297022812246" data-available="1" data-price="$53.00" data-compareatprice="$55.00" >M / Yellow</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)" class="qv-addToCart addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="outstock">
                              SOLD OUT
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297022648406" data-available="1" >S / Black</option>
                              <option  value="33297022681174" data-available="1" >S / Red</option>
                              <option  value="33297022713942" data-available="1" >S / Yellow</option>
                              <option  value="33297022746710" data-available="1" >M / Black</option>
                              <option  value="33297022779478" data-available="1" >M / Red</option>
                              <option  value="33297022812246" data-available="1" >M / Yellow</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33297022648406" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="/products/wreck-this-journal" class="addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                View Option
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-wreck-this-journal loading">
                            <a class="add-in-wishlist-js btn" data-href="wreck-this-journal">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-wreck-this-journal loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="wreck-this-journal"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-wreck-this-journal loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/8_92261dbe-1bda-49ef-add2-15b58dddd862.png?v=1602668330" alt="Wreck This Journal" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            @endforeach
            {{-- 
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2021-04-15 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/christain-dataing">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/12_e8c1042b-09e9-4ac3-8b8e-53ebfde081ec_370x370.png?v=1602668415"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="Christain Dataing">
                          <img class="extra-img" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/13_0ce17ca6-a84e-4710-b11c-ed29fe2a66ec_370x370.png?v=1602668415" alt="Christain Dataing" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/12_e8c1042b-09e9-4ac3-8b8e-53ebfde081ec_1000x1000.png?v=1602668415</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/13_0ce17ca6-a84e-4710-b11c-ed29fe2a66ec_1000x1000.png?v=1602668415</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/14_98f8dff2-fa69-4b07-81eb-6710732a5a74_1000x1000.png?v=1602668416</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/15_c11c58c7-a33a-4eb0-ad0a-720b97cfe1f2_1000x1000.png?v=1602668416</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/16_ef969953-9b40-4be8-a994-be3aa306706d_1000x1000.png?v=1602668416</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/17_83ef3f2a-6af2-4f88-a8c6-a310e1278d8f_1000x1000.png?v=1602668416</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/18_4f580edb-5232-4796-a9e9-026478449768_1000x1000.png?v=1602668416</span>
                        </div>
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928320569430"></span>
                    <div id="productcountdown2" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/christain-dataing">
                        <div class="h4 grid-view-item__title">Christain Dataing</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold">$55.00 </span> 
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="regular qv-discountprice" style="text-decoration: line-through;">$59.00</span>
                    </div>
                    <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                      Sample Unordered List
                      Comodous in tempor...
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Size
                                </label>
                                <select class="single-option-selector" data-index="option1">
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                  <option value="XL">XL</option>
                                </select>
                              </div>
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Color
                                </label>
                                <select class="single-option-selector" data-index="option2">
                                  <option value="Blue">Blue</option>
                                  <option value="Orange">Orange</option>
                                  <option value="Gray">Gray</option>
                                </select>
                              </div>
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297021337686" data-available="1" data-price="$55.00" data-compareatprice="$59.00" >M / Blue</option>
                              <option  value="33297021370454" data-available="1" data-price="$55.00" data-compareatprice="$59.00" >M / Orange</option>
                              <option  value="33297021403222" data-available="1" data-price="$55.00" data-compareatprice="$59.00" >M / Gray</option>
                              <option  value="33297021435990" data-available="1" data-price="$56.00" data-compareatprice="$59.00" >L / Blue</option>
                              <option  value="33297021468758" data-available="1" data-price="$56.00" data-compareatprice="$59.00" >L / Orange</option>
                              <option  value="33297021501526" data-available="1" data-price="$56.00" data-compareatprice="$59.00" >L / Gray</option>
                              <option  value="33297021534294" data-available="1" data-price="$57.00" data-compareatprice="$59.00" >XL / Blue</option>
                              <option  value="33297021567062" data-available="1" data-price="$57.00" data-compareatprice="$59.00" >XL / Orange</option>
                              <option  value="33297021599830" data-available="1" data-price="$57.00" data-compareatprice="$59.00" >XL / Gray</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)" class="qv-addToCart addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="outstock">
                              SOLD OUT
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297021337686" data-available="1" >M / Blue</option>
                              <option  value="33297021370454" data-available="1" >M / Orange</option>
                              <option  value="33297021403222" data-available="1" >M / Gray</option>
                              <option  value="33297021435990" data-available="1" >L / Blue</option>
                              <option  value="33297021468758" data-available="1" >L / Orange</option>
                              <option  value="33297021501526" data-available="1" >L / Gray</option>
                              <option  value="33297021534294" data-available="1" >XL / Blue</option>
                              <option  value="33297021567062" data-available="1" >XL / Orange</option>
                              <option  value="33297021599830" data-available="1" >XL / Gray</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33297021337686" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="/products/christain-dataing" class="addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                View Option
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-christain-dataing loading">
                            <a class="add-in-wishlist-js btn" data-href="christain-dataing">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-christain-dataing loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="christain-dataing"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-christain-dataing loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/12_e8c1042b-09e9-4ac3-8b8e-53ebfde081ec.png?v=1602668415" alt="Christain Dataing" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2021-02-22 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/narrow-bridge">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_b306e969-9caa-4aaf-afca-3da93cab96f8_370x370.png?v=1602667940"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="Narrow Bridge">
                          <img class="extra-img" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/7_8940bd71-7142-42d3-b82f-1f8f6a03b483_370x370.png?v=1602667940" alt="Narrow Bridge" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_b306e969-9caa-4aaf-afca-3da93cab96f8_1000x1000.png?v=1602667940</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/7_8940bd71-7142-42d3-b82f-1f8f6a03b483_1000x1000.png?v=1602667940</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/8_522daecc-79f9-43ed-8119-69cc5809ec8e_1000x1000.png?v=1602667940</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_55151f38-97d2-4078-880d-e3f53571879c_1000x1000.png?v=1602667940</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/10_4637b08e-db88-4af5-9db6-14cbc0288637_1000x1000.png?v=1602667940</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/11_093ba6d9-fe7f-48a3-8b0a-3b838b47bb9e_1000x1000.png?v=1602667940</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/12_4d305751-42da-4eb9-863d-1ddb64a1b785_1000x1000.png?v=1602667940</span>
                        </div>
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928316473430"></span>
                    <div id="productcountdown3" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/narrow-bridge">
                        <div class="h4 grid-view-item__title">Narrow Bridge</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold">$49.00 </span> 
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="regular qv-discountprice" style="text-decoration: line-through;">$53.00</span>
                    </div>
                    <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                      Sample Unordered List
                      Comodous in tempor...
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Size
                                </label>
                                <select class="single-option-selector" data-index="option1">
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                  <option value="XL">XL</option>
                                </select>
                              </div>
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Color
                                </label>
                                <select class="single-option-selector" data-index="option2">
                                  <option value="Red">Red</option>
                                  <option value="Brown">Brown</option>
                                  <option value="Pink">Pink</option>
                                </select>
                              </div>
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297023500374" data-available="1" data-price="$49.00" data-compareatprice="$53.00" >M / Red</option>
                              <option  value="33297023533142" data-available="1" data-price="$49.00" data-compareatprice="$53.00" >M / Brown</option>
                              <option  value="33297023598678" data-available="1" data-price="$49.00" data-compareatprice="$53.00" >M / Pink</option>
                              <option  value="33297023631446" data-available="1" data-price="$50.00" data-compareatprice="$53.00" >L / Red</option>
                              <option  value="33297023664214" data-available="1" data-price="$50.00" data-compareatprice="$53.00" >L / Brown</option>
                              <option  value="33297023696982" data-available="1" data-price="$50.00" data-compareatprice="$53.00" >L / Pink</option>
                              <option  value="33297023729750" data-available="1" data-price="$51.00" data-compareatprice="$53.00" >XL / Red</option>
                              <option  value="33297023762518" data-available="1" data-price="$51.00" data-compareatprice="$53.00" >XL / Brown</option>
                              <option  value="33297023795286" data-available="1" data-price="$51.00" data-compareatprice="$53.00" >XL / Pink</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)" class="qv-addToCart addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="outstock">
                              SOLD OUT
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297023500374" data-available="1" >M / Red</option>
                              <option  value="33297023533142" data-available="1" >M / Brown</option>
                              <option  value="33297023598678" data-available="1" >M / Pink</option>
                              <option  value="33297023631446" data-available="1" >L / Red</option>
                              <option  value="33297023664214" data-available="1" >L / Brown</option>
                              <option  value="33297023696982" data-available="1" >L / Pink</option>
                              <option  value="33297023729750" data-available="1" >XL / Red</option>
                              <option  value="33297023762518" data-available="1" >XL / Brown</option>
                              <option  value="33297023795286" data-available="1" >XL / Pink</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33297023500374" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="/products/narrow-bridge" class="addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                View Option
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-narrow-bridge loading">
                            <a class="add-in-wishlist-js btn" data-href="narrow-bridge">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-narrow-bridge loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="narrow-bridge"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-narrow-bridge loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_b306e969-9caa-4aaf-afca-3da93cab96f8.png?v=1602667940" alt="Narrow Bridge" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2021-03-20 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/mystery-of-magi">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_79f94d63-200c-4616-880e-ff60a3437935_370x370.png?v=1602667152"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="Mystery Of Magi">
                          <img class="extra-img" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/10_23ed4d5b-123c-4528-a040-8fdad8e35265_370x370.png?v=1602667152" alt="Mystery Of Magi" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_79f94d63-200c-4616-880e-ff60a3437935_1000x1000.png?v=1602667152</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/10_23ed4d5b-123c-4528-a040-8fdad8e35265_1000x1000.png?v=1602667152</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/11_7e5fbae7-c137-4450-8905-5670549cc4da_1000x1000.png?v=1602667153</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/12_74459b1c-d98c-40d7-ab29-a795a1be0b76_1000x1000.png?v=1602667153</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/13_501b8af1-d977-4af0-b51a-c1009240ba04_1000x1000.png?v=1602667153</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/14_621ce5bb-75c6-4ef2-ae9d-b4381ce99fac_1000x1000.png?v=1602667153</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/15_cee328f5-acf2-4683-9893-908b25f9426f_1000x1000.png?v=1602667154</span>
                        </div>
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928309067862"></span>
                    <div id="productcountdown4" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/mystery-of-magi">
                        <div class="h4 grid-view-item__title">Mystery Of Magi</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold">$33.00 </span> 
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="regular qv-discountprice" style="text-decoration: line-through;">$38.00</span>
                    </div>
                    <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                      Sample Unordered List
                      Comodous in tempor...
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Size
                                </label>
                                <select class="single-option-selector" data-index="option1">
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                </select>
                              </div>
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Color
                                </label>
                                <select class="single-option-selector" data-index="option2">
                                  <option value="Green">Green</option>
                                  <option value="Purple">Purple</option>
                                  <option value="Orange">Orange</option>
                                </select>
                              </div>
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297026449494" data-available="1" data-price="$33.00" data-compareatprice="$38.00" >M / Green</option>
                              <option  value="33297026482262" data-available="1" data-price="$33.00" data-compareatprice="$38.00" >M / Purple</option>
                              <option  value="33297026515030" data-available="1" data-price="$33.00" data-compareatprice="$38.00" >M / Orange</option>
                              <option  value="33297026547798" data-available="1" data-price="$35.00" data-compareatprice="$38.00" >L / Green</option>
                              <option  value="33297026580566" data-available="1" data-price="$35.00" data-compareatprice="$38.00" >L / Purple</option>
                              <option  value="33297026613334" data-available="1" data-price="$35.00" data-compareatprice="$38.00" >L / Orange</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)" class="qv-addToCart addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="outstock">
                              SOLD OUT
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297026449494" data-available="1" >M / Green</option>
                              <option  value="33297026482262" data-available="1" >M / Purple</option>
                              <option  value="33297026515030" data-available="1" >M / Orange</option>
                              <option  value="33297026547798" data-available="1" >L / Green</option>
                              <option  value="33297026580566" data-available="1" >L / Purple</option>
                              <option  value="33297026613334" data-available="1" >L / Orange</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33297026449494" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="/products/mystery-of-magi" class="addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                View Option
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-mystery-of-magi loading">
                            <a class="add-in-wishlist-js btn" data-href="mystery-of-magi">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-mystery-of-magi loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="mystery-of-magi"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-mystery-of-magi loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_79f94d63-200c-4616-880e-ff60a3437935.png?v=1602667152" alt="Mystery Of Magi" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2021-06-12 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/drowing-prompts">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/3_a738e577-b00f-415b-bde9-34c8b790997a_370x370.png?v=1602666728"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="Drowing Prompts">
                          <img class="extra-img" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/4_5f62faa2-99f1-4612-a534-24d8e520d146_370x370.png?v=1602666728" alt="Drowing Prompts" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/3_a738e577-b00f-415b-bde9-34c8b790997a_1000x1000.png?v=1602666728</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/4_5f62faa2-99f1-4612-a534-24d8e520d146_1000x1000.png?v=1602666728</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/5_1ec313c9-63da-4d6a-91cd-6c439e95a79a_1000x1000.png?v=1602666728</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_ed90f3c6-9a84-4784-9c31-4346d761efb5_1000x1000.png?v=1602666729</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/7_b7fa9d95-afd9-4dff-b8d0-68416d623bbf_1000x1000.png?v=1602666729</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/8_788e6bff-7172-40bf-a3d0-4eb6141f438d_1000x1000.png?v=1602666730</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_a0440a69-b3fa-463b-9d68-6a76450fcbba_1000x1000.png?v=1602666730</span>
                        </div>
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928305791062"></span>
                    <div id="productcountdown5" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/drowing-prompts">
                        <div class="h4 grid-view-item__title">Drowing Prompts</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold">$27.00 </span> 
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="regular qv-discountprice" style="text-decoration: line-through;">$33.00</span>
                    </div>
                    <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                      Sample Unordered List
                      Comodous in tempor...
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Size
                                </label>
                                <select class="single-option-selector" data-index="option1">
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                </select>
                              </div>
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Color
                                </label>
                                <select class="single-option-selector" data-index="option2">
                                  <option value="Brown">Brown</option>
                                  <option value="Green">Green</option>
                                </select>
                              </div>
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297025794134" data-available="1" data-price="$27.00" data-compareatprice="$33.00" >S / Brown</option>
                              <option  value="33297025826902" data-available="1" data-price="$27.00" data-compareatprice="$33.00" >S / Green</option>
                              <option  value="33297025859670" data-available="1" data-price="$28.00" data-compareatprice="$33.00" >M / Brown</option>
                              <option  value="33297025892438" data-available="1" data-price="$28.00" data-compareatprice="$33.00" >M / Green</option>
                              <option  value="33297025925206" data-available="1" data-price="$29.00" data-compareatprice="$33.00" >L / Brown</option>
                              <option  value="33297025957974" data-available="1" data-price="$29.00" data-compareatprice="$33.00" >L / Green</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)" class="qv-addToCart addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="outstock">
                              SOLD OUT
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297025794134" data-available="1" >S / Brown</option>
                              <option  value="33297025826902" data-available="1" >S / Green</option>
                              <option  value="33297025859670" data-available="1" >M / Brown</option>
                              <option  value="33297025892438" data-available="1" >M / Green</option>
                              <option  value="33297025925206" data-available="1" >L / Brown</option>
                              <option  value="33297025957974" data-available="1" >L / Green</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33297025794134" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="/products/drowing-prompts" class="addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                View Option
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-drowing-prompts loading">
                            <a class="add-in-wishlist-js btn" data-href="drowing-prompts">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-drowing-prompts loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="drowing-prompts"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-drowing-prompts loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/3_a738e577-b00f-415b-bde9-34c8b790997a.png?v=1602666728" alt="Drowing Prompts" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2021-03-30 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/london-coffee">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/5_0f84e7fa-199e-4e92-a97c-3c222fb84f64_370x370.png?v=1602666730"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="London Coffee">
                          <img class="extra-img" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_59f62b51-b28f-42d0-8505-4919bb5ca998_370x370.png?v=1602666730" alt="London Coffee" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/5_0f84e7fa-199e-4e92-a97c-3c222fb84f64_1000x1000.png?v=1602666730</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_59f62b51-b28f-42d0-8505-4919bb5ca998_1000x1000.png?v=1602666730</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/7_ef13905b-f4d8-4f18-b465-701830cd79ce_1000x1000.png?v=1602666730</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/8_3fa8f0cd-9579-4a51-a366-25e1dfa97af0_1000x1000.png?v=1602666731</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_faea1027-f402-491f-8e90-b0ff910fc36f_1000x1000.png?v=1602666731</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/10_10ae1994-b798-44bb-aa9f-6a6cca26f288_1000x1000.png?v=1602666731</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/11_e7468c2d-39e6-46ba-859e-ea10c35c5d0e_1000x1000.png?v=1602666731</span>
                        </div>
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928305823830"></span>
                    <div id="productcountdown7" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/london-coffee">
                        <div class="h4 grid-view-item__title">London Coffee</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold"> $29.00 </span>
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="qv-discountprice regular"  style="text-decoration: line-through;">$31.00</span>
                    </div>
                    <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                      Sample Unordered List
                      Comodous in tempor...
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33296924377174" data-available="1" data-price="$29.00" data-compareatprice="$31.00" >Default Title</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)"  class="qv-addToCart  addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33296924377174" data-available="1" >Default Title</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33296924377174" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)"  class="nm-addToCart addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                Add To Cart
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-london-coffee loading">
                            <a class="add-in-wishlist-js btn" data-href="london-coffee">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-london-coffee loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="london-coffee"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-london-coffee loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/5_0f84e7fa-199e-4e92-a97c-3c222fb84f64.png?v=1602666730" alt="London Coffee" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            <div class="grid__item grid__item--160256949757278936 productdeal"
              data-dealcounter="2021-06-10 00:00:00"
              >
              <div class="grid-view-item">
                <div class="grid-view-item__link grid-view-item__image-container">
                  <div class="grid-view-item__image-wrapper js">
                    <a href="/products/grimoire-anthology">
                      <div class="image-inner">
                        <div class="reveal">
                          <img 
                            class="grid-view-item__image lazyload  main-img "
                            src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/4_dd2151d1-fc71-43d7-b490-04814804ac21_370x370.png?v=1602667881"
                            data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                            data-sizes="auto"
                            alt="Grimoire Anthology">
                          <img class="extra-img" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/5_3d4cc004-29a4-44d4-882e-63462f02d025_370x370.png?v=1602667881" alt="Grimoire Anthology" />
                        </div>
                        <span class="outstock-overlay">SOLD OUT</span>
                        <div class="hide imgurl-for-quickview">
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/4_dd2151d1-fc71-43d7-b490-04814804ac21_1000x1000.png?v=1602667881</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/5_3d4cc004-29a4-44d4-882e-63462f02d025_1000x1000.png?v=1602667881</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/6_2b64734a-d8d2-424a-910d-9d2c7a8fbc40_1000x1000.png?v=1602667881</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/7_f56b38d2-d17c-4d3e-b35c-407b5d3921a5_1000x1000.png?v=1602667881</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/8_0af5244d-161d-43dd-9d9b-a9519d4b7710_1000x1000.png?v=1602667881</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/9_3d22dc8c-f757-4c58-91b2-82c469176cb2_1000x1000.png?v=1602667881</span>
                          <span>//cdn.shopify.com/s/files/1/0267/2073/1222/products/10_36c820b5-6fde-4139-b27f-690d63348e5a_1000x1000.png?v=1602667881</span>
                        </div>
                        <div class="hide socialurl-for-quickview">
                          <span>
                          </span>
                        </div>
                      </div>
                    </a>
                    <span class="shopify-product-reviews-badge" data-id="4928315129942"></span>
                    <div id="productcountdown8" class="productcountdown">
                      <div class="countdown-days countdown">
                        <div class="data"></div>
                        <div class="text">Days</div>
                      </div>
                      <div class="countdown-hours countdown">
                        <div class="data"></div>
                        <div class="text">Hours</div>
                      </div>
                      <div class="countdown-minutes countdown">
                        <div class="data"></div>
                        <div class="text">Mins</div>
                      </div>
                      <div class="countdown-seconds countdown">
                        <div class="data"></div>
                        <div class="text">Secs</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-description">
                    <div class="product-detail">
                      <a href="/products/grimoire-anthology">
                        <div class="h4 grid-view-item__title">Grimoire Anthology</div>
                      </a>
                    </div>
                    <div class="grid-view-item__meta">
                      <!-- snippet/product-price.liquid -->
                      <!-- <div class="flags">
                        <div class="new-lbl">
                          
                            
                            
                            new
                        </div>
                        <div class="sale-lbl">
                            <span class="product-price__sale-label">Reduced Price</span>
                          
                        </div>
                        </div> -->
                      <span class="product-price__price product-price__sale">
                      <span class="qv-regularprice is-bold">$47.00 </span> 
                      </span>
                      <span class="visually-hidden">Regular price</span>
                      <span class="regular qv-discountprice" style="text-decoration: line-through;">$52.00</span>
                    </div>
                    <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                      Sample Unordered List
                      Comodous in tempor...
                    </div>
                    <div class="thumbnail-buttons">
                      <div class="product-block-hover grid-hover">
                        <div class="qv-cartmain add_to_cart_main grid-cart hide">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <div class="product-selector">
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Size
                                </label>
                                <select class="single-option-selector" data-index="option1">
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                </select>
                              </div>
                              <div class="selector-wrapper js product-form__item">
                                <label >
                                Color
                                </label>
                                <select class="single-option-selector" data-index="option2">
                                  <option value="Red">Red</option>
                                  <option value="Blue">Blue</option>
                                  <option value="Black">Black</option>
                                </select>
                              </div>
                            </div>
                            <select name="id" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297030479958" data-available="1" data-price="$47.00" data-compareatprice="$52.00" >S / Red</option>
                              <option  value="33297030512726" data-available="1" data-price="$47.00" data-compareatprice="$52.00" >S / Blue</option>
                              <option  value="33297030545494" data-available="1" data-price="$47.00" data-compareatprice="$52.00" >S / Black</option>
                              <option  value="33297030578262" data-available="1" data-price="$48.00" data-compareatprice="$52.00" >M / Red</option>
                              <option  value="33297030611030" data-available="1" data-price="$48.00" data-compareatprice="$52.00" >M / Blue</option>
                              <option  value="33297030643798" data-available="1" data-price="$48.00" data-compareatprice="$52.00" >M / Black</option>
                              <option  value="33297030676566" data-available="1" data-price="$49.00" data-compareatprice="$52.00" >L / Red</option>
                              <option  value="33297030709334" data-available="1" data-price="$47.00" data-compareatprice="$52.00" >L / Blue</option>
                              <option  value="33297030742102" data-available="1" data-price="$49.00" data-compareatprice="$52.00" >L / Black</option>
                            </select>
                            <div class="product-form__item product-form__item--quantity">
                              <div class="dec button qtyminus">-</div>
                              <input name="quantity" value="1" class="quantity">
                              <div class="inc button qtyplus">+</div>
                            </div>
                            <div class="product-form__item product-form__item--submit">
                              <a href="javascript: void(0)" class="qv-addToCart addToCart enable btn">
                              <span class="instock">
                              Add To Cart
                              </span>
                              <span class="outstock">
                              SOLD OUT
                              </span>
                              <span class="adding">
                              Adding...
                              </span>
                              </a>
                            </div>
                            <input type="hidden" name="return_to" value="back" />
                          </form>
                        </div>
                        <div class="nm-cartmain add_to_cart_main grid-cart">
                          <form action="/cart/add" method="post" class="add-to-cart product-form product-form-160256949757278936" data-section="160256949757278936">
                            <select name="prduct-variant" data-section="160256949757278936" class="product-form__variants no-js">
                              <option  selected="selected"  value="33297030479958" data-available="1" >S / Red</option>
                              <option  value="33297030512726" data-available="1" >S / Blue</option>
                              <option  value="33297030545494" data-available="1" >S / Black</option>
                              <option  value="33297030578262" data-available="1" >M / Red</option>
                              <option  value="33297030611030" data-available="1" >M / Blue</option>
                              <option  value="33297030643798" data-available="1" >M / Black</option>
                              <option  value="33297030676566" data-available="1" >L / Red</option>
                              <option  value="33297030709334" data-available="1" >L / Blue</option>
                              <option  value="33297030742102" data-available="1" >L / Black</option>
                            </select>
                            <input type="text" name="prduct-variant" value="33297030479958" class="product-form__input">
                            <input type="number" name="product-quantity" value="1" min="1" class="product-form__input">
                            <div class="product-form__item product-form__item--submit">
                              <a href="/products/grimoire-anthology" class="addToCart enable btn">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                  <symbol id="addtocart" viewBox="0 0 1100 1100">
                                    <title>addtocart</title>
                                    <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                      c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"></path>
                                    <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                      S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                      c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"></path>
                                    <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                      L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                      c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                      C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"></path>
                                  </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30">
                                  <use xlink:href="#addtocart" x="25%" y="25%"></use>
                                </svg>
                                <span class="value">
                                View Option
                                </span>
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="quick-view">
                        <button class="btn" data-toggle="modal">
                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="quickview" viewBox="0 0 1000 1000">
                              <title>quickview</title>
                              <g>
                                <g>
                                  <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035
                                    c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
                                    C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
                                    c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
                                    C447.361,287.923,358.746,385.406,255.997,385.406z"/>
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275
                                    s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516
                                    s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"/>
                                </g>
                              </g>
                            </symbol>
                          </svg>
                          <svg class="icon" viewBox="0 0 30 30">
                            <use xlink:href="#quickview" x="25%" y="25%"></use>
                          </svg>
                          <span>Quick View</span>
                        </button>
                      </div>
                      <div class="add-to-wishlist">
                        <div class="show">
                          <div class="default-wishbutton-grimoire-anthology loading">
                            <a class="add-in-wishlist-js btn" data-href="grimoire-anthology">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist-outline" viewBox="0 0 1200 1200">
                                  <title>wishlist-outline</title>
                                  <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                    c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                    c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                    l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                    C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                    l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                    c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                    c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                    c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist-outline" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart-o"></i><span class="tooltip-label">Add to wishlist</span>
                            </a>
                          </div>
                          <div class="loadding-wishbutton-grimoire-anthology loading btn loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="grimoire-anthology"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                          <div class="added-wishbutton-grimoire-anthology loading" style="display: none;">
                            <a class="added-wishlist btn add_to_wishlist" href="/pages/wishlist">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="wishlist" viewBox="0 0 1200 1200">
                                  <title>wishlist</title>
                                  <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                    c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                    C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                    c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                    C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#wishlist" x="30%" y="30%"></use>
                              </svg>
                              <i class="fa fa-heart"></i><span class="tooltip-label">View Wishlist</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <noscript>
                    <img class="grid-view-item__image" src="//cdn.shopify.com/s/files/1/0267/2073/1222/products/4_dd2151d1-fc71-43d7-b490-04814804ac21.png?v=1602667881" alt="Grimoire Anthology" style="max-width: 0.0px;">
                  </noscript>
                </div>
              </div>
            </div>
            --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css"> 
    .ishi-deal-section .dealbgimage{
    background-image:url(//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c.gif);
    }
    .ishi-deal-section .deal-bgcolor{
    background-color: #fbfafd;
    }
    .ishi-deal-section .specialdeal-block{
    padding: 100px 0;
    }
    .ishi-deal-section .specialdeal-block .section-header h2{
    color: #373e4e;
    }
  </style>
  <script type="text/javascript">
    $(document).ready(function () {  
      
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown1');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown2');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown3');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown4');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown5');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown6');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown7');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
          $('.specialdealcarousel-160256949757278936 .productdeal').each(function() {
            var time = $(this).data('dealcounter');
            var container = $(this).find('#productcountdown8');
            
            $(container).countdown(time, function(event) {
                if(event.strftime('%D') > 100) {
                  $(this).find(".countdown-days").addClass("data-large");
                }
                $(this).find(".countdown-days .data").html(event.strftime('%D'));
                $(this).find(".countdown-hours .data").html(event.strftime('%H'));
                $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
                $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
                ;
            });
          });
    
        
        
    
     $(".specialdealcarousel-160256949757278936").owlCarousel({
        nav: true,
        navText: [
          '<i class=\'material-icons\'></i>',
          '<i class=\'material-icons\'></i>'
        ],
        dots:false,
        autoplay:false,
        loop: false,
        rewind: true,
        margin:0,
          responsive: {
            0: {
              items: 2
            },
            544: {
              items: 2
            },
            768: {
              items:2
            },
            992: {
              items: 3
            },
              1200: {
              items: 4
            }
          }      
      });
    });
    
    
  </script>
</div>
<div id="shopify-section-1602563366614bfb2e" class="shopify-section index-section ishi-twobanner-block">
  <div class="ishitwobannerblock">
    <div class="page-width">
      <div class="ishibannerblock-container">
        <div class="row">
          <div class="bannerblock1 bannerblock col-sm-6 col-xs-12">
            <div class="image-container">
              <a class="ishi-customhover-fadeintopbottom lightcolor " href="/collections/history-book">
              <img 
                src="img/twobanner1_570x280.png?v=1602563454"
                data-src=""
                data-widths="[570]"
                data-sizes="auto"
                alt="">
              </a>
            </div>
          </div>
          <div class="bannerblock2 bannerblock col-sm-6 col-xs-12">
            <div class="image-container">
              <a class="ishi-customhover-fadeintopbottom lightcolor " href="/collections/biographies-book">
              <img 
                src="img/twobanner2_570x280.png?v=1602563475"
                data-src=""
                data-widths="[570]"
                data-sizes="auto"
                alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    jQuery(document).ready(function() {
       $('.manufacture-carousel-1524029490964').owlCarousel({
        nav: true, // Show next and prev buttons
        navText: [
          '<i class=\'material-icons\'></i>',
          '<i class=\'material-icons\'></i>'
        ],
        dots: false,
        loop: true,
        autoplay: true,
        responsive: {
          0: {
            items: 2
          },
          544: {
            items: 3
          },
          768: {
            items: 4
          },
          992: {
            items: 5
          },
          1200: {
            items: 6
          }
        }
      });
    });
  </script>
  <style type="text/css"> 
    .ishi_collection_section .collectionbgimage{
    background-image:url(//cdn.shopify.com/shopifycloud/shopify/assets/no-image-2048-5e88c1b20e087fb7bbe9a3771824e743c244f437e4f8ba93bbf7b11b53f7824c.gif);
    }
    .ishi_collection_section .collection-bgcolor{
    background-color: #fbfafd;
    }
    .ishi_collection_section .ishi_collection_block{
    padding: 70px 0;
    }
  </style>
  <script>
    jQuery(document).ready(function() {
        $("#first-carousel,#second-carousel,#third-carousel").owlCarousel({
          nav: true, // Show next and prev buttons
          navText: [
          '<i class=\'material-icons\'></i>',
          '<i class=\'material-icons\'></i>'
          ],
          dots: false,
          loop: false,
          rewind: true,
          margin: 30,
          responsive:{
            0:{
              items:1
            },
            544:{
              items:1
            },
            768:{
              items:2
            },
            992:{
              items:1
            },
            1200:{
              items:1
            }
          }
        });
    });
  </script>
  <script>
    jQuery(document).ready(function() {
      $('.smartblog-carousel-1555925837967').owlCarousel({
        dots: false,
        nav: true,
        navText: [
          '<i class=\'material-icons\'></i>',
          '<i class=\'material-icons\'></i>'
        ],
        autoplay:false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        loop: false,
        rewind: true,
        responsive:{
              0:{
                  items:1
              },
                544:{
                  items:1
              },
              768:{
                  items:1
              },
              992:{
                  items:2
              },
              1200:{
                  items:2
              }
          }
      }); 
    });
  </script>
</div>
@endsection