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
    <h2>Preencha o Formulário</h2>
    <!--section-form-->
    <section class="section-form" id="section-form">
            <div class="formulario">
                <!--FORM-->
                <form action="./insert.php" method="post">
    <!--ERROR---------------------------------------------------------------------------------------------->
        <!--PHP-->  <?php if(isset($_GET['error'])) { ?>
                        <div class="alert" id="alert">
        <!--PHP-->  <?php echo $_GET['error']; ?>
                        </div>
        <!--PHP-->  <?php } ?>
    <!--MSG------------------------------------------------------------------------------------------------>
        <!--PHP-->  <?php if(isset($_GET['msg'])) { ?>
                        <div class="alert_success" id="alert_success">
        <!--PHP-->  <?php echo $_GET['msg']; ?>
                        </div>
        <!--PHP-->  <?php } ?>
                    <input type="hidden" name="id">
                    <!--embarcador-->
                    <div class="form">
                        <label for="embarcador">Embarcador</label>
                        <input type="text" name="embarcador">
                    </div>

                    <!--transportadora-->
                    <div class="form">
                        <label for="transportadora">Transportadora</label>
                        <input type="text" name="transportadora">
                    </div>

                    <!--status-->
                    <div class="form">
                        <label for="status">Status</label>
                        <input type="text" name="statu">
                    </div>

                    <!--inconsistencia-->
                    <div class="form">
                        <label for="inconsistencia">Inconsistência</label>
                        <input type="text" name="inconsistencia">
                    </div>

                    <!--destinatario_cnpj-->
                    <div class="form">
                        <label for="destinatario_cnpj">Destinatario CNPJ</label>
                        <input type="text" name="destinatario_cnpj">
                    </div>

                    <!--destinatario_razao-->
                    <div class="form">
                        <label for="destinatario_razao">Destinatário Razão</label>
                        <input type="text" name="destinatario_razao">
                    </div>

                    <!--tipo_destinatario-->
                    <div class="form">
                        <label for="tipo_destinatario">Tipo Destinatário</label>
                        <input type="text" name="tipo_destinatario">
                    </div>

                    <!--tipo_operacao-->
                    <div class="form">
                        <label for="tipo_operacao">Tipo Operação</label>
                        <input type="text" name="tipo_operacao">
                    </div>

                    <!--data_importacao-->
                    <div class="form">
                        <label for="data_importacao">Data Importação</label>
                        <input type="text" name="data_importacao">
                    </div>

                    <!--data_emissao-->
                    <div class="form">
                        <label for="data_emissao">Data Emissão</label>
                        <input type="text" name="data_emissao">
                    </div>

                    <!--numero_nf-->
                    <div class="form">
                        <label for="numero_nf">Número NF</label>
                        <input type="text" name="numero_nf">
                    </div>
                    <!--button-->
                    <button type="submit" name="submit" id="submit">Cadastrar</button>
                    <button id="btn-voltar"><a href="./index.php">Resetar</a></button>
                </form>
            </div>
    </section>
<!------------------------------------------------------------------------------------------------------------------->    
    <!--section-table-->
    <section class="section-table" id="section-table">
    <h2>Visualizar Tabela</h2>
        <!--div-table-->
        <div class="div-table">
            <!--table-->
            <table class="table">
             
                <!--thead-->
                <thead id="thead">
                    <tr>
                        <td>ID</td>
                        <td>Embarcador</td>
                        <td>Transportadora</td>
                        <td>Status</td>
                        <td>Inconsistência</td>
                        <td>Destinatário CNPJ</td>
                        <td>Destinatário Razão</td>
                        <td>Tipo Destinatário</td>
                        <td>Tipo Operação</td>
                        <td>Data Importação</td>
                        <td>Data Emissão</td>
                        <td>Nota Fiscal</td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>
                </thead>
                <!--tbody-->
                <tbody id="tbody">
                <!--PHP-->
                <?php
                    include("./config.php");
                    global $pdo;
                    $sql = $pdo->prepare("SELECT * FROM `crud_php` WHERE `id` ORDER BY `id`");
                    $sql->execute();

                    while($rows = $sql->fetch(PDO::FETCH_ASSOC)){

                ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['embarcador']; ?></td>
                        <td><?php echo $rows['transportadora']; ?></td>
                        <td><?php echo $rows['statu']; ?></td>
                        <td><?php echo $rows['inconsistencia']; ?></td>
                        <td><?php echo $rows['destinatario_cnpj']; ?></td>
                        <td><?php echo $rows['destinatario_razao']; ?></td>
                        <td><?php echo $rows['tipo_destinatario']; ?></td>
                        <td><?php echo $rows['tipo_operacao']; ?></td>
                        <td><?php echo $rows['data_importacao']; ?></td>
                        <td><?php echo $rows['data_emissao']; ?></td>
                        <td><?php echo $rows['numero_nf']; ?></td>
                        <td><a href="./update.php?id=<?php echo $rows['id']; ?>">Editar</a></td>
                        <td><a href="./delete.php?id=<?php echo $rows['id']; ?>">Excluir</a></td>
                    </tr>
                    <!--PHP - END WHILE-->
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section> 
</body>
</html>