<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagem</title>
    <style>
*{
  text-align: center;
  margin: 100px 0;
  font-size: 30px;
}
body{
   background-color: #00ff1080;
}
h1{
text align: center;
}
label{
    text-align: center;
    padding: 0 150px;

    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}
input{
    text-align: center;
    
    padding: 0 150px;

    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif

    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}
</style>
</head>
<body>
    <h1>Faça o upload de uma imagem</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Escolha uma imagem:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
