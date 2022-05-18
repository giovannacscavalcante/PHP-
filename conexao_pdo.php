<?php
//conexão
try 
{
	$pdo = new PDO ("mysql:dbname=crudpdo;host=localhost","root","");
}
catch (PDOException $e){
	echo "Erro com banco de dados: ".$e->getMessage();
}
catch(Exception $e)
{
	echo "Erro generico: ".$e->getMessage();
}

//INSERT
//1ª forma
$res = $pdo->prepare("insert into pessoa(nome,telefone,email)values(:n,:t,:e)");
$res->bindValue(":n","Gabriel");
$res->bindValue(":t","9966666666");
$res->bindValue(":e","gabs@gmail.com");
$res->execute();
////2ª forma 
//$pdo->query("insert into pessoa(nome,telefone,email)values('Mirian','0000000','teste@gmail.com')");

//-- DELETE
//1ª forma
//$res =$pdo-<query("delete from pessoa where id = '1'");
//2ª forma
// $cmd =$pdo->prepare("delete from pessoa where id = :id");
// $id=9;
// $cmd->bindValue(":id",$id);
// $cmd->execute();


//--UPDATE
//1ª forma
//$cmd=prompt de comando
//$cmd = $pdo->prepare("update pessoa set email = :e where id = :id");
// $cmd->bindValue(":e","kleber@gmail.com");
// $cmd->bindValue(":id",2);
// $cmd->execute();

//-- Select imprimindo na tela de navegação
//1ª forma "como array"
// $cmd= $pdo->prepare("select * from pessoa where id = :id");
// $cmd->bindValue(":id",2);
// $cmd->execute();
// $resultado = $cmd->fetch()
// print_r($resultado);

//print_r($resultado);
//2ª forma "visualmente mais bonito"
$cmd= $pdo->prepare("select * from pessoa where id = :id");
$cmd->bindValue(":id",2);
$cmd->bindValue(":id",10);
$cmd->execute();
$resultado = $cmd->fetch(PDO::FETCH_ASSOC); //pega os métodos e processa cada dado em matriz

foreach ($resultado as $key => $value) {
	echo $key.": ".$value. "<br>";
}

?>