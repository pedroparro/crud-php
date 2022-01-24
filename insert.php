<?php
include("./config.php");
//isset - variaveis
if(isset($_POST['embarcador']) && isset($_POST['transportadora']) 
        && isset($_POST['statu']) && isset($_POST['inconsistencia'])
        && isset($_POST['destinatario_cnpj']) && isset($_POST['destinatario_razao'])
        && isset($_POST['tipo_destinatario']) && isset($_POST['tipo_operacao'])
        && isset($_POST['data_importacao']) && isset($_POST['data_emissao'])
        && isset($_POST['numero_nf'])){
            
    //function - SQL INJECTION
    function validate($data){
        $data = preg_replace(preg_quote("/(from|update|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "" ,$data); // remove palavras que contenham sintaxe sql
        $data = ltrim($data); // limpa espaços vazios começo string
        $data = rtrim($data); // limpa espaços vazios final string
        $data = trim($data); // limpa espaços vazios inicio string
        $data = addslashes($data); //  adiciona barras invertidas a um string
        $data = stripslashes($data); // Remove barras invertidas de uma string.
        $data = strip_tags($data); // tira tags html e php
        $data = htmlspecialchars($data); // Converte caracteres especiais em entidades HTML
        return $data;
    }
    //validate - variaveis
    $embarcador = validate($_POST['embarcador']);
    $transportadora = validate($_POST['transportadora']);
    $statu = validate($_POST['statu']);
    $inconsistencia = validate($_POST['inconsistencia']);
    $destinatario_cnpj = validate($_POST['destinatario_cnpj']);
    $destinatario_razao = validate($_POST['destinatario_razao']);
    $tipo_destinatario = validate($_POST['tipo_destinatario']);
    $tipo_operacao = validate($_POST['tipo_operacao']);
    $data_importacao = validate($_POST['data_importacao']);
    $data_emissao = validate($_POST['data_emissao']);
    $numero_nf = validate($_POST['numero_nf']);
    
    //empty - variaveis
    if(empty($embarcador)){
        header("Location: ./index.php?error=Preencha o campo embarcador");
        die();
    }elseif(empty($transportadora)){
        header("Location: ./index.php?error=Preencha o campo transportadora");
        die();
    }elseif(empty($statu)){
        header("Location: ./index.php?error=Preencha o campo status");
        die();
    }elseif(empty($inconsistencia)){
        header("Location: ./index.php?error=Preencha o campo inconsistencia");
        die();
    }elseif(empty($destinatario_cnpj)){
        header("Location: ./index.php?error=Preencha o campo destinatario cnpj");
        die();
    }elseif(empty($destinatario_razao)){
        header("Location: ./index.php?error=Preencha o campo destinatario razão");
        die();
    }elseif(empty($tipo_destinatario)){
        header("Location: ./index.php?error=Preencha o campo tipo destinatario");
        die();
    }elseif(empty($tipo_operacao)){
        header("Location: ./index.php?error=Preencha o campo tipo operação");
        die();
    }elseif(empty($data_importacao)){
        header("Location: ./index.php?error=Preencha o campo data importacao");
        die();
    }elseif(empty($data_emissao)){
        header("Location: ./index.php?error=Preencha o campo data emissão");
        die();
    }elseif(empty($numero_nf)){
        header("Location: ./index.php?error=Preencha o campo nota fiscal");
        die();
    }else{
        echo header("Location: ./index.php?msg=Cadastro realizado com sucesso");
    }
    
    //extract POST - variaveis
    extract($_POST);

    $embarcador = $_POST['embarcador'];
    $transportadora = $_POST['transportadora'];
    $status = $_POST['statu'];
    $inconsistencia = $_POST['inconsistencia'];
    $destinatario_cnpj = $_POST['destinatario_cnpj'];
    $destinatario_razao = $_POST['destinatario_razao'];
    $tipo_destinatario = $_POST['tipo_destinatario'];
    $tipo_operacao = $_POST['tipo_operacao'];
    $data_importacao = $_POST['data_importacao'];
    $data_emissao = $_POST['data_emissao'];
    $numero_nf = $_POST['numero_nf'];

    $sql = $pdo->prepare("INSERT INTO `crud_php` (embarcador, transportadora, statu, inconsistencia, destinatario_cnpj, destinatario_razao, tipo_destinatario, tipo_operacao, data_importacao, data_emissao, numero_nf)
     VALUES (?,?,?,?,?,?,?,?,?,?,?)");
     $sql->execute(array($_POST['embarcador'],$_POST['transportadora'],$_POST['statu'],$_POST['inconsistencia'],
     $_POST['destinatario_cnpj'],$_POST['destinatario_razao'],$_POST['tipo_destinatario'],$_POST['tipo_operacao'],
     $_POST['data_importacao'],$_POST['data_emissao'],$_POST['numero_nf']));
     if($sql->rowCount() > 0){
        $row = $sql->fetchAll(PDO::FETCH_ASSOC);
     }else{
        header("Location: ./index.php");
        die();
    }
    return $sql;
   
}else{
    header("Location: ./index.php");
    die();
}


?>