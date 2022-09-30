<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visualizar Perfil</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/pagina-perfil.css">
        <!-- script font-awesome -->
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            // include('header-site.php');
        ?>

        <main>
            <div class="container">
                <div class="container-foto">
                    <div class="quadrado q1"></div>
                    <div class="quadrado q2"></div>
                    <div class="quadrado3">
                        <div class="quadrado q1"></div>
                        <div class="quadrado q2"></div>
                    </div>
                   <div class="w35">
                        <div class="foto-perfil">
                            <img src="../imagens/foto-perfil.jpg" alt="">
                        </div>
                   </div>
                   <div class="w65">
                        <div class="info-item">
                            <p>NOME :</p>
                            <p>Matheus da Cruz Ferrucio</p>
                        </div>
                        <div class="info-item">
                            <p>E-MAIL :</p>
                            <p>meuemail@gmail.com</p>
                        </div>
                        <div class="info-item">
                            <p>TELEFONE :</p>
                            <p>(99) 99999-9999</p>
                        </div>
                        <div class="info-item endereco">
                            <p>ENDEREÇO :</p>
                            <p>BAIRRO : Beco da Fonte</p>
                            <p>RUA : Tchurosbango Tchurosbago</p>
                            <p>NÚMERO : 101</p>
                        </div>
                        <div class="info-item">
                            <p>CPF :</p>
                            <p>222.222.222.22</p>
                        </div>
                        <div class="info-item">
                            <p>RG :</p>
                            <p>22 222 222-22</p>
                        </div>
                        <div class="info-item">
                            <a href="../index.php"><i class="fa-solid fa-house"></i>VOLTAR PARA PÁGINA PRINCIPAL</a>
                        </div>
                   </div><!-- w65 -->
                </div>
            </div>
        </main>

        <?php
            // include('footer.php');
        ?>
    </body>
</html>