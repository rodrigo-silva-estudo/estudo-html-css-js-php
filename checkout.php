<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/javascript.js">
    <title>Checkout</title>
  </head>
    <body>
      <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Mirror Fashion</a>
          <button class="navbar-toggle" type="button"
            data-targer=".navbar-collapse" data-toggle="collapse">
            menu          
          </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="#"></a>Ajuda</li>
          <li><a href="#"></a>Perguntas frequentes</li>
          <li><a href="#"></a>Entre em contato</li>
        </ul>
        <style>
          .navbar {
            margin: 0;
          }
        </style>
      </nav>
      <div class="jumbotron">
        <div class="container">
          <div class="row">

            <div class="col-sm-4"></div>
              <h1>Ótima escolha!</h1>
              <p>Obrigado por comprar na Mirror Fashion!
              Preencha seus dados para efetivar a compra.</p>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2>Sua Compra</h2>
                  <dl>
                    <dt>Cor</dt>
                    <dd><?= $_POST['cor'] ?></dd>

                    <dt>Tamanho</dt>
                    <dd><?= $_POST['tamanho'] ?></dd>
                  
                    <dt>Produto</dt>
                    <dd><?= $_POST['nome'] ?></dd>

                    <dt>Preço</dt>
                    <dd><?= $_POST['preco'] ?></dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>  <!-- fim .row -->
          <form class="col-sm-8">
            <div class="row">
              <fieldset col-md-6>
                <legend>Dados Pessoais</legend>

                <div class="form-group">
                  <label for="nome">Nome Completo</label>
                  <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                </div>

                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" 
                  placeholder="000.000.000-00" required>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="sim" name="spam" checked>
                    Quero receber spam da Mirror Fashion
                  </label>
                </div>
              </fieldset>

              <fieldset class="col-md-6">
                <legend>Cartão de Crédido</legend>

                <div class="form-group">
                  <label for="numero-cartao">Número - CVV</label>
                  <input type="text" class="form-control" id="numero-cartao"          name="numero-cartao">
                </div>

                <div class="form-group">
                  <label for="bandeira-cartao">Bandeira</label>
                  <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                    <option value="master">MasterCard</option>
                    <option value="visa">VISA</option>
                    <option value="amex">American Express</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="validade-cartao">Validade</label>
                  <input type="month" class="form-control" id="valiade-cartao" name="validade-cartao">

                </div>
              </fieldset>
            </div>
            <button type="submit" class="btn-lg pull-right tbnt-primary">
              <span class="glyphicon glyphicon-thumbs-up"></span>
              Confirmar Pedido
            </button>
          </form>
        </div> <!-- fim .container -->
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.js"></script>
    </body>
</html>