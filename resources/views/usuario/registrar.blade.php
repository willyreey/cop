@extends('template')

<title>REGISTRO CENTRO ORTOPEDICO PODOLOGICO</title>

@section("content")

        <div class="card text-center">
            <div class="card-header">
                <div class="col-12 text-center"><h3>Registro de usuario</h3></div>
            </div>
            <div class="card-body">
            <div class="row" style="text-align:right">
                    <div class="form-group col-6 col-md-4 col-lg-4"><b>¿Desea registrar como?</b></div>
                        <div class="form-group col-6 col-md-6  col-lg-5">
                            <select onchange="visitante();" class="form-control" name="tipo_u" id="seleccion">
                            <option value="0">ELEGIR COMO DESEA REGISTRARSE</option>
                            <option value="1">VISITANTE</option>
                            <option value="2">PACIENTE</option>
                            <option value="3">PERSONAL DE ENFERMERIA</option>
                            <option value="4">PERSONAL DE MANTENIMIENTO Y SEGURIDAD</option>
                            <option value="5">PERSONAL ADMINISTRATIVO Y OFICINA</option>
                            <option value="6">ADMINISTRADOR DEL PORTAL WEB</option>
                            <option value="7">PROVEEDORES</option>
                            <option value="8">TRABAJADORES Y SERVICIOS EVENTUALES</option>
                            </select>
                        </div>
                    </div>
            </div>

        <div class="container">
            <div class="row">
                <div class="col" style="display:none" id="mensaje">
                    <center>
                        <b><b style="color:red">*</b> Campos Obligatorios</b>
                    </center>
                </div>
            </div> 
        </div> 
        <br>   
        @include('sweetalert::alert')

               <form id="f1" style="display:none;" action="/registro_1" method="POST" >
                    
                    {{ csrf_field() }}
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right;">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="Nombres" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right;">
                    <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                    </div>                        
                        
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row" style="text-align:right;">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                        </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder="Contraseña" name="password" id="password" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right;">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                                <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                            </svg>                        
                        </div>
                        <div class="form-group col-3 col-lg-1 ">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                        </div>
                        <div class="form-group col-lg-3">
                        <input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required>
                        </div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right;">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-calendar-date-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm.066-2.544c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2zm-2.957-2.89v5.332H5.77v-4.61h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="date" title="Fecha de nacimiento" placeholder="Fecha de nacimiento" name="fecha_naci" id="fecha_naci" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="Lugar de nacimiento" name="lugar_naci" id="lugar_naci" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder="Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-bookmarks-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                                <path fill-rule="evenodd" d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="Tipo de patologia o interes" name="tipo_poi" id="tipo_poi" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-sticky-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H9.5a1 1 0 0 0-1 1z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="   Tipo de especializacion" name="tipo_e" id="tipo_e" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>

                <form id="f2" style="display:none" action="/registro_2" method="POST">

                {{ csrf_field() }}

                    <div class="p-2"  ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>                           
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombres" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg>  
                    </div>
                        <div class="form-group col-3 col-lg-1 ">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                    </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    
                        </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Lugar de nacimiento" name="lugar_naci" id="lugar_naci" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                            <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-bookmarks-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4z"/>
                                <path fill-rule="evenodd" d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
                            </svg>                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Tipo de patologia o interes" name="tipo_poi" id="tipo_poi" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-sticky-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H9.5a1 1 0 0 0-1 1z"/>
                            </svg>                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Tipo de especializacion" name="tipo_e" id="tipo_e" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center" >
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>

                <form id="f3" style="display:none" action="/registro_3" method="POST">

                {{ csrf_field() }}

                    <div class="p-1"  ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombres" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                    <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg>  
                    </div>
                        <div class="form-group col-3 col-lg-1">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                        </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder=" Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    </div>

                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder="  Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>  
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center" style="text-align:right">
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>

                <form id="f4" style="display:none" action="/registro_4" method="POST">

                {{ csrf_field() }}

                    <div class="p-1"  ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>                        
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombre" name="nombres" id="nombres" required></div>
                    </div>  
                    <div class="p-2" ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>                        
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                    <b style="color:red">*</b>
                    <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg> 
                    </div>
                        <div class="form-group col-3 col-lg-1">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                        </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    </div>

                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center" style="text-align:right">
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>

                <form id="f5" style="display:none" action="/registro_5" method="POST">
                
                {{ csrf_field() }}
                    
                    <div class="p-1"  ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>  
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombres" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>  
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                    <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg> 
                    </div>
                        <div class="form-group col-3 col-lg-1">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                        </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    </div>

                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center" style="text-align:right">
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>
                
                <form id="f6" style="display:none" action="/registro_6" method="POST">
                    {{ csrf_field() }}
                    <div class="p-1"  ></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombres" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg>  
                    </div>
                        <div class="form-group col-3 col-lg-1 ">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                    </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    
                        </div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>

                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>

                <form id="f7" style="display:none" action="/registro_7" method="POST">
                {{ csrf_field() }}
                    <div class="p-1"  ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombre" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                    <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg>  
                    </div>
                        <div class="form-group col-3 col-lg-1 ">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                    </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    
                        </div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>


                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4  col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-file-post-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM4.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-7z"/>
                        </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Número de RIF" name="rif" id="rif" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>

                <form id="f8" style="display:none" action="/registro_8" method="POST">
                {{ csrf_field() }}

                    <div class="p-1"  ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Nombre" name="nombres" id="nombres" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Apellidos" name="apellidos" id="apellidos" required></div>
                    </div>
                                        <div class="row" style="text-align:right">
                    <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-credit-card-2-back-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2z"/>
                            <path d="M0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                        </svg>  
                    </div>
                        <div class="form-group col-3 col-lg-1 ">
                        <select class="custom-select" name="tipo_doc">
                        <option value="1">V-</option>
                        <option value="2">E-</option>
                        <option value="3">J-</option>
                        </select>
                    </div>
                        <div class="form-group col-lg-3"><input class="form-control" type="text" placeholder="Documento de indentificacion" name="numero_i" id="numero_i" required></div>                    
                        </div>
                    <div class="p-1"></div>
                    <div class="row"  style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-shield-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="password" placeholder=" Contraseña" name="password" id="password" required></div>
                    </div>


                    <div class="p-2"></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                        <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="text" placeholder=" Direccion" name="direccion" id="direccion" required></div>
                    </div>
                    <div class="p-2" ></div>
                    <div class="row" style="text-align:right">
                        <div class="form-group col-4 col-md-6 col-lg-4">
                        <b style="color:red">*</b>
                            <svg width="30" height="30" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg> 
                        </div>
                        <div class="form-group col-6 col-md-3 col-lg-4"><input class="form-control" type="email" placeholder=" Correo Electronico" name="correo_p" id="correo_p" required></div>
                    </div>
                    <div class="p-2"></div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 ">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Registrar">
                        </div>
                    </div>
                    <br>

                </form>
        </div>
    
 
        @endsection

@section("footer")

@endsection
