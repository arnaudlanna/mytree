<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>MyThree - Adote uma Arvore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/jquery.js"></script>
   </head>
   <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
   <body>
      <div class="container">
         <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
               <div class="card card-signin my-5">
                  <div class="card-body">
                     <i id="arrowback" class="fa fa-arrow-left" style="color:gray; position:absolute; font-size:36px; display: none;"></i>
                     <h4 style="color: gray" class="card-title text-center">MyThree</h4>
                     <!--Formulario de Login-->
                     <form id="form-signin" class="form-signin">
                        <h5 style="color: gray" class="card-title text-center">Entre</h5>
                        <div class="form-label-group">
                           <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                           <label for="inputEmail">Seu E-Mail</label>
                        </div>
                        <div class="form-label-group">
                           <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                           <label for="inputPassword">Senha</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                           <label style="color: gray" class="custom-control-label" for="customCheck1">Lembre de mim</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                        <button id="btn-for-register" class="btn btn-lg btn-success btn-block text-uppercase" type="button">Cadastro</button>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fa fa-google" style="font-size:20px"></i> Entre com Google</button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fa fa-facebook" style="font-size:20px"></i> Entre com Facebook</button>
                     </form>
                     <!--Formulario de cadastro-->
                     <form id="register-form" class="form-signin" style="display: none;">
                        <h5 style="color: gray" class="card-title text-center">Cadastre-se</h5>
                        <div class="form-label-group">
                           <input type="text" id="register-name" class="form-control" placeholder="Email address" required>
                           <label for="register-name">Digite seu nome</label>
                        </div>
                        <div class="form-label-group">
                           <input type="email" id="register-inputEmail" class="form-control" placeholder="Email address" required >
                           <label for="register-inputEmail">Registe seu E-Mail</label>
                        </div>
                        <div class="form-label-group">
                           <input type="text" id="register-inputPassword" class="form-control" placeholder="Password" required>
                           <label for="register-inputPassword">Confirme seu E-Mail</label>
                        </div>
                        <div class="form-label-group">
                           <input type="number" id="register-cellphone" class="form-control" placeholder="Password" required>
                           <label for="register-cellphone">Digite seu Telefone</label>
                        </div>
                        <div class="form-label-group">
                           <input type="password" id="register-password" class="form-control" placeholder="Email address" required>
                           <label for="register-password">Digite uma Senha</label>
                        </div>
                        <div class="form-label-group">
                           <input type="password" id="register-confirmpassword" class="form-control" placeholder="Password" required>
                           <label for="register-confirmpassword">Confirme sua Senha</label>
                        </div>
                        <hr>
                        <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="termsuse">
                           <label style="color: gray" class="custom-control-label" for="termsuse">Concordo com <a href="#">termos de uso</a></label>
                        </div>
                        <button id="btn-register" class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Cadastro</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>