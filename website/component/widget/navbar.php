<!-- navbar.php -->
<nav class="navbar">
    <div class="profil"></div>
    <ul>
        <?php
        $navbar = array(
            "Home" => "./component/page/home.php",
            "Inventory" => "./component/page/inventory.php",
            "Transaksi" => "./component/page/transaksi.php",
        );
        foreach ($navbar as $label => $url) {
            echo "<li><a href=\"#\" class=\"nav-link\" data-page-url=\"$url\">$label</a></li>";
        }
        ?>
    </ul>
</nav>

<style>
    .profil {
        margin: 20px auto;
        width: 200px;
        height: 60px;
        background-color: #EBF7FF;
        border-radius: 12px;
    }

    .navbar {
        width: 260px;
        background-color: white;
        font-family: sans-serif;
        height: 727px;
        z-index: 1000;

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

        // Memuat konten halaman secara dinamis menggunakan AJAX
        $.ajax({
            url: pageUrl,
            type: 'GET',
            success: function(data) {
                $('#content').html(data);
            },
            error: function() {
                alert('Error loading page.');
            }
        });
    });
</script>