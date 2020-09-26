<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
        <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">Banco de Dados</span>
            </div>

            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <div class="space-sub-title">
                        <span class="sub-title">Panel</span>
                    </div>
                        <a href="http://phpmyadmin.locaweb.com.br" target="_blank">phpMyAdmin</a>
                        <a href="404.php">pgAdmin</a>
                        <a href="404.php">SQL Server</a>
                    </div>
                    <div class="space-sub-title">
                        <span class="sub-title">Testers</span>
                    </div>
                        <a href="404.php">MySQL</a>
                        <a href="404.php">PostgreSQL</a>
                        <a href="404.php">SQL Server</a>
                        <?php require_once("src/footer.php"); ?>
                    </div>
                </div>
            <!-- // Aqui fica a lista de testes -->
        </div>
    </main>
    <script src="public/js/script.js"></script>
</body>
</html>