<div class="container">
  <br>
            <!--card stats start-->
            <div id="card-stats">
              <div class="row">
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">add_shopping_cart</i>
                        <p>Ordenes de compra</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0">{{$pocompra}}</h5>
                        <p class="no-margin">Productos</p>
                        <p>{{$tocompra}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">attach_money</i>
                        <p>Pagos pendientes</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0">$ {{$tppendiente}}</h5>
                        <p class="no-margin">Total</p>
                        <p>{{$tpendiente}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">timeline</i>
                        <p>Compras del mes</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0">{{$porcentaje}}%</h5>
                        <p class="no-margin">mes anterior</p>
                        <p>$ {{$tcmes}}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <?php 
                  $total = 0;

                  foreach ($carrito as $val) {
                    $total = $total + $val->total;
                  }
                 ?>
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">storage </i>
                        <p>Total de compras</p>
                      </div>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0">{{$cantidad}}</h5>
                        <p class="no-margin">Productos</p>
                        <p>$ {{$total}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card stats end-->
            
            <!--yearly & weekly revenue chart end-->
            <!-- Member online, Currunt Server load & Today's Revenue Chart start -->
           
            <!-- Member online, Currunt Server load & Today's Revenue Chart start -->
            <!-- ecommerce product start-->
            <br><br>
            <div id="ecommerce-product">

              <div class="row">
                <div class="col s12">
                    <div class="divider"></div>
                    <h4 class="header">OFERTAS DE PRODUCTOS</h4>
                </div>
              </div>

              <!-- ecommerce offers start-->
              <div id="ecommerce-offer">
                <div class="row">
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-indigo-purple border-radius-3">
                      <div class="card-content center">
                        <img src="{{asset('/images/carrusel/img1.jpg')}}" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4">50% Off</h5>
                        <p class="white-text lighten-4">On apple watch</p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3">
                      <div class="card-content center">
                        <img src="{{asset('/images/carrusel/img2.jpg')}}" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4">20% Off</h5>
                        <p class="white-text lighten-4">On Canon Printer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3">
                      <div class="card-content center">
                        <img src="{{asset('/images/carrusel/img3.jpg')}}" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4">40% Off</h5>
                        <p class="white-text lighten-4">On apple macbook</p>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 m3">
                    <div class="card gradient-shadow gradient-45deg-orange-amber border-radius-3">
                      <div class="card-content center">
                        <img src="{{asset('/images/carrusel/img1.jpg')}}" class="width-40 border-round z-depth-5">
                        <h5 class="white-text lighten-4">60% Off</h5>
                        <p class="white-text lighten-4">On any game</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ecommerce offers end-->
              <!-- //////////////////////////////////////////////////////////////////////////// -->
            </div>
            <!--end container-->

<div>
  <div class="row">
    <div class="col s12 m4">
      <div class="card blue-grey darken-4 bg-image-1">
        <div class="card-content white-text">
          <span class="card-title font-weight-400 mb-10">Macbook Pro</span>
          <p>
            Buy Macbook <br>
            online Huge selection of Apple
          </p>
          <div class="border-non mt-5">
            <a class="waves-effect waves-light btn red border-round box-shadow">$
              1,249/-</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card blue-grey darken-4 bg-image-2">
        <div class="card-content white-text">
          <span class="card-title font-weight-400 mb-10">iPhone 8</span>
          <p>
            Buy iPhone <br>
            online Huge selection of Apple
          </p>
          <div class="border-non mt-5">
            <a class="waves-effect waves-light btn red border-round box-shadow">$
              769/-</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="black-overlay">
        <div class="card bg-image-3">
          <div class="card-content white-text">
            <span class="card-title font-weight-400 mb-10">Apple Watch</span>
            <p>
              Buy Watch <br>
              online Huge selection of Apple
            </p>
            <div class="border-non mt-5">
              <a class="waves-effect waves-light btn red border-round box-shadow">$
                269/-</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          </div>