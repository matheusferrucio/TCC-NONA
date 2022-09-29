<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NONA produtos</title>
        <!--link do fontawesome-->
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
        <!-- link boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- links dos meus documentos css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/pagina-visualizar-todos-produtos.css">
    </head>
</head>
<body>
    <?php
        include('header-site.php');
    ?>

    <main>
        <div class="container">
            <div class="container-categorias">
                <h3>Categorias</h3>
                <div class="nome-categorias lista">
                    <ul class="links-categorias">
                        <li><a href="#">Amigurumis</a></li>
                        <li><a href="#">Pinceis</a></li>
                        <li><a href="#">Tapetes</a></li>
                        <li><a href="#">MDF's</a></li>
                        <li><a href="#">Peso para porta</a></li>
                        <li><a href="#">Toalhas</a></li>
                        <li><a href="#">Roupas de crochê</a></li>
                    </ul>
                </div>
                <h3>Materiais</h3>
                <div class="lista-materiais lista">
                    <ul class="links-materiais">
                        <li><a href="#">MDF</a></li>
                        <li><a href="#">Madeira</a></li>
                        <li><a href="#">Barbante</a></li>
                        <li><a href="#">Cola para madeira</a></li>
                        <li><a href="#">Tecidos</a></li>
                        <li><a href="#">Argila</a></li>
                    </ul>
                </div>
            </div>
            <div class="produtos-container">
                    <?php
                        for ($i = 0; $i < 10; $i++){
                            echo "<a href='pagina-produto.php'>
                            <div class='card-produto'>
                                <div class='img-produto'>
                                    <img src='../imagens/tapete-de-vo.jpg' alt='imagem do produto'>
                                </div>
                                <div class='produto-conteudo'>
                                    <div class='descricao-produto'>
                                        <p>Produto muito bom, parece os falsificados da china</p>
                                    </div>
                                    <div class='avaliacao-card-produto'>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                    </div>
                                    <div class='preco-produto'>
                                        <span>De: R$ 190,00</span>
                                        <span>Por: R$ 150,00</span>
                                    </div>
                                </div>
                            </div>
                        </a>";
                        }
                    ?>
                </div>
        </div>
    </main>

    <?php
        include('footer.php');
    ?>
</body>
</html>