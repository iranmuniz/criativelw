<!DOCTYPE html>
<html>
	<?php require_once('src/head.php'); ?>	
<body>
	<main>
		<fieldset>
			<div class="space-center">
				<div class="title-form">
					<h1>Upload de arquivos com PHP</h1>
				</div>
				<div>
					<h3>Tipos de arquivos habilitados para Upload</h3>
					<p>".doc", ".xml", ".txt", ".pdf", ".docx", ".png", ".jpg"</p>
					<p>Os arquivos em upload são direcionados para o diretório php/uploads</p>
                </div>

					<?php
						// DEFINIÇÕES
						// Numero de campos de upload
						$numeroCampos = 5;
						// Tamanho máximo do arquivo (em bytes)
						$tamanhoMaximo = 900000000000000;
						// Extensões aceitas
						$extensoes = array(".doc", ".xml", ".txt", ".pdf", ".docx", ".png", ".jpg");
						// Caminho para onde o arquivo será enviado
						$caminho = "uploads/";
						// Substituir arquivo já existente (true = sim; false = nao)
						$substituir = false;

						for ($i = 0; $i < $numeroCampos; $i++) {
							
							// Informações do arquivo enviado
							$nomeArquivo = $_FILES["arquivo"]["name"][$i];
							$tamanhoArquivo = $_FILES["arquivo"]["size"][$i];
							$nomeTemporario = $_FILES["arquivo"]["tmp_name"][$i];
							
							// Verifica se o arquivo foi colocado no campo
							if (!empty($nomeArquivo)) {
							
								$erro = false;
							
								// Verifica se o tamanho do arquivo é maior que o permitido
								if ($tamanhoArquivo > $tamanhoMaximo) {
									$erro = "O arquivo " . $nomeArquivo . " não deve ultrapassar " . $tamanhoMaximo. " bytes";
								} 
								// Verifica se a extensão está entre as aceitas
								elseif (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
									$erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
								} 
								// Verifica se o arquivo existe e se é para substituir
								elseif (file_exists($caminho . $nomeArquivo) and !$substituir) {
									$erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
								}
							
								// Se não houver erro
								if (!$erro) {
									// Move o arquivo para o caminho definido
									move_uploaded_file($nomeTemporario, ($caminho . $nomeArquivo));
									// Mensagem de sucesso
									echo "O arquivo <b>".$nomeArquivo."</b> foi enviado com sucesso. <br />";
								} 
								// Se houver erro
								else {
									// Mensagem de erro
									echo $erro . "<br />";
								}
							}
						}
					?>

				<form action="" method="post" enctype="multipart/form-data">
					<p><input type="file" name="arquivo[]" /></p>
					<p><input type="file" name="arquivo[]" /></p>
					<p><input type="file" name="arquivo[]" /></p>
					<p><input type="file" name="arquivo[]" /></p>
					<p><input type="file" name="arquivo[]" /></p>
					<p><input class="ls-btn" type="submit" value="Enviar" /></p>
				</form>
			</div>
		</fieldset>
	</main>
</body>
	<?php require_once('src/footer.php'); ?>
</html>