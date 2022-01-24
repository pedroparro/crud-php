<?php 
include("./config.php");

    extract($_POST);
    if(isset($_POST['embarcador']) && isset($_POST['transportadora']) 
    && isset($_POST['statu']) && isset($_POST['inconsistencia'])
    && isset($_POST['destinatario_cnpj']) && isset($_POST['destinatario_razao'])
    && isset($_POST['tipo_destinatario']) && isset($_POST['tipo_operacao'])
    && isset($_POST['data_importacao']) && isset($_POST['data_emissao'])
    && isset($_POST['numero_nf'])){
        $id = $_GET['id'];
        $embarcador = $_POST['embarcador'];
        $transportadora = $_POST['transportadora'];
        $statu = $_POST['statu'];
        $inconsistencia = $_POST['inconsistencia'];
        $destinatario_cnpj = $_POST['destinatario_cnpj'];
        $destinatario_razao = $_POST['destinatario_razao'];
        $tipo_destinatario = $_POST['tipo_destinatario'];
        $tipo_operacao = $_POST['tipo_operacao'];
        $data_importacao = $_POST['data_importacao'];
        $data_emissao = $_POST['data_emissao'];
        $numero_nf = $_POST['numero_nf'];

        global $pdo;
        $sql = $pdo->prepare("UPDATE crud_php SET embarcador='$embarcador',
        transportadora='$transportadora',statu='$statu',inconsistencia='$inconsistencia',
        destinatario_cnpj='$destinatario_cnpj',destinatario_razao='$destinatario_razao',
        tipo_destinatario='$tipo_destinatario', tipo_operacao='$tipo_operacao',
        data_importacao='$data_importacao',data_emissao='$data_emissao',numero_nf='$numero_nf' WHERE `id` = '$id'");
        $sql->execute();

        header("Location: ./index.php?msg=Atualizado com sucesso");
        die();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
 
    <!--section-edit-->
    <section class="section-edit" id="section-edit">
        <h2>Editar Formulário</h2>
            <!--PHP-GET-->
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = $pdo->prepare("SELECT * FROM `crud_php` WHERE id='$id'");
                    $sql->execute();
                    $rows = $sql->fetch();
                }
            ?>
             <!--formulario-edit-->
            <div class="formulario-edit">
                <!--FORM-->
                <form action="./update.php?id=<?php echo $id; ?>" method="post">
        
    <!--MSG------------------------------------------------------------------------------------------------>
    <!--PHP-->  <?php if(isset($_GET['msg'])) { ?>
                    <div class="alert_success_edit" id="alert_success_edit">
    <!--PHP-->  <?php echo $_GET['msg']; ?>
                    </div>
    <!--PHP-->  <?php } ?>
                    <input type="hidden" name="id">
                    <!--embarcador-->
                    <div class="form-edit">
                        <label for="embarcador">Embarcador</label>
                        <input type="text" value="<?php echo $rows['embarcador'];?>" name="embarcador">
                    </div>

                    <!--transportadora-->
                    <div class="form-edit">
                        <label for="transportadora">Transportadora</label>
                        <input type="text" value="<?php echo $rows['transportadora']; ?>" name="transportadora">
                    </div>

                    <!--status-->
                    <div class="form-edit">
                        <label for="status">Status</label>
                        <input type="text" value="<?php echo $rows['statu']; ?>" name="statu">
                    </div>

                    <!--inconsistencia-->
                    <div class="form-edit">
                        <label for="inconsistencia">Inconsistência</label>
                        <input type="text" value="<?php echo $rows['inconsistencia']; ?>" name="inconsistencia">
                    </div>

                    <!--destinatario_cnpj-->
                    <div class="form-edit">
                        <label for="destinatario_cnpj">Destinatario CNPJ</label>
                        <input type="text" value="<?php echo $rows['destinatario_cnpj']; ?>" name="destinatario_cnpj">
                    </div>

                    <!--destinatario_razao-->
                    <div class="form-edit">
                        <label for="destinatario_razao">Destinatário Razão</label>
                        <input type="text" value="<?php echo $rows['destinatario_razao']; ?>" name="destinatario_razao">
                    </div>

                    <!--tipo_destinatario-->
                    <div class="form-edit">
                        <label for="tipo_destinatario">Tipo Destinatário</label>
                        <input type="text" value="<?php echo $rows['tipo_destinatario']; ?>" name="tipo_destinatario">
                    </div>

                    <!--tipo_operacao-->
                    <div class="form-edit">
                        <label for="tipo_operacao">Tipo Operação</label>
                        <input type="text" value="<?php echo $rows['tipo_operacao']; ?>" name="tipo_operacao">
                    </div>

                    <!--data_importacao-->
                    <div class="form-edit">
                        <label for="data_importacao">Data Importacao</label>
                        <input type="text" value="<?php echo $rows['data_importacao']; ?>" name="data_importacao">
                    </div>

                    <!--data_emissao-->
                    <div class="form-edit">
                        <label for="data_emissao">Data Emissão</label>
                        <input type="text" value="<?php echo $rows['data_emissao']; ?>" name="data_emissao">
                    </div>

                    <!--numero_nf-->
                    <div class="form-edit">
                        <label for="numero_nf">Número NF</label>
                        <input type="text" value="<?php echo $rows['numero_nf']; ?>" name="numero_nf">
                    </div>
                    <!--button-->
                    <button type="submit" name="submit-edit" id="submit-edit">Cadastrar</button>
                    <button id="btn-voltar"><a href="./index.php">Voltar</a></button>
                </form>
            </div>
    </section>
</body>
</html>