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
              <label for="nome_login">E-mail:</label>
              <input id="nome_login" name="nome_login" required="required" type="text" placeholder="Digite seu e-mail"/>
            </p>
            
            <p> 
              <label for="email_login">Senha:</label>
              <input id="email_login" name="email_login" required="required" type="password" placeholder="Digite sua senha" /> 
            </p>
            
            <p> 
              <input type="submit" value="Entrar" /> 
            </p>
            
            <p class="link">
              Ainda não tem conta?
              <a href="cadastro.php">Cadastre-se</a>
            </p>
          </form>
        </div>
      </div>
    </main>

    <footer></footer>

</body>
</html>