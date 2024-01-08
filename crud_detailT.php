<?php
// Establish a database connection
require './koneksi.php';

// Create
function searchItems($searchQuery)
{
    global $conn;

    // Buat query pencarian
    $query = "SELECT * FROM detail_transaksi WHERE barang_barcode LIKE '%$searchQuery%'";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Handle kesalahan jika ada
    if (!$result) {
        // Log kesalahan untuk debugging
        error_log("Error querying database: " . mysqli_error($conn));
        // Tampilkan pesan kesalahan jika perlu
        echo "Error querying database. Please try again later.";
        // Return hasil yang kosong atau sesuai kebutuhan
        return false;
    }

    return $result;
}
function readData($page = 1, $perPage = 6)
{
    global $conn;

    $start = ($page - 1) * $perPage;

    $query = "SELECT * FROM detail_transaksi LIMIT $start, $perPage";
    $result = mysqli_query($conn, $query);

    return $result;
}

if (isset($_POST["addData"])) {
    $id_detail = mysqli_real_escape_string($conn, $_POST['id_detail']);
    $total_harga = mysqli_real_escape_string($conn, $_POST['total_harga']);
    $barcode = mysqli_real_escape_string($conn, $_POST['barcode']);
    $no_struk = mysqli_real_escape_string($conn, $_POST['no_struk']);



    $query = mysqli_prepare($conn, "INSERT INTO detail_transaksi (id_detail_transaksi, total_harga, barang_barcode, transaksi_no_struk) 
    VALUES (?, ?, ?, ?)");

    mysqli_stmt_bind_param($query, 'ssss', $id_detail, $total_harga, $barcode, $no_struk);

    $sukses = mysqli_stmt_execute($query);
    mysqli_stmt_close($query);

    if ($sukses) {
        $response = array("status" => "success", "message" => "Data berhasil ditambahkan");
    } else {
        $response = array("status" => "error", "message" => "Gagal: " . mysqli_error($conn));
    }

    echo json_encode($response);
}
if (isset($_POST['editData'])) {
    $idUpdate = $_POST['idUpdate'];
    $total_update = mysqli_real_escape_string($conn, $_POST['update_total_harga']);
    $update_barcode = mysqli_real_escape_string($conn, $_POST['update_barcode']);
    $update_struk = mysqli_real_escape_string($conn, $_POST['update_no_struk']);


    // Update the data in the database
    $query = "UPDATE detail_transaksi SET 
    total_harga = '$total_update',
    barang_barcode = '$update_barcode',
    transaksi_no_struk = '$update_struk'
    WHERE id_detail_transaksi = '$idUpdate'";

    // Log the SQL query for debugging
    error_log("SQL Query: " . $query);

    $result = mysqli_query($conn, $query);

    if ($sukses) {
        $response = array("status" => "success", "message" => "Data berhasil ditambahkan");
    } else {
        $response = array("status" => "error", "message" => "Gagal: " . mysqli_error($conn));
    }

    echo json_encode($response);
}
if (isset($_POST["deleteData"])) {


    $barcodeToDelete = isset($_POST['idUpdateDelete']) ? mysqli_real_escape_string($conn, $_POST['idUpdateDelete']) : null;
    error_log("Value to delete: " . $barcodeToDelete);
    if ($barcodeToDelete !== null) {
        // Query untuk menghapus data
        $queryDelete = mysqli_prepare($conn, "DELETE FROM detail_transaksi WHERE id_detail_transaksi=?");
        mysqli_stmt_bind_param($queryDelete, 'i', $barcodeToDelete);

        $suksesDelete = mysqli_stmt_execute($queryDelete);
        mysqli_stmt_close($queryDelete);
        if ($sukses) {
            $response = array("status" => "success", "message" => "Data berhasil ditambahkan");
        } else {
            $response = array("status" => "error", "message" => "Gagal: " . mysqli_error($conn));
        }

        echo json_encode($response);
    } else {
        echo json_encode(array("status" => "error", "message" => "Barcode tidak valid atau tidak tersedia."));
        exit();
    }
}
