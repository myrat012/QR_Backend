<?php

//SELECT DATE_FORMAT(CURDATE(), '%m/%d/%Y') today;

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");


function checkRandom($con)
{
    $value = rand(100000, 999999);
    $sql_code = "SELECT `ayratyn_bellikler` FROM `user` WHERE ayratyn_bellikler='$value';";
    $result = mysqli_query($con, $sql_code); 
    $row = mysqli_fetch_row($result);
    if ($row != null) {
        checkRandom($con);
    } else {
       return $value; 
    }    
}

$familyasy = $_POST['familyasy'];
$ady = $_POST['ady'];
$atasynyn_ady = $_POST['atasynyn_ady'];
$doglan_guni = $_POST['doglan_guni'];
$dogulan_yeri = $_POST['dogulan_yeri'];
$berlen_yeri = $_POST['berlen_yeri'];
$berlen_senesi = $_POST['berlen_senesi'];
$mohleti = $_POST['mohleti'];
$derejesi = $_POST['derejesi'];
$belgisi = $_POST['belgisi'];

// check data
$ayratyn_bellikler = checkRandom($con);

// save data
$sql = "INSERT INTO `user` (`id`, `familyasy`, `ady`, `atasynyn_ady`, `doglan_guni`, `doglan_yeri`, `berlen_yeri`, `berlen_senesi`, `mohleti`, `derejesi`, `ayratyn_bellikler`, `belgisi`) VALUES (NULL, '$familyasy', '$ady', '$atasynyn_ady', '$doglan_guni', '$dogulan_yeri', '$berlen_yeri', '$berlen_senesi', '$mohleti', '$derejesi', '$ayratyn_bellikler', '$belgisi');";

$result = mysqli_query($con,$sql);

$send_array = array();

if($result){
    $data['status'] = 'saved';
    $data['ayratyn_bellikler'] = $ayratyn_bellikler;
}
else{
    $data['status'] = 'error';
}

if(isset($_POST['IMG'])){
    $image = $_POST['IMG'];
    $decode = base64_decode("$image");
    $filename = "$ayratyn_bellikler".".jpg";
    file_put_contents($filename, $decode);
}


array_push($send_array, $data);

mysqli_close($con);

echo json_encode($data);

exit();

?>