<?php
include "config/database.php";

$tgl_buat = date('Y-m-d');
$nama     = $_POST['nama'];
$status   = $_POST['status'];
$pesan    = $_POST['pesan'];

$query = mysqli_query($conn, "INSERT INTO rsvp VALUES ('', '$tgl_buat', '$nama', '$status', '$pesan')");

// Modal ucapan terima kasih + background blur
echo "
<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js'></script>

    <title>Terima Kasih</title>

    <style>
        body {
            height: 100vh;
            margin: 0;
            padding: 0;
            background: url('assets/images/gl5.jpg') center/cover no-repeat;
            position: relative;
        }

        /* Overlay blur */
        body::before {
            content: '';
            position: absolute;
            inset: 0;
            backdrop-filter: blur(6px);
            background: rgba(0,0,0,0.4);
            z-index: 1;
        }

        /* Modal harus berada di atas blur */
        .thank-container {
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body class='d-flex justify-content-center align-items-center'>

    <div class='thank-container modal show d-block' tabindex='-1'>
        <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content text-center p-4'>
                <h4 class='mb-2'>Terima Kasih!</h4>

                <p class='mb-3'>
                    Konfirmasi kehadiran kamu sudah dikirim. <br>
                    Kehadiranmu sangat berarti bagi kami.
                </p>

                <a href='index.php' class='btn btn-primary px-4'>Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>
";
