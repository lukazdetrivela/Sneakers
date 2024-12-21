<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <div class="container mt-row">
        <div class="row">
            <div class="col-mind-12">
                <div class="aler talert-waring alert dismissible fade show" role="alert">
                    <?php include 'msg.php'; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            <div class="col-8">
                <h2>Tênis Cadastrados</h2>
            </div>
            <div class="col-4">
                <a href="adicionar.html" class="btn btn-success">Adiciona novo tênis</a>
            </div>

            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="" col>ID</th>
                        <th scope="" col>Marca</th>
                        <th scope="" col>Linha</th>
                        <th scope="" col>Tamanho</th>
                        <th scope="" col>Cor</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include 'conectaBD.php';
                        $query = "select * from tbtenis";
                        $result = mysqli_query($conexao, $query);

                        if ($result->num_rows > 0) :
                            while ($array = mysqli_fetch_row($result)) :
                    ?>
                            <tr>
                                <th><?php echo $array[0]; ?></th>
                                <td><?php echo $array[1]; ?></td>
                                <td><?php echo $array[2]; ?></td>
                                <td><?php echo $array[3]; ?></td>
                                <td><?php echo $array[4]; ?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $array[0]; ?>" class="btn btn-primary">editar</a>
                                    <a href="#" onclick="javascript:
                                    if(confirm('Você realmente deseja excluir o tenis?'))
                                    location.href='apg.php?id=<?php echo $array[0];?>'" class="btn btn-danger">Apagar</a>
                                </td>
                            </tr>
                        <?php
                            endwhile;
                            else:
                        ?>
                        <tr>
                            <td colspan="6" rowspan="1">Nenhum carro cadastrado</td>
                        </tr>
                    <?php
                        endif;
                        mysqli_free_result($result);

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>