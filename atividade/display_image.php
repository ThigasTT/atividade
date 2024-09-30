<?php
session_start();

if (!isset($_SESSION['image_path'])) {
    echo "Nenhuma imagem foi carregada.";
    exit();
}

$image_path = $_SESSION['image_path'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição da Imagem</title>
    <style>
*{
  text-align: center;
  margin: 100px 0;
  font-size: 30px;
}
img{
    width: 40%;
    height: 30%;
    box-shadow: 5px 10px;
}

body{
   background-color: #00ff1080;
}
h1{
text align: center;
}


</style>
</head>
<body>
    <h1>Imagem Enviada</h1>
    <img id="img" src="<?php echo htmlspecialchars($image_path); ?>" alt="Imagem enviada">
    <br>
    <a href="upload_form.php">Voltar para o formulário de upload</a>
</body>
</html>
