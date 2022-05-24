<?php

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");

$sahadatnama = $_POST['sahadatnama'];
$sql = "SELECT * FROM user where ayratyn_bellikler='$sahadatnama' ";


$return_arr = array();

if ($result = mysqli_query( $con, $sql )){
    while ($row = mysqli_fetch_assoc($result)) {
    $row_array['familyasy'] = $row['familyasy'];
    $row_array['ady'] = $row['ady'];
    $row_array['atasynyn_ady'] = $row['atasynyn_ady'];  
    $row_array['doglan_guni'] = $row['doglan_guni'];
    $row_array['doglan_yeri'] = $row['doglan_yeri'];
    $row_array['berlen_yeri'] = $row['berlen_yeri'];
    $row_array['berlen_senesi'] = $row['berlen_senesi'];
    $row_array['mohleti'] = $row['mohleti'];
    $row_array['derejesi'] = $row['derejesi'];
    $row_array['ayratyn_bellikler'] = $row['ayratyn_bellikler'];

    array_push($return_arr,$row_array);
   }
 }

mysqli_close($con);

echo json_encode($return_arr);

exit();

?>