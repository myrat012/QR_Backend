<?php

header("Content-Type: application/json");

$con=mysqli_connect("localhost","root","","qr");

$return_arr = array();

$sahadatnama = $_POST['sahadatnama'];

$sql_1 = "SELECT * FROM user WHERE ayratyn_bellikler='$sahadatnama' ";
$result_1 = mysqli_query( $con, $sql_1 );

if ($result_1){
    $row_count = mysqli_num_rows($result_1);
    if ($row_count > 0) {
        while ($row = mysqli_fetch_assoc($result_1)) {
            $row_array['ayratyn_bellikler'] = $row['ayratyn_bellikler'];
            $row_array['familyasy'] = $row['familyasy'];
            $row_array['ady'] = $row['ady'];
            $row_array['atasynyn_ady'] = $row['atasynyn_ady'];  
            $row_array['doglan_guni'] = $row['doglan_guni'];
            $row_array['doglan_yeri'] = $row['doglan_yeri'];
            $row_array['berlen_yeri'] = $row['berlen_yeri'];
            $row_array['berlen_senesi'] = $row['berlen_senesi'];
            $row_array['mohleti'] = $row['mohleti'];
            $row_array['derejesi'] = $row['derejesi'];

            array_push($return_arr,$row_array);
        }
    } else {
        $row_array['ayratyn_bellikler'] = 'yok';
        array_push($return_arr,$row_array);
    }  
}

$sql_2 = "SELECT * FROM guwa_hat WHERE kiminki='$sahadatnama' ";
$result_2 = mysqli_query($con, $sql_2);

if ($result_2) {
    $row_count = mysqli_num_rows($result_2);
    if ($row_count > 0) {
        while ($row = mysqli_fetch_assoc($result_2)) {
            $row_array2['guwa_kiminki'] = $row['kiminki'];
            $row_array2['guwa_nomer'] = $row['nomer'];
            $row_array2['guwa_yyly'] = $row['yyly'];
            $row_array2['guwa_faa'] = $row['faa'];  
            $row_array2['guwa_address'] = $row['address'];
            $row_array2['guwa_marka'] = $row['marka'];
            $row_array2['guwa_renk'] = $row['renk'];
            $row_array2['guwa_mator'] = $row['mator'];
            $row_array2['guwa_agram'] = $row['agram'];

            array_push($return_arr,$row_array2);
        }
    } else {
        $row_array2['guwa_kiminki'] = 'yok';
        array_push($return_arr,$row_array2);
    }  
}

// gurat hatlar
$sql_3 = "SELECT * FROM gurat_hat WHERE sahadatnama='$sahadatnama' ";
$result_3 = mysqli_query($con, $sql_3);
if ($result_3) {
    $row_count = mysqli_num_rows($result_3);
    if ($row_count > 0) {
        while ($row = mysqli_fetch_assoc($result_3)) {
            $row_array3['gurat_sahadatnama'] = $row['sahadatnama'];
            $row_array3['gurat_pyyyg_birligi'] = $row['pyyyg_birligi'];
            $row_array3['gurat_kysymy'] = $row['kysymy'];
            $row_array3['gurat_nomeri'] = $row['nomeri'];  
            $row_array3['gurat_ondurulen_yyly'] = $row['ondurulen_yyly'];
            $row_array3['gurat_bellige_alnan_sene'] = $row['bellige_alnan_sene'];
            $row_array3['gurat_gutaryan_yyly'] = $row['gutaryan_yyly'];

            array_push($return_arr,$row_array3);
        }
    } else {
        $row_array3['gurat_sahadatnama'] = 'yok';
        array_push($return_arr,$row_array3);
    }  
}
mysqli_close($con);

echo json_encode($return_arr);

exit();

?>