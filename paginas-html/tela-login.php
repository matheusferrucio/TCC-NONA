<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NONA login</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/media.css">
        <link rel="stylesheet" href="../css/tela-login.css">
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    <body>
        <header>
            <div class="container flex">
                <a href="../index.php">
                    <h2 class="logo">NONA</h2>
                </a>
            </div><!--container-->
        </header>

        <main>
            <div class="container-formulario">
                <h2>Login</h2>
                <div class="formulario-login">
                    <form action="login.php" method="post">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email..."/>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha..."/>
                        <a href="#">Esqueceu a senha ?</a>
                        <input type="submit" value="Entrar">
                    </form>
                </div><!--formulario-login-->
            </div><!--container-formulario-->
        </main>
    </body>
</html>