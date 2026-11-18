


<?php 
	include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
        <li><a href="categorias.html">Categorias</li>
        <li><a href="filmes.html">Filmes</a></li>
    </ul>
    <main> id="categoria">
        <form method="get" action="
        ?editar=<php echo $_GET['editar'];?>
        
        ">

            <h2>Categorias</h2>
           
            <?php
            if(iseet($_GET['editar']) and $_GET['editar'] != NULL){
            $id_categoria = $_GET['EDITAR'];
            $sql = "SELECT * FROM categoria WHERE id = $id_categoria";

            $resultado = $conn->query($sql);
            $obj = $resultado->fetch_assoc();
            }
            ?>
            <input type="text" name="categoria">
            <button name="salvar">Salvar</button>
        </form>
    </main>
  </body>
</html>

<?php
if(isset($_GET['salvar'])){
  $nomeCategoria = $_GET['categoria'];
  
   $sql = "INSERT INTO categoria (nome) values ('$nomeCategoria')";

	if ($conexao->query($sql)){

echo "Gravou com sucessok!!!!!!"; 

 }else{

 echo "Deu ruim"; 
}}

/*Editar uma <categoria></categoria*/
if(isset($_GET['editar'])
 ?>

