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
        </div>
      </div>
    </body>
</html>