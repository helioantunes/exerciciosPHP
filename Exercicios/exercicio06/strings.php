<?php
    $str = $_POST['palavra'];
    $out1 = 'Comprimento da frase: ' .strlen($str);
    $var = $_POST['caracter'];
    $out2 = 'Quantas vezes aparece o termo '. $var. ': ' .substr_count($str, $var);
    echo $out1 .'<br>' .$out2;
    $abrirArquivo = fopen('arquivo.txt','w');
    fwrite($abrirArquivo, $out1 ."\n");
    fwrite($abrirArquivo, $out2);
    fclose($abrirArquivo);
?>