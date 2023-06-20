<?php 
//variavel 
$pegar_nome1="num";
$pegar_nome2="op";
$pegar_valor1="";
$pegar_valor2="";
//se exister poust numero   
if(isset($_POST['num'])){
$num=$_POST['input'].$_POST['num'];
}
else{
    $num="";
}
if(isset($_POST['operador'])){
$pegar_valor1=$_POST['operador'];
setcookie($pegar_nome1,$pegar_valor1, time()+(86400*30), "/");

$pegar_valor2=$_POST['operador'];
setcookie($pegar_nome2,$pegar_valor2, time()+(86400*30), "/");
$num=""; 
}

if(isset($_POST['igual'])){
    $num=$_POST['input'];
    switch($_COOKIE['operador']){

       case "+":
         $resultado=$_COOKIE['num'] + $num;
         break;
        
    
         case "-":
            $resultado=$_COOKIE['num'] - $num;
            break;
            case "*":
                $resultado=$_COOKIE['num'] * $num;
                break;

                case "/":
                    $resultado=$_COOKIE['num'] / $num;
                    break; 

                    case "%":
                        $resultado=$_COOKIE['num'] % $num;
                        break;

                    
    }
    $num=$resultado;
}





?>