<?php

use InnovaTec\Events\MessageStatusChangedEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ruta para acceder a la Pagina Web
Route::get('/', 'PageController@index2');
Route::get('/1', 'PageController@index2');
/* Route::get('/index', 'PaginaController@index'); */
Route::get('/index2', 'PageController@index');
Route::get('/contactanos', 'PageController@contactanos');
Route::post('/constactanos/mensaje', 'PageController@store');
//Contactanos
Route::post('/mensajes/grabar', 'ContactanosController@storeMensajes');
//NOSOTROS
Route::get('nosotros', 'PaginaController@nosotros');
//Gestion de Acceso al Cliente
Route::get('/usuarioLogin', 'ClienteController@inicio');
Route::get('/portal-usuario', 'ClienteController@portal');
Route::get('/sistema', 'ClienteController@portal');
Route::get('/registroUsuario', 'ClienteController@registro');
//Login para acceder al cPanel Empresarial
Route::get('/cpanel', 'ClienteController@inicio');
Route::view('/login', 'ClienteController@inicio');
/* Route::get('/userReg', 'Auth\LoginController@usuarioRegistrado'); */
//Pagina de Registro
Route::view('/registrar', 'auth.register');
//Pagina de Inicio del cPanel
Route::get('/home', 'HomeController@index')->name('home');
//Metodo que cierra la sesion del usuario
Route::get('/cerrar', 'HomeController@cerrar');
//Pruebas Exportar/Importar
//API SOCIAL LOGIN
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');
//Rutas de Prueba y Testeo
Route::view('mantenedor', 'forms.plantillas.mntBasico');
Route::view('plantilla', 'forms.test.plantilla');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    //Empresa
    Route::get('/empresa', 'EmpresaController@index');
    Route::get('/empresa/nuevo', 'EmpresaController@create');
    Route::post('/empresa/grabar', 'EmpresaController@store');
    Route::get('/empresa/mostrar/{id}', 'EmpresaController@show');
    Route::post('/empresa/actualizar', 'EmpresaController@update');
    Route::get('/empresa/eliminar/{id}', 'EmpresaController@destroy');
    //Usuarios
    Route::get('/usuarios', 'UsuarioController@index');
    Route::get('/usuario/nuevo', 'UsuarioController@create');
    Route::post('/usuario/grabar', 'UsuarioController@store');
    Route::get('/usuario/mostrar/{id}', 'UsuarioController@show');
    Route::post('/usuario/actualizar', 'UsuarioController@update');
    Route::get('/usuario/eliminar/{id}', 'UsuarioController@destroy');
    Route::post('/usuario/desabilitar', 'UsuarioController@disabled');
    Route::post('/usuario/habilitar', 'UsuarioController@habilitar');
    Route::post('/usuario/updContra', 'UsuarioController@updContra');
    //Parametros
    Route::get('/parametros', 'ParametrosController@index');
    Route::post('/parametros/actualizar', 'ParametrosController@update');
    //Helpers
    Route::view('/colores', 'forms.helpers.colores');
    Route::view('/iconos', 'forms.helpers.iconos');
    //Correos
    Route::get('/mails', 'MailController@index');
    Route::post('/mails/store', 'MailController@send');
    Route::get('/inbox', 'MailController@obtenerMensajes');
    Route::get('/outbox', 'MailController@obtenerMensajesSalida');
    Route::get('/inboxhistorial', 'MailController@obtenerMensajesHistorial');
    Route::get('/mensajesNuevos', 'MailController@obtenerMensajesNuevos');
    Route::get('/inbox/visto/{id}', 'MailController@visto');
    Route::get('/inbox/{id}', 'MailController@detalle');
    Route::get('/outbox/{id}', 'MailController@detalleSalida');
    Route::get('/inboxUser/{id}', 'MailController@detalleNuevoUsuario');


    // mapa autocomplete
    Route::get('/mapa', 'MapaController@mapaPrueba');
    Route::post('/recibir', 'MapaController@recibir');
    Route::post('/pasar', 'MapaController@pasar');
    Route::post('/pasarCreate', 'MapaController@pasarCreate');
    //Editoriales
    Route::get('/lstEditoriales', 'EditorialController@index');
     Route::get('/editorial-nuevo', 'EditorialController@create');
    Route::post('/editorial-grabar', 'EditorialController@store');
    Route::get('/editorial-mostrar-{id}', 'EditorialController@show');
    Route::post('/editorial-actualizar', 'EditorialController@update');

    Route::get('/editorial/eliminar/{id}', 'EditorialController@destroy');
    Route::get('/editorial/desabilitar/{id}', 'EditorialController@desabilitar');
    Route::get('/editorial/habilitar/{id}', 'EditorialController@habilitar');

    //Categoria
    Route::get('/lstCategorias', 'CategoriasController@index');
    Route::get('/categoria-nuevo', 'CategoriasController@create');
    Route::post('/categoria-grabar', 'CategoriasController@store');
    Route::get('/categoria-mostrar-{id}', 'CategoriasController@show');
    Route::post('/categoria-actualizar', 'CategoriasController@update');
    Route::get('/categoria/eliminar/{id}', 'CategoriasController@destroy');
    Route::get('/categoria/desabilitar/{id}', 'CategoriasController@desabilitar');
    Route::get('/categoria/habilitar/{id}', 'CategoriasController@habilitar');
    //Libros
    Route::get('/lstLibros', 'LibrosController@index');
    Route::get('/libros-nuevo', 'LibrosController@create');
    Route::post('/libros/grabar', 'LibrosController@store');
    Route::get('/libros-mostrar-{id}', 'LibrosController@show');
    Route::post('/libros/actualizar', 'LibrosController@update');
    Route::get('/libros/eliminar/{id}', 'LibrosController@destroy');
    Route::get('/libros/desabilitar/{id}', 'LibrosController@desabilitar');
    Route::get('/libros/habilitar/{id}', 'LibrosController@habilitar');

    // -----------------------------------------------------------------PAGINA -------------------------------------------------

    Route::get('/inicio', 'InicioController@index');

    //carrusel
    Route::get('/carrusel', 'CarruselController@index');
    Route::get('/carrusel-nuevo', 'CarruselController@create');
    Route::post('/carrusel/grabar', 'CarruselController@store');
    Route::get('/carrusel-mostrar-{id}', 'CarruselController@show');
    Route::post('/carrusel/actualizar', 'CarruselController@update');


    //seccion1

     Route::get('/seccion1', 'SeccionController@index01');
     Route::get('/seccion01-nuevo', 'SeccionController@Seccion01');
     Route::post('/seccion01/grabar', 'SeccionController@storeSeccion01');
     Route::get('/seccion01-mostrar-{id}', 'SeccionController@showSeccion01');
     Route::post('/seccion01/actualizar', 'SeccionController@UpdSeccion01');
     Route::get('/seccion01/eliminar/{id}', 'SeccionController@destroy');
     Route::get('/seccion01/desabilitar/{id}', 'SeccionController@desabilitar');
     Route::get('/seccion01/habilitar/{id}', 'SeccionController@habilitar');


     Route::get('/seccion03', 'SeccionController@index03');
     Route::get('/seccion03-nuevo', 'SeccionController@seccion03');
     Route::post('/seccion03/grabar', 'SeccionController@storeseccion03');
     Route::get('/seccion03-mostrar-{id}', 'SeccionController@showseccion03');
     Route::post('/seccion03/actualizar', 'SeccionController@Updseccion03');
     Route::get('/seccion03/eliminar/{id}', 'SeccionController@destroy_sec03');
     Route::get('/seccion03/desabilitar/{id}', 'SeccionController@desabilitar_sec03');
     Route::get('/seccion03/habilitar/{id}', 'SeccionController@habilitar_sec03');

     Route::get('/seccion04', 'SeccionController@index04');
     Route::get('/seccion04-nuevo', 'SeccionController@seccion04');
     Route::post('/seccion04/grabar', 'SeccionController@storeseccion04');
     Route::get('/seccion04-mostrar-{id}', 'SeccionController@showseccion04');
     Route::post('/seccion04/actualizar', 'SeccionController@Updseccion04');
     Route::get('/seccion04/eliminar/{id}', 'SeccionController@destroy_sec04');
     Route::get('/seccion04/desabilitar/{id}', 'SeccionController@desabilitar_sec04');
     Route::get('/seccion04/habilitar/{id}', 'SeccionController@habilitar_sec04');

     Route::get('/seccion05', 'SeccionController@index05');
     Route::get('/seccion05-nuevo', 'SeccionController@seccion05');
     Route::post('/seccion05/grabar', 'SeccionController@storeseccion05');
     Route::get('/seccion05-mostrar-{id}', 'SeccionController@showseccion05');
     Route::post('/seccion05/actualizar', 'SeccionController@Updseccion05');
     Route::get('/seccion05/eliminar/{id}', 'SeccionController@destroy_sec05');
     Route::get('/seccion05/desabilitar/{id}', 'SeccionController@desabilitar_sec05');
     Route::get('/seccion05/habilitar/{id}', 'SeccionController@habilitar_sec05');

    /*
    Route::get('/inicio', 'InicioController@index');
    //Carrusel

    Route::post('/carrusel/grabar', 'CarruselController@store');
    Route::post('/carrusel/grabar2', 'CarruselController@store');
    Route::get('/carrusel/mostrar/{id}', 'CarruselController@show');
    Route::post('/carrusel/actualizar', 'CarruselController@update');


    Route::get('/carrusel/eliminar/{id}', 'CarruselController@destroy');
    Route::get('/carrusel/desabilitar/{id}', 'CarruselController@disabled');
    Route::get('/carrusel/habilitar/{id}', 'CarruselController@habilitar');

    //SECCION1
     Route::get('/seccion1/mostrar/{id}', 'InicioController@showSeccion1');
     Route::post('/seccion1Det/actualizar', 'InicioController@updateSeccion1Det');
     Route::post('/seccion1/actualizar', 'InicioController@updateSeccion1');


    //SECCION2
    Route::post('/seccion2/grabar', 'Seccion2Controller@store');
    Route::post('/seccion2/grabarD', 'Seccion2Controller@storeD');
    Route::post('/seccion2/actualizarD', 'Seccion2Controller@actualizarD');

    Route::get('/seccion2/mostrar/{id}', 'seccion2Controller@show');
    Route::get('/seccion2/eliminar/{id}', 'seccion2Controller@destroy');
    Route::get('/seccion2/desabilitar/{id}', 'seccion2Controller@desabilitar');
    Route::get('/seccion2/habilitar/{id}', 'Seccion2Controller@habilitar');


     //SECCION4
    Route::post('/seccion4/actualizar', 'InicioController@updateSeccion4');
    //SECCION 5
    Route::post('/seccion5/actualizar', 'InicioController@updateSeccion5');
    //SECCION 6
    Route::post('/seccion6/actualizar', 'InicioController@updateSeccion6');
    Route::get('/seccion6/nuevo'      , 'Seccion6Controller@addSeccion6');

    Route::post('/seccion6Det/actualizar', 'Seccion6Controller@store');
    Route::post('/seccion6Det/actualizarDet', 'Seccion6Controller@update');

    Route::get('/seccion6/mostrar/{id}', 'Seccion6Controller@show');
    Route::get('/seccion6Det/eliminar/{id}', 'Seccion6Controller@destroy');
    Route::get('/seccion6Det/desabilitar/{id}', 'Seccion6Controller@desabilitar');
    Route::get('/seccion6Det/habilitar/{id}', 'Seccion6Controller@habilitar');

    //---------------------------NOSOTROS-------------------------
    //Misión
    Route::get('/mision', 'MisionController@index');
    Route::post('/mision/actualizar', 'MisionController@update');
    //dMisión
    Route::post('/dmision/grabar', 'MisionController@store');
    Route::post('/dmision/actualizar', 'MisionController@dUpdate');
    Route::post('/dmision/iactualizar', 'MisionController@imgUpdate');
    Route::post('/dmision/imgGrabar', 'MisionController@imgStore');
    Route::post('/dmision/desabilitar', 'MisionController@disabled');
    Route::post('/dmision/habilitar', 'MisionController@habilitar');
    Route::post('/dmision/eliminar', 'MisionController@destroy');
    //Visión
    Route::get('/vision', 'VisionController@index');
    Route::post('/vision/actualizar', 'VisionController@update');
    //dVisión
    Route::post('/dvision/grabar', 'VisionController@store');
    Route::post('/dvision/imgGrabar', 'VisionController@imgStore');
    Route::post('/dvision/actualizar', 'VisionController@dUpdate');
    Route::post('/dvision/iactualizar', 'VisionController@imgUpdate');
    Route::post('/dvision/desabilitar', 'VisionController@disabled');
    Route::post('/dvision/habilitar', 'VisionController@habilitar');
    Route::post('/dvision/eliminar', 'VisionController@destroy');
    //General
    Route::get('/general', 'GeneralController@index');
    Route::post('/general/actualizar', 'GeneralController@update');
    //dGeneral
    Route::post('/dgeneral/grabar', 'GeneralController@store');
    Route::post('/dgeneral/imgGrabar', 'GeneralController@imgStore');
    Route::post('/dgeneral/actualizar', 'GeneralController@dUpdate');
    Route::post('/dgeneral/iactualizar', 'GeneralController@imgUpdate');
    Route::post('/dgeneral/desabilitar', 'GeneralController@disabled');
    Route::post('/dgeneral/habilitar', 'GeneralController@habilitar');
    Route::post('/dgeneral/eliminar', 'GeneralController@destroy');
    Route::post('/getImgURL', 'GeneralController@getImgURL');
    //Productos
    Route::get('/productos', 'ProductoController@index');
    Route::get('/producto/nuevo', 'ProductoController@create');
    Route::post('/producto/grabar', 'ProductoController@store');
    Route::get('/producto/mostrar/{id}', 'ProductoController@show');
    Route::post('/producto/actualizar', 'ProductoController@update');
    Route::post('/producto/eliminar', 'ProductoController@destroy');
    Route::post('/producto/desabilitar', 'ProductoController@disabled');
    Route::post('/producto/habilitar', 'ProductoController@habilitar');
    Route::post('/producto/dltImagen', 'ProductoController@dltImagen');
    Route::post('/producto/buscar', 'ProductoController@buscarProducto');
    Route::post('/tipo/buscar', 'ProductoController@buscarTipo');
    //Linea
    Route::get('/grupo', 'GrupoController@index');
    Route::post('/grupo/grabar', 'GrupoController@store');
    Route::post('/grupo/actualizar', 'GrupoController@update');
    Route::post('/grupo/desabilitar', 'GrupoController@disabled');
    Route::post('/grupo/habilitar', 'GrupoController@habilitar');
    Route::post('/grupo/eliminar', 'GrupoController@destroy');
    //Tipo
    Route::get('/tipo', 'TipoController@index');
    Route::post('/tipo/grabar', 'TipoController@store');
    Route::post('/tipo/actualizar', 'TipoController@update');
    Route::post('/getTipo', 'TipoController@getTipo');
    Route::post('/tipo/desabilitar', 'TipoController@disabled');
    Route::post('/tipo/habilitar', 'TipoController@habilitar');
    Route::post('/tipo/eliminar', 'TipoController@destroy');
    //Herramientas
    Route::get('/herramientas', 'HerramientasController@index');
    Route::post('herramientas/importarLinea', 'HerramientasController@importarLinea');
    Route::post('herramientas/importarTipo', 'HerramientasController@importarTipo');
    Route::post('herramientas/importarProductos', 'HerramientasController@importarProductos');
    Route::post('/herramientas/importarImagenes', 'HerramientasController@importarImagenes');
    //Contactanos
    Route::get('/mntContactanos', 'ContactanosController@index');
    Route::post('/contactanos/actualizar', 'ContactanosController@update');
    //Detalle
    Route::post('/contactanos/dGrabar', 'ContactanosController@storeDetalle');
    Route::post('/contactanos/dActualizar', 'ContactanosController@updateDetalle');
    Route::post('/contactanos/dEliminar', 'ContactanosController@destroy');
    Route::post('/contactanos/desabilitar', 'ContactanosController@disabled');
    Route::post('/contactanos/habilitar', 'ContactanosController@habilitar');
    //Nosotros
    Route::get('/mntNosotros', 'NosotrosController@index');
    Route::post('/nosotros/actualizar', 'NosotrosController@update');
    Route::post('/nosotros/iactualizar', 'NosotrosController@imgUpdate');
    //dMisión
    Route::get('/mntMision', 'NosotrosController@mIndex');
    Route::post('/nmision/actualizar', 'NosotrosController@mUpdate');
    Route::post('/nmision/iactualizar', 'NosotrosController@mImgUpdate');
    //dvision
    Route::get('/mntVision', 'NosotrosController@vIndex');
    Route::post('/nvision/actualizar', 'NosotrosController@vUpdate');
    Route::post('/nvision/iactualizar', 'NosotrosController@vImgUpdate');
    //Cliente
    Route::get('/clientes', 'ClienteController@index');
    Route::get('/cliente/nuevo', 'ClienteController@create');
    Route::post('/cliente/grabar', 'ClienteController@store');
    Route::get('/cliente/mostrar/{id}', 'ClienteController@show');
    Route::post('/cliente/actualizar', 'ClienteController@update');
    Route::get('/cliente/eliminar/{id}', 'ClienteController@destroy');
    Route::get('/cliente/desabilitar/{id}', 'ClienteController@disabled');
    Route::get('/cliente/habilitar/{id}', 'ClienteController@habilitar');
    //Perfil Cliente
    Route::get('/perfil', 'ClienteController@perfil');
    Route::post('/perfil/actualizar', 'ClienteController@updPerfil');
    //Formas de Pago
    Route::get('/formas-de-pago', 'FormasPagoController@index');
    Route::post('/fpago/grabar', 'FormasPagoController@store');
    Route::post('/fpago/actualizar', 'FormasPagoController@update');
    Route::post('/fpago/desabilitar', 'FormasPagoController@disabled');
    Route::post('/fpago/habilitar', 'FormasPagoController@habilitar');
    Route::post('/fpago/eliminar', 'FormasPagoController@destroy');
    //Pedidos
    Route::get('/pedidos', 'PedidosController@index');
    //Documentos Electrónicos CPanel Clientes
    Route::get('/eDocs', 'EDocsController@index');
    //Compras
    Route::get('/compras', 'ComprasController@index');
    //Carrito Compras - Validar datos para la Compra
    Route::post('/compras/guardar', 'ComprasController@addCompra');
    Route::get('/compra/mostrar/{id}', 'ComprasController@show');
    Route::get('/compra-finalizada', 'ComprasController@finCompra');
    //Pagos
    Route::get('/pagos', 'PagosController@index');
    Route::get('/pagos/mostrar/{id}', 'PagosController@show');
    Route::get('/pago/mostrar/{id}', 'PagosController@show2');
    Route::post('/pagos/imgGrabar', 'PagosController@imgUpdate');
    Route::post('/pago/rechazar', 'PagosController@rechazar');
    Route::post('/pago/aceptar', 'PagosController@aceptar');
    Route::get('/excel/exportar/{id}', 'PagosController@exportExcelPedido'); */

});
