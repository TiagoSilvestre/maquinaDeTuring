<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    input{
      width:20px;
    }
  </style>
</head>
<body>
<h2><u>Tabela de Ações</u></h2>
<small>Os estados que a máquina pode assumir podem ser vistos como variaveis auxiliares para a tomada de decisões.</small>
<br><br>

<button id="butao" style="display: block; width: 150px; height:25px;">Adicionar estado</button><br>

<form method="post" action="proc.php">

  <table border="1">
    <tr>
      <th>Estado</th>
      <th>*</th>
      <th>-</th>
      <th>ini</th>
    </tr>

    <td>0</td>

    <td>(
      <select name="escreve:0:*">
        <option></option>
        <option value="*">*</option>
        <option value="-">-</option>
        <option value="ini">ini</option>
        <option value="fim">F</option>
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
        <option value="ini">&rarr;</option>
        <option value="fim">F</option>
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
      <select name="escreve:0:ini">
        <option></option>
        <option value="*">*</option>
        <option value="-">-</option>
        <option value="ini">&rarr;</option>
        <option value="fim">F</option>
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

  <input type="hidden" name="qtdEstados" value="0" id="qtdEstados">
  Título da Tabela: <input type="text" name="tituloDaTabela" style="width: 280px;"><br><br>
  <input type="submit" value="Salvar" style="width: 80px;">
</form>

<br><br><br>
****************************************************************
<h2><u>Fita</u></h2>

<?php
$con = new PDO('mysql:host=localhost;dbname=turing', 'root', '');
$sql = "SELECT * FROM tabelas";
$consulta = $con->prepare($sql);
$consulta->execute();
$dadosTabela = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>


<form method="post" action="fita.php">
    <label>Valor 1:</label>
    <input type="text" name="valor1" required>

    <label>Operação:</label>
    <select name="operacao" id="op" required>
        <?php
        foreach ($dadosTabela as $l){
            echo "<option value='". $l['conteudo'] ."'>" . $l['titulo'] . '</option>';
        }
        ?>
    </select>

  <label>Valor 2:</label>
  <input type="text" name="valor2" required>
  <br><br>
  <input type="submit" value="Ver Fita" style="width: 80px;">
</form>

<script src="js/index.js"></script>
</body>
</html>