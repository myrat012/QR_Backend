<?php

//SELECT DATE_FORMAT(CURDATE(), '%m/%d/%Y') today;

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");

$nomer = $_POST['nomer'];
$yyly = $_POST['yyly'];
$faa = $_POST['faa'];
$address = $_POST['address'];
$marka = $_POST['marka'];
$renk = $_POST['renk'];
$mator = $_POST['mator'];
$agram = $_POST['agram'];
$kiminki = $_POST['kiminki'];

// save data
$sql = "INSERT INTO `guwa_hat` (`id`, `nomer`, `yyly`, `faa`, `address`, `marka`, `renk`, `mator`, `agram`, `kiminki`) VALUES (NULL, '$nomer', '$yyly', '$faa', '$address', '$marka', '$renk', '$mator', '$agram', '$kiminki');";

$result = mysqli_query($con,$sql);

$send_array = array();

if($result){
    $data['status'] = 'saved';
}
else{
    $data['status'] = 'error';
}

mysqli_close($con);

echo json_encode($data);

exit();

?>