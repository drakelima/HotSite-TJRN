<html>
<meta charset="utf-8"/>
<head>
<title>COJUD - 5º Encontro do Colégio Nacional de Ouvidores Judiciais</title>
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

<link rel="stylesheet" href="css/geral.css" />
<link rel="stylesheet" media="(max-width: 1580px)" href="css/mobiles.css" />

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<?php include "captcha/config.php"; ?>
<?php 
#var_dump($_POST);
?>

<script>
$(document).ready(function(){
    $("#myModal").modal();
});
</script>
<div class="bg_msg_email">
    <div class="container">
        <div>
            <?php include "./email.php"; ?>
            
        </div>
    </div>
</div>
<header>
    <div class="bg_header">
        <div class="img_bg_header"></div>
    </div>
    <div class="cabecalho">
        <img src="img/logo.png">
        <h1>5º Encontro do Colégio Nacional de Ouvidores Judiciais</h1>
        <img class="cojud" src="img/cojud.png">
        <img class="brasao_colorido" src="img/brasao_colorido.png">
        <img class="logo_ouvidoria_novo" src="img/logo_ouvidoria_novo.png">
    </div>
    
</header>
<nav>
        <div class="container">
            
                <div class="row">
                    <ul class="col">
                        <li class="quadro">
                            <img class="icones" src="img/icone_calendario.png"/>
                            <h1>26 e 27</h1>
                            <p>de setembro</p>
                            <a class="link_titulo_programacao" href="#titulo_programacao">Programação</a>
                        </li>
                        <li class="quadro">
                            <img class="icones" src="img/icone_localizacao.png"/>
                            <h1>Natal</h1>
                            <p>Ocean Palace</p>
                            <a target="_blank" href="https://www.google.com/maps/place/Ocean+Palace+Beach+Resort+%26+Bungalows/@-5.8604131,-35.1833574,17z/data=!3m1!4b1!4m8!3m7!1s0x7b3003968e0c23d:0x99372acace42cbe!5m2!4m1!1i2!8m2!3d-5.8604131!4d-35.1811687">Ver no mapa</a>
                        </li>
                        <li class="quadro -maior">
                            <img class="icones" src="img/icone_escrita.png"/>
                            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd0MQwa4eWU8YmX_x6oOkGdo5BxQg4TWozzlAw8imzOpbAltw/viewform"><h1>INSCREVA-SE AQUI</h1></a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>

<content class="container">
    <div class="conteudo">
        <div class="titulo_figura"></div>
        <h1>O EVENTO</h1>
        <p>
            Nos dias 26 e 27 de setembro de 2019 Natal sediará o 5° Encontro Nacional do 
            Colégio de Ouvidores Judiciais (COJUD). O evento, coordenado pela Ouvidoria do 
            Tribunal de Justiça do Rio Grande do Norte, será realizado no Hotel Ocean Palace 
            e reunirá Ouvidores dos Tribunais de Justiça, dos Tribunais Regionais Federais e dos 
            Tribunais Militares. A palestra de abertura será proferida pelo Ministro do 
            Superior Tribunal de Justiça, Marcelo Navarro Ribeiro Dantas.
        </p>
        <p>
            Apesar de ser um encontro técnico, restrito a Ouvidores Judiciais e seus 
            assessores, os participantes devem se inscrever gratuitamente neste 
            <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSd0MQwa4eWU8YmX_x6oOkGdo5BxQg4TWozzlAw8imzOpbAltw/viewform">site</a>, 
            para facilitar a organização do evento. 
        </p>
        

        <div class="titulo_figura "></div>
        <h1>CONTATOS DO EVENTO</h1>

        
        <div class="texto_form">
            <div class="texto_contatos">
                <p>
                    Ouvidoria do TJRN<br>
                    0800.280.0208 | (84) 3616.6500<br>
                    <span>ouvidoria@tjrn.jus.br</span><br>
                </p>
                <p>
                    Relações Públicas do TJRN<br>
                    (84) 3616-6393 | 3616-6394<br>
                    <span>cerimonial@tjrn.jus.br</span><br>
                </p>
            </div>
            <form method="POST">
                <h3>Enviar um e-mail</h3>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input required type="text" size="52" maxlenght="150" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input required type="email" size="52" maxlenght="150" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto:</label>
                    <input required type="text" size="52" maxlenght="150" name="assunto" class="form-control" id="assunto" placeholder="Assunto">
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" required class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <!--<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">-->
                <button type="submit" class="btn btn-secondary" >Enviar</button>
            </form>
        </div>
            
    </div>
</content>

<div class="bg_palestrantes">
    <div class="container">
        <div class="conteudo">
            <div class="titulo_figura"></div>
            <h1 class="titulo_palestrante">PALESTRANTES</h1>
            <ul class="palestrantes">
                <li>
                    <img class="coroa" src="img/foto1.png"/>
                    <h3>Moacyr Lobato de Campos Filho</h3>
                    <p>Desembargador do TJMG</p> 
                </li>
                <li>
                    <img class="coroa" src="img/foto2.png"/>
                    <h3>Marcelo Navarro Ribeiro Dantas</h3>
                    <p>Ministro do STJ</p> 
                </li>
                <li>
                    <img class="coroa" src="img/foto3.png"/>
                    <h3>Juiz Jayme Oliveira</h3>
                    <p>Presidente da AMB</p> 
                    </h3>
                </li>
                <li>
                    <img class="coroa" src="img/foto4.png"/>
                    <h3>Eduardo de Lima Veiga</h3>
                        <p>Procurador de Justiça do MPRS</p>
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</div>

<section>
    <div class="container ">
        <div class="conteudo ">
            <div class="titulo_figura "></div>
            <h1 id="titulo_programacao">PROGRAMAÇÃO</h1>
            <ul class="cronograma">
                <li class="bg_cinza"><h2>26/09 – QUINTA-FEIRA</h2></li>
                <li class="margin_extra">
                    <p class="amarelo">09:30h - Credenciamento</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">10h - Abertura</p>
                    <p> Des. João Rebouças
                        (Presidente do TJRN), Des. Vivaldo Pinheiro
                        (Ouvidor do TJRN) e Des. Altair Lemos Júnior –
                        TJRS ( Presidente do COJUD)</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">10:30h - Apresentação de Grupo Folclórico</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">11h - Palestra de Abertura</p>
                    <p>Ministro Marcelo Navarro Ribeiro Dantas</p>
                    <p><b>• Tema:</b> Desafios de efetividade da jurisdição</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">12h - Almoço</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">14h - Palestra</p>
                    <p>Juiz Jayme Oliveira –
                        Presidente da Associação dos Magistrados
                        Brasileiros</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">15h - Palestra</p>
                    <p>Procurador de Justiça Eduardo de Lima Veiga – MPRS</p>
                    <p><b>• Tema:</b> A ouvidoria no Ministério Público</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">16h - Intervalo</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">16:30h - Palestra</p>
                    <p>Des. Moacyr Lobato de Campos Filho TJMG</p>
                    <p><b>• Tema:</b> As ouvidorias em tempos de redes sociais: 
                         Que caminhos seguir?</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">17:30h - Encerramento</p>
                </li>
            </ul>
            <ul class="cronograma -ultimo">
                <li class="bg_cinza"><h2>27/09 – SEXTA-FEIRA</h2></li>
                <li class="margin_extra">
                    <p class="amarelo">09:30h - Boas Práticas </p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">10:30h - Intervalo</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">10:45h - Boas Práticas</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">12h - Almoço</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">14h - Assuntos Internos</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">15:30h - Intervalo</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">16h - Assembleia Ordinária do COJUD</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">17h - Eleição da Direção Executiva do COJUD</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">17:30h - Escolha de Sede do 5º Encontro Nacional 
                    do COJUD em 2020 e dos Encontros Regionais</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">18h - Encerramento</p>
                </li>
                <li class="margin_extra">
                    <p class="amarelo">21h - Jantar de Confraternização</p>
                </li>
                <li class="botao_psocial">
                    <a target="_blank" href="img/Lamina_Programacao_Social_Encontro_OUvidores.pdf" type="button" 
                    class="btn btn-secondary btn-lg">Programação Social</a>
                </li>
            </ul>

            
        </div>
    </div>
</section>
<div class="local_evento_hospedagem">
    <div class="container">
        <div class="conteudo">
            <div class="titulo_figura "></div>
            <h1>LOCAL DO EVENTO E HOSPEDAGEM</h1>

            <h2>Ocean Palace Beach Resort & Bungalows</h2>
            <p>
                O Ocean Palace Beach Resort & Bungalows possui uma localização privilegiada, 
                na Via Costeira, área nobre da praia de Ponta Negra, em frente ao Centro de 
                Convenções de Natal. O hotel possui a melhor vista do “Morro do Careca”, o 
                mais famoso cartão postal da cidade.
            </p>

            <h2>RESERVAS</h2>
            <p>
                As reservas deverão ser efetuadas através dos contatos abaixo, e no 
                ato da reserva é importante mencionar que o hóspede é participante do 
                5° ENCONTRO DO COLÉGIO NACIONAL DE OUVIDORES JUDICIAIS para a obtenção 
                das tarifas negociadas.
            </p>

            <h2>Tarifas</h2>
            <table class="table margen_superior">
                <thead>
                    <tr>
                        <th scope="col">CATEGORIA</th>
                        <th scope="col">CHECK IN</th>
                        <th scope="col">CHECK OUT</th>
                        <th scope="col">QTD SGL/DBL</th>
                        <th scope="col">VALOR DIÁRIA SGL/DBL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SUPERIOR COM CAFÉ DA MANHÃ</td>
                        <td>26/09/2019</td>
                        <td>27/09/2019</td>
                        <td>SGL / DBL</td>
                        <td>R$ 350,00 + 15%</td>
                    </tr>
                </tbody>
            </table>

            <a href="img/Informações_complementares.pdf" target="_blank">Informações complementares</a>

            <h2>Contatos do hotel</h2><br>
            <div class="texto_form">
                <div class="texto_contatos">
                    Whatsapp: (84) 99179-7134 (Mirella)<br>
                    E-mail: reservas@oceanpalace.com.br<br>
                    Fone: 55 84 3220 4144 / Fax: 55 84 3219 4132<br>
                    <a href="https://www.facebook.com/oceanpalaceresort" target="_blank">www.facebook.com/oceanpalaceresort</a><br>
                    <a href="https://twitter.com/oceanpalace" target="_blank">twitter.com/oceanpalace</a><br>
                    <a href="http://instagram.com/oceanpalace" target="_blank">instagram.com/oceanpalace</a><br>
                </div>
            </div>
            <div class="midias">
                <div class="video embed-responsive embed-responsive-16by9">
                    <video controls>
                        <source src="img/video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="fotos">
                    <a class="foto" href="img/local1.jpg" target="_blank"><img class="tamanho_imagens" src="img/local1.jpg"></a>
                    <a class="foto" href="img/local1.jpg" target="_blank"><img class="tamanho_imagens"src="img/local2.jpg"></a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<footer>
    <div class="container ">
        <div class="conteudo ">
            <img class="brasao_tj"src="img/brasao_tj.png"/>
        </div>
    </div>
</footer>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/geral.js"></script>
</html>