<?php

// https://onlinestringtools.com/escape-string
// https://www.freeformatter.com/html-formatter.html
/**
 * Para poder reciclar el header mas facilmente, podemos pasarlo a un archivo php e instanciarlo
 * en una linea de codigo por cada pagina.
 * Eso hace mas facil mantenerlo
 */

echo "

      \n\n                
      <ul class=\"nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0\">
         \n                    
         <li><a href=\"../../index.php\" class=\"nav-link px-2 text-white\">Home</a></li>
         \n                    
         <li><a href=\"../src/viewartistas.php\" class=\"nav-link px-2 text-white\">Artistas</a></li>
         \n                    
         <li><a href=\"../src/viewconcierto.php\" class=\"nav-link px-2 text-white\">Conciertos</a></li>
         \n                    
         <li><a href=\"../src/view/blog.php\" class=\"nav-link px-2 text-white\">Blog</a></li>
         \n                    
         <li><a href=\"../src/view/merch.php\" class=\"nav-link px-2 text-white\">Merch</a></li>
         \n\n                
      </ul>
      \n\n                
      <div class=\"text-end\">
         \n                    <!-- Boton modal Login -->\n                    <button type=\"button\" class=\"btn btn-outline-light me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdropLogin\">\n                    Login\n                    </button>\n\n                    <!-- Modal Login -->\n                    
         <div class=\"modal fade\" id=\"staticBackdropLogin\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
            \n                        
            <div class=\"modal-dialog\">
               \n                            
               <div class=\"modal-content\">
                  \n                                
                  <div class=\"modal-header\">
                     \n                                    
                     <h1 class=\"modal-title fs-5\" id=\"staticBackdropLabelLogin\">Iniciar Sesion</h1>
                     \n                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                
                  </div>
                  \n\n                                
                  <div class=\"modal-body\">
                     \n                                    
                     <div class=\"form-signin w-100 m-auto\">
                        \n                                        
                        <form>
                           \n                                        <div style=\"text-align: left;\">\n                                            <p style=\"margin: 1rem;\">Email</p>\n                                        
                     </div>
                     \n                                        <div class=\"form-floating\">\n                                        <input type=\"email\" class=\"form-control\" id=\"floatingInputLogin\" placeholder=\"name@example.com\">\n                                        <label for=\"floatingInputLogin\">Email@dominio.com</label>\n                                        </div>\n                                        <div style=\"text-align: left;\">\n                                            <p style=\"margin: 1rem;\">Contraseña</p>\n                                        
                  </div>
                  \n                                        <div class=\"form-floating\">\n                                        <input type=\"password\" class=\"form-control\" id=\"floatingPasswordLogin\" placeholder=\"Password\">\n                                        <label for=\"floatingPasswordLogin\">Contraseña</label>\n                                        </div>\n\n                                        <div class=\"form-check text-start my-3\">\n                                        <input class=\"form-check-input\" type=\"checkbox\" value=\"remember-me\" id=\"flexCheckDefaultLogin\">\n                                        <label class=\"form-check-label\" for=\"flexCheckDefaultLogin\">\n                                            Recordarme\n                                        </label>\n                                        </div>\n                                        </form>\n                                    
               </div>
               \n                                
            </div>
            \n\n                                
            <div class=\"modal-footer\">\n                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>\n                                    <button type=\"button\" class=\"btn btn-primary\">Iniciar sesion</button>\n                                </div>
            \n                            
         </div>
         \n                        
      </div>
      \n                    
   </div>
   \n\n                    <!-- Boton modal Register -->\n                    <button type=\"button\" class=\"btn  btn-warning me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdropRegister\">\n                    Registrarse\n                    </button>\n\n                    <!-- Modal Register -->\n                    
   <div class=\"modal fade\" id=\"staticBackdropRegister\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
      \n                        
      <div class=\"modal-dialog\">
         \n                            
         <div class=\"modal-content\">
            \n                                
            <div class=\"modal-header\">
               \n                                    
               <h1 class=\"modal-title fs-5\" id=\"staticBackdropLabelRegister\">Registrarse</h1>
               \n                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                
            </div>
            \n\n                                
            <div class=\"modal-body\">
               \n                                    
               <div class=\"form-signin w-100 m-auto\">
                  \n                                        
                  <form>
                     \n                                            <div style=\"text-align: left;\">\n                                                <p style=\"margin: 1rem;\">Email</p>\n                                                
               </div>
               \n                                                <div class=\"form-floating\">\n                                                <input type=\"email\" class=\"form-control\" id=\"floatingInputRegister\" placeholder=\"name@example.com\">\n                                                <label for=\"floatingInputRegister\">Email@dominio.com</label>\n                                                </div>\n                                                <div style=\"text-align: left;\">\n                                                 <p style=\"margin: 1rem;\">Contraseña</p>\n                                                 
            </div>
            \n                                                <div class=\"form-floating\">\n                                                <input type=\"password\" class=\"form-control\" id=\"floatingPasswordRegister\" placeholder=\"Password\">\n                                                <label for=\"floatingPasswordRegister\">Contraseña</label>\n                                                </div>\n                                                <div style=\"text-align: left;\">\n                                                 <p style=\"margin: 1rem;\">Repita su contraseña</p>\n                                              
         </div>
         \n                                                <div class=\"form-floating\">\n                                                <input type=\"password\" class=\"form-control\" id=\"floatingPasswordCheck\" placeholder=\"Password\">\n                                                </div>\n\n                                                <div class=\"form-check text-start my-3\">\n                                                <input class=\"form-check-input\" type=\"checkbox\" value=\"remember-me\" id=\"flexCheckDefaultRegister\">\n                                                <label class=\"form-check-label\" for=\"flexCheckDefaultRegister\">\n                                                    Acepto los terminos y condiciones\n                                                </label>\n                                            </div>\n                                        </form>\n                                    
      </div>
      \n                                
   </div>
   \n\n                                
   <div class=\"modal-footer\">\n                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>\n                                    <button type=\"button\" class=\"btn btn-primary\">Registrarse</button>\n                                </div>
   \n                            
</div>
\n                        </div>\n                    </div>\n                    <!-- <button type=\"button\" class=\"btn btn-outline-light me-2\">Login</button> -->\n                    <!-- <button type=\"button\" class=\"btn btn-warning\">Registrarse</button> -->\n                </div>\n            </div>\n        </div>\n    
</header>

";


/* HEADER ORIGINAL

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <h1>LOGO</h1>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="artistas.php" class="nav-link px-2 text-white">Artistas</a></li>
                    <li><a href="concierto.php" class="nav-link px-2 text-white">Conciertos</a></li>
                    <li><a href="blog.php" class="nav-link px-2 text-white">Blog</a></li>
                    <li><a href="merch.php" class="nav-link px-2 text-white">Merch</a></li>

                </ul>

                <div class="text-end">
                    <!-- Boton modal Login -->
                    <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">
                    Login
                    </button>

                    <!-- Modal Login -->
                    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabelLogin">Iniciar Sesion</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-signin w-100 m-auto">
                                        <form>
                                        <div style="text-align: left;">
                                            <p style="margin: 1rem;">Email</p>
                                        </div>
                                        <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInputLogin" placeholder="name@example.com">
                                        <label for="floatingInputLogin">Email@dominio.com</label>
                                        </div>
                                        <div style="text-align: left;">
                                            <p style="margin: 1rem;">Contraseña</p>
                                        </div>
                                        <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPasswordLogin" placeholder="Password">
                                        <label for="floatingPasswordLogin">Contraseña</label>
                                        </div>

                                        <div class="form-check text-start my-3">
                                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefaultLogin">
                                        <label class="form-check-label" for="flexCheckDefaultLogin">
                                            Recordarme
                                        </label>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Iniciar sesion</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Boton modal Register -->
                    <button type="button" class="btn  btn-warning me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropRegister">
                    Registrarse
                    </button>

                    <!-- Modal Register -->
                    <div class="modal fade" id="staticBackdropRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabelRegister">Registrarse</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-signin w-100 m-auto">
                                        <form>
                                            <div style="text-align: left;">
                                                <p style="margin: 1rem;">Email</p>
                                                </div>
                                                <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingInputRegister" placeholder="name@example.com">
                                                <label for="floatingInputRegister">Email@dominio.com</label>
                                                </div>
                                                <div style="text-align: left;">
                                                 <p style="margin: 1rem;">Contraseña</p>
                                                 </div>
                                                <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPasswordRegister" placeholder="Password">
                                                <label for="floatingPasswordRegister">Contraseña</label>
                                                </div>
                                                <div style="text-align: left;">
                                                 <p style="margin: 1rem;">Repita su contraseña</p>
                                              </div>
                                                <div class="form-floating">
                                                <input type="password" class="form-control" id="floatingPasswordCheck" placeholder="Password">
                                                </div>

                                                <div class="form-check text-start my-3">
                                                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefaultRegister">
                                                <label class="form-check-label" for="flexCheckDefaultRegister">
                                                    Acepto los terminos y condiciones
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Registrarse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
                    <!-- <button type="button" class="btn btn-warning">Registrarse</button> -->
                </div>
            </div>
        </div>
    </header>   

*/
?>
