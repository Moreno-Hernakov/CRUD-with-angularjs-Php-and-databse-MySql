<?php 
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
   
        $request_body = file_get_contents('php://input',true);
        $var = json_decode($request_body,true);

        $conn = mysqli_connect("localhost", "root", "", "spp_sekolah");     
        $nama = $var["nama_siswa"];
        $kode = $var["kode_siswa"];
        $notelfon = $var["no_tlpn_siswa"];
        $tanggal_dibuat = $var["created_date"];
        $tanggal_diperbarui = $var["updated_date"];
        // $tanggal_diperbarui = $data["tanggal_diperbarui"];
    
        $query = "INSERT INTO tabel_siswa
                            VALUES
                        ('','$nama', '$kode', '$notelfon', NOW(), '', true)";
    
        mysqli_query($conn, $query);
    
        // return mysqli_affected_rows($conn);
    
?>