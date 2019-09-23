<?php
include ("config.php");
class Captcha{
    public function getCaptcha($SecretKey)
    {
        $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $retorno = json_decode($resposta);
        return $retorno;
    }
}
