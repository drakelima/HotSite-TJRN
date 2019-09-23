<?php 

if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.tjrn.jus.br';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'p630224@tjrn.jus.br';
    $mail->Password = 'dr@ke3244529';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->setFrom($email, $nome);
    $mail->addReplyTo($email);
    $mail->addAddress('encontrocojud@tjrn.jus.br');
    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body    = $mensagem;
    $mail->AltBody = $mensagem;

    if($mail->send()){
        $msg = "Email enviado com sucesso";
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align:center;">
            <?php echo $msg ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    
    }else{
        $msg = "O email não pode ser enviado";
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center;">
            <?php echo $msg ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
    }
}