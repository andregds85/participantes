<?php
echo $nome=$_POST['ordem'];
echo $status=$_POST['status'];
echo $numero=$_POST['numero'];   


$strcon = mysqli_connect('localhost','root','','numero') or die('Erro ao conectar ao banco de dados');

$dados=("insert into numero(nome,status,numero) values('$nome','$status','$numero')");  

mysqli_query($strcon,$dados) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";


?>






