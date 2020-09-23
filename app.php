<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
    <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">Content Management System</span>
            </div>

            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <a href="stop.php">WordPress</a>
                    <a href="stop.php">Drupal</a>
                    <a href="stop.php">Joomla</a>
                    <a href="stop.php">ionCube</a>
                </div>
            <!-- // Aqui fica a lista de testes -->

            <?php require_once("src/details.php"); ?>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
</html>