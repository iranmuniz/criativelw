<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
    <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">Menu</span>
            </div>

            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <a style="cursor:pointer;" onclick="bottom()">Javascript</a>
                    <a href="home.php">PHP</a>
                    <a href="db.php">Banco de Dados</a>
                    <a href="app.php">Content Management System</a>
                    <a href="404.php">JSON</a>
                    <a href="home.asp">Asp.net</a>
                    <a href="jquery.php">JQuery</a>
                    <a href="404.php">Java</a>
                    <a href="ssl.php">SSL</a>
                    <a href="404.php">ionCube</a>
                    <a href="404.php">Themes</a>
                    <div class="space-sub-title">
                        <span class="sub-title">Mais Locaweb</span>
                    </div>
                    <a href="http://profissionaisdeinternet.com.br" target="_blank">Profissionais na Internet</a>
                    <a href="https://ajuda.locaweb.com.br/" target="_blank">Ajuda Locaweb</a>
                    <a href="https://www.lwsite.com.br/trials/sign_up" target="_blank">Criador de Sites</a>
                    <a href="https://blog.locaweb.com.br/" target="_blank">Blog Locaweb</a>
                </div>
            <!-- // Aqui fica a lista de testes -->

            <?php require_once("src/footer.php"); ?>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
</html>