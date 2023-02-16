<?php

// C R U D in a nutshell.

// CREATE
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
        VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

        $res = $conn->query($sql);

        if ($res == true) {
            //alert
            print "<script>
            alert('Cadastrado realizado com sucesso!');
            </script>";

            //redirect
            print "<script>
            location.href='?page=listar';
            </script>";
        } else {
            //alert
            print "<script>
            alert('Cadastro não realizado.')
            </script>";

            //redirect
            print "<script>
            location.href='?page=listar';
            </script>";
        }
        break;


    // UPDATE
    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET
            nome='{$nome}',
            email='{$email}',
            senha='{$senha}',
            data_nasc='{$data_nasc}'
            WHERE id=" . $_REQUEST["id"];


        $res = $conn->query($sql);

        if ($res == true) {
            //alert
            print "<script>
            alert('Editado com sucesso!');
            </script>";

            //redirect
            print "<script>
            location.href='?page=listar';
            </script>";
        } else {
            //alert
            print "<script>
            alert('Não foi possível editar.')
            </script>";

            //redirect
            print "<script>
            location.href='?page=listar';
            </script>";
        }
        break;


    // DELETE
    case 'excluir':
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            //alert
            print "<script>
            alert('Excluido com sucesso!');
            </script>";

            //redirect
            print "<script>
            location.href='?page=listar';
            </script>";
        } else {
            //alert
            print "<script>
            alert('Não foi possível excluir.')
            </script>";

            //redirect
            print "<script>
            location.href='?page=listar';
            </script>";
        }

        break;
}