<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style2.css">

        <title>Login</title>

        <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">

    </head>

    <body>

        <div id="login">

            <form class="card" method="post" action="./cadastrar_login.php">

                <div class="card-header">

                    <h2>Login</h2>

                </div>

                <div class="card-content">
                    
                    <div class="card-content-area">

                        <label for="usuario">Nome:</label>

                        <input type="text" name="name" id="name" autocomplete="off" required>

                    </div>
                    
                    <div class="card-content-area">

                        <label for="usuario">Email:</label>

                        <input type="email" name="email" id="email" autocomplete="off" required>

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha:</label>

                        <input type="password" name="password" id="password" autocomplete="off" minlength="6" maxlength="18" required>

                    </div>
                    
                    <div class="card-content-area">

                        <label for="password">Confirmar Senha:</label>

                        <input type="password" name="password_confirm" id="password" autocomplete="off" minlength="6" maxlength="18" required>

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="login" class="submit">


                </div>

            </form>

        </div>

    </body>

</html>