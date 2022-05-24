<?php

//SELECT DATE_FORMAT(CURDATE(), '%m/%d/%Y') today;

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");

$pyyyg_birligi = $_POST['pyyyg_birligi'];
$kysymy = $_POST['kysymy'];
$nomeri = $_POST['nomeri'];
$ondurulen_yyly = $_POST['ondurulen_yyly'];
$bellige_alnan_sene = $_POST['bellige_alnan_sene'];
$gutaryan_yyly = $_POST['gutaryan_yyly'];
$sahadatnama = $_POST['sahadatnama'];

// save data
$sql = "INSERT INTO `gurat_hat` (`id`, `pyyyg_birligi`, `kysymy`, `nomeri`, `ondurulen_yyly`, `bellige_alnan_sene`, `gutaryan_yyly`, `sahadatnama`) VALUES (NULL, '$pyyyg_birligi', '$kysymy', '$nomeri', '$ondurulen_yyly', '$bellige_alnan_sene', '$gutaryan_yyly', '$sahadatnama');";

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