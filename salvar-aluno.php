<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $rm = $_POST["rm"]; 
            $nome = $_POST["nome"]; 
            $turma = $_POST["turma"]; 

            $sql = "INSERT INTO alunos (RM, NOME, TURMA) VALUES('{$rm}' , '{$nome}', '{$turma}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script> ";
                print "<script>location.href='?page=listar';</script> ";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script> ";
                print "<script>location.href='?page=listar';</script> ";

            }
            break;
        
            case 'editar':
                $rm = $_POST["rm"]; 
                $nome = $_POST["nome"]; 
                $turma = $_POST["turma"]; 

                $sql = "UPDATE alunos SET rm='{$rm}', nome='{$nome}', turma='{$turma}' WHERE rm=".$_REQUEST["rm"];

                $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script> ";
                print "<script>location.href='?page=listar';</script> ";
            }else{
                print "<script>alert('Não foi possível editar');</script> ";
                print "<script>location.href='?page=listar';</script> ";

            }
                break;

                case 'excluir':
                   $sql = "DELETE FROM alunos WHERE rm=".$_REQUEST["rm"];

                   $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso');</script> ";
                print "<script>location.href='?page=listar';</script> ";
            }else{
                print "<script>alert('Não foi possível excluir');</script> ";
                print "<script>location.href='?page=listar';</script> ";

            }
                    break;
    }