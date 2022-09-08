<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Ateliê</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/pagina-cadastro-atelie.css">
    </head>
    <body>

        <?php
            include ('header-site.php');
        ?>

        <section class="cadastro-atelie">
            <div class="container">
                <div class="formulario-content">
                    <div class="titulo-formulario">
                        <h2>Cadastro de Ateliê</h2>
                    </div>
                    <div class="divisao">
                        <p>Dados empresariais</p>
                        <hr>
                    </div>
                    <div class="formulario-cadastro">
                        <form action="cadastro-atelie.php" method="post">
                            <section class="sessao-form">
                                <div class="cnpj col40">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ do estabelecimento...">
                                </div>
                                <div class="email col60">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" placeholder="Digite o seu e-mail empresarial...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="nome-fantasia col50">
                                    <label for="nome-fant">Nome fantasia</label>
                                    <input type="text" name="nome-fant" id="nome-fant" placeholder="Digite o nome fantasia do estabelecimento...">
                                </div>
                                <div class="nome col50">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" id="nome" placeholder="Digite o nome do estabelecimento...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="razao-social col100">
                                    <label for="raza-social">Razão social</label>
                                    <input type="text" name="raza-social" id="razao-social" placeholder="Digite a razão social...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="codigo-cnae col50">
                                    <label for="cnae">Código CNAE</label>
                                    <input type="text" name="cnae" id="cnae" placeholder="Digite o código CNAE do estabelecimento...">
                                </div>
                                <div class="descricao-cnae col50">
                                    <label for="desc-cnae">Descrição CNAE</label>
                                    <input type="text" name="desc-cnae" id="desc-cnae" placeholder="Digite a descrição CNAE...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="telefone col100">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" id="telefone" placeholder="Digite o telefone do estabelecimanto...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="cep col70">
                                    <label for="cep">CEP</label>
                                    <input type="number" name="cep" id="cep" placeholder="Digite o CEP do estabelecimento...">
                                </div>
                                <div class="numero col30">
                                    <label for="num">Número do estabelecimento</label>
                                    <input type="number" name="num" id="num" placeholder="N°...">
                                </div>
                            </section>

                            <section class="enviar-cadastro">
                                <div class="atencao col100">
                                    <p>
                                        <i class="fa-solid fa-circle-exclamation"></i>
                                        ATENÇÃO: o cadastro será enviado para análise e a resposta será enviada no seu e-mail!
                                    </p>
                                </div>
                                <input type="submit" value="Enviar Cadastro">
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>