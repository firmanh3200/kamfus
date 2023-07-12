<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
    <link href="./assets/css/adminlte.min.css" rel="stylesheet">
    <style>
    /* Styling for responsive layout */
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
      font-size: 16px;
      margin: 0 auto;
    }
    
    .search-box {
      max-width: 50%;
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .search-btn {
      margin-top: 10px;
      padding: 8px 12px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .search-results {
      margin-top: 20px;
      max-width: 100%;
      overflow-x: auto;
    }
    
    .search-results .card {
      margin: 10px;
    }
    
    .search-results p {
      font-size: 14px;
      line-height: 1.4;
      margin: 10px 0;
    }
    
    .search-results p a {
      color: #1a0dab;
      text-decoration: none;
    }
    
    .search-results p a:hover {
      text-decoration: underline;
    }
    
    .search-info {
      font-size: 14px;
      margin-bottom: 10px;
      align-items: flex-start;
      align-items: center;
    }
  </style>
</head>
<body class="index-page">
  <div class="header btn-primary">
    <a href="index.php" class="btn btn-sm btn-success" style="align: center">Home</a>
    <a href="https://webapps.bps.go.id/kipapp" class="btn btn-sm btn-warning" target="_bLank">KipApp</a>
    <a href="https://smartkit.32net.id" class="btn btn-sm btn-info" target="_bLank">SmartKit</a>
    <form action="cari.php" method="GET">
      <center>
        <input type="text" name="query" class="search-box" placeholder="Nama sensus/ survei...">
        <input type="submit" value="Cari" class="search-btn">
      </center>
    </form>
  </div>

  
  <div class="container">
    <?php
      // Menghubungkan ke database
      include 'db_connect.php';
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      
      if (isset($_GET['query'])) {
        $query = $_GET['query'];

        // Menghitung jumlah total hasil pencarian
        $sqlCount = "SELECT COUNT(*) AS total FROM kamus WHERE LOWER(kegiatan) LIKE LOWER('%$query%')";
        $resultCount = $conn->query($sqlCount);
        $row = $resultCount->fetch_assoc();
        $totalResults = $row['total'];

        // Mengeksekusi query pencarian dengan limit dan offset
        $sql = "SELECT * FROM kamus WHERE LOWER(kegiatan) LIKE LOWER('%$query%') ";
        $result = $conn->query($sql);

        // Menampilkan hasil pencarian
        echo "<div class='search-info'>";
        echo "<p  style='text-transform: uppercase;'>Hasil pencarian untuk: <strong>$query</strong> ada <strong>$totalResults</strong> butir kegiatan.</p>";
        echo "</div>";

        if ($result->num_rows > 0) {
          echo "<div class='search-results'>";

          echo "<table id='searchTable' class='table table-bordered'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Kode Perka</th>";
          echo "<th>Pekerjaan Anda</th>";
          echo "<th>Statistisi</th>";
          echo "<th>Angka Kredit</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['kode_perka'] . "</td>";
            echo "<td><a href='detail.php?id=" . $row['id'] . "'>" . $row['uraian'] . "</a></td>";
            echo "<td>" . $row['pelaksana'] . "</td>";
            echo "<td>" . $row['ak'] . "</td>";
            echo "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
          echo "</div>";
        } else {
          echo "<div class='search-results'>";
          echo "<h5>Tidak ada hasil yang ditemukan, silakan menghubungi Tim Penilai Kinerja.</h5>";
          echo "</div>";
        }
      }
    ?>
  </div>
    <hr>
      <div class="footer bg-info">
        <div class="container">
            <h2 class="title">KamFuS</h2>
            <h3 class="title">BPS Provinsi Jawa Barat</h3>
        </div>
      </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#searchTable').DataTable({
        "paging": true,
        "pageLength": 3,
        "responsive": true,
        "searching": true,
        "sorting": true,
        "info": false,
        "columnDefs": [{
          "visible": true
        }]
      });
    });
  </script>

</body>
</html>
