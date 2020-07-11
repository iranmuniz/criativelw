<!DOCTYPE html>
<html lang="pt-BR">
    <?php require_once("src/head.php"); ?> 
<body class="menu-box-container">
    <main>
    <?php require_once("src/aside.php"); ?>
        <div class="menu-box-center">
            <div class="space-title-menu">
                <span class="title-menu">Aplicação em PHP</span>
            </div>
            <!-- Aqui fica a lista de testes -->
                <div class="style-list">
                    <div class="style-mini-list">
                        <p>Formulário Mail</p>
                        <pre>Preencha com e-mail Remetente:</pre>
                        <input id="txtdest" name="txtdest" type="text"/>
                        <div class="bottom-space">
                            <input id="btEnviar" type="submit" value="Enviar"/>
                        </div>
                    </div>
                    <div class="style-mini-list">
                        <p>Formulário Mailer</p>
                        <pre>Preencha com e-mail Remetente:</pre>
                        <input id="txtdest" name="txtdest" type="text"/>
                        <pre>Preencha com a senha do e-mail:</pre>
                        <input id="txtdest" name="txtdest" type="text"/>
                        <div class="bottom-space">
                            <input id="btEnviar" type="submit" value="Enviar"/>
                        </div>
                    </div>
                </div>
            <!-- // Aqui fica a lista de testes -->
        </div>
    </main>
</body>
</html>