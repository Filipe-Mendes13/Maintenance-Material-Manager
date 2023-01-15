<?php


///////////////////////////////////////////////////////////////////////////////////////////////////
//                              
//     consulta dados ao banco de dados  servidor externo sql utilizando php metodo get
//     Cliente : Fiat SCA.
//     Programador Filipe Mendes Souza
//     modificado: 24/10/2021
//     status funcionando
///////////////////////////////////////////////////////////////////////////////////////////////////

ini_set('display_errors', 0 );
error_reporting(0);



require_once('conexao.php');
$valor1 = $_GET["valor1"]; # normal


$sql = mysqli_query($con,"SELECT `Ordem`, `Normalização`, `Descrição`, `QntMinima`, `QntMaxima`, `Saldo`, `CustoUnit`, `IDIMG`, `MATERIALDE`, `Local de Utilização`, `Nome`, `Registro`, `DataEnt`, `DataRetirada` FROM `Almoxarifado` WHERE `Normalização`= '$valor1';") or die('Erro');



while($rows=mysqli_fetch_assoc($sql)){
	echo $rows['Ordem'];	
	echo "|";
	echo $rows['Normalização'];
	echo "|";
	echo $rows['Descrição'];
	echo "|";
	echo $rows['QntMinima'];
	echo "|";
	echo $rows['QntMaxima'];
	echo "|";
	echo $rows['Saldo'];
	echo "|";
	echo $rows['CustoUnit'];
	echo "|";
	echo $rows['IDIMG'];
	echo "|";
	echo $rows['Box/Anexo'];
	echo "|";
	echo $rows['Local de Utilização'];
	echo "|";
	echo $rows['Nome'];
	echo "|";
	echo $rows['Registro'];
	echo "|";
	echo $rows['DataEnt'];
	echo "|";
	echo $rows['DataRetirada'];
	echo "|";
	echo $rows['MATERIALDE'];
	echo "|";
		}
mysqli_query($con,$sql);


$con->close();
?>