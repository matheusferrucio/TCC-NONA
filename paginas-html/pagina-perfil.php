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
            include('header-site.php');
        ?>

        <main>
            <div class="container">
                <div class="foto-perfil">
                    <img src="../imagens/profile1.jpg" alt="">
                </div>
                <div class="perfil-content">
                    <div class="info-item">
                        <p>NOME: </p>
                        <P>Matheus da Cruz Ferrucio</P>
                    </div>
                    <div class="info-item">
                        <p>Telefone: </p>
                        <p>(18) 99999-9999</p>
                    </div>
                    <div class="info-item">
                        <p>Endereço:</p>
                        <p>Rua: quincas borba</p>
                        <p>Bairro: jardim das Oliveiras</p>
                        <p>Cidade: Araçatuba</p>
                        <p>Número: 1000</p>
                    </div>
                    <div class="info-item">
                        <p>CPF:</p>
                        <p>999.999.999-99</p>
                    </div>
                    <div class="info-item">
                        <p>RG:</p>
                        <p>33-333-333-3</p>
                    </div>
                </div>
            </div>
        </main>

        <?php
            include('footer.php');
        ?>
    </body>
</html>