<?php
// fungction untuk melakukan koneksi
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gaggal");
    mysqli_select_db($conn, "tubes_193040059") or die("Database salah");

    return $conn;
}
// Function untuk melakukan query
function query($sql)
{

    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// function untuk menambah data
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_alat_musik =  htmlspecialchars($data['nama_alat_musik']);
    $cara_main = htmlspecialchars($data['cara_main']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO
            musik
            VALUES
            ('','$gambar','$nama_alat_musik','$cara_main','$harga')
            ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM musik WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_alat_musik =  htmlspecialchars($data['nama_alat_musik']);
    $cara_main = htmlspecialchars($data['cara_main']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE 
            musik
            SET
            gambar = '$gambar',
            nama_alat_musik = '$nama_alat_musik',
            cara_main = '$cara_main',
            harga = '$harga'
            WHERE id = '$id'";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}
