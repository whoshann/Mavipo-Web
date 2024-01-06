<?php 
// koneksi ke data base
$conn = mysqli_connect ("localhost","root","","mavipo");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row =[];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows [  ] = $row ;}
    return $rows;
}

function tambah($data) {
    global $conn;
    // ambil data dari form
    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // query insert data
    $query = "INSERT INTO tbl_user
    VALUES 
    ('', '$username', '$email', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

?>