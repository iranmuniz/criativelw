<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
    <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">Escolha o modelo de teste</span>
            </div>

            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <a style="cursor:pointer;" onclick="bottom()">Javascript</a>
                    <a href="https://www.lwsite.com.br/trials/sign_up" target="_blank">Criador de Sites</a>
                    <a href="home.php">PHP</a>
                    <a href="">JSON</a>
                    <a href="application/wordpress/index.php">Wordpress</a>
                    <a href="application/drupal/index.php">Drupal</a>
                    <a href="application/joomla/index.php">Joomla</a>
                    <a href="home.asp">Asp.net</a>
                    <a href="jquery.php">JQuery</a>
                    <a href="mysql.php">MySQL</a>
                    <a href="mysql.php">PostgreSQL</a>
                    <a href="">Java</a>
                    <a href="home.html">Formulário HTML</a>
                </div>
            <!-- // Aqui fica a lista de testes -->

            <?php require_once("src/details.php"); ?>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
</html>