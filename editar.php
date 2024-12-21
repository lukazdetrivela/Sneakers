<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php
        include 'conectaBD.php';
        $query = "Select * from tbtenis Where id='".$_GET["id"]."'";
        $result = mysqli_query($conexao, $query);
        $tenis = mysqli_fetch_assoc($result);
    ?>
    <div class="cadastro">
        <form action="edt.php" method="POST">
            <h1>ALTERAR</h1>
            <p>Tênis</p>
            <BR>
            <label class="form-label">ID</label>
            <input type="number" class="form-control" name="txtID" id="txtID"
            value="<?php echo $tenis['id'];?>">
            <br>
            <label class="form-label">Marca</label>
            <br>
            <input type="text" class="form-control" name="txtmarca" id="txtmarca" value="<?php echo $tenis['marca'];?>">
            
            <br>
            <label  class="form-label">Linha</label>
            <br>
            <input type="text" class="form-control" name="txtlinha" id="txtlinha" value="<?php echo $tenis['linha'];?>">
            <br>
            <label  class="form-label">Tamanho</label>
            <br>
            <input type="number" class="form-control" name="txtamanho" id="txtamanho" value="<?php echo $tenis['tamanho'];?>">
            <br>
            <label class="form-label">Cor</label>
            <br>
            <input type="text" class="form-control" name="txtcor" id="txtcor" value="<?php echo $tenis['cor'];?>">
            <br>
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-success" type="submit">Atualizar</button>
            </div>

    </div>
    <br>

    <footer>


        <div class="redes-sociais">
            <a href="redes-sociais/github.html" class="fa-brands fa-github"></i>
                <a href="redes-sociais/instagram.html" class="fa-brands fa-instagram"></a>
                <a href="redes-sociais/twitter.html" class="fa-brands fa-twitter"></a>
                
        </div>

        <img src="img/tenis2.ico" alt="">
        <div class="line"></div>
        <p2 class="copyright">Garotos de Programa @ 2024</p2>
    </footer>
</body>


</html>