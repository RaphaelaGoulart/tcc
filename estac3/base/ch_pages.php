<?php

    if(isset($_GET["page"])){
        
        switch($_GET["page"]){
            case "logout":
                include "logout.php";
                break;
            case "validacao":
                include "validacao.php";
                break;
            case "dash":
                include "dash.php";
                break;

            // CRUD Funcionários
            case "lista_func":
                include "funcionarios/lista_func.php";
                //header("Location: funcionarios.php"); exit;
                break;
            case "fadd_func":
                // header("Location: funcionarios/form_add_func.php"); exit;
                include "funcionarios/form_add_func.php";
                break;
            case "view_func":
                include "funcionarios/view_func.php";
                break;
            case "fadd_fun":
                include "fun.php";
                break;  
            case "insere_func":
                include "funcionarios/insere_func.php";
                break;
            case "form_att_func":
                include "funcionarios/form_att_func.php";
                break;
            case "atualiza_func":
                include "funcionarios/atualiza_func.php";
                break;

            //CRUD Estacionamento  
            case "atualiza":
                include "atualiza.php";
                break;
            case "view_estac":
                include "estacionamento/view_estac.php";
                break;
            case "atualiza_estac":
                include "estacionamento/atualiza_estac.php";
                break;
            
            default:
            header("Location: ../index.php"); exit;
            break;
        }
    }

?>