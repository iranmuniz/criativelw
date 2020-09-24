<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
    <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">Application Test</span>
            </div>

            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <a style="cursor:pointer;" onclick="bottom()">Javascript</a>
                    <a href="https://www.lwsite.com.br/trials/sign_up" target="_blank">Criador de Sites</a>
                    <a href="home.php">PHP</a>
                    <a href="pag_const.php">Banco de Dados</a>
                    <a href="app.php">Content Management System</a>
                    <a href="pag_const.php">JSON</a>
                    <a href="home.asp">Asp.net</a>
                    <a href="jquery.php">JQuery</a>
                    <a href="pag_const.php">Java</a>
                    <a href="pag_const.php">SSL</a>
                    <a href="pag_const.php">ionCube</a>
                    <a href="pag_const.php">Themes</a>
                    <a href="pag_const.php">Wikis</a>
                </div>
            <!-- // Aqui fica a lista de testes -->

            <?php require_once("src/details.php"); ?>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
</html>