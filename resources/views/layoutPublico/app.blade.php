<!doctype html>
<!--[if IE 9]>
<html class="ie9 no-js" lang="en">
  <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!-->
  <html class="no-js" lang="en">
    <!--<![endif]-->
    @include('layoutPublico.partials.htmlHead')
    <body class="template-index ">
      <main>
        <div class="whole-content">
          <a class="in-page-link visually-hidden skip-link" href="#MainContent">Skip To Content</a>
          <div id="SearchDrawer" class="search-bar drawer drawer--top">
            <div class="search-bar__table">
              <div class="search-bar__table-cell search-bar__form-wrapper">
                <form class="search search-bar__form" action="/search" method="get" role="search">
                  <button class="search-bar__submit search__submit btn--link" type="submit">
                  Liquid error: Could not find asset snippets/icon-search.liquid
                  <span class="icon__fallback-text">Submit</span>
                  </button>
                  <input class="search__input search-bar__input" type="search" name="q" value="" placeholder="Buscar libro" aria-label="Buscar libro">
                </form>
              </div>
              <div class="search-bar__table-cell text-right">
                <button type="button" class="btn--link search-bar__close js-drawer-close">
                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 37 40">
                    <path d="M21.3 23l11-11c.8-.8.8-2 0-2.8-.8-.8-2-.8-2.8 0l-11 11-11-11c-.8-.8-2-.8-2.8 0-.8.8-.8 2 0 2.8l11 11-11 11c-.8.8-.8 2 0 2.8.4.4.9.6 1.4.6s1-.2 1.4-.6l11-11 11 11c.4.4.9.6 1.4.6s1-.2 1.4-.6c.8-.8.8-2 0-2.8l-11-11z"/>
                  </svg>
                  <span class="icon__fallback-text">Close search</span>
                </button>
              </div>
            </div>
          </div>
          <div id="spin-wrapper"></div>
          <div id="siteloader">
            <div class="loader ishi-dots-rotate"></div>
          </div>
          <div class="header-nav">
            <div id="shopify-section-header-top" class="shopify-section">
              <div id="header" data-section-id="header-top" data-section-type="header-section">
                <header class="site-header" role="banner">
                  <div class="nav-header">
                    <div class="page-width">
                      <div class="header-block col-md-6 col-sm-12 col-xs-12">
                        <div class="text">Pedidos antes de las 8:00 p.m., Consultenos - Soporte: (+51) 947 308 110</div>
                      </div>
                      <div class="desktop-user-info col-md-6 col-sm-12 col-xs-12">
                        <div class="desktop-checkout">
                          <ul>
                            <li>
                              <a class="userinfo-toggle" href="{{url('/login')}}">
                              Cuenta
                              </a>
                            </li>
                    <li><a class="trackorder" href="#">Seguimiento Orden</a></li>


                    <li><a class="checkout" href="#">Checkout</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="header-top site-header-inner">
                    <div class="page-width">
                      <div class="row">
                        <div class="header-logo-section col-md-4 col-sm-12 col-xs-12">
                          <h1 class="h2 header__logo" itemscope itemtype="http://schema.org/Organization">
                            <a href="/" itemprop="url" class="header__logo-image">
                            <img src="{{url('layoutP/logo.png')}}"
                              alt="Creative Sectioned Shopify Theme"
                              itemprop="logo" style="max-width: 90px;width: 80px;">
                            <b>La Casa del Derecho</b>
                            </a>
                          </h1>
                        </div>
                        <div id="_desktop_search" class="site-header__search hidden-lg-down col-md-4">
                          <div class="search-title clearfix collapsed" data-target="#search-container-full" data-toggle="collapse">
                            <span class="search-toggle">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="magnifying-mobile" viewBox="0 0 1200 1200">
                                  <title>magnifying-mobile</title>
                                  <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
                                    C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
                                    l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
                                    c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
                                    S377.82,467.8,257.493,467.8z"></path>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 40 40">
                                <use xlink:href="#magnifying-mobile" x="20%" y="24%"></use>
                              </svg>
                            </span>
                          </div>
                          <div  id="search-container-full" class="search-info collapse">
                            <form action="/search" method="get" class="search-header search search--focus" role="search">
                              <input type="hidden" name="type" value="product">
                              <input class="search-header__input search__input"
                                type="search"
                                name="q"
                                placeholder="Buscar libro"
                                aria-label="Buscar libro">
                              <button class="search-header__submit search__submit btn--link" type="submit">
                              <span class="search-logo"> <i class="material-icons">search</i> </span>
                              <span class="icon__fallback-text">Search</span>
                              </button>
                            </form>
                          </div>
                        </div>
                        <div class="header-right col-md-4 hidden-lg-down">
                          <div id= "_desktop_cart" class="hidden-lg-down">
                            <div class="cart-display">
                              <div class="cart-title clearfix collapsed" data-target="#cart-container" data-toggle="collapse">
                                <div class="site-header__cart expand-more">
                                  <span class="cart-logo">
                                    <span class="hidden-lg-down">
                                      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="shopping-cart" viewBox="0 0 1000 1000">
                                          <title>Carrito</title>
                                          <path d="M153,408c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S181.05,408,153,408z M0,0v51h51l91.8,193.8L107.1,306
                                            c-2.55,7.65-5.1,17.85-5.1,25.5c0,28.05,22.95,51,51,51h306v-51H163.2c-2.55,0-5.1-2.55-5.1-5.1v-2.551l22.95-43.35h188.7
                                            c20.4,0,35.7-10.2,43.35-25.5L504.9,89.25c5.1-5.1,5.1-7.65,5.1-12.75c0-15.3-10.2-25.5-25.5-25.5H107.1L84.15,0H0z M408,408
                                            c-28.05,0-51,22.95-51,51s22.95,51,51,51s51-22.95,51-51S436.05,408,408,408z"/>
                                        </symbol>
                                      </svg>
                                      <svg class="icon" viewBox="0 0 40 40">
                                        <use xlink:href="#shopping-cart" x="25%" y="25%"></use>
                                      </svg>
                                    </span>
                                    <span class="hidden-lg-up">
                                      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="cart" viewBox="0 0 510 510">
                                          <title>cart</title>
                                          <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
                                            v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
                                            C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
                                            C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
                                            M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
                                            L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
                                            V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
                                            H270l22.4,209.2H30z"></path>
                                        </symbol>
                                      </svg>
                                      <svg class="icon" viewBox="0 0 40 40">
                                        <use xlink:href="#cart" x="18%" y="17%"></use>
                                      </svg>
                                    </span>
                                    <span class="cart-qty"></span>
                                  </span>
                                  <span class="cart-price text-content hidden-lg-down">
                                  <span class="main-title">carrito</span>
                                  <span class="cart-count sub-title hide">
                                  <span class="cart-qty">20</span>
                                  <span class="cart-items">Items</span>
                                  </span>
                                  </span>
                                </div>
                              </div>
                              <div id="cart-container" class="cart-dropdown-inner cart-dropdown collapse">
                                <div class="cart-container-inner" data-section-id="header-top" data-section-type="cart-template">  

                                <div class="product-list" style="overflow: hidden; width: auto;">
                                  <div class="product">
                                    <div class="product-img">
                                      <img src="https://cdn.shopify.com/s/files/1/0267/2073/1222/products/14_5817d3fb-ee6f-481a-83cc-8935cb45a72f.png?v=1602668724" alt="Franny De Zooey"  >
                                    </div>
                                    <div class="product-data">
                                      <a href="/products/franny-de-zooey?variant=33296999972950" class="product-title">Franny De Zooey</a>
                                      <span class="product-price">1 x $75.00</span>
                                    </div>
                                    <a class="remove" data-variantid="33296999972950"><i class="material-icons">delete</i></a>
                                  </div>  
                                </div> 
                                  <div class="cart__footer">
                                    <div class="grid">
                                      <div class="grid__item ">
                                        <div>
                                          <span class="cart__subtotal-title">Subtotal</span>
                                          <span class="cart__subtotal"> </span>
                                        </div>
                                        <div class="cart__shipping">Gastos de envío e impuestos calculados al finalizar la compra</div>
                                        <div class="cart-links">
                                          <a class="btn checkout-btn" href="/checkout">CHECKOUT</a>
                                          <a class="view-cart btn" href="/cart">TU CARRITO</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="cart__empty hide">
                                    <span class="cart--empty-message">Tu carrito está vacio</span>.</span>
                                    <div class="cookie-message">
                                      <p>Enable cookies to use the Carrito</p>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              





















                            </div>
                          </div>
                        </div>
                        <div id="mobile_top_menu_wrapper" class="hidden-lg-up" style="display:none;">
                          <div id="top_menu_closer" class="hidden-lg-up">
                            <i class="material-icons"></i>
                          </div>
                          <div  id="_mobile_top_menu" class="js-top-menu mobile"></div>
                        </div>
                        <div class="mobile-menu-overlay hidden-lg-up"></div>
                      </div>
                    </div>
                  </div>
                  <script>
                    function lanzadera(){
                            console.log('ingreso a kllenar car');  
                            var carritoPro = <?php echo json_encode ($carritoDet); ?> 
                            var totalCarrito = <?php echo json_encode ($total); ?> 
                            var url ="#"; 
                            console.log(carritoPro); 
                            var productList = $("#cart-container .product-list");
                            productList.html('');
                            var cartempty = $("#cart-container .cart__empty");
                            var cartfooter = $("#cart-container .cart__footer");
                            $('.cart__subtotal').html(Shopify.formatMoney(totalCarrito, Shopify.money_format));
                            $('.cart-qty').html(carritoPro.length);
                            if(carritoPro.length > 0) {  
                              for (y=0;y<carritoPro.length; y++) {   
                                 var product =$("<div class='product'></div>");
                                  var productimg =$("<div class='product-img'></div>"); 
                                  var productdata =$("<div class='product-data'></div>");
                                   productimg.append("<img src='"+carritoPro[y].img_producto+"' alt='"+carritoPro[y].nombre_producto+"''>");
                                  productdata.append("<a href='" + url + "' class='product-title'>" +carritoPro[y].nombre_producto+ "</a>");
                                  productdata.append("<span class='product-price'>" + carritoPro[y].cantidad + " x "+ Shopify.formatMoney(carritoPro[y].precio, Shopify.money_format)+ "</span>");
                                  product.append(productimg);
                                  product.append(productdata);
                                  product.append("<a class='remove' data-variantid=" +carritoPro[y].item+ "><i class='material-icons'>delete</i></a>")
                                  productList.append(product); 
                              } 
                              cartfooter.removeClass('hide');
                              productList.removeClass('hide');
                              cartempty.addClass('hide');
                              productList.slimScroll({
                                height: carritoPro.length > 1 ? '262px' : '100%'
                              });
                            } else {
                                cartempty.removeClass('hide');
                                cartfooter.addClass('hide');
                                productList.addClass('hide');
                            }

 
}
    
lanzadera();
                  </script>
                  <div class="mobile-width hidden-lg-up">
                    <div class="page-width">
                      <div class="row">
                        <div class="mobile-width-left">
                          <div id="menu-icon" class="menu-icon hidden-lg-up">
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                              <symbol id="setup" viewBox="0 0 750 750">
                                <title>setup</title>
                                <g>
                                  <rect y="46.06" width="344.339" height="29.52"/>
                                </g>
                                <g>
                                  <rect y="156.506" width="344.339" height="29.52"/>
                                </g>
                                <g>
                                  <rect y="268.748" width="344.339" height="29.531"/>
                                </g>
                              </symbol>
                            </svg>
                            <svg class="icon" viewBox="0 0 40 40">
                              <use xlink:href="#setup" x="25%" y="27%"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="mobile-width-right">
                          <div id= "_mobile_cart"></div>
                          <div id= "_mobile_wishlist"></div>
                          <div id= "_mobile_search"></div>
                          <div id= "_mobile_link_menu"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </header>
              </div>
            </div>
          </div>
          <div class="wrapper-nav hidden-lg-down">
            <div class="navfullwidth">
              <div class="page-width">
                <div id="shopify-section-Ishi_megamenu" class="shopify-section">
                  <div data-section-id="Ishi_megamenu" data-section-type="megamenu-section" data-toggle="toggle" class="megamenu-section hidden-lg-down">
                    <div id="_desktop_top_menu" class="menu js-top-menu hidden-sm-down" role="navigation">
                      <h2 class="home-title hidden-lg-down">TODAS LAS CATEGORÍAS</h2>
                      <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                      </div>
                      <ul class="top-menu" id="top-menu">
                        {{-- <li class="category">
                          <span class="float-xs-right hidden-lg-up">
                          <span data-target="#_n_child-one1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                          <i class="material-icons add">&#xE313;</i>
                          <i class="material-icons remove">&#xE316;</i>
                          </span>
                          </span>
                          <a href="/collections/books" class="dropdown-item">
                            <h3 class="title">Books</h3>
                            <span class="new"> NEW</span>
                            <i class="material-icons add hidden-lg-down">&#xE315;</i>
                          </a>
                          <div class="popover sub-menu js-sub-menu collapse" id="_n_child-one1">
                            <ul class="top-menu mainmenu-dropdown">
                              <li class="sub-category">
                                <span class="float-xs-right hidden-lg-up">
                                <span data-target="#_n_grand-child-one1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                <i class="material-icons add">&#xE313;</i>
                                <i class="material-icons remove">&#xE316;</i>
                                </span>
                                </span>
                                <a href="/collections/history-book" class="dropdown-item dropdown-submenu">
                                  <h3 class="inner-title">History Book</h3>
                                </a>
                                <div class="top-menu collapse" id="_n_grand-child-one1">
                                  <ul class="top-menu">
                                    <li class="category">
                                      <a href="/collections/history-book" class="dropdown-item">Persepolis</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/history-book" class="dropdown-item">Genghis Khan</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/history-book" class="dropdown-item">Trick Mirror</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/history-book" class="dropdown-item">Mary Beard</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/history-book" class="dropdown-item">Medieval</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/history-book" class="dropdown-item">Devil</a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li class="sub-category">
                                <span class="float-xs-right hidden-lg-up">
                                <span data-target="#_n_grand-child-two1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                <i class="material-icons add">&#xE313;</i>
                                <i class="material-icons remove">&#xE316;</i>
                                </span>
                                </span>
                                <a href="/collections/biographies-book" class="dropdown-item dropdown-submenu">
                                  <h3 class="inner-title">Biographies Book</h3>
                                </a>
                                <div class="top-menu collapse" id="_n_grand-child-two1">
                                  <ul class="top-menu">
                                    <li class="category">
                                      <a href="/collections/biographies-book" class="dropdown-item">Ethnic & Cultural</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/biographies-book" class="dropdown-item">Wings Of Fire</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/biographies-book" class="dropdown-item">Leaders People</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/biographies-book" class="dropdown-item">Military</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/biographies-book" class="dropdown-item">Nelson Mandela</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/biographies-book" class="dropdown-item">Einstein</a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li class="sub-category">
                                <span class="float-xs-right hidden-lg-up">
                                <span data-target="#_n_grand-child-three1" data-toggle="collapse" class="navbar-toggler collapse-icons clearfix collapsed">
                                <i class="material-icons add">&#xE313;</i>
                                <i class="material-icons remove">&#xE316;</i>
                                </span>
                                </span>
                                <a href="/collections/comics-book" class="dropdown-item dropdown-submenu">
                                  <h3 class="inner-title">Comics Book</h3>
                                </a>
                                <div class="top-menu collapse" id="_n_grand-child-three1">
                                  <ul class="top-menu">
                                    <li class="category">
                                      <a href="/collections/comics-book" class="dropdown-item">Dark Horse</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/comics-book" class="dropdown-item">DC Comics</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/comics-book" class="dropdown-item">Marvel Comics</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/comics-book" class="dropdown-item">Fantasy</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/comics-book" class="dropdown-item">Comic Strips</a>
                                    </li>
                                    <li class="category">
                                      <a href="/collections/comics-book" class="dropdown-item">Batman Comics</a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li class="sub-category product_container hidden-lg-down">
                                <a href="/products/legacy-john-wood" class="dropdown-item dropdown-submenu">
                                  <h3 class="inner-title">Special Product</h3>
                                </a>
                                <div class="grid__item grid__item--Ishi_megamenu">
                                  <div class="grid-view-item__link grid-view-item__image-container">
                                    <div class="grid-view-item__image-wrapper js">
                                      <a href="/products/legacy-john-wood">
                                        <div class="image-inner">
                                          <div class="reveal">
                                            <img
                                              class="grid-view-item__image lazyload  main-img "
                                              src="img/10_a4f251de-506d-4476-9448-32c738a6c55e_130x168.png"
                                              alt="Legacy John Wood">
                                          </div>
                                          <div class="hide imgurl-for-quickview">
                                            <span>img/10_a4f251de-506d-4476-9448-32c738a6c55e_370x480.png</span>
                                            <span>img/11_321e7eaa-1c69-4409-bb07-d1ce6c9037c3_370x480.png</span>
                                            <span>img/12_fb3fd99a-279e-45b0-a93a-f3b7af27ede9_370x480.png</span>
                                            <span>img/13_fa12eb70-4fd4-45ec-827f-bb84c6226222_370x480.png</span>
                                            <span>img/14_889d5ee9-c5f4-4ee4-9e19-580d3603aaab_370x480.png</span>
                                            <span>img/15_38464438-e018-4a11-bf69-bac5473ec223_370x480.png</span>
                                            <span>img/16_8b112874-ef39-453c-be03-e008d8d22d4f_370x480.png</span>
                                          </div>
                                        </div>
                                      </a>
                                    </div>
                                    <div class="product-description">
                                      <div class="product-detail">
                                        <div class="h4 grid-view-item__title">Legacy John Wood</div>
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
                                        <span class="qv-regularprice is-bold"> $53.00 </span>
                                        </span>
                                        <span class="visually-hidden">Regular price</span>
                                        <span class="qv-discountprice regular"  style="text-decoration: line-through;">$55.00</span>
                                      </div>
                                    </div>
                                    <noscript>
                                      <img class="grid-view-item__image" src="img/10_a4f251de-506d-4476-9448-32c738a6c55e.png" alt="Legacy John Wood" style="max-width: 0.0px;">
                                    </noscript>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <div class="img-container">
                              <div class="col-xs-6 imagecontainer1">
                                <a href="/" class="link">
                                <img
                                  class="feature-row__image"
                                  src="img/menubanner1_600x150.png?"
                                  data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                  data-aspectratio="4.0"
                                  data-sizes="auto"
                                  alt="" >
                                </a>
                              </div>
                              <div class="col-xs-6 imagecontainer2">
                                <a href="/" class="link">
                                <img
                                  class="feature-row__image"
                                  src="img/menubanner2_600x150.png?"
                                  data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                  data-aspectratio="4.0"
                                  data-sizes="auto"
                                  alt="" >
                                </a>
                              </div>
                            </div>
                          </div>
                        </li> --}}
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="shopify-section-Ishi_headerlink" class="shopify-section">
                  <div data-section-id="Ishi_headerlink" data-section-type="headerlink-section" class="headerlink-section hidden-lg-down">
                    <div id="_desktop_link_menu">
                      <div id="ishiheaderlinks_block" class="header-block">
                        <div id="header_ishiheaderlinks">
                          <ul class="bullet large hidden-xl-down">
                            <li>
                              <a href="/collections/books" title="INICIO">
                              INICIO
                              </a>
                            </li>
                            <li>
                              <a href="/collections/books" title="NOSOTROS">
                              NOSOTROS
                              </a>
                            </li>
                            <li>
                              <a href="/blogs/book" title="LIBROS">
                              LIBROS
                              </a>
                            </li>
                            <li>
                              <a href="/collections/all" title="CONTACTANOS">
                              CONTACTANOS
                              </a>
                            </li>
                          </ul>
                          <div class="header-link hidden-xl-up">
                            <span class="link-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="linkicon" viewBox="0 0 750 750">
                                  <title>linkicon</title>
                                  <g>
                                    <rect y="46.06" width="400" height="29.52"/>
                                  </g>
                                  <g>
                                    <rect y="156.506" width="300" height="29.52"/>
                                  </g>
                                  <g>
                                    <rect y="268.748" width="200" height="29.531"/>
                                  </g>
                                </symbol>
                              </svg>
                              <svg class="icon" viewBox="0 0 40 40">
                                <use xlink:href="#linkicon" x="25%" y="27%"></use>
                              </svg>
                            </span>
                            <h4 class="small-title">MENU</h4>
                            <ul class="bullet small">
                              <li>
                                <a href="/collections/books">BOOKS</a>
                              </li>
                              <li>
                                <a href="/collections/books">SHOP</a>
                              </li>
                              <li>
                                <a href="/blogs/book">BLOG</a>
                              </li>
                              <li>
                                <a href="/collections/all">PRODUCT</a>
                              </li>
                              <li>
                                <a href="/pages/contact">CONTACT</a>
                              </li>
                              <li>
                                <a href="/pages/about-us">ABOUT</a>
                              </li>
                              <li>
                                <a href="/collections/comics-book">COMICS BOOK</a>
                              </li>
                              <li>
                                <a href="/collections/history-book">HISTORY BOOK</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="shopify-section-Ishi_offer" class="shopify-section shopify-section">
                  <div id="ishioffersblock">
                    <div class="offer-img">
                      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="offer" viewBox="0 0 530 530">
                          <title>offer</title>
                          <g>
                            <g>
                              <path d="M477.958,262.633c-2.06-4.215-2.06-9.049,0-13.263l19.096-39.065c10.632-21.751,2.208-47.676-19.178-59.023l-38.41-20.38
                                c-4.144-2.198-6.985-6.11-7.796-10.729l-7.512-42.829c-4.183-23.846-26.241-39.87-50.208-36.479l-43.053,6.09
                                c-4.647,0.656-9.242-0.838-12.613-4.099l-31.251-30.232c-17.401-16.834-44.661-16.835-62.061,0L193.72,42.859
                                c-3.372,3.262-7.967,4.753-12.613,4.099l-43.053-6.09c-23.975-3.393-46.025,12.633-50.208,36.479l-7.512,42.827
                                c-0.811,4.62-3.652,8.531-7.795,10.73l-38.41,20.38c-21.386,11.346-29.81,37.273-19.178,59.024l19.095,39.064
                                c2.06,4.215,2.06,9.049,0,13.263l-19.096,39.064c-10.632,21.751-2.208,47.676,19.178,59.023l38.41,20.38
                                c4.144,2.198,6.985,6.11,7.796,10.729l7.512,42.829c3.808,21.708,22.422,36.932,43.815,36.93c2.107,0,4.245-0.148,6.394-0.452
                                l43.053-6.09c4.643-0.659,9.241,0.838,12.613,4.099l31.251,30.232c8.702,8.418,19.864,12.626,31.03,12.625
                                c11.163-0.001,22.332-4.209,31.03-12.625l31.252-30.232c3.372-3.261,7.968-4.751,12.613-4.099l43.053,6.09
                                c23.978,3.392,46.025-12.633,50.208-36.479l7.513-42.827c0.811-4.62,3.652-8.531,7.795-10.73l38.41-20.38
                                c21.386-11.346,29.81-37.273,19.178-59.024L477.958,262.633z M464.035,334.635l-38.41,20.38
                                c-12.246,6.499-20.645,18.057-23.04,31.713l-7.512,42.828c-1.415,8.068-8.874,13.487-16.987,12.342l-43.053-6.09
                                c-13.73-1.945-27.316,2.474-37.281,12.113L266.5,478.152c-5.886,5.694-15.109,5.694-20.997,0l-31.251-30.232
                                c-8.422-8.147-19.432-12.562-30.926-12.562c-2.106,0-4.229,0.148-6.355,0.449l-43.053,6.09
                                c-8.106,1.146-15.571-4.274-16.987-12.342l-7.513-42.829c-2.396-13.656-10.794-25.215-23.041-31.712l-38.41-20.38
                                c-7.236-3.839-10.086-12.61-6.489-19.969l19.096-39.065c6.088-12.456,6.088-26.742,0-39.198l-19.096-39.065
                                c-3.597-7.359-0.747-16.13,6.489-19.969l38.41-20.38c12.246-6.499,20.645-18.057,23.04-31.713l7.512-42.828
                                c1.416-8.068,8.874-13.488,16.987-12.342l43.053,6.09c13.725,1.943,27.316-2.474,37.281-12.113l31.252-30.232
                                c5.886-5.694,15.109-5.694,20.997,0l31.251,30.232c9.965,9.64,23.554,14.056,37.281,12.113l43.053-6.09
                                c8.107-1.147,15.572,4.274,16.987,12.342l7.512,42.829c2.396,13.656,10.794,25.215,23.041,31.712l38.41,20.38
                                c7.236,3.839,10.086,12.61,6.489,19.969l-19.096,39.064c-6.088,12.455-6.088,26.743,0,39.198l19.096,39.064
                                C474.121,322.024,471.271,330.796,464.035,334.635z"></path>
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M363.886,148.116c-5.765-5.766-15.115-5.766-20.881,0L148.116,343.006c-5.766,5.766-5.766,15.115,0,20.881
                                c2.883,2.883,6.662,4.325,10.44,4.325c3.778,0,7.558-1.441,10.44-4.325l194.889-194.889
                                C369.653,163.231,369.653,153.883,363.886,148.116z"></path>
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M196.941,123.116c-29.852,0-54.139,24.287-54.139,54.139s24.287,54.139,54.139,54.139s54.139-24.287,54.139-54.139
                                S226.793,123.116,196.941,123.116z M196.941,201.863c-13.569,0-24.608-11.039-24.608-24.609c0-13.569,11.039-24.608,24.608-24.608
                                c13.569,0,24.609,11.039,24.609,24.608C221.549,190.824,210.51,201.863,196.941,201.863z"></path>
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M315.061,280.61c-29.852,0-54.139,24.287-54.139,54.139s24.287,54.139,54.139,54.139
                                c29.852,0,54.139-24.287,54.139-54.139S344.913,280.61,315.061,280.61z M315.061,359.357c-13.569,0-24.609-11.039-24.609-24.608
                                s11.039-24.608,24.609-24.608c13.569,0,24.608,11.039,24.608,24.608S328.63,359.357,315.061,359.357z"></path>
                            </g>
                          </g>
                        </symbol>
                      </svg>
                      <svg class="icon" viewBox="0 0 40 40">
                        <use xlink:href="#offer" x="2%" y="2%"></use>
                      </svg>
                    </div>
                    <div class="typed"></div>
                  </div>
                    <div class="offerstitle">
                    <a href="/collections/books">

                        <span class="type-text">Hoy 20% de Descuento.</span>

                    </a>
                    </div>

                    <div class="offerstitle">
                    <a href="/collections/comics-book">

                        <span class="type-text">Obten 15% de Descuento por la segunda compra.</span>

                    </a>
                    </div>

                    <div class="offerstitle">
                    <a href="/collections/books">

                        <span class="type-text">Obten 25% de descuento fines de semana.</span>

                    </a>
                    </div>
                  <script type="text/javascript">
                    $(document).ready(function () {
                      var list = new Array();
                      $('.offerstitle').each(function(i, obj) {
                          list.push($(this).html());
                      });

                      var myoffer = $('.offerstitle').length;
                      if(myoffer != 0){
                        var typed = new Typed('.typed', {
                          strings: list,
                          typeSpeed: 80,
                          backSpeed: 80,
                          loop: true,
                          contentType: 'html',
                          showCursor: false,
                        });
                      }

                    });
                  </script>
                </div>
              </div>
            </div>
          </div>




          <div class="page-container" id="PageContainer">
            <main class="main-content" id="MainContent" role="main">
              <!-- BEGIN content_for_index -->
              @yield('main-content')

              <!-- END content_for_index -->
            </main>
          </div>



          @include('layoutPublico.partials.footer')
        @include('layoutPublico.partials.scripts')
      </main>
    </body>
  </html>
