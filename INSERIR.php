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
                                


ini_set('display_errors', 0 );
error_reporting(0);

require_once('conexao.php');

$cons =mysqli_query($con,"SELECT `Saldo`FROM `Almoxarifado` WHERE `Normalização`= '$valor13';") or die('Erro');

$cons = mysqli_fetch_array($cons);

$comp = $cons ['Saldo'];


$sql = "UPDATE `Almoxarifado` SET `Ordem`='$valor1',`Saldo`=$comp + $valor2,`Nome`='$valor3',`Registro`='$valor4',`DataEnt`='$valor5',`MATERIALDE`='$valor6',`HoraSalva` = '$valor7' WHERE `Normalização` = '$valor8';";

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