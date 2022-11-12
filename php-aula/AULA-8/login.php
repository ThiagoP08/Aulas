<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    
    <div class="container">
        
        <div class="titulo">
            <h1>Login</h1>
        </div>

        <form action="login">            
            
            <div class="formulario">
                
                <div id="email">
                    <div>
                        <label for="email">Email</label>
                    </div>

                    <div>
                        <input type="email" name="email" autocomplete="off" placeholder="Digite seu email..." required>
                    </div>
                </div>
            
                <div id="senha">
                    
                    <div>
                        <label for="password">Senha</label>
                    </div>

                    <div>
                        <input type="password" name="password" minlength="6" max="12" autocomplete="off" placeholder="Digite sua senha..." required>
                    </div>
                </div>
    
                <div id="botao">
                    <button type="submit">Enviar</button>
                </div>
    
            </div>
    
    
        </form>
    </div>
    
</body>
</html>