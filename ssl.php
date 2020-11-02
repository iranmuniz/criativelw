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
                <div class="style-list">
                    <a href="https://ajuda.locaweb.com.br/wiki/certificado-lets-encrypt/" target="_blank">Instalação Let's Encrypt manual</a>
                    <a href="https://ajuda.locaweb.com.br/wiki/como-emitir-o-certificado-lets-encrypt-no-painel-hospedagem/" target="_blank">Instalação Let's Encrypt automático</a>
                    <a href="https://br.wordpress.org/plugins/really-simple-ssl/" target="_blank">Really Simple SSL no WordPress</a>
                    <a href="https://www.locaweb.com.br/ssl-locaweb/" target="_blank">Planos SSL Locaweb</a>
                    <a href="https://ajuda.locaweb.com.br/wiki/como-emitir-certificados-alpha-e-wildcard-ssl-locaweb/" target="_blank">Instalação SSL Locaweb</a>
                    <a href="https://csrgenerator.com/" target="_blank">Gerar chave .csr e .key - CSR Generator</a>
                    <a href="https://ajuda.locaweb.com.br/wiki/ssl/" target="_blank">Gerar chave .csr, .key, .ca, .crt/.cer</a>
                    <a href="https://www.sslshopper.com/ssl-checker.html" target="_blank">Validador - SSL Checker</a>
                    <a href="https://ajuda.locaweb.com.br/wiki/paginas-ssl-com-itens-nao-seguros/" target="_blank">Páginas SSL não seguros</a>
                    <a href="https://ajuda.locaweb.com.br/wiki/como-forcar-o-https-alterar-informacoes-apos-instalacao/" target="_blank">Forçar HTTPS</a>
                    <a href="https://ajuda.locaweb.com.br/wiki/duvidas-de-seguranca-do-certificado-ssl-locaweb/" target="_blank">Dúvidas de Segurança</a>
                    <a href="more.php"><b><i>Mais Locaweb</i></b></a>
                </div>
            </div>
        </div>
        <div class="space-span">
            <div class="border-black">
                <span><b class="color-bar">//&nbsp</b>Recomendado a instalação do Plugin Really Simple SSL no WordPress para reconhecimento do certificado no servidor.</span>
            </div>
        </div>
        <div class="space-span">
            <div class="border-black">
                <span><b class="color-bar">//&nbsp</b>Leia sobre a importância do certificado SSL em seu site no tópico Dúvidas de Segurança.</span>
            </div>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
    <?php require_once("src/footer.php"); ?>
</html>