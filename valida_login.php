<?php

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios = array(
        array('email' => 'teste@teste.com', 'senha' => 12345),
        array('email' => 'walber@mail.com', 'senha' => 67890),
    );

    foreach($usuarios as $user) {
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuario autenticado';
    }else{
        header('Location: index.php?login=erro');
    }

?>