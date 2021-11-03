<?php
    $change = $_GET['escolha'];
    if($change == 'matematica'){
        $a = 81;
        $b = 30;
        $c = 20;
        echo "Calcula a raiz com a função sqrt: " .sqrt($a) ."<br>";
        echo "Calcula o seno com a função sin: "  .sin($b) ."<br>";
        echo "Calcula o coseno com a funçao cos: " .cos($c);
    }else if($change == 'string'){
        // bin2hex
        $string = bin2hex("Oi tudo bem?");
        echo "É possivel transformar strings para a base hexadecimal usando o bin2hex(): " .($string) ."<br>";
        // explode
        echo "Um exemplo usando a função explode(): " ."<br>";
        $locais = "Belo Horizonte,Minas Gerais,Brasil";
        $varExplode = explode(",", $locais);
        foreach($varExplode as $local){
            echo $local ."<br>";
        }
        // strlen
        echo "Atravez da função strlen() podemos saber a quantidade de letras de uma palavra." ."<br>";
        echo "Por exemplo: Paralelepipedo = ".strlen("Paralelepipedo");  
    }else if($change == 'array'){
        $marcaCarros = array('BMW,FIAT,FORD,CHEVROLET,TOYOTA');
        print_r($marcaCarros); //para podermos mostrar esses elementos dentro do array usamos o print_r()
        echo "<br>";

        $alimentos = array('Banana,Pepino');
        $verduraouFruta = array('Fruta,Verdura');
        $combine = array_combine($alimentos, $verduraouFruta);
        print_r($combine);

        /* Um outro exemplo comentado
        $BD = array('Maria,Helena,Helio,Joaquina,Camila,Willian,Vitor,João');
        if(in_array('Willian,Helio,Vitor')){ // a função in_array() verifica se existe um ou determinados valores dentro de um array
            echo "Fazem parte do CEFET-MG";
        } */  
    }else if($change == 'data'){
        date_default_timezone_set('America/Sao_Paulo'); // Definindo a zona de tempo para o Brasil
        $hoje = date("F j, Y, g:i a");
        echo $hoje;
    } 
?>