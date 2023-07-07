<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Styling for popup */
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      max-height: 90%;
      width: 90%;
      background-color: rgba(0, 0, 0, 0.5);
      overflow-y: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 200px;
    }
    
    .popup-content {
      max-width: 90%;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      padding-top: 50px
    }
    
    .popup-body {
      margin-top: 350px;
      margin-bottom: 10px;
      max-width: 90%;
    }
    
    .popup-body p {
      font-size: 14px;
      line-height: 1.4;
      margin: 10px 0;
    }
    
    .popup-body p a {
      color: #1a0dab;
      text-decoration: none;
    }
    
    .popup-body p a:hover {
      text-decoration: underline;
    }
    
    .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      color: #999;
      cursor: pointer;
    }
    
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .form-group input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    .result {
      margin-top: 100px;
      font-weight: bold;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="popup">
    <div class="popup-content">
      <button type="button" class="close close-btn" aria-label="Close" onclick="closePopup()">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="popup-body">
        <?php
        // Menghubungkan ke database
        include 'db_connect.php';

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['id'])) {
          $id = $_GET['id'];

          // Mengeksekusi query pencarian data berdasarkan ID
          $sql = "SELECT * FROM kamus WHERE id = $id";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $Stat = $row['ak'];
              if ($Stat < 1) {
                $formatted_number = number_format($Stat, 3); // Display 3 decimal places if less than 1
              } else {
                $formatted_number = number_format($Stat, 0); // Display without decimal places if 1 or more
              }
              echo "<h5><strong>Kegiatan/ Proyek: " . $row['kegiatan'] . "</strong></h5>";
              echo "<p><strong>Pekerjaan Anda:<br></strong> " . $row['uraian'] . "</p>";
              echo "<p><strong>Satuan hasil:</strong> " . $row['satuan'] . "</p>";
              echo "<p><strong>Jabatan: Statistisi " . $row['pelaksana'] . "</strong></p>";
              echo "<p><strong>Angka Kredit: <span id='ak-value'>" . $formatted_number . "</span></strong></p>";
              echo "<p><strong>Bukti:<br></strong> " . $row['bukti'] . "</p>";
              echo "<p><strong>Penjelasan:<br></strong> " . $row['keterangan'] . "</p>";

              echo "<form>";
              echo "<div class='form-group'>";
              echo "<label for='volume'>Volume:</label>";
              echo "<input type='text' id='volume' name='volume' class='form-control' placeholder='Masukkan volume'>";
              echo "</div>";
              echo "<button type='button' class='btn btn-primary' onclick='calculateAK()'>Hitung</button>";
              echo "<div id='result' class='result'></div>";
              echo "</form>";
            }
          } else {
            echo "<p>Invalid ID.</p>";
          }
        } else {
          echo "<p>Invalid ID.</p>";
        }

        // Menutup koneksi database
        $conn->close();
        ?>
      </div>
      <div class="text-right">
        <button type="button" class="btn btn-secondary" onclick="closePopup()">Tutup</button>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Fungsi untuk menutup popup dan kembali ke halaman sebelumnya
    function closePopup() {
      window.history.back();
    }

    // Fungsi untuk menghitung Angka Kredit
    function calculateAK() {
      var volume = document.getElementById('volume').value;
      var ak = parseFloat(document.getElementById('ak-value').textContent);

      if (volume !== '') {
        var result = ak * volume;
        document.getElementById('result').innerHTML = "Angka Kredit Anda: " + result.toFixed(2);
      } else {
        document.getElementById('result').innerText = '';
      }
    }
  </script>
</body>
</html>
