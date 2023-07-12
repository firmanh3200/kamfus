<?php
include 'db_connect.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html lang="id">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>KamFuS - Kamus Fungsional Statistisi</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="KamFuS">
    <meta name="author" content="KamFuS">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/adminlte.min.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .header {
            position: sticky;
            top: 0;
            background-color: black;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
            z-index: 1;
            align-items: center;
            width: 100%;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 25px;
            flex-wrap: wrap;
            max-width: 90%;
            font-size: 13px;
            margin: 0 auto;
        }

        table.dataTable th,
        td {
            font-size: 10pt;
            valign: top;
        }
    </style>
</head>

<body class="index-page">
    <section class="body">

        <!-- start: header -->
        <div class="header btn-primary">
            <a href="index.php" class="btn btn-sm btn-success" style="align: center">Home</a>
            <a href="https://webapps.bps.go.id/kipapp" class="btn btn-sm btn-warning" target="_BLank">KipApp</a>
            <a href="https://smartkit.32net.id" class="btn btn-sm btn-info" target="_BLank">SmartKit</a>
        </div><br><br>
        <!-- end: header -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <section class="panel">
                        <div class="panel-body">
                            <h3><strong><center>Angka Kredit PerMenPAN 2013</center></strong></h3>
                            <hr>
                            <table>
                            <h5>dalam proses pengembangan</h5>
                            </table>
                            <br><br><hr>
                            <!-- Tabel kedua (yang akan diisi dengan baris yang dipindahkan) -->
                            <h3><strong><center>Angka Kredit PerMenPAN-RB 2022</center></strong></h3>
                            <hr>
                            <table>
                            <h5>dalam proses pengembangan</h5>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="footer bg-primary">
        <div class="container">
            <h2 class="title">KamFuS</h2>
            <h3 class="title">BPS Provinsi Jawa Barat</h3>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabel-1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                paging: true,
                pageLength: 5,
                responsive: true,

            });
        });
    </script>
    <script>
        const selectorCheckboxes = document.querySelectorAll('#tabel-1 .selector-checkbox');

        selectorCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                const row = checkbox.parentNode.parentNode;
                const tabel2Body = document.getElementById('tabel-2-body');

                if (checkbox.checked) {
                    const newRow = row.cloneNode(true);
                    newRow.querySelector('.selector-checkbox').remove(); // Menghapus kotak selector dari baris yang dipindahkan
                    tabel2Body.appendChild(newRow);
                } else {
                    row.parentNode.appendChild(row);
                }
            });
        });

        // Perhitungan nilai angka_kredit
        function calculateAngkaKredit() {
            const volume = document.getElementById('volume').value;
            const selectedCheckboxes = document.querySelectorAll('#tabel-2 .selector-checkbox:checked');
            let totalAK = 0;

            selectedCheckboxes.forEach(function (checkbox) {
                const row = checkbox.parentNode.parentNode;
                const kodeAk = row.querySelector('.kode_ak').value;
                const ak = row.querySelector('.ak').value;
                totalAK += kodeAk * ak;
            });

            const angkaKredit = volume * totalAK;
            document.getElementById('angka_kredit').value = angkaKredit;
        }

        // Panggil fungsi calculateAngkaKredit saat nilai volume berubah
        document.getElementById('volume').addEventListener('input', calculateAngkaKredit);

        // Panggil fungsi calculateAngkaKredit saat ada perubahan pada checkbox yang dipilih
        const checkboxes = document.querySelectorAll('#tabel-2 .selector-checkbox');
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', calculateAngkaKredit);
        });
    </script>

</body>

</html>
