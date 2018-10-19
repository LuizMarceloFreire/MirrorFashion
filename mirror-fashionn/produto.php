<!DOCTYPE html> 

<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos");
$produto = mysqli_fetch_array($dados);

?>


<html>
<head>

<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width">

<title> Mirror Fashion </title>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/produto.css">
<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">



</head>


<body>

<div class="quadrado relativo">
<div class="quadrado absoluto">

<header class="container">


<h1> <img class="logotipo" src="img/logo.png" alt="Mirror Fashiom"> </h1>
<p class="sacola"> Nenhum item na sacola de compras </p>

<nav class="menu-opcao">
<ul>
<li> <a href="#"> Sua Conta </a> </li>
<li> <a href="#"> Lista de Desejos </a> </li>
<li> <a href="#"> Cartão Fidelidade </a> </li>
<li> <a href="sobre.php">Sobre </a> </li>
<li> <a href="#"> Ajuda </a> </li>




</ul>
</nav>

</div>


</div>

<div class="produto-back">

<div class="container">

<div class="produto">



<form action="checkout.php" method="POST" >

<input type="hidden" name="id" value="<?= $produto['id'] ?>">

<input type="hidden" name="nome" value="Fuzzy Cardigan"> <h1><?= $produto['nome'] ?></h1>
<input type="hidden" name="preco" value="129,00"><p>por apenas <?= $produto['preco'] ?></p>

<fieldset class="cores">


<legend> Escolha a cor: </legend>

<input type="radio" name="cor" value="verde" id="verde" chacked>
<label for="verde">
<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="Produto na cor Verde">
</label>

<input type="radio" name="cor" value="rosa" id="rosa">
<label for="rosa">
<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="Produto na cor Rosa">
</label>

<input type="radio" name="cor" value="azul" id="azul">
<label for="azul">
<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="Produto na cor Azul">
</label>
</fieldset>
<fieldset class="tamanhos">
<legend>Escolha o tamanho:</legend>

<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
<output for="tamanho" name="valortamanho"> 42 </output>
</fieldset>
<button class="comprar">Comprar</button>

</form>


</div>


<div class="detalhes">
<h2> Detalhe do Produto </h2>

<p><?= $produto['descricao'] ?></p>

<table>
<thead>

<tr> 
<th> Caracteristicas </th>
<th> Detalhe </th>
</tr>

</thead>
<tbody>

<tr> 
<td> Modelo </td>
<td> Cardigan </td>
</tr>

<tr> 
<td> Material </td>
<td> Algodão Poliester </td>
</tr>

<tr> 
<td> Cores </td>
<td>Azul, Rosa e Verde </td>
</tr>

<tr> 
<td> Lavagem </td>
<td> Lavar a Mão </td>
</tr>

</tbody>
</table>

</div>


</div>

</div>

<br>
<br>




<footer>

<div class="container">
<img src="img/logo-rodape.png" alt="Logo da Mirror Fashion">
<ul class="social">
<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
</ul>
</div>




</footer>

</body>


<script type="text/javascript" src="js/produto.js"> </script>

</html>