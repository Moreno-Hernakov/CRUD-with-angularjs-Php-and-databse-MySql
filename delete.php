<?php 
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
   
        $request_body = file_get_contents('php://input',true);
        $var = json_decode($request_body,true);

        $conn = mysqli_connect("localhost", "root", "", "spp_sekolah");     
        
        $id = $var["id"];
        $query = " UPDATE tabel_siswa SET 
                        is_active = false
                    WHERE id = $id";
        // var_dump($query);
        mysqli_query($conn, $query);
    
?>