<?php
require_once('dbconnn.php');

$db=new dbcoonn();

$stmt=$db->pdo->query('select * from svar');
$stmt->execute();
$tjock=$stmt->fetchAll();
var_dump($tjock);

$ålder=filter_input(INPUT_GET, 'ålder',FILTER_SANITIZE_NUMBER_INT);
$allergi=filter_input(INPUT_GET, 'allergi',FILTER_SANITIZE_NUMBER_INT);
$kost=filter_input(INPUT_GET, 'Kost',FILTER_SANITIZE_NUMBER_INT);
echo $ålder, $allergi, $kost;

$data = [
  'ålder11' => $ålder,
  'allergi1' => $allergi,
  'Kost1'=> $kost,
];
// $sql= 'INSERT INTO svar (ålder1, kost1, allergi1) VALUES (:ålder11, :allergi1, :Kost1,\PDO::PARAM_INT)';
// $stmt= $db->pdo->prepare($sql);
// $stmt->execute($data);
$sql = "INSERT INTO svar ålder1, kost1, allergi1 VALUES (:ålder11, :allergi1, :Kost1)";
$stmt = $db->pdo->prepare($sql);
$stmt->bindParam(':ålder11',$ålder, PDO::PARAM_INT);
$stmt->bindParam(':allergi1',$allergi, PDO::PARAM_INT);
$stmt->bindParam(':Kost1',$kost, PDO::PARAM_INT);
$stmt->execute();

//header('Location: http://localhost/gymarbete/gymasiarbete/hemsida2/');

?>
