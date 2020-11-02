    <?php

        If (isset($_POST['txtdest']))
        {
            require_once('class.phpmailer.php');
            $destino = $_POST['txtdest'];
            $assunto = $_POST['txtass'];
            $mensagem = $_POST['txtmsg'];
            $mailer = new PHPMailer();
            $mailer->IsSMTP();
            $mailer->SMTPDebug = 1;
            $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
            $mailer->Host = 'smtp.chocolate.pessoal.ws'; //smtp.dominio.com.br
            $mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
            $mailer->Username = 'mail@chocolate.pessoal.ws'; //Informe o e-mai o completo
            $mailer->Password = '1234'; //Senha da caixa postal
            $mailer->FromName = $assunto; //Nome que será exibido para o destinatário
            $mailer->From = 'mail@chocolate.pessoal.ws'; //Obrigatório ser a mesma caixa postal indicada em "username"
            $mailer->AddAddress($destino,'NomeDestinatário'); //Destinatários
            $mailer->Subject = $assunto;
            $mailer->Body = $mensagem;
            $mailer->Send();
            print "Mensagem enviada com sucesso!";
        } else { ?>

<html>
    <?php require_once("src/head.php"); ?> 
    <body>
        <main>
            <fieldset>
                <div class="space-center">
                    <form id="form" name="form" method="POST" action="Mailer.php">
                        <div class="title-form">
                            <h1>Formulário PHPmailer</h1>
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