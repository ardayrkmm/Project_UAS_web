<?php
// Establish a database connection
require './koneksi.php';

// Create
function searchItems($searchQuery)
{
    global $conn;

    // Buat query pencarian
    $query = "SELECT * FROM customer WHERE nama LIKE '%$searchQuery%'";

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

    $query = "SELECT * FROM customer LIMIT $start, $perPage";
    $result = mysqli_query($conn, $query);

    return $result;
}

if (isset($_POST["addDataCus"])) {
    $id_customer = mysqli_real_escape_string($conn, $_POST['id_customer']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_kontak = mysqli_real_escape_string($conn, $_POST['no_kontak']);
    $gender_id_gender = mysqli_real_escape_string($conn, $_POST['id_gender']);


    $query = mysqli_prepare($conn, "INSERT INTO customer (id_customer, nama, tanggal_lahir, alamat, no_kontak, gender_id_gender) 
    VALUES (?, ?, ?, ?, ?, ?)");

    mysqli_stmt_bind_param($query, 'ssssss', $id_customer, $nama, $tanggal_lahir, $alamat, $no_kontak, $gender_id_gender);

    $sukses = mysqli_stmt_execute($query);
    mysqli_stmt_close($query);

    if ($sukses) {
        echo '<script>alert("Sukses");
        window.location.href = "customer.php";
        </script>';
    } else {
        echo '<script>alert("Gagal: ' . mysqli_error($conn) . '");
        window.location.href = "./component/page/customer.php";
        </script>';
    }
}
if (isset($_POST['editDataCus'])) {
    $id_customerToUpdate = $_POST['idUpdateCus'];
    $update_nama = mysqli_real_escape_string($conn, $_POST['nama_update']);
    $update_tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir_update']);
    $update_alamat = mysqli_real_escape_string($conn, $_POST['alamat_update']);
    $update_no_kontak = mysqli_real_escape_string($conn, $_POST['no_kontak_update']);
    $update_gender_id_gender = mysqli_real_escape_string($conn, $_POST['id_gender_update']);
    // Update the data in the database
    $query = "UPDATE customer SET 
              nama = '$update_nama',
              tanggal_lahir = '$update_tanggal_lahir',
              alamat = '$update_alamat',
              no_kontak = '$update_no_kontak',
              gender_id_gender = '$update_gender_id_gender'
              WHERE id_customer = '$id_customerToUpdate'";

    // Log the SQL query for debugging
    error_log("SQL Query: " . $query);

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Sukses"); window.location.href = "../../index.php"; </script>';
    } else {
        $error_message = mysqli_error($conn);
        echo '<script>alert("Gagal: ' . $error_message . '"); window.location.href = "./component/page/customer.php"; </script>';
        // Log the error for debugging
        error_log("MySQL Error: " . $error_message);
    }

    // Remove the following lines if not needed
    echo json_encode($response);
    exit;
}
if (isset($_POST["deleteDataCus"])) {


    $barcodeToDelete = isset($_POST['idUpdateCustomer']) ? mysqli_real_escape_string($conn, $_POST['idUpdateCustomer']) : null;

    if ($barcodeToDelete !== null) {
        // Query untuk menghapus data
        $queryDelete = mysqli_prepare($conn, "DELETE FROM customer WHERE id_customer=?");
        mysqli_stmt_bind_param($queryDelete, 's', $barcodeToDelete);

        $suksesDelete = mysqli_stmt_execute($queryDelete);
        mysqli_stmt_close($queryDelete);

        if ($suksesDelete) {
            echo '<script>alert("Sukses");
            window.location.href = "customer.php";
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
