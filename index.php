<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NONA Artesanatos</title>
        <!--link do fontawesome-->
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
        <!-- link boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- link css do bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- links dos meus documentos css -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    </head>
    <body>

        <header>
            <div class="container">
                <div class="container-logo">
                    <div class="logo"> <!-- essa div conterá a logo quando estiver pronta -->
                        
                    </div>
                </div>
                <div class="header-content">
                    <div class="header1">
                        <div class="buscar">
                            <input type="text" name="buscar" id="buscar" placeholder="Buscar...">
                        </div>
                        <div class="botoes-menu">
                            <nav class="nav-links">
                                <a href="#"><i class="fa-solid fa-heart"></i></a>

                                <a href="./paginas-html/pagina-produto.php"><i class="fa-solid fa-user"></i></a>

                                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>

                                <a href="#"><i class="fa-solid fa-bars"></i></a> <!-- ícone do botão hamburguer -->
                            </nav>
                        </div>
                    </div>
                    <div class="header2">
                        <ul class="nav-links">
                            <li>
                                <a href="#">Produtos</a>
                                <ul class="links-sub-menu">
                                    <li><a href="#">Pinceis</a></li>
                                    <li><a href="#">Telas</a></li>
                                    <li><a href="#">Tapetes</a></li>
                                    <li><a href="#">Amigurumis</a></li>
                                    <li><a href="#">MDFs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Materiais</a>
                                <ul class="links-sub-menu">
                                    <li><a href="#">Madeira</a></li>
                                    <li><a href="#">Tintas</a></li>
                                    <li><a href="#">Barbante</a></li>
                                    <li><a href="#">Vernis</a></li>
                                    <li><a href="#">Plástico</a></li>
                                    <li><a href="#">MDF</a></li>
                                    <li><a href="#">Argila</a></li>
                                    <li><a href="#">Linhas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Marcas</a>
                                <ul class="links-sub-menu">
                                    <li><a href="#">Kalunga</a></li>
                                    <li><a href="#">Acrilex</a></li>
                                    <li><a href="#">Lepok</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Sobre</a>
                            </li>
                            <li>
                                <a href="#">Ajuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- ---------------------------------------- slider de imagens ---------------------------------------- -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- indicadores de qual slide estamos, aquelas listras em baixo -->
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- carousel-inner é o container que contém as imagens do slider -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./imagens/0.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./imagens/1.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./imagens/2.jpg" alt="Terceiro Slide">
                </div>
            </div>
            <!-- botão de voltar slide -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <!-- botão de passar slide -->
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        
        <a href="./paginas-html/pagina-cadastro-atelie.php">asnvkagioi</a>

        <!-- ---------------------------------------- sessão de imagens promocionais ---------------------------------------- -->

        <section class="sessao-imagens">
            <div class="container">
                <div class="imagens-content">
                    <div class="imagem-item">
                        <img src="./imagens/imagem1.jpg" alt="img 1">
                        <div class="titulo-img">
                            <p>Amigurumi</p>
                        </div>
                        <div class="efeito-hover-img">
                            <h3>Veja nossos amigurumis</h3>
                            <p>Temos todo tipo de amigurumi, clique no botão abaixo para conferir</p>
                            <a href="#">Ver produtos</a>
                        </div>
                    </div>

                    <div class="imagem-item">
                        <img src="./imagens/imagem2.jpg" alt="img 2">
                        <div class="titulo-img">
                            <p>MDF's</p>
                        </div>
                        <div class="efeito-hover-img">
                            <h3>Veja nossas artes em MDF</h3>
                            <p>Temos todo tipo de arte em MDF, produto de qualidade e beleza excelentes</p>
                            <a href="#">Ver produtos</a>
                        </div>
                    </div>

                    <div class="imagem-item">
                        <img src="./imagens/imagem3.jpg" alt="img 3">
                        <div class="titulo-img">
                            <p>Pinceis</p>
                        </div>
                        <div class="efeito-hover-img">
                            <h3>Pinceis para pintura</h3>
                            <p>Todo tipo de pincel para pintura para que você possa dar vida a sua arte!</p>
                            <a href="#">Ver produtos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="produtos">
            <div class="container">
                <div class="produtos-container">
                    <?php
                        for ($i = 0; $i < 12; $i++){
                            echo "<a href='./paginas-html/pagina-produto.php'>
                            <div class='card-produto'>
                                <div class='img-produto'>
                                    <img src='./imagens/tapete-de-vo.jpg' alt='imagem do produto'>
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
                    <!--
                        CÓDIGO USADO PARA TESTAR O CARD COM O LINK PARA A PAGINA DE PRODUTO    
                    <a href="./paginas-html/pagina-produto.php">
                        <div class="card-produto">
                            <div class="img-produto">
                                <img src="./imagens/tapete-de-vo.jpg" alt="imagem do produto">
                            </div>
                            <div class="produto-conteudo">
                                <div class="descricao-produto">
                                    <p>Produto muito bom, parece os falsificados da china</p>
                                </div>
                                <div class="avaliacao-card-produto">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="preco-produto">
                                    <span>De: R$ 190,00</span>
                                    <span>Por: R$ 150,00</span>
                                </div>
                            </div>
                        </div>
                    </a> -->
                </div>
            </div>
        </section>

        <section class="carousel-marcas">
            <div class="container">
            <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wraper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content"> <!-- tudo que estiver aqui dentro faz parte da imagem do card -->
                            <span class="overlay" style="background-color: black;"></span>

                            <div class="card-image">
                                <img src="./imagens/kalunga.png" alt="imagem 1" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Kalunga</h2>
                            <p class="description">Venha conferir os produtos que estão disponívies em parcerias com a kalunga</p>

                            <a href="#">Veja mais</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content"> <!-- tudo que estiver aqui dentro faz parte da imagem do card -->
                            <span class="overlay" style="background-color: #00699F;"></span>

                            <div class="card-image">
                                <img src="./imagens/lepok.png" alt="imagem 1" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Lepok</h2>
                            <p class="description">Materiais escolares você encontra na Lepok</p>

                            <a href="#">Veja mais</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content"> <!-- tudo que estiver aqui dentro faz parte da imagem do card -->
                            <span class="overlay" style="background-image: url('./imagens/fundo-acrilex.jpg'); object-fit: cover;"></span>

                            <div class="card-image">
                                <img src="./imagens/acrilex.png" alt="imagem 1" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Acrilex</h2>
                            <p class="description">Veja todo o nosso catálogo de tintas da Acrilex</p>

                            <a href="#">Veja mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
            </div>    
        </section>


        <section class="footer-site">
            <?php
                include('./paginas-html/footer.php');
            ?>
        </section>

        <!-- scripts do bootstrap -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- scripts slider de marcas -->
        <script src="./js/swiper-bundle.min.js"></script>
        <!-- script de formatação do slider -->
        <script src="./js/script.js"></script>
    </body>
</html>