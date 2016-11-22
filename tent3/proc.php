<?php
//echo "<pre>";
//print_r($_POST);
error_reporting( E_ALL ^E_NOTICE );
echo '<pre>';
print_r($_POST);

//Definiçao de variaveis
$qtd = $_POST['qtdEstados'];
$tabela = array();

for($i = 0; $i <= $qtd; $i++){

    foreach ($_POST as $key => $val){
        $explode = explode(':', $key);

        if($explode[1] == $i AND $explode[2] == '*'){
            $tabela[$i.':*'] .= $val.':';
        }

        if($explode[1] == $i AND $explode[2] === 'vazio'){
            $tabela[$i.':vazio'] .= $val.':';
//            if($i == 0){
//            echo "Que porra ta dando aqui<br>";
//            var_dump($tabela[$i.':vazio']);
//            echo "Que porra ta dando aqui<br><br><br><br>";
           // }
        }

        if($explode[1] == $i AND $explode[2] === 'fim'){
            $tabela[$i.':fim'] .= $val.':';
        }

    }

}

echo "AQUIII EH A TABELA TODAA<br><br>";
echo '<pre>';
print_r($tabela);
//q0,* = (vazio, 2, D)

















//foreach ($_POST as $k => $v) {
//    if ($v != ''){
//
//        echo $k .' |||||||||| '. $v .' ||||||||||| valor:  '. '<br>';
//
//        $explodiu = explode(':',$k);
//        echo $explodiu[1].' '.$explodiu[2].'<br>';
//        //var_dump($explodiu);
//
//        if($explodiu[1] == $i AND $explodiu[2] == '*'){
//            $chave = $i.'*';
//            $tabela[$chave] = $v;
//            //echo '***************** valor do 0* => ' . $v.'<br><br><br>';
//            //var_dump($v);
//        }
//        if($explodiu[1] == $i AND $explodiu[2] == 'vazio'){
//            $chave = $i.'vazio';
//            $tabela[$chave] = $v;
//
//        }
//
//
//        //$i++;
//    }
//}
//
//
//echo '<br><br><br><br>O valor todal de i é: '.$i.'<br><br>';
