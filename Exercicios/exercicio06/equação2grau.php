<?php
    $aeq = $_POST['aeq'];
    $beq = $_POST['beq'];
    $ceq = $_POST['ceq'];

    $delta = $beq * $beq - 4 * $aeq * $ceq;
    if($delta > 0){
        $primeiraRaiz = (-$beq + sqrt($delta)) / (2 * $aeq);
        $segundaRaiz = (-$beq - sqrt($delta)) / (2 * $aeq);
    }else if ($delta == 0){
        $primeiraRaiz = $segundaRaiz = -($beq) / (2 * $aeq);
    }
    else{
        $real = -$beq / (2 * $aeq);
        $res =  sqrt(-$delta) / (2 * $aeq);

        $primeiraRaiz =  $real. ' ' .$res;
        $segundaRaiz =   $real. ' '.$res;
    }
    
    echo "Primeira raiz:" .$primeiraRaiz ."<br>";
    echo "Segunda raiz: " .$segundaRaiz;
?>