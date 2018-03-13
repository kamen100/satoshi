<?php
$url='https://bitcoinfees.21.co/api/v1/fees/list';
//$url='index.json';
$content=file_get_contents($url);
$contents=utf8_encode($content);
$characters=json_decode($contents, true);
print_r ($characters);

//$db=new PDO('mysql:host=localhost;dbname=satoshi','root', '' );

/*$stmt = $db->prepare(
    "INSERT INTO trend (
    minFee, 
	maxFee, 
	dayCount, 
	memCount, 
	minDelay, 
	maxDelay, 
	minMinutes, 
	maxMinutes)
    VALUES (?,?,?,?,?,?,?,?)" );*/

foreach($characters as $x=>$x_value)
  {
  echo "<br>";print_r ($x_value[0]);echo 1; echo "<br>";
  print_r ($x_value[1]);echo 2;echo "<br>";
  print_r ($x_value[2]);echo 3;echo "<br>";
  print_r ($x_value[3]);echo 4;echo "<br>";
  print_r ($x_value[4]);echo 5;echo "<br>";
  print_r ($x_value[5]);echo 6;echo "<br>";
  print_r ($x_value[6]);echo 7;echo "<br>";
  print_r ($x_value[7]);echo 8;echo "<br>";
  print_r ($x_value[8]);echo 9;echo "<br>";
  print_r ($x_value[9]);echo 10;echo "<br>";
  print_r ($x_value[10]);echo 11;echo "<br>";
  print_r ($x_value[11]);echo 12;echo "<br>";
  print_r ($x_value[12]);echo 13;echo "<br>";
  print_r ($x_value[13]);echo 14;echo "<br>";
  print_r ($x_value[14]);echo 15;echo "<br>";
  print_r ($x_value[15]);echo 16;echo "<br>";
  //print_r ($x_value[16]);echo 17;echo "<br>";
  //print_r ($x_value[17]);echo 18;echo "<br>";
  //print_r ($x_value[18]);echo 19;echo "<br>";
} 	 

/*	foreach($x_value as $row){
		echo "<br>";print_r ($row['minFee']);echo "<br>";
	$bind=$stmt->bindParam('iiiiiiii',
		$row['minFee'],
		$row['maxFee'],
		$row['dayCount']
		/*$row['memCount'],
		$row['minDelay'],
		$row['maxDelay'],
		$row['minMinutes'],
		$row['maxMinutes']
	$stmt->bindParam(9, $row['']);
	);
	}


/*$sql="INSERT INTO trend
(minFee, maxFee, dayCount, memCount, minDelay, maxDelay, minMinutes, maxMinutes) 
VALUES ('".$row["minFee"]."','".$row["maxFee"]."','".$row["dayCount"]."','".$row["memCount"]."','".$row["minDelay"]."','".$row["maxDelay"]."','".$row["minMinutes"]."','".$row["maxMinutes"]."')";


$db->exec ($sql);*/

//$stmt=$db->prepare("INSERT INTO trend values('',?,?,?,?,?,?,?,?,'')");
//$stmt=$db->prepare("INSERT INTO trend values('',33,44,55,66,77,88,99,88888,'')");

/*$sql="INSERT INTO `trend`
(`minFee`, `maxFee`, `dayCount`, `memCount`, `minDelay`, `maxDelay`, `minMinutes`, `maxMinutes`) 
VALUES (2,3,4,5,6,7,8,9)";*/


//$sql="INSERT INTO trend
//(minFee, maxFee, dayCount, memCount, minDelay, maxDelay, minMinutes, maxMinutes) 
//VALUES ('".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[6]."','".$row[7]."','".$row[8]."')";

?>