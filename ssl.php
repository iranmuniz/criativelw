<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
        <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">SSL</span>
            </div>

            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <div class="space-sub-title">
                        <span class="sub-title">Install</span>
                    </div>
                        <a href="404.php">Let's Encrypt manualmente</a>
                        <a href="404.php">Let's Encrypt automático</a>
                        <a href="https://br.wordpress.org/plugins/really-simple-ssl/" target="_blank">Really Simple SSL no WordPress</a>
                        <a href="404.php">SSL Locaweb</a>
                        <a href="404.php">Gerar chave .csr e .key</a>
                    </div>
                </div>
            <!-- // Aqui fica a lista de testes -->
        </div>
        <div class="space-span">
            <div class="border-black">
                <span>// Recomendado a instalação do Plugin Really Simple SSL no WordPress para reconhecimento do certificado no servidor.</span>
            </div>
        </div>
        <div class="space-span">
            <div class="border-black">
                <span>// Verificador de certificado online aqui **</span>
            </div>
        </div>
        <div class="space-span">
            <div class="border-black">
                <span>Leia sobre a importância de certificados em seu site.</span>
            </div>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
    <?php require_once("src/footer.php"); ?>
</html>