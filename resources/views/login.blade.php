<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NTFLEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel='stylesheet' type='text/css' href='css/login.css' media='screen' />
  </head>
  <body style="background-color: #141414" >
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <div class="container-fluid">

          
        </div>
      </nav>

      <div class="content text-light p-5" >
        <div class="wrapper fadeInDown">
            <div id="formContent">
    
                <!-- Icon -->
                <div class="fadeIn first">
                    <h3>Acessar</h3>
                    <h2>
                        Entre com seus dados:
                        
                    </h2>
                       
                </div>
            
    
            <!-- Login Form -->
            <form   action="/logar-osuario" method="POST">
            @csrf
                <input type="text" id="login" class="fadeIn second" name="email" id="usuario" placeholder="Digite seu E-mail" autofocus required>
              
                <input type="password" id="password" class="fadeIn third" name="password" id="senha" placeholder="Digite sua senha" required>
                <input type="submit" class="fadeIn fourth" id="btn_entrar" name="btn_entrar" value="Entrar">
                <div class="row ">
                    <div class="col">
                      <input type="checkbox"> <samp style="    color: #cccccc;">Lembrar-me</samp>
                    </div>
                    <div class="col">
                        <a href="#">Esqueci minha senha</a>
                    </div>


                    <div class="text-center mt-5">
                  <span style="color: #000000">Novo na ntflex?</span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Cadastre-se aqui</a>
                
   
                    </div>
                </div>
            </form>
        </div>
        </div>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
    <div class="wrapper fadeInDown">
      <div id="formContent">

          <!-- Icon -->
          <div class="fadeIn first">
              <h3>Registrar</h3>
              <h2>
                faça seu cadastro:
                  
              </h2>
                 
          </div>
      

      <!-- Login Form -->
      <form   action="/cadastro" method="POST">
      @csrf
          <input type="text" id="login" class="fadeIn second" name="email" id="usuario" placeholder="Digite seu E-mail" autofocus required>
        
          <input type="password" id="password" class="fadeIn third" name="password" id="senha" placeholder="Digite sua senha" required>
          <input type="submit" class="fadeIn fourth" id="btn_entrar" name="btn_entrar" value="Entrar">
          <div class="row ">
           
             

           
          </div>
      </form>
  </div>

</div>
     </div>
  
      
      
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>