<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer</title>

</head>
<style>
    #Title {
        padding: 10px;
    }

    #Title article h1 {
        color: #2B65FC;
        font-family: Poppins;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    #Title article p {
        margin-top: -10px;
        color: #707070;
        font-family: Poppins;
        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    #Card {
        width: 1210px;
        margin-left: 10px;
        position: relative;
        padding: 20px;
        height: 191px;
        background: linear-gradient(133deg, #2B65FC 3.86%, #5BF 99.28%);
        fill: linear-gradient(133deg, #2B65FC 3.86%, #5BF 99.28%);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Add a box shadow for a card-like appearance */
        border-radius: 20px;
        /* Add border-radius for rounded corners */
        display: flex;
        align-items: center;

    }

    #Card article h1 {
        color: #FFF;
        font-family: Poppins;
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .container-customer {
        display: flex;
        flex-direction: column;
    }

    #Card img {
        position: absolute;
        top: 5px;
        right: 20px;
        width: 280px;
        height: auto;
    }

    #Card article p {
        color: #FFF;
        font-family: Poppins;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .content-table table {
        width: 1200px;
        margin: auto;
        border-collapse: collapse;

        margin-top: 20px;
        overflow: hidden;
    }

    .content-table h1 {
        font-family: Poppins;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        color: #2b65fc;
        margin-bottom: -10px;
        margin-left: 15px
    }

    table tbody {
        width: 1230px;
        margin: auto;
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        overflow: hidden;
        text-align: center;
    }

    .content-table {
        width: 1210px;
        margin: 10px auto;

        height: 500px;
        background-color: white;
        border-radius: 20px;
    }

    #pencarian {
        /* ... (kode CSS lainnya) ... */
        text-align: left;
        padding: 8px;
        /* Mengatur teks di sebelah kiri */
    }

    .search-container {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .search-input {
        width: 300px;
        padding: 10px;
        border-radius: 20px;
        /* Mengubah border-radius agar oval */
        border: 2px solid #2B65FC;
        outline: none;
    }

    .filter-dropdown {
        padding: 10px;
        border-radius: 20px;
        /* Mengubah border-radius agar oval */
        border: 2px solid #2B65FC;
    }

    .search-button,
    .add-button {
        padding: 10px;
        border-radius: 20px;
        font-family: Poppins;
        /* Mengubah border-radius agar oval */
        background-color: #2B65FC;
        color: #fff;
        border: 2px solid #2B65FC;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        width: 100px;
        /* Menambahkan gaya bold pada teks */
        font-weight: bold;
    }

    .search-button:hover,
    .add-button:hover {
        background-color: #fff;
        /* Warna latar putih */
        color: #3498db;
        /* Warna teks biru */
    }

    .add-button {
        background-color: #2ecc71;
        border: 2px solid #2ecc71;
        margin-left: auto;
        /* Menempatkan tombol tambah di sebelah kanan */
    }

    .add-button:hover {
        background-color: #fff;
        /* Warna latar putih saat tombol tambah dihover */
        color: #2ecc71;
        /* Warna teks hijau saat tombol tambah dihover */
    }

    #tabel {
        padding: 8px;
        overflow-x: auto;
        /* Menambahkan scrolling horizontal */
        white-space: nowrap;
    }

    table {
        width: 100%;
        border-collapse: separate;
        /* Memisahkan border antara sel */
        border-spacing: 0 10px;
        /* Menambahkan jarak antara baris (0 pada sumbu x dan 10px pada sumbu y) */
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        font-family: Poppins;
    }

    th {
        background-color: #2B65FC;
        /* Warna biru pada header */
        color: #fff;
        /* Warna teks putih pada header */
        border-radius: 8px;
        /* Border radius pada header */
        text-align: center;
        /* Teks pada header menjadi tengah (center) */
    }

    .pagination-container {
        margin-top: 10px;
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
    }

    .page-item {
        margin-right: 5px;
    }

    .page-link {
        display: block;
        padding: 8px;
        background-color: #2B65FC;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>
    <!-- 
    <section id="Title">
        <article>
            <h1>Customer List</h1>
            <p>November 2023</p>
        </article>
    </section>

    <section id="Card">
        <article>
            <h1>Good Morning, Arda</h1>
            <p>Hey, there are a lot of transactions you</p>
            <p>need to complete</p>
        </article>

        <img src="./assets/group 8.png" alt=""> -->


    <div class="container-customer">
        <section id="Title">
            <article>
                <h1>Customer List</h1>
                <p>November 2023</p>
            </article>
        </section>
        <section id="Card">
            <article>
                <h1>Good Morning, Arda</h1>
                <p>Hey, there are a lot of transactions you</p>
                <p>need to complete</p>
            </article>

            <img src="./assets/group 8.png" alt="">
        </section>
        <div class="content-table">
            <h1>Customer list</h1>
            <section id="pencarian">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Cari...">
                    <select class="filter-dropdown">
                        <option value="filter1">Filter 1</option>
                        <option value="filter2">Filter 2</option>
                        <option value="filter3">Filter 3</option>
                    </select>
                    <button class="search-button">Cari</button>
                    <button class="add-button">Tambah</button>
                </div>
            </section>


            <section id="tabel">
                <table>
                    <thead>
                        <tr>
                            <th>Id Customer</th>
                            <th>Name</th>
                            <th>Birth of Date
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $host = 'localhost';
                        $username = 'root';
                        $password = '';
                        $database = 'coba';

                        $conn = mysqli_connect($host, $username, $password, $database);


                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // Perform a query to fetch data from the database
                        $query = "SELECT *
                          FROM customer LIMIT 0, 6";

                        $result = mysqli_query($conn, $query);

                        // Check if the query was successful
                        if ($result) {
                            // Fetch each row from the result set
                            while ($row = mysqli_fetch_assoc($result)) {
                                // Output the data in each row as a table row
                                echo "<tr>";
                                echo "<td>{$row['id_customer']}</td>";
                                echo "<td>{$row['nama']}</td>";
                                echo "<td>{$row['tanggal_lahir']}</td>";
                                echo "<td>{$row['alamat']}</td>";
                                echo "<td>{$row['no_kontak']}</td>";
                                echo "<td>{$row['gender_id_gender']}</td>";
                                echo '<td class="dropdown"> <a href="javascript:void(0)" class="dropbtn"><img src="./assets/drop.svg" alt="da"></a><div class="dropdown-content"><a href="#">Update</a><a href="#">Delete</a></div></td>';
                                echo "</tr>";
                            }

                            // Free the result set
                            mysqli_free_result($result);
                        } else {
                            // Handle the case when the query fails
                            echo "Error: " . mysqli_error($conn);
                        }

                        // Close the database connection
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
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
            </section>
            <script>
                // Kode JavaScript untuk menangani pagination
                const table = document.querySelector('table');
                const rows = document.querySelectorAll('tbody tr');
                const rowsPerPage = 5;
                const maxPaginationButtons = 5; // Jumlah maksimal tombol pagination yang ditampilkan
                let currentPage = 1;

                // Fungsi untuk menampilkan halaman tertentu
                function displayRows(start, end) {
                    rows.forEach((row, index) => {
                        if (index >= start && index < end) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }

                // Fungsi untuk membuat tombol pagination
                function setupPagination() {
                    const pageCount = Math.ceil(rows.length / rowsPerPage);

                    const pagination = document.getElementById('pagination');
                    pagination.innerHTML = '';

                    // Menentukan halaman awal dan akhir untuk tombol pagination
                    let startPage = Math.max(1, currentPage - Math.floor(maxPaginationButtons / 2));
                    let endPage = Math.min(startPage + maxPaginationButtons - 1, pageCount);

                    if (endPage - startPage < maxPaginationButtons - 1) {
                        startPage = Math.max(1, endPage - maxPaginationButtons + 1);
                    }

                    for (let i = startPage; i <= endPage; i++) {
                        const li = document.createElement('li');
                        li.classList.add('page-item');

                        const a = document.createElement('a');
                        a.classList.add('page-link');
                        a.href = '#';
                        a.textContent = i;

                        a.addEventListener('click', () => {
                            currentPage = i;
                            const start = (i - 1) * rowsPerPage;
                            const end = start + rowsPerPage;
                            displayRows(start, end);
                            setupPagination(); // Perbarui tombol pagination setelah mengganti halaman
                        });

                        li.appendChild(a);
                        pagination.appendChild(li);
                    }
                }

                // Menampilkan halaman pertama saat halaman dimuat
                displayRows(0, rowsPerPage);

                // Membuat tombol pagination
                setupPagination();
            </script>

</body>

</html>