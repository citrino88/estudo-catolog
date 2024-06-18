<?php
require "cabecalho.php";
?>

<article class="destaque">
    <h2>BOLOS CASEIROS</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, illum!</p>
    <figure><img src="img/im-fundo.jpg" class="img-fluid" ialt="Imagem de um doce"></figure>
</article>

<div class="categorias">
    <h2>Selecione a categoria</h2>
    <a href="paes.php" class="caixa">PÃES ARTESANAIS</a>
    <a href="doces.php" class="caixa">DOCES</a>    
    <a href="salgados.php" class="caixa">SALGADOS</a>
    <a href="bolos.php" class="caixa">BOLOS CASEIROS</a>
</div>    

<div id="btn-categorias" class="d-grid gap-2">
  <button class="btn btn-primary" type="button">Pães Artesanais</button>
  <button class="btn btn-primary" type="button">Doces</button>
  <button class="btn btn-primary" type="button">Salgados</button>
  <button class="btn btn-primary" type="button">Bolos Caseiros</button>
</div>


    <?php
    require_once "rodape.php";
    ?>