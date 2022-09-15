<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de login</title>
        <link rel="stylesheet" href="../css/tela-login.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="login-container">
                <h3>Faça login na sua conta</h3>      
                <div class="formulario-content">
                    <form action="login.php">
                        <div class="input-item">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="Digite seu e-mail..." require>
                        </div>
                        <div class="input-item">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Digite a sua senha..." require>
                        </div>
                        <div class="senha-cadastro">
                            <div class="esqueci-senha">
                                <a href="esqueci-senha.php">Esqueci minha senha</a>
                            </div>

                            <div class="link-cadastro">
                                <p>Ainda não possui uma conta? <a href="#">Cadastre-se</a></p>
                            </div>
                        </div>
                        <input type="submit" value="Fazer login">  
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>