<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Checkout</title>
  </head>
    <body>
      <div class="jumbotron">
        <div class="container">

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
              </dl>
              <dt>Produto</dt>
              <dd><?= $_POST['nome'] ?></dd>

              <dt>Preço</dt>
              <dd><?= $_POST['preco'] ?></dd>
            </div>
          </div>

          <form>
            <fieldset>
              <legend>Dados Pessoais</legend>

              <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" autofocus>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
              </div>

              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" 
                placeholder="000.000.000-00">
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" value="sim" name="spam" checked>
                  Quero receber spam da Mirror Fashion
                </label>
              </div>
            </fieldset>

            <fieldset>
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

            <button type="submit" class="btn-lg pull-right tbnt-primary">
              <span class="glyphicon glyphicon-thumbs-up"></span>
              Confirmar Pedido
            </button>
          </form>
        </div>
      </div>
    </body>
</html>