<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de IMC</title>
</head>
<body>
<form action="calculo_imc.php" method="GET"> 
        <p><legend> Digite seu peso e altura para calcular o IMC</legend></p> 
        PESO: <input type="number" name="peso"><br><br>
        ALTURA: <input type="text" name="altura"><br><br>
        <input type="submit" name="Calcular" value="Calcular"><br><br>
<?php
$peso = $_GET['peso'];
$atura = $_GET['altura'];
$imc = $peso / ($altura * $altura);

    if ($imc < 17){
	echo "Resultado: O seu IMC é $imc<br>";
        echo  "Situação: Muito abaixo do peso<br>";
    }
    else if ($imc >=17 && $imc <=18.49){
	    echo "Resultado: O seu IMC é $imc<br>";
        echo  "Situação: Abaixo do peso<br>";
    }
    else if ($imc >=18.5 && $imc <=24.99){
        echo "Resultado: O seu IMC é $imc<br>";
	    echo "Situação: Peso normal<br>";
    }
    else if ($imc >=25 && $imc <=29.99){
	    echo "Resultado: O seu IMC é $imc<br>";
        echo "Situação: Acima do peso<br>";
    }
    if ($imc >=30 && $imc <=34.99){
	    echo "Resultado: O seu IMC é $imc<br>";
        echo "Situação: Obesidade I<br>";
    }
    else if ($imc >=35 && $imc <=39.99 ){
	    echo "Resultado: O seu IMC é $imc<br>";
        echo "Situação: Obesidade II (severa)<br>";
    }
     else{
        $imc >40;
	    echo "Resultado: O seu IMC é $imc<br>";
        echo "Obesidade III (mórbida)<br>";
    }
        echo "<a href='calculo_imc.html'>Voltar</a>"; 
?>
</form>
</body>
</html>
