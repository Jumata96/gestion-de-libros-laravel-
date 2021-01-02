<!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav" data-valor="0" class="nav-expanded nav-lock nav-collapsible">
          <div class="brand-sidebar" style="height: 62px">
            <h1 class="logo-wrapper">
              <a href="{{url('/')}}" class="brand-logo darken-1">
                <img id="imglogo" src="{{asset('images/Isotipo.png')}}" alt="ardiniTrading" style="height: 26px">
                <span class="logo-text sideusuario" style="padding-left: 0px;">
                  <b style="color: #fafafa; font-style: normal;">PORTAL</b>
                </span>
              </a>
              <a href="#" class="navbar-toggler" id="radio" onclick="Materialize.fadeInImage('.sideusuario')" >
                <i class="material-icons" id="radio2">radio_button_checked</i>
              </a>
            </h1>
          </div>
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="hide indigo darken-4 sideusuario" id="" style="height: 100px; padding-top: 10px; margin-bottom: 10px; background: url({{asset('images/fondo-perfil.png')}}); background-size: 270px">
                  <div class="row">
                      <div class="col col s5 m5 l5">
                          <img src="{{asset('images/usu-perfil.png')}}" alt="" class="circle responsive-img valign profile-image indigo lighten-5" style="height: 70px; width: 70px">
                      </div>
                      <div class="col col s7 m7 l7" style="margin-left: -15px; width: 128px">

                          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown" style="width: 130%">{{ Auth::user()->nombre }}<i class="mdi-navigation-arrow-drop-down right"></i></a><ul id="profile-dropdown" class="dropdown-content" style="width: 100px; padding-top: 20px; border: 10px">
                              <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                              </li>
                              <li><a href="#"><i class="mdi-action-settings"></i> Config.</a>
                              </li>
                              <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                              </li>
                              <li class="divider"></li>

                              <li style="padding-top: 15px"><a href="http://localhost/innovamk/public/cerrar"><i class="mdi-hardware-keyboard-tab"></i> Cerrar</a>
                              </li>
                          </ul>
                          <p class="user-roal">{{ substr(Auth::user()->cargo,0,18) }}</p>
                      </div>
                  </div>
              </li>
        <li class="bold">
          <a class=" waves-effect waves-cyan" href="{{ url('/home') }}">
          <i class="material-icons">dashboard</i>
          <span class="nav-text">DashBoard</span>
          </a>
        </li>
        <li class="bold">
          <a class="collapsible-header waves-effect waves-cyan">
          <i class="material-icons">settings</i>
          <span class="nav-text">Configuración</span>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="{{ url('/empresa') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span> Empresa</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/usuarios') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span> Usuarios del Sistema</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/parametros') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span> Parámetros</span>
                </a>
              </li>
              {{--
              <li>
                <a href="{{ url('/clientes/importar') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span> Importador Clientes</span>
                </a>
              </li>
              --}}
            </ul>
          </div>
        </li>
        <li class="bold">
          <a class="collapsible-header waves-effect waves-cyan">
          <i class="material-icons">create_new_folder</i>
          <span class="nav-text">Libreria</span>
          </a>
          <div class="collapsible-body">
            <ul>
              <li><a href="{{ url('/lstEditoriales') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span>Gesti&oacute;n de Editoriales </span>
                </a>
              </li>
              <li><a href="{{ url('/lstCategorias') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span>Gesti&oacute;n de Categorías  </span>
                </a>
              </li>
              <li><a href="{{ url('/lstLibros') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span>Gesti&oacute;n del Libros</span></a>
              </li>
              <li><a href="{{ url('#') }}">
                <i class="material-icons">keyboard_arrow_right</i>
                <span>Parámetros</span></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="bold">
          <a class="collapsible-header waves-effect waves-cyan">
          <i class="material-icons">web</i>
          <span class="nav-text">Gestión de Portal Web</span>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <ul class="collapsible collapsible-accordion" ul style="padding-left:20px;">
                  <li >
                    <a class="collapsible-header waves-effect waves-default">INICIO</a>
                    <div class="collapsible-body no-padding">
                      <ul style="padding-left:20px;">
                        <li ><a href="{{ url('/carrusel') }}" class="waves-effect waves-default" style="padding-right: 20px;">Carrusel</a></li>
                      </ul>
                      <ul style="padding-left:20px;">
                        <li ><a href="{{ url('/seccion1') }}" class="waves-effect waves-default" style="padding-right: 20px;">Secci&oacute;n 01</a></li>
                      </ul>
                      {{-- <ul style="padding-left:20px;">
                        <li ><a href="{{ url('/seccion02') }}" class="waves-effect waves-default" style="padding-right: 20px;">Secci&oacute;n 02</a></li>
                      </ul> --}}
                      <ul style="padding-left:20px;">
                        <li ><a href="{{ url('/seccion03') }}" class="waves-effect waves-default" style="padding-right: 20px;">Logos</a></li>
                      </ul>
                      <ul style="padding-left:20px;">
                        <li ><a href="{{ url('/seccion04') }}" class="waves-effect waves-default" style="padding-right: 20px;">Testimonios</a></li>
                      </ul>
                      {{-- <ul style="padding-left:20px;">
                        <li ><a href="{{ url('/seccion05') }}" class="waves-effect waves-default" style="padding-right: 20px;">Secci&oacute;n 05</a></li>
                      </ul> --}}
                    </div>
                  </li>
                                    <li >
                    <a class="collapsible-header waves-effect waves-default">NOSOTROS</a>
                    <div class="collapsible-body no-padding">
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold">
          <a class=" waves-effect waves-cyan" href="{{ url('/mails') }}">
          <i class="material-icons">email</i>
          <span class="nav-text">Mensajes</span>
          </a>
        </li>
          <!--
                <li class="bold">
                  <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons">equalizer</i>
                    <span class="nav-text">Reportes</span>
                  </a>
                  <div class="collapsible-body">
                    <ul>
                      <li><a href="{{ url('#') }}">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Mis Ventas</span></a>
                      </li>
                      <li><a href="{{ url('#') }}">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Stock de Equipos</span></a>
                      </li>
                      <li><a href="{{ url('#') }}">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Salidas de Almacen</span></a>
                      </li>
                      <li><a href="{{ url('#') }}">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span>Historial Clientes</span></a>
                      </li>
                    </ul>
                  </div>
                </li>
          -->
              </ul>
            </li>
             <li class="li-hover">
              <p class="ultra-small margin more-text" id="mas_opciones">Mas opciones</p>
            </li>
            <li>
              <a href="{{url('/colores')}}" target="_blank">
                <i class="material-icons">palette</i>
                <span class="nav-text">Colores</span>
              </a>
            </li>
            <li>
              <a href="{{url('/iconos')}}" target="_blank">
                <i class="material-icons">insert_emoticon</i>
                <span class="nav-text">Iconos</span>
              </a>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
