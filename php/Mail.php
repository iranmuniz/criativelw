    <?php 

        if (isset($_POST['txtdest']))
        {
            $destino = $_POST['txtdest'];
            $assunto = $_POST['txtass'];
            $mensagem = $_POST['txtmsg'];
            if (PATH_SEPARATOR ==":") {
                $quebra = "\r\n";
            } else {
                $quebra = "\n";
            }
            $headers = "MIME-Version: 1.1".$quebra;
            $headers .= "Content-type: text/plain; charset=iso-8859-1".$quebra;
            $headers .= "From: mail@chocolate.pessoal.ws".$quebra; //E-mail do remetente
            $headers .= "Return-Path: mail@chocolate.pessoal.ws".$quebra; //E-mail do remetente
            mail($destino, $assunto, $mensagem, $headers, "-r". "mail@chocolate.pessoal.ws");
            print "Mensagem enviada com sucesso!";
        } else{ 
    ?>

<html>
    <?php require_once("src/head.php"); ?> 
    <body>
        <main>
            <fieldset>
                <div class="space-center">
                    <form id="form" name="form" method="POST" action="Mail.php">
                        <div class="title-form">
                            <h1>Formulário PHPmail</h1>
                        </div>
                        <label class="ls-label col-md-9">
                            <b class="ls-label-text">E-mail destinatário*</b>
                            <p class="ls-label-info">Coloque aqui um e-mail de recebimento</p>
                            <input id="txtdest" name="txtdest" placeholder="contato@dominio.com.br" type="text" /></td>
                        </label>
                        <label class="ls-label col-md-9">
                            <b class="ls-label-text">Assunto*</b>
                            <p class="ls-label-info">Descreva o assunto da mensagem</p>
                            <input id="txtass" name="txtass" placeholder="Envio de mensagem" type="text" />
                        </label>
                        <label class="ls-label col-md-9">
                            <b class="ls-label-text">Mensagem</b>
                            <p class="ls-label-info">Descreva o corpo da mensagem</p>
                            <textarea id="txtmsg" name="txtmsg" rows="2">Olá, esta é uma mensagem de teste enviada via PHPMail com seus dados de envio!</textarea>
                        </label>
                        <!-- <label class="ls-label col-md-9">
                            <b class="ls-label-text">Anexo</b>
                            <input type="file" name="anexo" id="anexo" />
                        </label> -->
                        <input class="ls-btn" id="btEnviar" type="submit" value="Enviar" />
                        <input class="ls-btn-danger" id="btLimpar" type="reset" value="Limpar" />
                    </form>
                </div>
            </fieldset>
        </main>
   </body>
   <?php require_once('src/footer.php'); ?>
</html>
<?php } ?>