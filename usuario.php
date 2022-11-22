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
    <link rel="apple-touch-icon" sizes="180x180" href="img/logos/apple-touch-icon.png">
    <link rel="stylesheet" href="css/tecnologia.css">
    <link rel="stylesheet" href="usuario.css">
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
                    <a href="#"><img src="img/logos/logo_branca.png" alt=""></a>
                </div>

                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Sobre nós</a>
                    <a href="#produtos">Produtos</a>
                    <a href="#">Tecnologia</a>

                     <div class="usuario">
                            <i class="fa-solid fa-user"></i>
                            <p>Olá, <sup>"usuario"</sup></p>
                        </div>
        
                    </div>

                    
                
                
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
                <li class="menu-item"><a href="#" class="menu-link">Contato</a></li>
                <li class="menu-item"><a href="#produtos" class="menu-link">Produtos</a></li>
                <li class="menu-item"><a href="#" class="menu-link">empty</a></li>
            
                </ul>

                <div class="cadastro-button">
                    <div class="login"><a href="http://localhost/version1/cadastro.php">Cadastre-se</a></div>
                    <div class="login"><a href="http://localhost/version1/login.php">Login</a></div>
                </div>
            </nav>

            <div class="social-media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </aside>

        <section class="mais">
            <div class="div-mais">
                <p>Conheça a Break Time! A mais nova Cyber Cafeteria da sua Região</p>
                <a href="">Saiba mais</a> 
            </div>
        </section>
        <section class="sobre" id="sobre">
            <div class="container-sobre">
                <div class="info-sobre">
                    <h2></h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi facilis ex quas ullam officia optio dolores quaerat expedita tempore, corporis consequatur doloremque aspernatur ipsa, aliquid sed unde, natus non nostrum.</p>
                </div>
                <div class="img-sobre">
                    <img src="img/atendimento-img.jpg" alt="" srcset="">
                </div>
            </div>
        </section>

        <section class="produtos" id="produtos">
            <h1 id="prod">Produtos</h1 alt="Produtos">
            <div class="produtos-c">
                <div class="produto produto1" id="produto1" onclick="redireciona()">
                    <div class="produto-img" id="img1">
                        <img src="img/cards/img1.webp" alt="">
                    </div>
                    <div class="produto-content" id="content1">
                        <h3 class="title-produto" id="title1">Geladas</h3>
                        <p class="text-produto" id="text1">Veja todas as opções de bebidas geladas!</p>
                        
                    </div>
                </div>
                <div class="produto produto2" id="produto2" onclick="redireciona1()">
                    <div class="produto-img" id="img2">
                        <img src="img/cards/frappuccino.jpg" alt="">
                    </div>
                    <div class="produto-content" id="content2">
                        <h3 class="title-produto" id="title2">Quentes</h3>
                        <p class="text-produto" id="text2">Veja todas as opções de bebidas quentes!</p>
                        
                    </div>
                </div>
                <div class="produto produto3" id="produto3" onclick="redireciona2()">
                    <div class="produto-img" id="img3">
                        <img src="img/cards/vanilla-icecream.jpg" alt="">
                    </div>
                    <div class="produto-content" id="content3">
                        <h3 class="title-produto" id="title3">Sobremesas</h3>
                        <p class="text-produto" id="text3">Veja nossas opções de sobremesas!</p>
                        
                    </div>
                </div>
                
                </div>
            </div>
        </section>

        <section class="tecnology">
         <div class="tecnologias">
            <div class="container-tecnologia">
                               <div class="imagem-fundo-tecnologia">
                    <img src="img/tec/imagem-fundo.jpg" alt="" >
                </div>
                <div class="info-tecnologia">
                    <p>Um local acolhedor com serviços tecnológicos de qualidade? É possível! Reserve já o seu horário no nosso espaço Cyber. </p>

                    <div class="btn-info-tecnologia">
                        <a href="reserva.html">Reserve um horário</a>
                    </div>
                </div>

            
            </div>

        </div> 
        
        <div class="tecnologias-disp">
            <div class="container-disponiveis">
                <div class="descricao">
                    <h2>Serviços Cyber</h2>
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

                    <div class="container-pcs">
                        <div class="option-pc">
                            <div class="img-options">
                                <img src="img/tec/pc-gamer.avif" alt="">
                            </div>
                            <div class="infos-pcs">
                                <h2 class="title-pcs">Game Time</h2>
                                <p>Ideal para os jogadores que buscam um computador de excelente desempenho para uma ótima partida! </p>
                                <span>R$13,00<sup>1h</sup></span>

                                <div class="reserva-button">
                                    <a href="reserva.html">Faça sua reserva</a>
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
                                    <a href="reserva.html">Faça sua reserva</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
        </section>

        <section class="">
            <div class="container-slide">
                <div class="slides">
                    <div class="slide">
                        <img src="" alt="" srcset="">
                    </div>
                    <div class="slide">
                        <img src="" alt="" srcset="">
                    </div>
                    <div class="slide">
                        <img src="" alt="" srcset="">
                    </div>
                    <div class="slide">
                        <img src="" alt="" srcset="">
                    </div>
                </div>
            </div>
        </section>

    

        <section class="parcerias" id="empty">
            <h1>Parceiros</h1>
            <div class="container-parcerias">
                
                <div class="parceiro">
                    
                    <div class="img-parceiro" id="num1">
                        <img src="img/logos/logo-apolo.png" alt="">
                    </div>
                </div>
                <div class="parceiro">
                    
                    <div class="img-parceiro">
                        <img src="img/logos/LIGHTSPEED_LOGO.png" alt="">
                    </div>
                </div>
                <div class="parceiro">
                    <div class="img-parceiro">
                        <img src="img/logos/cafe_caramelo_1-removebg-preview.png" alt="">
                   </div>
                    </div>
            </div>
        </section>

        <footer>
            <div class="container-footer">
                <div class="social-media-footer">
                    <ul>
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="container top-footer">
                    <!-- footer item 1 -->
                    <div class="footer-item">
                      <h2 class="footer-title">ADDRESS</h2>
                      <div class="footer-items">
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing st18</h3>
                      </div>
                    </div>
                    <!-- footer item 2 -->
                    <div class="footer-item">
                      <h2 class="footer-title">SERVICES</h2>
                      <div class="footer-items">
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                      </div>
                    </div>
                    <!-- footer item 3 -->
                    <div class="footer-item">
                      <h2 class="footer-title">SUPPLIERS</h2>
                      <div class="footer-items">
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                      </div>
                    </div>
                    <!-- footer item 4 -->
                    <div class="footer-item">
                      <h2 class="footer-title">INVESTMENT</h2>
                      <div class="footer-items">
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                        <h3>Adipisicing elit.</h3>
                      </div>
                    </div>
                  </div>
                  <div class="container end-footer">
                    <div class="copyright">copyright © 2021 - Present • <b>DOWNTOWN TECH LIVER</b></div>
                    <a class="designer" href="#">Thierry M</a>
                  </div>
            </div>
        </footer>
    </div>
</body>
<script src="js/sidebar.js"></script>
<script src="js/main.js"></script>
<script src="js/produtos-main.js"></script>
</html>
