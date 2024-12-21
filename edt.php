<?php
    if (count($_POST) > 0) {
        include 'conectaBD.php';
        $id = $_POST['txtID'];
        $marca = $_POST['txtmarca'];
        $linha = $_POST['txtlinha'];
        $tamanho = $_POST['txtamanho'];
        $cor = $_POST['txtcor'];
    
    
    
        $query = "Update tbtenis set marca = '$marca', linha = '$linha', tamanho = '$tamanho', cor = '$cor' Where id = '$id'";
    
        if (mysqli_query($conexao, $query)) {
            echo "TENIS ATUALIZADO COM SUCESSO <br>";
            echo "<a href='index.php'>voltar</a>";
        } 
        else {
            $msg = 4;
        }
    }
?>