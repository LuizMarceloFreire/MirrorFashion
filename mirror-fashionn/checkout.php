<!Doctype html>


<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Checkout Mirror Fashion</title>

<link rel="stylesheet" href="css/bootstrap.css">




</head>


<body>

<div class="fundao">

<nav class="fixed-top" class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
<span class="navbar-toggler-icon"> <img src="img/if_menu_1814109.png" src="responsivo"> </span>
</button>


<a class="navbar-brand" href="index.html">Mirror Fashion</a>

<div class="collapse navbar-collapse" id="navbarToggleExternalContent">

<ul class="navbar-nav">
<li class="nav-item active">
<a class="nav-link" href="sobre.php"> Sobre </a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"> Ajuda </a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Perguntas frequentes</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Entre em contato</a>
</li>
</ul>
</div>

</nav>

</div>



<div class="jumbotron jumbotron-fluid">
<div class="container">

<h1 class="display-4">Ótima escolha!</h1>

<p class="lead">Obrigado por comprar na Mirror Fashion!
Preencha seus dados para efetivar a compra.</p>

</div>
</div>

<div class="container">

<div class="row">

<div class="col-md-4">

<div class="card mb-3">

<div class="card-header">

<h2>Sua compra</h2>

</div>

<div class="card-body">

<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
class="img-thumbnail mb-3">

<dl>
<dt>Produto</dt>
<dd><?= $_POST['nome'] ?></dd>
<dt>Cor</dt>
<dd><?= $_POST['cor'] ?></dd>
<dt>Tamanho</dt>
<dd><?= $_POST['tamanho'] ?></dd>
<dt>Preço</dt>
<dd id="preco">R$ 129,90</dd>
</dl>

</div>

</div>

<!-- CODIGO NOVO -->
<div class="card mb-3">

<div class="card-body">

<div class="form-group">
<label for="qtd">Quantidade:</label>
<input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
</div>

<div class="form-group">
<label for="total">Total:</label>
<output id="total" class="form-control">R$ 129,90</output>

</div>

</div>

</div>
<!--fIM CODIGO NOVO -->

</div>

<form class="col-md-8">
<div class="row">

<fieldset class="col-lg-6">
<legend> Dados Pessoais </legend>

<div class="form-group">
<label for="nome"> Nome Completo </label>
<input type="text" class="form-control" id="nome" name="nome" autofocus required>
</div>

<div class="form-group">
<label for="email"> Email </label>
<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required> 
</div>

<div class="form-group">
<label for="cpf"> CPF </label>
<input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required> 
</div>

<div class="form-group custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
<label class="custom-control-label" for="newsletter">
Quero receber Newsletter da Mirror Fashion
</label>
</div>
</fieldset>

<fieldset class="col-lg-6">


<legend>Cartão de crédito</legend>

<div class="form-group">
<label for="numero-cartao">Número - CVV</label>
<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999" required>
</div>
<div class="form-group">
<label for="bandeira-cartao">Bandeira</label>
<select class="custom-select" id="bandeira-cartao" required>
<option disabled selected>Selecione uma opção...</option>
<option value="master"> MasterCard </option>
<option value="visa"> VISA </option>
<option value="amex"> American Express </option>
</select>
</div>
<div class="form-group">
<label for="validade-cartao"> Validade </label>
<input type="month" class="form-control" id="validade-cartao" name="validade-cartao" required>
</div>


</fieldset>
</div>

<button type="submit" class="btn btn-primary">
<span class="oi oi-thumb-up"></span>
Confirmar Pedido
</button>

</form>

</div>

</div>

</body>

<script type="text/javascript" src="js/jquery.js"> </script>
<script type="text/javascript" src="js/bootstrap.js"> </script>

<script type="text/javascript" src="js/total.js"></script>
<script type="text/javascript" src="js/inputmask-plugin.js"></script>


</html>