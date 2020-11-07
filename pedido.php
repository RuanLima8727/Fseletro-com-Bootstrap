<?php

$servidor="localhost";
$usuario="root";
$senha="";
$banco="fullstackeletro";

$conn= mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conn){
    die("A conexão falhou: ".mysqli_connect_error());
}
//  CONEXÃO AO BD fullstackeletro 


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
            <!-- link para css -->
        <link href="./Css/estilo.css" rel="stylesheet"> 
        
            <!-- link para o JS -->
        <script src="JS/funcoes.js"></script>
</head>
<body>
    <!-- Menu com require -->
    <?php
                require("menu.html")
    ?>
    <!-- Menu com require -->  

    <h3>Cadastro Para Pedidos</h3>

<form action="" method="post">
        

            <label for="clien">Cliente</label>
        <input type="text" name="cliente" id="clien"> 
            <br>

            <label for="end">Endereço</label>
        <input type="text" name="endereco" id="end"><br>

            <label for="telefone">Telefone</label>
        <input type="tel" name="tel" id="telefone"><br>
        
            
            <label for="prod">Produto</label>
        <input type="text" name="produto" id="prod"> <br>
            <br>

            <label for="valorUnico">Unitário</label>
        <input type="number" name="unitario" id="valorUnico"> <br>
            <br>

            <label for="quant">Quantidade</label>
        <input type="number" name="quantidade" id="quant"> <br>
            <br>

            <label for="all">Total</label>
        <input type="Number" name="total" id="all"> <br>
            <br>
        
        <input type="submit" name="submit" value="Enviar" style="cursor: pointer;">
    </form> 

    <?php

                            $cliente = $_POST['cliente'];
                            $endereco= $_POST['endereco'];
                            $telefone = $_POST['tel'];
                            $produto = $_POST['produto'];
                            $unitario = $_POST['unitario'];
                            $quantidade = $_POST['quantidade'];
                            $total = $_POST['total'];
                            
                            echo $total;

                             $sql= "insert into fullstackeletro.pedidos (cliente,endereco,tel,produto,unitario,quantidade,total) 
                                    values('$cliente','$endereco','$telefone','$produto','$unitario','$quantidade',''$total)";
                             $result=$conn->query($sql);
                             if($result){
                                 echo "enviado";
                             }
                             else{echo "erro";}
                             

                            
            ?>


<div class="container">
        
<footer id="rodape"> <!--Rodapé-->
        
        <h4 class="text-danger" id="FPagamento">Nossas Formas De Pagamento</h4>
        <img src="./Imagens/Pagamento.png" alt="Formas De Pagamento" width="33%" height="20%">
        <p>&copy: Recodepro</p>
</footer>       <!--Rodapé-->
</div>


<section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</section>
</body>
</html>