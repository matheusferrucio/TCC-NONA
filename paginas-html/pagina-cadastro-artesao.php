<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Artesão</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/pagina-cadastro-artesao.css">
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
                        <h2>Cadastro de Artesão</h2>
                    </div>
                    <div class="divisao">
                        <p>Dados cadastrais</p>
                        <hr>
                    </div>
                    <div class="formulario-cadastro">
                        <form action="cadastro-atelie.php" method="post">
                            <section class="sessao-form">
                                <div class="nome col100">
                                    <label for="nome">NOME</label>
                                    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="data-nascimento col30">
                                    <label for="data-nasci">Data de nascimento</label>
                                    <input type="date" name="data-nasci" id="data-nasci">
                                </div>
                                <div class="cpf col70">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="genero-content">
                                    <div class="titulo-genero">
                                        <p>Gênero</p>
                                    </div>
                                    <div class="genero">
                                        <div class="sexo-item">
                                            <input type="radio" name="sexo" id="masculino">
                                            <label for="masculino">Masculino</label>
                                        </div>
                                        <div class="sexo-item">
                                            <input type="radio" name="sexo" id="feminino">
                                            <label for="feminino">Feminino</label>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="tel col100">
                                    <label for="telefone">Telefone</label>
                                    <input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone de contato...">
                                </div>
                            </section>

                            <section class="sessao-form">
                                <div class="email-artesao col100">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" placeholder="Digite o seu melhor e-mail...">
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

        <?php
            include('footer.php');
        ?>
        
    </body>
</html>