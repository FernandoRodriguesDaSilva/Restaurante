<?php include_once('conexao.php');?>

<div class="global-page-container">
	<div class="slider-cardapio">
		<div class="slider-002 small-12 small-centered columns">
			<!-- Pegar pelo id do prato  -->
			<?php
			$cod_prato = $_GET['prato']; 
		//echo $cod_prato;
			// traz todas a informações deste prato
			$inserir_banco = "SELECT * FROM pratos WHERE codigo='$cod_prato'";
// variavel que vai armazenar a query que vai ser usada em index
			$result = $db_connect->query($inserir_banco);
			if($result->num_rows > 0) { 
				while($row = $result->fetch_assoc()){
					//echo '<pre>';
					//print_r($row);
					//echo '</pre>';

// Criando variavel para acessar o banco de dados
					$prato_nome = $row['nome'];
					$prato_desc = $row['descricao'];
					$prato_categoria = $row['categoria'];
					$prato_preco = $row['preco'];
					$prato_calorias = $row['calorias'];
				}
			} else {
				'Não há destaques';
			}
			?>
		</div>
	</div>
</div>