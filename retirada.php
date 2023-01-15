<?php
///////////////////////////////////////////////////////////////////////////////////////////////////
//                                
//     inserir dados ao banco de dados  servidor externo sql utilizando php metodo POST
//     Cliente : Fiat SCA.
//     Programador Filipe Mendes Souza
//     modificado: 23/10/2021
//     status funcionando
///////////////////////////////////////////////////////////////////////////////////////////////////

ini_set('default_charset','UTF-8');
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Sao_Paulo');

$valor1 = $_POST["valor1"]; # data de verificação do sistema
    $valor2 = $_POST["valor2"]; # hora de impostação dos dados 
        $valor3 = $_POST["valor3"]; # Identificação da linha atual
            $valor4 = $_POST["valor4"]; # Velocidade so Swivel
                $valor5 = $_POST["valor5"];
                    $valor6 = $_POST["valor6"];
                        $valor7 = $_POST["valor7"];
                            $valor8 = $_POST["valor8"];
                                $valor9 = $_POST["valor9"];
                                    $valor10 = $_POST["valor10"];
                                        $valor11 = $_POST["valor11"];
                                    $valor12 = $_POST["valor12"];
                                $valor13 = $_POST["valor13"];
                            $valor14 = $_POST["valor14"];
                        $valor15 = $_POST["valor15"];
                    $valor16 = $_POST["valor16"];
                $valor17 = $_POST["valor17"];
            $valor18 = $_POST["valor18"];
        $valor19 = $_POST["valor19"];
    $valor20 = $_POST["valor20"];
$valor21 = $_POST["valor21"];
	
		$valor22 = $_POST["valor22"];
			$valor23 = $_POST["valor23"];
				$valor24 = $_POST["valor24"];
					$valor25 = $_POST["valor25"];
						$valor26 = $_POST["valor26"];
							$valor27 = $_POST["valor27"];
								$valor28 = $_POST["valor28"];
									$valor29 = $_POST["valor29"];
										$valor30 = $_POST["valor30"];
									$valor31 = $_POST["valor31"];
								$valor32 = $_POST["valor32"];
							$valor33 = $_POST["valor33"];
						$valor34 = $_POST["valor34"];
					$valor35 = $_POST["valor35"];
				$valor36 = $_POST["valor36"];
			$valor37 = $_POST["valor37"];
		$valor38 = $_POST["valor38"];
	$valor39 = $_POST["valor39"];
		$valor40 = $_POST["valor40"];
			$valor41 = $_POST["valor41"];
				$valor42 = $_POST["valor42"];
					$valor43 = $_POST["valor43"];
						$valor44 = $_POST["valor44"];
							$valor45 = $_POST["valor45"];
								$valor46 = $_POST["valor46"];
									$valor47 = $_POST["valor47"];
										$valor48 = $_POST["valor48"];
											$valor49 = $_POST["valor49"];
												$valor50 = $_POST["valor50"];
											$valor51 = $_POST["valor51"];
										$valor52 = $_POST["valor52"];
									$valor53 = $_POST["valor53"];
								$valor54 = $_POST["valor54"];
							$valor55 = $_POST["valor55"];
						$valor56 = $_POST["valor56"];
					$valor57 = $_POST["valor57"];
				$valor58 = $_POST["valor58"];
			$valor59 = $_POST["valor59"];
		$valor60 = $_POST["valor60"];
	$valor61 = $_POST["valor61"];
	
		$valor62 = $_POST["valor62"];
			$valor63 = $_POST["valor63"];
				$valor64 = $_POST["valor64"];
					$valor65 = $_POST["valor65"];
						$valor66 = $_POST["valor66"];
							$valor67 = $_POST["valor67"];
								$valor68 = $_POST["valor68"];
									$valor69 = $_POST["valor69"];
	

#$data = $_POST["data"];
#$hora = $_POST["hora"];

$data = date('d-m-Y');
$hora = date('H:i:s');

ini_set('display_errors', 0 );
error_reporting(0);



require_once('conexao.php');

$cons =mysqli_query($con,"SELECT `Saldo` FROM `Almoxarifado` WHERE `Normalização`= '$valor8';") or die('Erro');

$cons = mysqli_fetch_array($cons);

$comp = $cons ['Saldo'];
echo $comp;

$sql = "UPDATE `Almoxarifado` SET `Ordem`='$valor1',`Saldo`=$comp - $valor2,`Nome`='$valor3',`Registro`='$valor4',`DataRetirada`='$valor5',`Local de Utilização`='$valor6',`HoraSalva` = '$valor7' WHERE `Normalização` = '$valor8';";
	


$result = mysqli_query($con,$sql);

if (!$result){
	
    echo("Ocorreu um erro ao salvar os dados");
	echo $result;
}
else{
echo ("Dados enviados com sucesso!");

}


//========================================================================================
$con->close();
?>