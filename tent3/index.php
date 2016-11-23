<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<!--    <h2><u>Tabela de Ações</u></h2>-->
<div class="container">
    <div class="col-md-12">
    <div class="page-header margin-none">
        <h2>Tabela de Ações</h2>
    </div>
        <p><i><small><b>Símbolos:</b>&nbsp; &nbsp; &nbsp; * &nbsp; <u>Asterisco</u> &nbsp; &nbsp; &nbsp; - &nbsp; <u>Vazio</u> &nbsp; &nbsp; &nbsp; ini &nbsp;<u>Inicial</u> <br><b>Campos:</b>&nbsp; &nbsp; &nbsp; (Escreve, Estado, Direção)<br><b>Estado de Parada:</b>&nbsp; &nbsp; &nbsp; F </small></i></p>

    <button id="butao" style="width: 150px; height:25px;">Adicionar estado</button><br><br>

    <form method="post" action="proc.php">

        <div class="table-responsive" >

        <table class="table table-striped table-hover">
            <tr>
                <th>Estado</th>
                <th>*</th>
                <th>-</th>
                <th>a</th>
                <th>b</th>
                <th>ini</th>
            </tr>

            <td>0</td>

            <td>(
                <select name="escreve:0:*">
                    <option></option>
                    <option value="*">*</option>
                    <option value="-">-</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="ini">ini</option>
                </select>,

                <input type="text" class="inpEst" name="proxEstado:0:*">,

                <select name="direcao:0:*">
                    <option></option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                )
            </td>

            <td>(
                <select name="escreve:0:-">
                    <option></option>
                    <option value="*">*</option>
                    <option value="-">-</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="ini">ini</option>
                </select>,

                <input type="text" class="inpEst" name="proxEstado:0:-">,

                <select name="direcao:0:-">
                    <option></option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                )
            </td>

            <td>(
                <select name="escreve:0:a">
                    <option></option>
                    <option value="*">*</option>
                    <option value="-">-</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="ini">ini</option>
                </select>,

                <input type="text" class="inpEst" name="proxEstado:0:a">,

                <select name="direcao:0:a">
                    <option></option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                )
            </td>


            <td>(
                <select name="escreve:0:b">
                    <option></option>
                    <option value="*">*</option>
                    <option value="-">-</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="ini">ini</option>
                </select>,

                <input type="text" class="inpEst" name="proxEstado:0:b">,

                <select name="direcao:0:b">
                    <option></option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                )
            </td>


            <td>(
                <select name="escreve:0:ini">
                    <option></option>
                    <option value="*">*</option>
                    <option value="-">-</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="ini">ini</option>
                </select>,

                <input type="text" class="inpEst" name="proxEstado:0:ini">,

                <select name="direcao:0:ini">
                    <option></option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
                )
            </td>
        </table><br>

        </div>


        <input type="hidden" name="qtdEstados" value="0" id="qtdEstados">
        Título da Tabela: <input type="text" name="tituloDaTabela" style="width: 280px;" required><br><br>
        <input type="submit" value="Salvar" style="width: 80px;">
    </form>

<br><br>
        <hr>

<div class="page-header margin-none">
    <h2>Fita</h2>
</div>

<?php
$con = new PDO('mysql:host=localhost;dbname=turing', 'root', '');
$sql = "SELECT * FROM tabelas";
$consulta = $con->prepare($sql);
$consulta->execute();
$dadosTabela = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>


<form method="post" action="fita.php">
    <label>Valor 1:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="valor1" style="width:50px" required>
    <br><br>
    <label>Operação:</label>
    <select name="operacao" id="op" required>
        <?php
        foreach ($dadosTabela as $l){
            echo "<option value='". $l['conteudo'] ."'>" . $l['titulo'] . '</option>';
        }
        ?>
    </select>
    <br><br>
    <label>Valor 2:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="valor2" style="width:50px" required>
    <br><br>
    <input type="submit" value="Ver Fita" style="width: 80px;margin-bottom: 90px;">
</form>


</div></div>
<script src="js/index.js"></script>
</body>
</html>