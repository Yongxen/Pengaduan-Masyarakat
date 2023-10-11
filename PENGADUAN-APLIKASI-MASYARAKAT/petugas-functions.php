<?php
require 'koneksi.php';

function runQuery($queri) {
    global $koneksi;
    // var_dump($query);die;
    $result = $koneksi->query($queri);

        if(!$result){
            die("Query Error: ".$koneksi->errno." - ".$koneksi->error);
        }

        $rows = [];
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
}

function create($date) {
    global $koneksi;

    $nama = htmlspecialchars($date["nama_petugas"]);
    $username = htmlspecialchars($date["username"]);
    $password = htmlspecialchars($date["password"]);
    $telepon = htmlspecialchars($date["telepon"]);
    $level = htmlspecialchars($date["level"]);

    $stmt = $koneksi->prepare("INSERT INTO petugas (nama_petugas, username, password, telepon, level) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $username, $password, $telepon, $level);

    if($stmt->execute()){
        return $stmt-> affected_rows;
    }else{
        echo "Error: " . $stmt->error;
        return false;
    }
}

function update($datee) {
    global $koneksi;

    $id = htmlspecialchars($datee["id_petugas"]);
    $nama_petugas = htmlspecialchars($datee["nama_petugas"]);
    $username = htmlspecialchars($datee["username"]);
    $password = htmlspecialchars($datee["password"]);
    $telepon = htmlspecialchars($datee["telepon"]);
    $level = htmlspecialchars($datee["level"]);

    $stmt = $koneksi->prepare("UPDATE petugas SET nama_petugas = ?, username = ?, password = ?, telepon = ?, level = ? WHERE id_petugas = ?");
    $stmt->bind_param("sssssi", $nama_petugas, $username, $password, $telepon, $level, $id);

    if($stmt->execute()){
        header('Location: petugas.php');
        exit;
    } else {
        echo "error: " . $stmt->error;
        return false;
    }
}

function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = $id");
    return mysqli_affected_rows($conn);
}
?>