<?php

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");

$sahadatnama = $_POST['sahadatnama'];

$sql = "SELECT * FROM gurat_hat where sahadatnama='$sahadatnama' ";

$return_arr = array();

if ($result = mysqli_query( $con, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['pyyyg_birligi'] = $row['pyyyg_birligi'];
    $row_array['kysymy'] = $row['kysymy'];
    $row_array['nomeri'] = $row['nomeri'];  
    $row_array['ondurulen_yyly'] = $row['ondurulen_yyly'];
    $row_array['bellige_alnan_sene'] = $row['bellige_alnan_sene'];
    $row_array['gutaryan_yyly'] = $row['gutaryan_yyly'];
    $row_array['sahadatnama'] = $row['sahadatnama'];

    array_push($return_arr,$row_array);
   }
}

mysqli_close($con);

echo json_encode($return_arr);

exit();

?>