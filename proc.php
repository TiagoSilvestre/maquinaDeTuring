<?php
error_reporting( E_ALL ^E_NOTICE );

//Definiçao de variaveis
$tituloTabela = $_POST['tituloDaTabela'];
$qtd = $_POST['qtdEstados'];
$tabela = array();

for($i = 0; $i <= $qtd; $i++){

    foreach ($_POST as $key => $val){
        $explode = explode(':', $key);

        if($explode[1] == $i AND $explode[2] == '*'){
            $tabela[$i.':*'] .= $val.':';
        }

        if($explode[1] == $i AND $explode[2] === '-'){
            $tabela[$i.':-'] .= $val.':';
        }

        if($explode[1] == $i AND $explode[2] === 'a'){
            $tabela[$i.':a'] .= $val.':';
        }

        if($explode[1] == $i AND $explode[2] === 'b'){
            $tabela[$i.':b'] .= $val.':';
        }

        if($explode[1] == $i AND $explode[2] === 'ini'){
            $tabela[$i.':ini'] .= $val.':';
        }
    }
}

$jsons = json_encode($tabela);

try{
    $dbh = new PDO('mysql:host=localhost;dbname=turing', 'root', '');
    $sql = 'INSERT INTO tabelas(titulo, conteudo) VALUES (:titulo, :conteudo)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':titulo', $tituloTabela, PDO::PARAM_STR);
    $stmt->bindValue(':conteudo', $jsons, PDO::PARAM_STR);
    $stmt->execute();

}catch(Exception $e){
    echo $e->getMessage();
}

echo "<h1>Cadastrado com sucesso!</h1><br><a href='index.php'>Voltar</a>";