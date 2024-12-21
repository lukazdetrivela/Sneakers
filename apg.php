<?php
    include 'conectaBD.php';

    $query = "Delete From tbtenis Where id = '".$_GET["id"]."'";

    if (mysqli_query($conexao, $query)) {
        $msg = 3;
    } 
    else {
        $msg = 4;
    }

    header("Location: index.php?msg=".$msg."")
?>
