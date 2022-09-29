<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Favoritos</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/pagina-favoritos.css">
        <!-- script fontawesome -->
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            include('header-site.php');
        ?>

        <main>
            <div class="container">
                <section class="produtos">
                    <h1>Produtos favoritos</h1>
                    <div class="produtos-container">
                        <?php
                            for ($i = 0; $i < 4; $i++){
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
                    </div><!-- produtos-container -->
                </section>
            </div>
        </main>

        <?php
            include('footer.php');
        ?>
    </body>
</html>