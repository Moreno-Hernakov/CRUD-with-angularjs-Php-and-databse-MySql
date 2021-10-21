<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


    $conn = mysqli_connect("localhost", "root", "", "spp_sekolah");
    $query = 'SELECT * FROM tabel_siswa WHERE is_active="1" ORDER BY id DESC ';
    $result = mysqli_query($conn, $query);
    $rows = [];
    // ORDER BY id DESC
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        $data = [
            'status' => 200,
            'data' => $rows
        ];
        echo json_encode($data);
    
?>

