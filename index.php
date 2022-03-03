<!DOCTYPE html>

<html lang="pt-br">

  <head>
      <title>Formulário de Contato</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <link href="css/estilos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      
  </head>

  <body>
    <div class="container mx-auto bg-light mt-1 w-90">
      <header class="row">
        <div class="sr-only sr-only-focusable col-12" id="barra_acessibilidade">
          <ul  id="atalhos">
            <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
            <li><a href="#formulario" accesskey="2">Ir para formulário [2]</a></li>
          </ul>   
        </div>  
        <div class="col-sm-3">   
          <img src="images/logo.png" alt="Logotipo da empresa">
        </div>

        <div class="col-sm-9">
          <h1>Empresa XPTO</h1>
        </div>
      </header>

      <section class="row">
        <div class="col-12">
          <h2 class="d-none" id="menu">Menu</h2>
        </div>
        <div class="d-flex justify-content-sm-center col-12">
          <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div  class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contato</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
          <article class="col-12">  
            <h2 id="formulario">Formulário de Contato</h2>
            <br>

            <form class="needs-validation" novalidate>

              <div class="form-row">
                <label for="nome" class="col-sm-2 col-form-label">Nome*</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome"  required>
                  <div class="invalid-feedback">
                    Campo Nome obrigatório!
                  </div>
                </div>
              </div>
            <br>
            <div class="form-row">
              <label for="email" class="col-sm-2 col-form-label">E-Mail*</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail (ex: aaa@aaa.com)"  required>
                <div class="invalid-feedback">
                  Campo E-Mail obrigatório no formato de email (aaa@aaa.com)!
                </div> 
              </div>
            </div>
            <br>
            <div class="form-row">
              <label for="mensagem" class="col-sm-2 col-form-label">Mensagem*</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="mensagem" rows="4" placeholder="Digite sua mensagem" required></textarea>
                <div class="invalid-feedback">
                  Campo Mensagem obrigatório!
                </div>
                <p class="cinza_claro">* Campos obrigatórios</p>
              </div> 
            </div>
            <br>      
            <div class="center">
              <button type="submit" class="btn btn-primary my-1">Enviar</button>  
            </div>
          </form>
        </article>
      </section>

      <footer class="row">
        <div class="col-12">
          <p><br>Copyright © 2022</p>
        </div>
      </footer>
    </div>

      <script src="js/script.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <noscript>Atualize seu navegador</noscript>
  </body>

</html>