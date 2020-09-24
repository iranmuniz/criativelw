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
                    <div class="space-sub-title">
                        <span class="sub-title">Install</span>
                    </div>
                    <a href="pag_const.php">WordPress</a>
                    <a href="pag_const.php">Drupal</a>
                    <a href="pag_const.php">Joomla</a>
                    <div class="space-sub-title">
                        <span class="sub-title">WordPress Organization</span>
                    </div>
                    <a href="pag_const.php">wordpress.org</a>
                    <a href="pag_const.php">wordpress.com</a>
                </div>
            <!-- // Aqui fica a lista de testes -->

            <?php require_once("src/details.php"); ?>
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
</html>