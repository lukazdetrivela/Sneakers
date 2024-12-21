<?php
   $erros = array(
     1 => "Tenis inserido com sucesso!",
     2 => "Tenis alterado com sucesso!",
     3 => "Tenis excluido com sucesso!",
     4 => "Erro ao executar a ação!"
   );

   $erro_id = isset($_GET['msg'])?(int)$_GET['msg']:0;

   if($erro_id != 0 && in_array($erros, [1,2,3,4]))
   {
     echo $erros[$erro_id];
   }

   else
   {
    echo 'Cadastro de tenis';
   }
?>