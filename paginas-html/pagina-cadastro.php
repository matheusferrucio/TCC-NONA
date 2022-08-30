<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NONA Cadastro</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/pagina-cadastro.css">
        <link rel="stylesheet" href="../css/footer.css">
        <!-- link fontawesome -->
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <header>
            <div class="container">
                <div class="container-logo">
                    <div class="logo"></div>
                </div>
            </div>
        </header>

        <main>
            <section class="container">
                <div class="container-cadastro">
                    <div class="titulo">
                        <h1>Cadastro de Cliente</h1>
                    </div>
                    <div class="separacao">
                        <p>Dados Cadastrais</p>
                        <hr>
                    </div>
                    <div class="formulario-cadastro">
                        <form action="cadastro.php" method="post">
                            <section class="sessao-form">
                                <div class="nome-cliente formata-input">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo">
                                </div>
                            </section>
                            <section class="sessao-form">
                                <div class="data-cpf">
                                    <div class="data-nascimento">
                                        <label for="data">Data de nascimento</label>
                                        <input type="date" name="data" id="data">
                                    </div>
                                    <div class="cpf">
                                        <label for="cpf">CPF</label>
                                        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">
                                    </div>
                                </div>
                            </section>
                            <section class="sessao-form">
                                <div class="genero">
                                    <div class="titulo">
                                        <h3>Gênero</h3>
                                    </div>
                                    <div class="tipos-genero">
                                        <div class="genero-item">
                                            <input type="radio" name="genero" id="masculino">
                                            <label for="masculino">Masculino</label>
                                        </div>
                                        <div class="genero-item">
                                            <!-- os inputs radios precisam ter o mesmo name para que apenas um seja selecionado -->
                                            <input type="radio" name="genero" id="feminino">
                                            <label for="feminino">Feminino</label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="sessao-form">
                                <div class="email-cliente formata-input">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" placeholder="Digite o seu melhor e-mail">
                                </div>
                            </section>
                            <section class="sessao-form">
                                <div class="senha formata-input">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" id="senha" placeholder="Crie a sua senha de usuário">
                                </div>
                            </section>
                            <section class="sessao-form">
                                <div class="botao-cadastrar">
                                    <input type="submit" value="Cadastrar">
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <!-- adicionar footer com include -->
    </body>
</html>