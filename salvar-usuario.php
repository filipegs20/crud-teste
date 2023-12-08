<?php

switch ($_REQUEST["acao"]) {

    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

           // if (strlen($senha) < 8) { print "<script> alert('Senha muito curta!');</script>";
           //     break;
                // Senha muito curta
                // Apresentar mensagem de erro ao usuário
          //  } elseif (!preg_match("/[A-Z]/", $senha) || !preg_match("/[a-z]/", $senha) || !preg_match("/[0-9]/", $senha) || !preg_match("/[^A-Za-z0-9]/", $senha)) {
          //      print "<script> alert('Senha não atende aos requisitos de complexidade!');</script>";
                // Apresentar mensagem de erro ao usuário
          //  } else { false;
          //      // Senha atende aos requisitos, continuar com o processo de registro
          //  }
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuários (nome, email, senha, data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
        $res = $conn -> query($sql);

        if($res==true){
            print "<script> alert('Cadastrado com sucesso!');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        else{
            print "<script> alert('Não foi possível cadastrar');</script>";
            print "<script> location.href='?page=listar';</script>";

        }

        break;
    
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuários SET
                  nome = '{$nome}',
                  email = '{$email}',
                  senha ='{$senha}',
                  data_nasc ='{$data_nasc}'
                  
                WHERE 
                    id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script> alert('Alterado com sucesso!');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        else{
            print "<script> alert('Não foi possível alterar');</script>";
            print "<script> location.href='?page=listar';</script>";

        }

        break;

    case 'excluir':
        $sql = "DELETE FROM usuários WHERE id=".$_REQUEST["id"];

        $res = $conn -> query($sql);
        if($res==true){
            print "<script> alert('Excluído com sucesso!');</script>";
            print "<script> location.href='?page=listar';</script>";
        }
        else{
            print "<script> alert('Não foi possível excluir');</script>";
            print "<script> location.href='?page=listar';</script>";

        }

        break;
}

?>