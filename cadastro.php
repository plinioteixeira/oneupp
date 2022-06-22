<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header></header>

    <main>
    <div class="content">
      <div id="login">
          <form method="post" action=""> 
            <h1>Bem vindo!</h1> 
             
            <p> 
              <label for="nome">Nome:</label>
              <input id="nome" name="nome" required="required" type="text" placeholder="Digite seu nome" /> 
            </p>

            <p> 
              <label for="email">E-mail:</label>
              <input id="email" name="email" required="required" type="text" placeholder="Digite seu e-mail"/>
            </p>

            <p> 
              <label for="senha">Senha:</label>
              <input id="senha" name="senha" required="required" type="password" placeholder="Digite sua senha" /> 
            </p>

            <p> 
              <label for="confirma-senha">Confirme sua senha:</label>
              <input id="confirma-senha" name="confirma-senha" required="required" type="password" placeholder="Digite sua senha" /> 
            </p>
            
            <p> 
              <input type="submit" value="Entrar" /> 
            </p>
            
            <p class="link">
              Já possui uma conta?
              <a href="login.php">Entre aqui!</a>
            </p>
          </form>
        </div>
      </div>
    </main>

    <footer></footer>

</body>
</html>