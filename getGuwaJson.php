<?php

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");

$sahadatnama = $_POST['sahadatnama'];

$sql = "SELECT * FROM guwa_hat where kiminki='$sahadatnama' ";

$return_arr = array();

if ($result = mysqli_query( $con, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['nomer'] = $row['nomer'];
    $row_array['yyly'] = $row['yyly'];
    $row_array['faa'] = $row['faa'];  
    $row_array['address'] = $row['address'];
    $row_array['marka'] = $row['marka'];
    $row_array['renk'] = $row['renk'];
    $row_array['mator'] = $row['mator'];
    $row_array['agram'] = $row['agram'];
    $row_array['kiminki'] = $row['kiminki'];

    array_push($return_arr,$row_array);
   }
}

mysqli_close($con);

echo json_encode($return_arr);

exit();

?>