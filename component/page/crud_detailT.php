<?php
// Establish a database connection
require './koneksi.php';

// Create
function readData()
{
    global $conn;
    $query = "SELECT * FROM detail_transaksi";
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


    $barcodeToDelete = isset($_POST['idUpdateDelete']) ? mysqli_real_escape_string($conn, $_POST['idUpdateDelete']) : null;
    error_log("Value to delete: " . $barcodeToDelete);
    if ($barcodeToDelete !== null) {
        // Query untuk menghapus data
        $queryDelete = mysqli_prepare($conn, "DELETE FROM detail_transaksi WHERE id_detail_transaksi=?");
        mysqli_stmt_bind_param($queryDelete, 'i', $barcodeToDelete);

        $suksesDelete = mysqli_stmt_execute($queryDelete);
        mysqli_stmt_close($queryDelete);
        if ($suksesDelete) {
            echo '<script>alert("Sukses"); window.location.href = "../../index.php"; </script>';
        } else {
            $error_message = mysqli_error($conn);
            echo '<script>alert("Gagal: ' . $error_message . '"); window.location.href = "./component/page/inventory.php"; </script>';
            // Log the error for debugging
            error_log("MySQL Error: " . $error_message);
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "Barcode tidak valid atau tidak tersedia."));
        exit();
    }
}
