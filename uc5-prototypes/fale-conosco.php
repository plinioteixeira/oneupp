<?php
require "cabecalho.php"
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"--> 
    <!-- <link rel="stylesheet" href="css/fale-conosco.css"> -->
<style>

.content{
    width: 250px;
    min-height: 120px;    
    margin: 25px auto;
    position: relative;   
    display: inline;
    flex-direction: column;
  }

  .correcao{
    margin: 25px auto;
    width: 400px;
  }




</style> -->

</head>
<main>
        <article class="conteudo limitador">

            <h2>Contato</h2>
    
            <p>Fale conosco mandando um menssagem neste formulario.</p>

            
            <form id="my-form" action="" method="post">
<table class="w3-table">
<tr>
                <div>
                   <td> <label for="nome">Nome:</label> </td>
                   <td> <input placeholder="nome" type="text" name="" id="nome" required> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>  <label for="email">E-mail:</label> </td>
                <td>  <input placeholder="email" type="email" name="" id="email" required> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>   <label for="data">Data de nascimento:</label> </td>
                <td>   <input type="date" name="data" id="data" required> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>   <label for="telefone">Telefone:</label> </td>
                <td>   <input placeholder="telefone" type="tel" name="telefone" id="telefone"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>   <label for="idade">Idade:</label> </td>
                <td>  <input placeholder="idade" type="number" name="idade" id="idade" min="18" max="100" required> </td>
                </div>
                </tr>
                </table>

                <div class="sexo">
                   <p>Sexo:</p> </td>
                   <input value="Masculino" type="radio" name="sexo" id="masculimo"> 
                   <label for="masculimo">Masculimo</label> 

                   <input value="Feminino" type="radio" name="sexo" id="feminino"> 
                   <label for="feminino">Feminino</label> 
                </div>
                


                <div class="content">
                   <p>Interesses</p> </td>
                   <input value="Desing" type="checkbox" name="interesses" id="desing"> 
                   <label for="desing">Desing</label> 

                   <input value="Robotica" type="checkbox" name="interesses" id="robotica"> 
                   <label for="robotica">Robotica</label> 

                   <input value="Programação" type="checkbox" name="interesses" id="programacao"> 
                   <label for="programacao">Programação</label> 
                </div>
                

                <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                <table>
                <tr>
                <div class="content">
                <td>   <label for="cep">CEP:</label> </td>
                <td>   <input type="text" id="cep" name="cep" maxlength="9" required> </td>
</table>
                   <button id="localizar-cep">Localizar</button> 
                    <b id="status"></b>
                    <table>
                </div>
                </tr>

                <tr>
                <div class="content correcao">
                <td>   <label for="endereco">Endereço:</label> </td>
                <td>   <input type="text" id="endereco" name="endereco" size="30"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>   <label for="bairro">Bairro:</label> </td>
                <td>   <input type="text" id="bairro" name="bairro"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>   <label for="cidade">Cidade:</label> </td>
                <td>   <input type="text" id="cidade" name="cidade"> </td>
                </div>
                </tr>

                <tr>
                <div class="content">
                <td>   <label for="estado">Estado:</label> </td>
                <td>   <input type="text" id="estado" name="estado"> </td>
                </div>
                </tr>
                </table>
                <!-- /FIM HTML PARA CEP/ENDEREÇO -->

                
                <div class="content">
                   <label for="assunto">Assunto:</label> 
                    <select name="" id=""> 
                        <option></option> 
                       <option>Duvida</option> 
                       <option>Elogio</option> 
                       <option>Reclamações</option> 
                        <option>Outros</option> 
                    </select>
                </div>
                
                
                
                <div class="content">
                   <label for="mensagem">Mensagem:  
                   <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
                    </label> <br>
                    <textarea  maxlength="100" placeholder="mensagem" name="mensagem" id="mensagem" cols="20" rows="5"></textarea>
                </div>
                


                
                <td> <button type="submit">Enviar dados</button> </td>
                <p id="my-form-status"></p>
              
                
            </form>

        </article>
    </main>