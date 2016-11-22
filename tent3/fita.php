<br>
<h2><u>Executando fita</u></h2>
<h4>* Para executar as ações passo a passo clique em Proc</h4>
<br>
<style>
div{
    border: 1px solid;
    margin: 2px 0px 2px 0px;
    width: 32px;
    text-align: center;
    height: 23px;
    display: block;
    float: left;
}
.current{
    background-color: yellow;
}
</style>

<?php
    for ($i=0; $i<38;$i++){
        echo "<div class='celula a".$i."'>-</div>";
    }
?>

<br><br><br>
<button onclick="proc()">Proc</button>

<script src="js/jquery-3.1.1.min.js"></script>

<script type="text/javascript">

    var result = '<?=$_POST['operacao']?>';
    var tab = JSON.parse(result);
    console.log(tab);
    //Estado Inicial
    $('.a0').text('ini')

    //Valores do Post
    var num1 = <?php echo $_POST['valor1']; ?>;
    var num2 = <?php echo $_POST['valor2']; ?>;

    //Imprime Valores na Fita
    for (i = 0; i < 38; i++) {
        if(i <= num1 && i != 0){
            $('.a'+i).text('*');
        }
        if(i >= num1+2 && i <= num1+num2+1){
            $('.a'+i).text('*');
        }
    }

    function proc(){
        if(proc.first == 0){
            $('.a0').addClass('current');
            proc.first++;
            return;
        }
        cabecote();
    }

    proc.first = 0;
/***************   REGISTRADOR    **************/

    function registrador(estado) {
        registrador.estado = estado;
    }
    registrador.estado = 0;

/***************   CABEÇOTE    **************/

    function cabecote(){
        var atual = $('.current').text();

        var result = '<?=$_POST['operacao']?>';
        var tab = JSON.parse(result);
       // console.log(tab);

        /**************** INICIAL ******************/

        if(atual == 'ini'){
            if(registrador.estado == "F"){
                alert("Posição final, A maquina parou!");
                return;
            }
            var todo = tab[registrador.estado +':'+ atual];
            var parte = todo.split(":");

            if(parte[0] ==  "") {
                alert('Maquina parou!');
            }else{
                $('.current').text(parte[0]);
            }

            registrador.estado = parte[1];
            console.log('Estado: '+registrador.estado);

            var cur = $('.current');
            if(parte[2] == 'D'){
                $('.current').next().addClass('current');
                cur.removeClass('current');
            }else if(parte[2] == 'E'){
                $('.current').prev().addClass('current');
                cur.removeClass('current');
            }
        }

        /**************** ASTERISCUUU ******************/

        if(atual == '*') {
            if(registrador.estado == "F"){
                alert("Posição final, A maquina parou!");
                return;
            }
            var todo = tab[registrador.estado + ':' + atual];
            console.log(todo);
            var parte = todo.split(":");

            if (parte[0] == "") {
                alert('Maquina parou!');
            } else {
                $('.current').text(parte[0]);
            }

            registrador.estado = parte[1];
            console.log('Estado: ' + registrador.estado);

            var cur = $('.current');
            if (parte[2] == 'D') {
                $('.current').next().addClass('current');
                cur.removeClass('current');
            }else if(parte[2] == 'E'){
                $('.current').prev().addClass('current');
                cur.removeClass('current');
            }
        }

        /**************** VAZIOO ******************/

        if(atual == "-") {
            if(registrador.estado == "F"){
                alert("Posição final, A maquina parou!");
                return;
            }

            var todo = tab[registrador.estado + ':' + atual];
            var parte = todo.split(":");

            if (parte[0] == "") {
                alert('Maquina parou!');
            } else {
                $('.current').text(parte[0]);
            }

            registrador.estado = parte[1];
            console.log('Estado: ' + registrador.estado);

            var cur = $('.current');
            if (parte[2] == 'D') {
                $('.current').next().addClass('current');
                cur.removeClass('current');
            }
            if(parte[2] == 'E'){
                $('.current').prev().addClass('current');
                cur.removeClass('current');
            }
        }


    }

</script>