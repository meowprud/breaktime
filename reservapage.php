<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reserva/style.css">
    <script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
    <title>Document</title>
</head>
<body>
    
<!--   <h2 id="preco">R$ 0,00</h2>  -->



    <div class="lateral">
        <div class="logo-lateral">
            <a href="usuario.php"><img src="img/logos/logo_sem_fundo.png" alt=""></a>
        </div>
        <a href="usuario.php">
            <p>Home</p>
        </a>
    </div>
    


    <section class="formulario-reserva">

        
        <div class="img-fundo-reserva">
            <img src="img/tec/fundo-reserva2.jpg" alt="">
        </div>

        <div class="container-form">
            <form action="reserva.php" method="POST">

                <div class="outro-container">
    
                    <div class="principais-inputs">
                        <div class="usuario-input input-geral">
                            <label for="usuario">Nome de usuário:</label>
                            <input type="text" name="usuario" id="usuario" placeholder="Insira o usuário">
                        </div>
                        <div class="password-input input-geral">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" placeholder="Insira a senha">
                        </div>
                        <div class="dia-input  input-geral">
                            <label for="dia">Data:</label>
                            <input type="date" name="dia" id="dia" placeholder="Escolha a data de preferência">
                        </div>
                        <div class="hora-input input-geral">
                            <label for="hora">Horário:</label>
                            <input type="time" name="hora" id="hora" placeholder="Informe o horário">
                        </div>
                    </div>
                    <div class="planos-input">
                        <div class="planos-comp">
                            <input type="radio" id="game" name="planos" class="planos" value="1">
                            <label for="#game">Game</label><br>
                            <input type="radio" id="business" name="planos" class="planos" value="2">
                            <label for="#business">Businnes</label><br>
                        </div>
                    <div class="input-quanthoras">
                        <label for="qtdhoras">Horas de uso:</label>
                        <input type="number" name="qtdhoras" id="qtdhoras" placeholder="Horas de uso"><br>
                        <span>Caso ultrapasse o nº estipulado, pagar pelas horas adicionais</span>
                    </div>
    
                    <div class="outro-flutter">

                        <div class="termos-multas">
                            <h2>Sujeito a multa caso:</h2>
                            <ul>
                                <li>Danifique algum computador</li>
                                <li>Cause perturbação durante a utilização do aparelho</li>
                                <li>Não respeite as regras do local</li>
                            </ul>
                        </div>
                        
                    </div>
    
                <br>
                    <div class="termos-input">
                        <input type="checkbox" name="termos" id="termos">
                        <p>Li e concordo com os termos de uso</p>    
                    </div>

                    <div class="envia-input">
                        <input type="submit" name="submit" value="Enviar">
                    </div>

</div>

   

            </form>

        
        </div>

    </section>

    <footer>

    </footer>
</body>
<script src="js/reserva.js"></script>
</html>