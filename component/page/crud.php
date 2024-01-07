<?php
// Establish a database connection
require './koneksi.php';

// Create
function readData()
{
    global $conn;
    $query = "SELECT * FROM barang";
    $result = mysqli_query($conn, $query);
    return $result;
}

if (isset($_POST["addData"])) {
    $barcode = mysqli_real_escape_string($conn, $_POST['barcode']);
    $nama_barang = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $stok = mysqli_real_escape_string($conn, $_POST['stok']);
    $harga = mysqli_real_escape_string($conn, $_POST['harga']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $id_kategori = mysqli_real_escape_string($conn, $_POST['kategori_id_kategori']);


    $query = mysqli_prepare($conn, "INSERT INTO barang (barcode, nama_barang, stok, harga, deskripsi, kategori_id_kategori) 
    VALUES (?, ?, ?, ?, ?, ?)");

    mysqli_stmt_bind_param($query, 'ssssss', $barcode, $nama_barang, $stok, $harga, $deskripsi, $id_kategori);

    $sukses = mysqli_stmt_execute($query);
    mysqli_stmt_close($query);

    if ($sukses) {
        echo '<script>alert("Sukses");
        window.location.href = "../../index.php";
        </script>';
    } else {
        echo '<script>alert("Gagal: ' . mysqli_error($conn) . '");
        window.location.href = "./component/page/inventory.php";
        </script>';
    }
}
if (isset($_POST['editData'])) {
    $barcodeToUpdate = $_POST['barcodeToUpdate'];
    $update_nama_barang = mysqli_real_escape_string($conn, $_POST['update_nama_barang']);
    $update_stok = mysqli_real_escape_string($conn, $_POST['update_stok']);
    $update_harga = mysqli_real_escape_string($conn, $_POST['update_harga']);
    $update_deskripsi = mysqli_real_escape_string($conn, $_POST['update_deskripsi']);
    $update_kategori_id_kategori = mysqli_real_escape_string($conn, $_POST['update_kategori_id_kategori']);

    // Update the data in the database
    $query = "UPDATE barang SET 
              nama_barang = '$update_nama_barang',
              stok = '$update_stok',
              harga = '$update_harga',
              deskripsi = '$update_deskripsi',
              kategori_id_kategori = '$update_kategori_id_kategori'
              WHERE barcode = '$barcodeToUpdate'";

    // Log the SQL query for debugging
    error_log("SQL Query: " . $query);

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Sukses"); window.location.href = "../../index.php"; </script>';
    } else {
        $error_message = mysqli_error($conn);
        echo '<script>alert("Gagal: ' . $error_message . '"); window.location.href = "./component/page/inventory.php"; </script>';
        // Log the error for debugging
        error_log("MySQL Error: " . $error_message);
    }

    // Remove the following lines if not needed
    echo json_encode($response);
    exit;
}
if (isset($_POST["deleteData"])) {


    $barcodeToDelete = isset($_POST['barcodeToDelete']) ? mysqli_real_escape_string($conn, $_POST['barcodeToDelete']) : null;

    if ($barcodeToDelete !== null) {
        // Query untuk menghapus data
        $queryDelete = mysqli_prepare($conn, "DELETE FROM barang WHERE barcode=?");
        mysqli_stmt_bind_param($queryDelete, 's', $barcodeToDelete);

        $suksesDelete = mysqli_stmt_execute($queryDelete);
        mysqli_stmt_close($queryDelete);

        if ($suksesDelete) {
            echo '<script>alert("Sukses");
            window.location.href = "../../index.php";
            </script>';
        } else {
            echo json_encode(array("status" => "error", "message" => "Gagal menghapus data: " . mysqli_error($conn)));
            exit();
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "Barcode tidak valid atau tidak tersedia."));
        exit();
    }
}
