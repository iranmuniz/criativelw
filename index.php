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
                    <a href="">Javascript</a>
                    <a href="form.php">PHP</a>
                    <a href="">JSON</a>
                    <a href="application/wordpress/index.php">Wordpress</a>
                    <a href="application/drupal/index.php">Drupal</a>
                    <a href="application/joomla/index.php">Joomla</a>
                    <a href="">Asp.net</a>
                    <a href="jquery.php">JQuery</a>
                    <a href="mysql.php">MySQL</a>
                    <a href="mysql.php">PostGreSQL</a>
                    <a href="">Java</a>
                </div>
            <!-- // Aqui fica a lista de testes -->

            <?php require_once("src/details.php"); ?>
        </div>
    </main>
</body>
</html>