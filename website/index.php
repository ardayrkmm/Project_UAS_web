<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./component/css/index.css">
</head>

<body>
    <?php include './component/widget/navbar.php' ?>

    <div id="content">
        <?php include './component/page/home.php' ?>
    </div>

</body>
<script>
    // $(document).on('click', '.nav-link', function(e) {
    //     e.preventDefault(); // Mencegah pemrosesan standar tautan

    //     var pageUrl = $(this).data('page');

    //     // Menggunakan AJAX untuk memuat konten halaman
    //     $.ajax({
    //         url: pageUrl,
    //         type: 'GET',
    //         success: function(data) {
    //             $('#content').html(data); // Mengganti konten halaman
    //         },
    //         error: function() {
    //             alert('Error loading page.');
    //         }
    //     });
    // });
</script>

</html>