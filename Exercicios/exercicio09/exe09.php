<?php
    $encontrou = 0;
    $arquivo = file('exe09.txt');
    $string = $_POST['string'];
    foreach($arquivo as $linha){
        if(strpos($linha, $string) != false){
            echo strpos($linha, $string);
            $encontrou = 1;
        }
    }
    if($encontrou == 0){
        echo "O arquivo não apresenta a string pesquisada.";
    }
?>  
