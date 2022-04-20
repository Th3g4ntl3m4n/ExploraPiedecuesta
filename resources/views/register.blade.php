@extends('layouts.base')

@section('main_content')

        <!-- Page Title -->
        <section class="page-title centred" style="background-image:  url({{ asset('/images/banner/banner-registro-explora-piedecuesta.jpg') }});">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Registro de Empresas</h1>
                    <p>Agencias de turismo, hoteles, restaurantes y más.</p>
                </div>
            </div>
        </section>
          <!-- register-section -->
                <section class="register-section sec-pad">
                    <div class="anim-icon">
                        <div class="icon anim-icon-1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                        <div class="icon anim-icon-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
                    </div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="sec-title centred">
                                <p>Formulario de Registro</p>
                                <h2>Comience a mostrar su empresa</h2>
                            </div>
                            <div class="form-inner">
                                <form method="POST" action="{{ route('agency.store') }}" enctype="multipart/form-data">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="name">Nombre de la Empresa</label>
                                              <input type="text" class="form-control" id="name"  name="name" z-index='1'  placeholder="Ingrese el nombre de su Empresa" autocomplete="off"  required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="name">Descripción de la Empresa</label>
                                              <textarea class="form-control" id="description" name="description" z-index='2'  placeholder="En máximo 500 carácteres describe tu empresa" autocomplete="off"  required></textarea>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="type_c">Tipo de Empresa</label>
                                              <select id="type_c" class="form-control" z-index='3' name="type_c" required>
                                                <option value="" default></option>
                                                <option value="0">Agencia de Turismo</option>
                                                <option value="1">Hotel</option>
                                                <option value="2">Restaurante</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="nit">NIT</label>
                                              <input type="text" class="form-control" id="nit"  name="nit" z-index='4'  placeholder="Digite el NIT de su empresa" autocomplete="off"  required>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="exampleInputFile">Logotipo</label>
                                              <input type="file" id="image" name="image" z-index='5' required>
                                              <p class="help-block">Medidas recomendadas de la imagen: 100x60 píxeles.</p>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="address">Dirección</label>
                                              <input type="text" class="form-control" id="address"  name="address" z-index='6'  placeholder="Ingrese la Dirección de la empresa" autocomplete="off"  >
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Email</label>
                                              <input type="email" class="form-control" id="email" name="email" z-index='7' placeholder="Ingrese su dirección de correo electrónico" autocomplete="off" required>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Contacto</label>
                                              <input type="text" class="form-control" id="contact" name="contact" z-index='8' placeholder="Digite el número de contacto de su empresa" autocomplete="off" required>
                                            </div>
                                          </div>
                                          <hr>
                                          <div class="text"><span>Datos del Representate Legal</span></div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="name">Nombre Representante</label>
                                              <input type="text" class="form-control" id="agent_name"  name="agent_name" z-index='9'  placeholder="Digite sus nombres y apellidos" autocomplete="off"  required>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="exampleInputPassword1">Contraseña</label>
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" z-index='10' autocomplete="off" required>
                                             </div>
                                          </div>
                                           <div class="col-lg-12 col-md-12 col-sm-12 column">
                                             <div class="form-group">
                                               <label for="exampleInputPassword1">Confirmar contraseña</label>
                                               <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Password" z-index='11' autocomplete="off" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" class="form-control" id="email_agent" name="email_agent" z-index='12' placeholder="Ingrese su dirección de correo electrónico" autocomplete="off" required>
                                              </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">Confirmar Email</label>
                                              <input type="email" class="form-control" id="re_email_agent" name="re_email_agent" z-index='13' placeholder="Ingrese su dirección de correo electrónico" autocomplete="off" required>
                                            </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <div class="custom-check-box">
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                        </label>
                                                        <span class="description">Acepto los <a href="book-appointment.html">términos</a>, <a href="book-appointment.html">condiciones</a> y políticas generales.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn">Registrarse</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="other-text">¿Ya está registrado? <a href="login.html">Iniciar sesión</a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- register-section end -->
@endsection
