<?php
// Establish a database connection
require './koneksi.php';

// Create
function searchItems($searchQuery)
{
    global $conn;

    // Buat query pencarian
    $query = "SELECT * FROM transaksi WHERE no_struk LIKE '%$searchQuery%'";

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

    $query = "SELECT * FROM transaksi LIMIT $start, $perPage";
    $result = mysqli_query($conn, $query);

    return $result;
}

if (isset($_POST["addDataTs"])) {
    $idStruk = mysqli_real_escape_string($conn, $_POST['id_struk']);
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal_t']);
    $idCUstom = mysqli_real_escape_string($conn, $_POST['id_customer']);




    $query = mysqli_prepare($conn, "INSERT INTO transaksi (no_struk, tanggal, customer_id_customer) 
    VALUES (?, ?, ?)");

    mysqli_stmt_bind_param($query, 'sss', $idStruk, $tanggal, $idCUstom);

    $sukses = mysqli_stmt_execute($query);
    mysqli_stmt_close($query);

    if ($sukses) {
        $response = array("status" => "success", "message" => "Data berhasil ditambahkan");
    } else {
        $response = array("status" => "error", "message" => "Gagal: " . mysqli_error($conn));
    }

    echo json_encode($response);
}
if (isset($_POST['editDataTs'])) {
    $idStrukUpdate = mysqli_real_escape_string($conn, $_POST['idStrukUpdate']);
    $tanggalUpdate = mysqli_real_escape_string($conn, $_POST['tanggal_t_update']);
    $idCUstomUpdate = mysqli_real_escape_string($conn, $_POST['id_customer_update']);


    // Update the data in the database
    $query = "UPDATE transaksi SET 
    tanggal = '$tanggalUpdate',
    customer_id_customer = '$idCUstomUpdate'
    WHERE no_struk = '$idStrukUpdate'";

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
if (isset($_POST["deleteDataTs"])) {


    $barcodeToDelete = isset($_POST['idtsDelete']) ? mysqli_real_escape_string($conn, $_POST['idtsDelete']) : null;
    error_log("Value to delete: " . $barcodeToDelete);
    if ($barcodeToDelete !== null) {
        // Query untuk menghapus data
        $queryDelete = mysqli_prepare($conn, "DELETE FROM transaksi WHERE no_struk=?");
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
