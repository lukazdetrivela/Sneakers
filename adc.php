<?php
if (count($_POST) > 0) {
    include 'conectaBD.php';
    $id = $_POST['txtID'];
    $marca = $_POST['txtmarca'];
    $linha = $_POST['txtlinha'];
    $tamanho = $_POST['txtamanho'];
    $cor = $_POST['txtcor'];



    $query = "Insert into tbtenis (marca, linha, tamanho, cor)
        Values ('$marca', '$linha', '$tamanho', '$cor')";

    if (mysqli_query($conexao, $query)) {
        $msg = 1;
    } 
    else {
        $msg = 4;
    }
}
header("Location: index.php?msg=".$msg."");
?>
