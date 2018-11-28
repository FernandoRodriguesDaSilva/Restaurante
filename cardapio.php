<?php include_once('conexao/conexao.php'); ?>

<?php include_once('includes/header.php'); ?>  

<div class="cardapio-list small-11 large-12 columns no-padding small-centered">

    <div class="global-page-container">
        <div class="cardapio-title small-12 columns no-padding">
            <h3>Cardapio</h3>
            <hr></hr>
        </div>

        <?php  include_once('conexao/entrada.php');

        if($resultado->num_rows > 0) {
            // percorre toda base de dados pegando a categoria
            while ( $row = $resultado->fetch_assoc()) {
                $categoria = $row['categoria'];?>
                <div class="category-slider small-12 columns no-padding">
                    <h4><?php echo $categoria; ?></h4>
                    <div class="slider-cardapio">
                        <!-- Uma Query dentro de uma query -->
                        <div class="slider-002 small-12 small-centered columns">
                            <?php 

                            $consultar = "SELECT * FROM pratos WHERE categoria='$categoria'";
                            $resultado2 = $db_connect->query($consultar);

                            if($resultado2->num_rows > 0){
                                while($row2 = $resultado2->fetch_assoc())
                                    { ?>

                                        <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns"> 
                                            <div class="cardapio-item">
                                                <a href="prato.php?prato=<?php echo $row2['codigo']; ?>">
                                                    <div class="item-image">
                                                        <img src="img/cardapio/<?php echo $row2['codigo'];?>.jpg" alt="camaroes"/>   
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="title"><?php echo $row2['nome']; ?></div>
                                                    </div>
                                                    <div class="gradient-filter">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>    
                                    <?php }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                'Não há cardápio';
            }
            ?>
        </div>
    </div>


    <?php include_once('includes/footer.php'); ?>