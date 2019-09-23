<?php
include("classCaptcha.php");

$objCaptcha = new Captcha();
$retorno = $objCaptcha->getCaptcha($_POST['g-recaptcha-response']);
var_dump($retorno);
if($retorno->success == true && $retorno->score > 0.5){
    echo "deu certo";
}else{
    echo "voce eh robo";
}