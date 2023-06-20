<?php 
//require_once('Pilha.php');
//variavel 
//instamciar uma pilha
$pilha= new Pilha();

$pegar_nome1="num";
$pegar_nome2="operador";
$pegar_valor1="";
$pegar_valor2="";
$resul="";
//se exister poust numero   
if(isset($_POST['num'])){
$num=$_POST['input'].$_POST['num'];
//txupetar elemento na pilha 
$pilha->push($num);
}
else{
	//caso não tiver o post 
    $num="";
}
//se exister o operador
if(isset($_POST['operador'])){
$pegar_valor1=$_POST['input'];
setcookie($pegar_nome1,$pegar_valor1, time()+(86400*30), "/");

//txupetar elemento na pilha 


$pegar_valor2=$_POST['operador'];
setcookie($pegar_nome2,$pegar_valor2, time()+(86400*30), "/");
$num=""; 
}
//pegar o valor limpar
if(isset($_POST['clear'])){
	//limpar as operaçõess
	$num="";
	}
// if(isset($_POST['num'])){
// 	$num=$_POST['input'].$_POST['num'];
// 	}

//se existir post igual 
if(isset($_POST['igual'])){
    $num=$_POST['input'];
    switch($_COOKIE['operador']){

       case "+":
         $resultado=$_COOKIE['num'] + $num;
		  $pilha->push($resultado);
// echo "<p> resultado hcjkhhschskhh $resultado </p>";
         break;
        
    
         case "-":
            $resultado=$_COOKIE['num'] - $num;
			$pilha->push($resultado);
            break;
            case "*":
                $resultado=$_COOKIE['num'] * $num;
				$pilha->push($resultado);
                break;

                case "/":
                    $resultado=$_COOKIE['num'] / $num;
					$pilha->push($resultado);
                    break; 

                    case "%":
                        $resultado=$_COOKIE['num'] % $num;
						$pilha->push($resultado);
                        break;

                    
    }
   $num=$resultado;
   //desempilhar
   $num=$pilha->pop();
}





?>

<html>

<head>

	<link href="images/favicon2.png" rel="icon">
    <link href="images/favicon2.png" rel="apple-touch-icon">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<title>Simple Javascript Calculator</title>
	<style>
		body{
			background-color: rgba(156, 153, 153, 0.87);
		}
      .cal{
		margin: auto;
		background-color: black;
		border: 2px solid whitesmoke;
		width: 29%;
		height: 550px; 
		border-radius: 20px;
		box-shadow: 10px 10px 40px;

		 

	  }
	  .resultado{
     background-color:  black;
	 border:1px solid gray;
	 height: 98px;
	 width: 98.2%;
	 font-size: 70px;
	 color: white;
	 font-weight: 480;

	 
	  }
	  .number:hover{
		background-color: rgb(225, 228, 231);
		color: whitesmoke;
	  }
	  .number{
    padding: 30px 35px;
	border-radius: 50px;
	font-weight: 600;
	font-size: x-large;
	  }
	  .operator{
		padding: 30px 40px;
		border-radius: 50px;
		font-weight: 600;
	font-size: x-large;
	background-color: rgb(23, 224, 224);
	  }
	  .operator:hover{
		background-color: rgba(241, 185, 81, 0.842);
		color: whitesmoke;
	  }
	  
	  .Clear{
		padding: 30px 35px;
	border-radius: 50px;
	font-weight: 600;
	font-size: x-large;
	background-color: rgb(23, 224, 224);
	  }

	  .equal{
		padding: 30px 35px;
	border-radius: 50px;
	font-weight: 600;
	font-size: x-large;
	background-color: green
	  }
	  .equal:hover{
		background-color:rgba(151, 62, 62, 0.781);
		color: whitesmoke;
	  }
	   

	</style>
</head>

<body>
	
			<div
			class="cal">
			<form action="" method="post">

				<input type="text" class="resultado" name="input" value='<?php echo @$num ?>'><br><br>

			
				
				
				<input  type="submit" class="number" value="7" name="num" >
				<input  type="submit" class="number" value="8"  name="num" >
				<input  type="submit" class="number" value="9"  name="num" >
				<input type="submit" class="operator" value="+" name="operador" > <br> <br> 
				<input  type="submit" class="number" value="4"  name="num">
				<input  type="submit" class="number" value="5"  name="num" >
				<input type="submit" class="number" value="6"  name="num" >
				<input type="submit" class="operator" value="-" name="operador" > <br> <br>
				<input  type="submit" class="number" value="1"  name="num" >
				<input  type="submit" class="number" value="2"  name="num" >
				<input  type="submit" class="number" value="3"  name="num" >
				<input type="submit" class="operator" value="*" name="operador"> <br> <br>

				<input  type="submit" class="operator" value="c"  name="Clear" >
				<input type="submit" class="number" value="0"  name="num">
				<input  type="submit"class="equal" value="=" name="igual" id="=">
				<input type="submit" class="operator" nome="operador" value="/">
				
				</form>
			</div>
				
				
			

		
			
		
	

	
</body>

</html>