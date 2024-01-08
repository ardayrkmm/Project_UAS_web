<!-- navbar.php -->
<nav class="navbar">
    <img src="./assets/logo.svg">
    <div class="profil">
        <h1>Selamat Datang</h1>
        <h2>Halaman Admin</h2>
    </div>
    <ul>
        <?php
        $navbar = array(
            "Home" => "/website/Index.php",
            "Inventory" => "/website/inventory.php",
            "Detail Transaksi" => "/website/Detail_Transaksi.php",
            "Transaksi" => "/website/transaksi.php",
            "Customer" => "/website/customer.php",
        );
        foreach ($navbar as $label => $url) {
            echo "<li><a href=\"#\" class=\"nav-link\" data-page-url=\"$url\">$label</a></li>";
        }
        ?>
    </ul>
</nav>

<style>
    img {
        margin: 20px auto;
    }

    .profil {
        margin: 20px auto;
        width: 200px;
        height: 60px;
        text-align: center;
        background-color: #EBF7FF;
        border-radius: 12px;
        display: flex;
        margin-bottom: 40px;
        flex-direction: column;
        justify-content: center;
    }

    .profil h1 {
        font-size: 18px;
        color: #2B65FC;
        font-weight: bold;
    }

    .profil h2 {
        font-size: 16px;
        color: #2B65FC;
        font-weight: 500;
    }

    .navbar {
        width: 260px;
        background-color: white;
        font-family: sans-serif;
        max-height: 100%;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: static;
        left: 0;
        top: 0;
    }

    ul {
        display: flex;
        flex-direction: column;
        list-style: none;
        align-items: end;
    }

    ul li {
        width: 210px;
        height: 50px;
        display: flex;
        align-items: center;
        padding: 0 10px;
        background-color: white;
        border-left: 5px solid transparent;
        /* Remove the trailing forward slash */
    }

    ul li:hover {
        border-left: 5px #2B65FC solid;
        background-color: #EBF7FF;
        color: #2B65FC;
    }

    .active {

        border-left: 5px #2B65FC solid;
        background-color: #EBF7FF;
    }

    .nav-link {
        border-bottom: none;
        font-size: 20px;
        color: #707070;
        margin: 0px 30px 0px 10px;
        text-align: center;
        text-decoration: none;
    }

    .nav-link:hover {
        color: #2B65FC;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).on('click', '.nav-link', function(e) {
        e.preventDefault();

        // Menghapus class 'active' dari semua tautan
        $('.navbar li').removeClass('active');

        // Menambah class 'active' pada elemen <li> yang berisi tautan yang diklik
        $(this).parent('li').addClass('active');

        var pageUrl = $(this).data('page-url'); // Menggunakan 'data-page-url' yang sesuai

        // Pindah ke halaman yang sesuai
        window.location.href = pageUrl;
    });

    // Set active class saat halaman dimuat
    $(document).ready(function() {
        var currentPageUrl = window.location.pathname;

        // Cari tautan yang sesuai dengan URL halaman saat ini dan tambahkan class 'active'
        var activeLink = $('.navbar a[data-page-url="' + currentPageUrl + '"]');
        activeLink.parent('li').addClass('active');

        // Jika tidak ada tautan yang sesuai, tandai tautan halaman utama
        if (activeLink.length === 0) {
            $('.navbar a[data-page-url="/website/Index.php"]').parent('li').addClass('active');
        };
    });
</script>