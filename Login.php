<!doctype html>
<html lang="en">
<head>
  <title>Dengue</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="Estile.css">
</head>
<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Iniciar sesión  </span><span>Registrarse</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<form  method="post">
											<h2 class="mb-4 pb-3">Iniciar sesión </h2>
											<div class="form-group">
												<input type="email" name= "email" class="form-style" placeholder="Correo">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="Contraseña" class="form-style" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											<?php
										    include("Registro1.php");
										    ?>
										    </form>
											</div>
											</h2>
											<a href="Menu.php" class="btn mt-4" >Iniciar sesión </a>
                      <p class="mb-0 mt-4 text-center"><a href="inicio.php" class="link">¿Olvidaste tu Contraseña?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
										<form method="post">
										<h3 class="mb-3 pb-3">Registrarse</h3>
											<div class="form-group">
												<input type="text" name= "name" class="form-style" placeholder="Nombre_completo">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="text" name= "telefono" class="form-style" placeholder="Telefono">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                                            <div class="form-group mt-2">
												<input type="email" name= "email" class="form-style" placeholder="Correo">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name= "contraseña" class="form-style" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</form>
										<?php
										include("Registro.php");
										?>
											<a href="Login.php" class="btn mt-4">Registrarse</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>