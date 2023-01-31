<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class="container">

 <div class="alert alert-light" role="alert">
 Todos os Participantes Cadastrados
</div>
</div>



<?php

include("conecta.php");


    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from numero"; 
    $produtos = mysqli_query($con,$cmd); 

    //conta o total de itens 
    $total = mysqli_num_rows($produtos); 

    //seta a quantidade de itens por página, neste caso, 2 itens 
    $registros = 1000000; 

    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    //variavel para calcular o início da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 
 
    //seleciona os itens por página 
    $cmd = "select * from numero limit $inicio,$registros"; 
    $produtos = mysqli_query($con,$cmd); 
    echo $total = mysqli_num_rows($produtos); 





    //exibe os produtos selecionados 
?>   
    
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Ordem</th>
      <th scope="col">Status</th>
      <th scope="col">Número</th>
      <th scope="col">Apagar</th>
    </tr>
  </thead>

  <?php




  while ($produto = mysqli_fetch_array($produtos)) { 
   $produto['id'];
   
  
      ?>
    <tbody>
    <tr>
      


    <td><?php  echo $produto['nome']; ?></td>
      <td><?php  echo $produto['status']; ?></td>
      <td><?php  echo $produto['numero']; ?></td>
      <td><img src="img/img.png" width="20" heidth="20"></td>

    </tr>

<?php
}




?>


</tbody>
</table>





  </div>

<div class="container">
                  
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Participantes!</h4>
  <p>Cadastro dos participantes.</p>
  <hr>
</div>
</div>
<?php


?>
<div class="container">
<form method="post" action="cadastro.php">
 

  <div class="form-group">
    <label for="exampleInputEmail1">Ordem</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="ordem" placeholder="Ordem">
  </div> 
 

  <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="status" placeholder="status">
  </div>
 

  <div class="form-group">
    <label for="exampleInputPassword1">Número</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="número" name="numero">
  </div>
 
 
  
  <button type="submit" class="btn btn-primary">Inserir na Fila</button>
</form>

</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>





