<?php
session_start();

// Configurações
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verifica se o arquivo é uma imagem
$check = getimagesize($_FILES["image"]["tmp_name"]);
if ($check !== false) {
    $uploadOk = 1;
} else {
    echo "O arquivo não é uma imagem.";
    $uploadOk = 0;
}

// Verifica se o arquivo já existe
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Limita o tamanho do arquivo a 5MB
if ($_FILES["image"]["size"] > 5000000) {
    echo "Desculpe, o arquivo é muito grande.";
    $uploadOk = 0;
}

// Permite certos formatos de imagem
$allowedTypes = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowedTypes)) {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}

// Verifica se $uploadOk está definido como 0 devido a um erro
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi enviado.";
// Se tudo estiver correto, tenta fazer o upload do arquivo
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Armazena o caminho da imagem na sessão
        $_SESSION['image_path'] = $target_file;
        header("Location: display_image.php"); // Redireciona para a página de exibição
        exit();
    } else {
        echo "Desculpe, houve um erro ao enviar seu arquivo.";
    }
}
?>
