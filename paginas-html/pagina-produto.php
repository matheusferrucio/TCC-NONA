    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>NONA Produto</title>
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/pagina-produto.css">
            <!-- link font awesome -->
            <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>   
        </head>
        <body>

            <?php
                include ('header-site.php');
            ?>

            <section class="visualizar-produto">
                <div class="container">
                    <div class="container-produto">
                        <section class="sessao-produto sessao1">
                            <div class="titulo">
                                <h3>
                                    Tapete nuvenzinha
                                    <div class="favoritar">
                                        <i class="fa-solid fa-heart"></i> <!-- ícone de coração -->
                                    </div>
                                </h3>
                            </div>
                            <div class="descricao">
                                <p class="descricao-produto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, harum cupiditate optio quibusdam a dolorem, quas, omnis quisquam illo earum ipsa ratione odit ipsum totam? Molestiae, quibusdam in? Eligendi, officiis?</p>
                                <p class="nome-entregador">Produto vendido e entregue por: <span>Alemão</span></p>
                                <div class="materiais-produto">
                                    <p>Materiais:</p>
                                    <p>Lã</p>
                                </div>
                            </div>
                        </section>

                        <section class="sessao-produto sessao2">
                            <div class="imagem-container">
                                <div class="setas-imagem">
                                    <i class="fa-solid fa-chevron-left"></i>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <img src="../imagens/tapete-croche.png" alt="imagem do produo" class="img-produto">
                            </div>
                            <div class="cores">
                                <p>Cores:</p>
                                <div class="circulo-cores">
                                    <div class="circulo" style="background-color: red;"></div>
                                    <div class="circulo" style="background-color: blue;"></div>
                                    <div class="circulo" style="background-color: green;"></div>
                                </div>
                            </div>
                            <div class="botoes">
                                <div class="botao-carrinho">
                                    <form action=".carrinho.php" method="post">
                                        <input type="submit" value="Adicionar ao carrinho">
                                    </form>
                                </div>
                                <div class="botao-comprar">
                                    <form action=".comprar.php" method="post">
                                        <input type="submit" value="Comprar agora!">
                                    </form>
                                </div>
                            </div>
                        </section>

                        <section class="sessao-produto sessao3">
                            <div class="avaliacao-produto">
                                <div class="estrelas">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="linha-vertical"></div>
                                <div class="numero-avaliacoes">
                                    <p><span>10</span>Avaliações</p>
                                </div>
                            </div>
                            <div class="preco-produto">
                                <p>De: R$ 160,80</p>
                                <p>Por: R$ 140,00</p>
                            </div>
                            <div class="estoque-produto">
                                <p>Estoque: <span>20</span></p>
                            </div>
                            <div class="tamanhos-produto">
                                <p>Tamanhos:</p>
                                <div class="tamanho">
                                    <p>P</p>
                                    <p>
                                        1m x 1,50m
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="calcular-frete">
                                <h3>Calcular frete e prazo</h3>
                                <form action="cep-frete.php" mehod="post">
                                    <input type="text" name="cep" id="cep" placeholder="Digite seu cep...">
                                    <input type="number" name="numRua" id="numRua" placeholder="N° casa">
                                </form>
                                <div class="prazo-valor-frete">
                                    <div class="prazo-frete">
                                        <p>Prazo até:</p>
                                        <p>30/09</p>
                                    </div>
                                    <div class="valor-frete">
                                        <p>Valor:</p>
                                        <p>R$ 5,00</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

            <section class="perfil-vendedor">
                <div class="container">
                    <div class="perfil-container">
                        <div class="info-perfil-content">
                            <div class="foto-perfil">
                                <!-- aqui fica a imagem de perfil do vendedor -->
                            </div>
                            <div class="nome-vendedor">
                                <h3>Nome Vendedor</h3>
                                <a href="#">Ver Perfil do Vendedor</a>
                            </div>
                        </div>
                        <div class="info-vendedor-content">
                            <div class="info-vendedor-div">
                                <p>Loja desde: <span>1 ano</span></p>
                                <p>Produtos: <span>200 produtos</span></p>
                            </div>
                            <div class="info-vendedor-div">
                                <p>Avaliações: <span>5 mil</span></p>
                                <p>
                                    Classificação: 
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                </p>
                            </div>
                        </div>
                    </div> <!-- perfil-container -->
                </div>
            </section>

            <!-- <section class="sessao-slider-produtos">

            </section> -->

            <section class="ficha-tecnica">
                <div class="container">
                    <div class="titulo">
                        <h2>Ficha Técnica</h2>
                    </div>
                    <div class="tabela-ficha-tecnica">
                        <table>
                            <tr class="listra">
                                <td class="nome-categoria">Material usado</td>
                                <td class="categoria-item">Lã, e mais algumas coisas</td>
                            </tr>
                            <tr>
                                <td class="nome-categoria">Tamanho</td>
                                <td class="categoria-item">1m x 1,50m</td>
                            </tr>
                            <tr class="listra">
                                <td class="nome-categoria">Código do produto</td>
                                <td class="categoria-item">385289350</td>
                            </tr>
                            <tr>
                                <td class="nome-categoria">Fabricante</td>
                                <td class="categoria-item">Nome do artesão</td>
                            </tr>
                            <tr class="listra">
                                <td class="nome-categoria">Cores</td>
                                <td class="categoria-item">Rosa, verde, roxo</td>
                            </tr>
                            <tr>
                                <td class="nome-categoria">Peso</td>
                                <td class="categoria-item">2 kg</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>

            <section class="sessao-comentario">
                <div class="container">
                    <div class="titulo">
                        <h2>Comentários</h2>
                    </div>
                    <div class="container-comentario">
                        <div class="container-textarea">
                            <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Deixe um comentário avaliando o produto"></textarea>
                        </div>
                        <div class="container-avaliacao">
                            <p>Avalie o produto</p>
                            <div class="estrelas-avalia-produto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <div class="botao-comentar">
                            <input type="submit" value="Comentar">
                        </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <div class="saiba-mais">
                        <p>Saiba-mais</p>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <nav>
                        <ul class="links-footer">
                            <li>
                                <a href="#">| Central de ajuda |</a>
                            </li>
                            <li>
                                <a href="#">| Minha conta |</a>
                            </li>
                            <li>
                                <a href="#">| Seja parceiro |</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </footer>
        </body>
    </html>