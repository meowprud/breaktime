<?php

session_start();

include_once('conexao.php');
$usuario1 = $_SESSION['$usuarion'];

$consulta = "SELECT nome FROM usuarios WHERE login = '$usuario1'";
$con = $conexao->query($consulta);

$consulte = "SELECT * FROM reservas WHERE usuario = '$usuario1'";
$consi = $conexao->query($consulte);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/body-sobre.css">
    <link rel="stylesheet" href="css/body-produtos.css">
    <link rel="stylesheet" href="css/mediaquery.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/parcerias.css">
    <link rel="stylesheet" href="css/membros.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logos/apple-touch-icon.png">
    <link rel="stylesheet" href="css/tecnologia.css">
    <link rel="stylesheet" href="css/endereco-contato.css">
    <link rel="stylesheet" href="css/usuario.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logos/logo_sem_fundo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logos/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="shortcut icon" href="img/logos/favicon.ico" type="image/x-icon">
    <title>Break Time</title>
</head>
<body>

    <div class="container">
        <header>
            <div class="nav-bar">

                <div class="logo-lateral">
                    <a href="#"><img src="img/logos/logo_sem_fundo.png" alt=""></a>
                </div>

                <div class="nav-links">
                    <a href="#home">Home</a>
                    <a href="#sobre">Sobre nós</a>
                    <a href="#produtos">Produtos</a>
                    <a href="#tecnology">Cyber</a>
                    
                <?php $dado = $con->fetch_array();?>
                <div class="usuario">
                    <p class="usuario-nome" >Olá, <?php echo $dado["nome"];?></p>
                </div>
                   
                    
                </div>

            <aside class="usuarioside show-reserva">

           
                <div class="container-reserva">
                    <div class="reservas">
                        <h2>Reservas</h2>
                        <?php while($info = $consi->fetch_array()){?>
                        <p class="reserva-data">
                        <?php echo date("d/m/Y", strtotime($info["dia"]));?> às <?php echo $info["hora"];?>
                    </p>
                    <?php }?>
                    </div>
                    <div class="sair">
                        <b class="sair-btn">Desconecte de sua conta</b>

                        <a href="index.html">Sair</a>
                    </div>
                </div>
               
            </aside>
                
            </div>

            <div class="burguer">
                <div class="line" id="line1"></div>
                <div class="line" id="line2"></div>
                <div class="line" id="line3"></div>
                <span>fechar</span>
               
            </div>
    
        
        <div class = "carrossel">
            <div class = "container-carrossel" id="picture">
                <img class="pic" src="img/coffe-cup.jpg" alt="paisagem">
                
            </div>
        </div>


        <div class="banner">
            <h1>Break Time</h1>
            <p>Cyber cafeteria</p>

        </div>
        </header>

        <aside class="sidebar show-menu">
            <div class="user"><a href=""><i class="fa-solid fa-user"></i></a></div>
            <nav>
                <ul class="menu">

                <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
                <li class="menu-item"><a href="#sobre" class="menu-link">Sobre Nós</a></li>
                <li class="menu-item"><a href="#endereco" class="menu-link">Contato</a></li>
                <li class="menu-item"><a href="#produtos" class="menu-link">Produtos</a></li>
                <li class="menu-item"><a href="#tecnology" class="menu-link">Cyber-Space</a></li>
            
                </ul>

                <div class="cadastro-button">
                    <div class="login"><a href="cadastro.php">Cadastre-se</a></div>
                    <div class="login"><a href="login.php">Login</a></div>
                </div>
            </nav>

            <div class="social-media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/breaktime_ofc/?igshid=MTg0ZDhmNDA%3D"><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </aside>

        
        <section class="sobre" id="sobre">
            <div class="container-sobre">
                <div class="info-sobre">
                    <h2>Sobre nós</h2>
                    <p>A Break Time foi pensada exatamente para você, que busca um local para lazer e trabalho. Nós te oferecemos a tranquilidade de uma cafeteria e a tecnologia de um cyber café! </p>
                </div>
                <div class="img-sobre">
                    <img src="img/atendimento-img.jpg" alt="Barista entregando pedido" srcset="">
                </div>
            </div>
        </section>

        <section class="mais">
            <div class="div-mais">
                <p>Conheça a Break Time! A mais nova Cyber Cafeteria da sua Região</p>
                <a href="#endereco">Endereço</a> 
            </div>
        </section>

        <section class="produtos" id="produtos">
            <h1 id="prod">Cardápio</h1 alt="Produtos">
            <div class="produtos-c">

                
                    <div class="produto produto1" id="produto1" onclick="redireciona()">
                        <a href="produtos.html">
                            <div class="produto-img" id="img1">
                                <img src="img/cards/frappuccino.jpg" alt="">
                            </div>
                        </a>
                        <div class="produto-content" id="content1">
                            <h3 class="title-produto" id="title1"> Bebidas Geladas</h3>
                            <p class="text-produto" id="text1">Clique e veja as opções de bebidas geladas em nosso cardápio!</p>
                    
                        </div>
                    </div>
                

                
                    <div class="produto produto2" id="produto2">
                        <a href="produtos.html">
                            <div class="produto-img" id="img2">
                                <img src="img/cards/hot-coffe3.jpg" alt="">
                            </div>
                        </a>
                        <div class="produto-content" id="content2">
                            <h3 class="title-produto" id="title2">Bebidas Quentes</h3>
                            <p class="text-produto" id="text2">Clique e veja as opções de bebidas quentes em nosso cardápio!</p>
                    
                        </div>
                    </div>
            

                
                    <div class="produto produto3" id="produto3" onclick="redireciona2()">
                        <a href="produtos.html">
                            <div class="produto-img" id="img3">
                                <img src="img/cards/torta.jpg" alt="">
                            </div>
                        </a>
                        <div class="produto-content" id="content3">
                            <h3 class="title-produto" id="title3">Sobremesas</h3>
                            <p class="text-produto" id="text3">Clique e veja as opções de sobremesa em nosso cardápio!</p>
                        </div>
                    </div>
                
                
                </div>
            </div>
        </section>

        <section class="tecnology" id="tecnology">
            <h1>Cyber-space</h1>
         <div class="tecnologias">
           
            <div class="container-tecnologia">
                               <div class="imagem-fundo-tecnologia">
                    <img src="img/tec/imagem-fundo.jpg" alt="" >
                </div>
                <div class="info-tecnologia">
                    <p>Um local acolhedor com serviços tecnológicos de qualidade?<br>
                         É possível! Garanta já o seu horário no nosso espaço Cyber. </p>

                    <div class="btn-info-tecnologia">
                        <a href="reservapage.php">Faça sua reserva</a>
                    </div>
                </div>

            
            </div>

        </div> 
        
        <div class="tecnologias-disp">

            <div class="container-disponiveis">
                
                <div class="descricao">
                    <h2>Serviços Cyber-Break</h2>
                    
                    <div class="caixas-desc">
                    
                        <ul>
                            <li>Pacote Office</li>
                            <li>Pacote Adobe</li>
                            <li>Antivírus Avast</li>
                            <li>Valorant</li>
                            <li>League Of Legends</li>
                            <li>CS GO</li>
                            <li>Impressões</li>
                            <li>Internet Grátis</li>
                            <li>Pedidos na cabine</li>
                        </ul>
                    </div>
                </div>
                
                    <div class="disponiveis">
                        
                        
                        <div class="options-disp">
                            <img src="img/tec/pacote-office1.png" alt="">
                        </div>
                        <div class="options-disp">
                            <img src="img/tec/pacote-adobe1.webp" alt="">
                        </div>
                        <div class="options-disp">
                            <img src="img/tec/avast.webp" alt="">
                        </div>
                        <div class="options-disp">
                            <img src="img/tec/valorant.png" alt="">
                        </div>
                        <div class="options-disp">
                            <img src="img/tec/lol-logo.png" alt="">
                        </div>
                        <div class="options-disp">
                            <img src="img/tec/cs-go.png" alt="">
                        </div>
                        <div class="options-disp">
                            <img src="img/tec/impressora.png" alt="">
                        </div>
                    </div>
                </div>

                <h1 class="opcao-pc-title">Opções de computadores</h1>

                    <div class="container-pcs">
                        
                        <div class="option-pc">
                            <div class="img-options">
                                <img src="img/tec/imagem-fundo2.jpg" alt="">
                            </div>
                            <div class="info-pcs">
                                <h2 class="title-pcs">Game Time</h2>
                                <p>Ideal para os jogadores que buscam um computador de excelente desempenho para uma ótima partida! </p>
                                <span>R$13,00<sup>1h</sup></span>

                                <div class="reserva-button">
                                    <a href="reservapage.php">Faça sua reserva</a>
                                </div>
                            </div>
                        </div>
                        <div class="option-pc">
                            <div class="img-options">
                                <img src="img/tec/pcnormal.jpg" alt="">
                            </div>
                            <div class="info-pcs">
                            <h2 class="title-pcs">Business</h2>
                            <p>A melhor opção para ser produtivo no seu trabalho com a garantia de um computador com bom desempenho!</p>
                            <span>R$9,00<sup>1h</sup></span>
                                <div class="reserva-button">
                                    <a href="reservapage.php">Faça sua reserva</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    
        </section>

    <section class="endereco-contato" id="endereco">

        <div class="container-local-contato">

            <div class="container-local">
                <div class="descricao-local">
                    <h2>Conheça nosso espaço</h2>
                    <p>Estrada do Mendanha 2367- Campo Grande, Rio de Janeiro – RJ.</p>
                </div>
                <div class="local-foto">
                    <img src="img/local.jpg" alt="Parte da frente Break Time" srcset="">
                </div>
            </div>

            <div class="container-contato">
                <h1>Contatos</h1>
                <div class="first-contato">

                    <div class="contato-informacoes-container">
                        
                                <div class="rede-social">
                                    <i class="fab fa-facebook"></i>
                                  <p>Break Time - Cyber Café</p>
                                </div>

                                <div class="rede-social">
                                    <i class="fab fa-instagram"></i>
                                    <p>breaktime_ofc</p>
                                </div>

                                <div class="rede-social">
                                    <i class="fab fa-twitter"></i>
                                    <p>Break Time Oficial</p>
                                </div>

                               <div class="rede-social">
                                <i class="fa-brands fa-linkedin"></i>
                                <p>Break Time - Cyber Café</p>
                               </div>

                    </div>

            </div>
        </div>

    </section>

    <section class="time-break">
    <h1>Time Break Time</h1>

        <div class="container-break">

            <div class="integrantes-break">
                <div class="foto-integrante">
                    <img src="img/integrantes/vinicius.jpg" alt="membro Break Time Vinicius Cainã" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Vinícius Cainã</h2>
                    <p>CEO - Diretor Executivo </p>
                </div>
            </div>

            <div class="integrantes-break">
                <div class="foto-integrante">
                    <img src="img/integrantes/nicollyn.jpg" alt="membra Break Time Nicollyn Santana" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Nicollyn Santana</h2>
                    <p>CTO - Diretora de Operações</p>
                </div>
            </div>

            <div class="integrantes-break">
                <div class="foto-integrante">
                    <img src="img/integrantes/juliana.jpg" alt="membra Break Time Juliana Oliveira" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Juliana Oliveira</h2>
                    <p>CMO - Diretora de Marketing</p>
                </div>
            </div>

            <div class="integrantes-break">
                <div class="foto-integrante" id="cio">
                    <img src="img/integrantes/melissa.jpg" alt="membra Break Time Melissa Prudêncio" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Melissa Prudêncio</h2>
                    <p>CIO - Diretora de TI</p>
                </div>
            </div>

            <div class="integrantes-break">
                <div class="foto-integrante">
                    <img src="img/integrantes/raquel.jpg" alt="membra Break Time Raquel Sales" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Raquel Sales</h2>
                    <p>CFO - Diretora Financeira</p>
                </div>
            </div>

            <div class="integrantes-break">
                <div class="foto-integrante">
                    <img src="img/integrantes/rayssa.jpg" alt="membra Break Time Rayssa Vitória" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Rayssa Emídio</h2>
                    <p>Gerente do local</p>
                </div>
            </div>

            <div class="integrantes-break">
                <div class="foto-integrante">
                    <img src="img/integrantes/isabelle.jpg" alt="membra Break Time Isabelle Jales" srcset="">
                </div>
                <div class="info-integrante">
                    <h2>Isabelle Jales</h2>
                    <p>Gerente de RH</p>
                </div>
            </div>
        </div>

    </section>

        <section class="parcerias" id="empty">
            <h1>Parceiros</h1>
            <div class="container-parcerias">
                
                <div class="parceiro">
                    
                    <div class="img-parceiro" id="num1">
                        <img src="img/logos/logo-apolo.png" alt="Logo Apolo Energy">
                    </div>
                </div>
                <div class="parceiro">
                    
                    <div class="img-parceiro">
                        <img src="img/logos/LIGHTSPEED_LOGO.png" alt="Logo Lightspeed">
                    </div>
                </div>
                <div class="parceiro">
                    <div class="img-parceiro">
                        <img src="img/logos/cafe_caramelo_1-removebg-preview.png" alt="Logo Café Caramello">
                   </div>
                    </div>
            </div>

        </section>



        <div class="footer">

            <div class="container-footer">
                <div class="social-media-footer">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/breaktime_ofc/?igshid=MTg0ZDhmNDA%3D"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>

                <div class="container-top-footer">
                    <!-- footer item 1 -->
                    <div class="footer-item">
                      <h2 class="footer-title">Endereço</h2>
                      <div class="footer-items">
                        <h3>Estrada do Mendanha 2367- Campo Grande, Rio de Janeiro – RJ.</h3>
                        
                      </div>
                    </div>
                   </div> 
                  <div class="container-end-footer">
                    <div class="copyright"><p>Todos os direitos reservados © 2022 - <b>Break Time </b></div>
                    
                  </div>
            
            </div>
    </div>

</body>
<script src="js/sidebar.js"></script>
<script src="js/main.js"></script>

</html>


