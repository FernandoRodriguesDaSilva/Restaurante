<?php include_once ('includes/header.php'); ?>

<div class="product-page small-11 large-12 columns no-padding small-centered">
    
    <div class="global-page-container">
<!-- Traz toda a funcionalidade da pagina pegar_prato -->
<?php include_once 'conexao/pegar_prato.php'; ?>
 <!-- Protegendo a variavel para não ficar zuando no https -->
<?php if($prato_nome != NULL){  ?>
        <div class="product-section">
            <div class="product-info small-12 large-5 columns no-padding">
                <h3><?php echo $prato_nome; ?></h3>
                <h4><?php echo $prato_categoria; ?></h4>
                <p><?php echo $prato_desc; ?></p>

                <h5><b>Preço: </b><?php echo $prato_preco; ?></h5>
                <h5><b>Calorias: </b><?php echo $prato_calorias; ?></h5> 
            </div>
            <div class="product-picture small-12 large-7 columns no-padding">
                <img src="img/cardapio/<?php echo $cod_prato; ?>.jpg" alt="Imagem meramente ilustrativa de <?php echo $prato_nome; ?>">
            </div>
        </div>
    <?php } else{
        echo "Prato não encontrado !!" . "<br>";
    } ?> 

    <!-- Fechando o if -->
        <div class="go-back small-12 columns no-padding">
            <a href="cardapio.php"><< Voltar ao Cardápio</a>
        </div>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>