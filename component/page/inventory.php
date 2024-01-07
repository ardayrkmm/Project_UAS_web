<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container-home {
            padding: 20px;
        }

        .card {
            width: 1201px;
            position: relative;
            padding: 20px;
            height: 219px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(133deg, #2B65FC 3.86%, #5BF 99.28%);
            border-radius: 20px;
            fill: linear-gradient(92deg, #6DB9EF 5.24%, #2B65FC 92.59%);
            filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.25));
        }

        .text-content {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .text-content h1 {
            font-size: 36px;
            font-weight: bold;
            color: #2B65FC;
        }

        .text-content p {
            font-size: 24px;
            font-weight: 600;
            color: #707070;
        }

        .card h1 {
            font-size: 36px;
            font-weight: 700;
            color: white;
        }

        .card p {
            font-size: 24px;
            color: white;
            font-weight: 400;
        }

        .card img {
            position: absolute;
            right: 10px;
            top: -20px;
            width: 330px;
            height: 240px;
        }

        .container-bottom {
            margin-top: 20px;
            display: flex;


        }

        .content-b {
            display: flex;
            align-items: center;

            justify-content: center;
        }

        #textS {
            width: 300px;
            height: 40px;
            border: none;
            border-radius: 12px;
            font-size: 20px;
            font-weight: 300;
            color: #707070;
            padding: 5px;
        }

        .btn-find {
            width: 100px;
            height: 40px;
            border-radius: 10px;
            background-color: #2B65FC;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-find h1 {
            font-size: 24px;
            text-align: center;
            align-items: center;
            color: white;
            font-weight: 500;

        }

        .btn-find::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transition: left 0.3s ease;
        }

        .btn-find:hover {
            background-color: #2980b9;
            /* Warna latar belakang tombol saat dihover */
            transform: translateX(5px);
        }

        .btn-find:hover::before {
            left: 0;
        }

        @keyframes slide {
            to {
                left: 0;
            }
        }

        .btn-filter {
            width: 136px;
            height: 40px;
            border-radius: 10px;
            background-color: #2B65FC;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-left: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-filter h1 {
            font-size: 24px;
            text-align: center;
            align-items: center;
            color: white;
            font-weight: 500;

        }

        .btn-filter::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transition: left 0.3s ease;
        }

        .btn-filter:hover {
            background-color: #2980b9;

            transform: translateX(5px);
        }

        .btn-filter:hover::before {
            left: 0;
        }

        @keyframes slide {
            to {
                left: 0;
            }
        }


        .btn-filter img {
            width: 28px;
            height: 28px;

        }

        .content-left {
            display: flex;
            flex-direction: row;
        }

        .btn-add {
            width: 136px;
            height: 40px;
            float: right;
            border-radius: 10px;
            background-color: #2B65FC;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-left: 10px;
            cursor: pointer;
            position: absolute;
            right: 20px;
            overflow: hidden;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-add h1 {
            font-size: 24px;
            text-align: center;
            align-items: center;
            color: white;
            font-weight: 500;

        }

        .btn-add::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
            transition: left 0.3s ease;
        }

        .btn-add:hover {
            background-color: #2980b9;

            transform: translateX(5px);
        }

        .btn-add:hover::before {
            left: 0;
        }

        @keyframes slide {
            to {
                left: 0;
            }
        }


        .btn-add img {
            width: 28px;
            height: 28px;

        }

        .content-r {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            width: 100%;
            border-collapse: separate;
            /* Memisahkan border antara sel */
            border-spacing: 0 10px;
            /* Menambahkan jarak antara baris (0 pada sumbu x dan 10px pada sumbu y) */
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            /* Warna biru pada header */
            color: #fff;
            /* Warna teks putih pada header */
            border-radius: 8px;
            /* Border radius pada header */
            text-align: center;
            /* Teks pada header menjadi tengah (center) */
        }

        .des {
            width: 300px;
        }

        .nam {
            width: 200px;
        }

        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }




        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1020;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 7% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 700px;
            height: 500px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;

            justify-content: start;
        }

        .modal-content h2 {
            font-size: 28px;
            font-weight: bold;
            color: #2B65FC;
        }

        .close {
            color: #aaa;
            float: right;
            margin-left: auto;
            font-size: 28px;
            font-weight: bold;
            margin-right: 18px;
        }

        #nama_barang,
        #barcode,
        #stok,
        #harga,
        #deskripsi {
            width: 100%;
            height: 36px;
            background-color: #EBF7FF;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        #addDataForm label {
            font-size: 18px;
            color: #5BF;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #addDataForm button {
            width: 140px;
            height: 40px;
            background-color: #2980b9;
            font-size: 24px;
            margin-top: 10px;
            font-weight: bold;
            color: white;
            border-radius: 12px;
            margin: auto;
            border: none;
        }

        #id_kategori {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
        }

        .modalDelete {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1020;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-contentDelete {
            background-color: #fefefe;
            margin: 7% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 500px;
            height: 300px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
        }

        .modal-contentDelete h2 {
            font-size: 24px;
            font-weight: bold;
            color: #2B65FC;
        }

        #deleteDataForm button {
            width: 140px;
            height: 40px;
            background-color: #2980b9;
            font-size: 24px;
            margin-top: 10px;
            font-weight: bold;
            color: white;
            border-radius: 12px;
            margin: auto;
            border: none;
        }

        .modalUpdate {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1020;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-contentUpdate {
            background-color: #fefefe;
            margin: 7% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 700px;
            height: 500px;
            border-radius: 20px;
            display: flex;
            flex-direction: column;

            justify-content: start;
        }

        .modal-contentUpdate h2 {
            font-size: 28px;
            font-weight: bold;
            color: #2B65FC;
        }

        .close {
            color: #aaa;
            float: right;
            margin-left: auto;
            font-size: 28px;
            font-weight: bold;
            margin-right: 18px;
        }

        #update_nama_barang,
        #update_barcode,
        #update_stok,
        #update_harga,
        #update_deskripsi {
            width: 100%;
            height: 36px;
            background-color: #EBF7FF;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        #updateDataForm label {
            font-size: 18px;
            color: #5BF;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #updateDataForm button {
            width: 140px;
            height: 40px;
            background-color: #2980b9;
            font-size: 24px;
            margin-top: 10px;
            font-weight: bold;
            color: white;
            border-radius: 12px;
            margin: auto;
            border: none;
        }

        #update_kategori_id_kategori {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container-home">
        <div class="text-content">
            <h1>Home</h1>
            <p>November 2023</p>
        </div>
        <div class="card">
            <div class="text-c">
                <h1>Good Morning, Arda</h1>
                <p>Hey, there are a lot of transactions you,jneed to complete</p>
            </div>
            <img src="./assets/clip-card.png" alt="">
        </div>
        <div class="container-bottom">
            <div class="content-b">
                <div class="content-left">
                    <input type="text" id="textS" value="Search..">
                    <div class="btn-find">
                        <h1>Find</h1>
                    </div>
                    <div class="btn-filter">
                        <h1>Filter</h1>
                        <img src="./assets/filter.svg">
                    </div>
                    <div class="btn-add" onclick="openModal()">
                        <h1>Add</h1>
                        <img src="./assets/add.svg">
                    </div>
                </div>

            </div>
            <div>

            </div>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Barcode</th>
                    <th class="nam">Nama Barang</th>
                    <th>Stok</th>
                    <th>harga</th>
                    <th class="des">Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require '/xampp/htdocs/website/component/page/crud.php';


                $result = readData();

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['barcode']}</td>";
                    echo "<td>{$row['nama_barang']}</td>";
                    echo "<td>{$row['stok']}</td>";
                    echo "<td>{$row['harga']}</td>";
                    echo "<td>{$row['deskripsi']}</td>";

                    echo '<td class="dropdown"> <a href="javascript:void(0)" class="dropbtn"><img src="./assets/drop.svg" alt="da"></a><div class="dropdown-content">
                    <a href="#" onclick="openModalUpdate(\'' . $row['barcode'] . '\', \'' . $row['nama_barang'] . '\',\'' . $row['stok'] . '\',\'' . $row['harga'] . '\',\'' . $row['deskripsi'] . '\',\'' . $row['kategori_id_kategori'] . '\')">Update</a>;

                     <a href="#" onclick="openModalDelete(\'' . $row['barcode'] . '\', \'' . $row['nama_barang'] . '\')">Delete</a></div></td>';

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Add Data</h2>
                <form id="addDataForm" method="POST" action="/website/component/page/crud.php">

                    <label for="barcode">Barcode:</label>
                    <input type="text" id="barcode" name="barcode" required><br />

                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" id="nama_barang" name="nama_barang" required><br />

                    <label for="stok">Stok:</label>
                    <input type="text" id="stok" name="stok" required><br />

                    <label for="nama">Harga</label>
                    <input type="text" id="harga" name="harga" required><br />

                    <label for="barcode">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" required><br />
                    <label for="kategori_id_kategori">Kategori:</label>
                    <select id="kategori_id_kategori" name="kategori_id_kategori">
                        <?php
                        // Ambil data kategori dari database
                        $query_kategori = "SELECT * FROM kategori";
                        $result_kategori = mysqli_query($conn, $query_kategori);

                        while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
                            echo "<option value='{$row_kategori['id_kategori']}'>{$row_kategori['kategori']}</option>";
                        }
                        ?>
                    </select>

                    <button type="submit" name="addData">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div id="myModalUpdate" class="modalUpdate">
        <div class="modal-contentUpdate">
            <span class="close" onclick="closeModalUpdate()">&times;</span>
            <h2>Update Data</h2>
            <form id="updateDataForm" method="POST" action="/website/component/page/crud.php">
                <!-- Add a hidden input for the barcode -->
                <input type="hidden" id="barcodeToUpdate" name="barcodeToUpdate" value="">

                <label for="update_barcode">Barcode:</label>
                <input type="text" id="update_barcode" name="update_barcode" required><br />

                <label for="update_nama_barang">Nama Barang:</label>
                <input type="text" id="update_nama_barang" name="update_nama_barang" required><br />

                <label for="update_stok">Stok:</label>
                <input type="text" id="update_stok" name="update_stok" required><br />

                <label for="update_harga">Harga</label>
                <input type="text" id="update_harga" name="update_harga" required><br />

                <label for="update_deskripsi">Deskripsi</label>
                <input type="text" id="update_deskripsi" name="update_deskripsi" required><br />

                <label for="update_kategori_id_kategori">Kategori:</label>
                <select id="update_kategori_id_kategori" name="update_kategori_id_kategori">
                    <?php
                    // Fetch data from the database for the dropdown
                    $query_kategori = "SELECT * FROM kategori";
                    $result_kategori = mysqli_query($conn, $query_kategori);

                    while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
                        echo "<option value='{$row_kategori['id_kategori']}'>{$row_kategori['kategori']}</option>";
                    }
                    ?>
                </select>

                <button type="submit" name="editData">Update</button>
            </form>
        </div>
    </div>
    <div id="myModalDelete" class="modalDelete">
        <div class="modal-contentDelete">
            <span class="close" onclick="closeModalDelete()">&times;</span>
            <h2>Delete Data</h2>
            <form id="deleteDataForm" method="POST" action="/website/component/page/crud.php">
                <input type="hidden" id="barcodeToDelete" name="barcodeToDelete">
                <h1>Are you sure you want to delete?</h1>
                <h1 id="delete_nama_barang"></h1>
                <button type="submit" id="deleteDataButton" name="deleteData">Submit</button>
            </form>
        </div>
    </div>
    </div>

    </div>
    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function openModalUpdate(barcode, nama, stok, harga, deskripsi, kategori) {
            document.getElementById('barcodeToUpdate').value = barcode;
            document.getElementById('update_barcode').value = barcode;
            document.getElementById('update_nama_barang').value = nama;
            document.getElementById('update_stok').value = stok;
            document.getElementById('update_harga').value = harga;
            document.getElementById('update_deskripsi').value = deskripsi;
            document.getElementById('update_kategori_id_kategori').value = kategori_id_kategori;

            // Display the update modal
            document.getElementById("myModalUpdate").style.display = "block";
        }

        // Function to close the modal
        function closeModalUpdate() {
            document.getElementById("myModalUpdate").style.display = "none";
        }

        function openModalDelete(id_barang, nama_barang) {
            document.getElementById('barcodeToDelete').value = id_barang;
            document.getElementById('delete_nama_barang').innerHTML = nama_barang;
            document.getElementById("myModalDelete").style.display = "block";
        }



        function closeModalDelete() {
            document.getElementById("myModalDelete").style.display = "none";
        }


        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById("addDataForm").addEventListener("submit", function(event) {
                event.preventDefault();

                sendData();
            });


            function sendData() {

                var formData = new FormData(document.getElementById("addDataForm"));


                var xhr = new XMLHttpRequest();
                xhr.open("POST", "/website/component/page/crud.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {

                        console.log(xhr.responseText);
                        window.location.href = "/website/component/page/inventory.php";
                    }
                };
                xhr.send(formData);


                closeModal();
            }

            document.getElementById("deleteDataForm").addEventListener("submit", function(event) {
                event.preventDefault();
                sendDeleteData();
            });

            function sendDeleteData() {
                var barcodeValue = document.getElementById("barcodeToDelete").value;

                fetch("/path/to/crud.php", { // Ganti dengan path yang benar
                        method: "POST",
                        body: new URLSearchParams({
                            "deleteData": true,
                            "barcodeToDelete": barcodeValue
                        }),
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.status === 'success') {
                            // Redirect hanya jika penghapusan berhasil
                            window.location.href = "/website/component/page/inventory.php";
                        } else {
                            console.error('Delete failed:', data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));

                closeModalDelete();
            }

            document.getElementById("updateDataForm").addEventListener("submit", function(event) {
                event.preventDefault();
                sendUpdateData();
            });

            function sendUpdateData() {
                var formData = new FormData(document.getElementById("updateDataForm"));




                var xhr = new XMLHttpRequest();
                xhr.open("POST", "/website/component/page/crud.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {

                        console.log(xhr.responseText);
                        window.location.href = "/website/component/page/inventory.php";
                    }
                };
                xhr.send(formData);



                closeModalUpdate();
            }
        });
    </script>

</body>

</html>