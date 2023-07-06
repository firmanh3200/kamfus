<?php
// Database connection
include 'db_connect.php';

// Fetch options for first column
$query1 = "SELECT DISTINCT pjk FROM kamus WHERE kode_pelaksana = '5' ORDER BY pjk ASC";
$result1 = mysqli_query($conn, $query1);

// Retrieve selected values
$selectedColumn1 = isset($_POST['pjk']) ? $_POST['pjk'] : '';
$selectedColumn2 = isset($_POST['kegiatan']) ? $_POST['kegiatan'] : '';
$selectedColumn3 = isset($_POST['uraian']) ? $_POST['uraian'] : '';
$selectedColumn4 = isset($_POST['satuan']) ? $_POST['satuan'] : '';

if (isset($_POST['submit'])) {
    // Fetch options for second column based on selected value from column1
    $query2 = "SELECT DISTINCT kegiatan FROM kamus WHERE kode_pelaksana = '5' AND pjk = '$selectedColumn1' ORDER BY kegiatan ASC";
    $result2 = mysqli_query($conn, $query2);

    // Fetch options for third column based on selected values from column1 and column2
    $query3 = "SELECT DISTINCT uraian FROM kamus WHERE kode_pelaksana = '5' AND pjk = '$selectedColumn1' AND kegiatan = '$selectedColumn2' ORDER BY uraian ASC";
    $result3 = mysqli_query($conn, $query3);

    // Fetch options for third column based on selected values from column1 and column2 and column3
    $query4 = "SELECT DISTINCT satuan FROM kamus WHERE kode_pelaksana = '5' AND pjk = '$selectedColumn1' AND kegiatan = '$selectedColumn2' AND uraian = '$selectedColumn3' ORDER BY satuan ASC";
    $result4 = mysqli_query($conn, $query4);


    // Build the WHERE condition for the filter
    $whereCondition = "1=1";
    if (!empty($selectedColumn1)) {
        $whereCondition .= " AND pjk = '$selectedColumn1'";
    }
    if (!empty($selectedColumn2)) {
        $whereCondition .= " AND kegiatan = '$selectedColumn2'";
    }
    if (!empty($selectedColumn3)) {
        $whereCondition .= " AND uraian = '$selectedColumn3'";
    }

    // Fetch filtered results based on the selected values from column1, column2, and column3
    $queryResult = "SELECT * FROM kamus WHERE $whereCondition";
    $resultResult = mysqli_query($conn, $queryResult);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KamFuS - Kamus Fungsional Statistisi</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/blk-design-system.css" rel="stylesheet">
    <style>
        .navbar {
      background-color: black;
    }
        table {
            border-collapse: collapse;
            width: 100%;
            color: #ffffff;
        }
        
        th, td {
            border: 1px;
            padding: 8px;
            text-align: left;
            vertical-align: top;
            font-size: 13px;
        }

        /* Responsive table styles */
        @media screen and (max-width: 767px) {
            table {
                display: block;
                overflow-x: auto;
            }
            th, td {
                min-width: 100px;
            }
        }
    </style>
</head>
<body class="index-page">
  <div class="wrapper">
    <nav class="navbar navbar-expand-sm fixed-top navbar-success " color-on-scroll="25">
        <div class="container">
          <div class="navbar-translate">
                <a href="index.php" class="btn btn-sm btn-success style="align: center">Home</a>
                <a href="https://webapps.bps.go.id/kipapp" class="btn btn-sm btn-warning" target="_BLank">KipApp</a>
                <a href="https://smartkit.32net.id" class="btn btn-sm btn-info" target="_BLank">SmartKit</a>
          </div>
        </div>
    </nav>
    <div class="container">
      <div class="section"><br><br>
      <h3>Angka Kredit Statistisi Penyelia</h3>
        <form method="post">
          <div class="row">
            <div class="col-md-12">
              <label for="pjk">Bidang/ Fungsi:</label>
              <select name="pjk" id="pjk">
                  <option value="">Pilih Bidang/ Fungsi:</option>
                  <?php
                    while ($row = mysqli_fetch_assoc($result1)) {
                      $option = $row['pjk'];
                      echo "<option value='$option'" . ($selectedColumn1 == $option ? ' selected' : '') . ">$option</option>";
                    }
                  ?>
              </select>
                <input type="submit" name="submit" value="Pilih" class="btn btn-sm btn-default">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <label for="kegiatan">Kegiatan/ Proyek:</label>
              <select name="kegiatan" id="kegiatan">
                <option value="">Pilih Kegiatan/ Proyek:</option>
                <?php
                    while ($row = mysqli_fetch_assoc($result2)) {
                        $option = $row['kegiatan'];
                            echo "<option value='$option'" . ($selectedColumn2 == $option ? ' selected' : '') . ">$option</option>";
                    }
                ?>
              </select>
                <input type="submit" name="submit" value="Pilih" class="btn btn-sm btn-default">
            </div>
          </div>

          <br>
          <div class="row">		
            <div class="col-md-12">
                <label for="uraian">Pekerjaan:</label>
                <select name="uraian" id="uraian">
                    <option value="">Pilih Pekerjaan Anda:</option>
                    <?php
                        while ($row = mysqli_fetch_assoc($result3)) {
                          $option = $row['uraian'];
                          echo "<option value='$option'" . ($selectedColumn3 == $option ? ' selected' : '') . ">$option</option>";
                        }
                      ?>
                </select>
                <input type="submit" name="submit" value="Pilih" class="btn btn-sm btn-default">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <input type="text" name="volume" placeholder="Isikan Volume">
              <input type="submit" name="submit" value="Hitung" class="btn btn-sm btn-info">
            </div>
          </div>
        </form>
	
        <br><hr>
        <div><h4>Hasil Filter Anda:</h4></div>
          <hr>
            <?php
              if (isset($_POST['submit'])) {
                  if (mysqli_num_rows($resultResult) > 0) {
                      $tableRows = '';

                      while ($rowResult = mysqli_fetch_assoc($resultResult)) {
                          $column1Value = $rowResult['kode_perka'];
                          $column2Value = $rowResult['uraian'];
                          $column3Value = $rowResult['satuan'];
                          $column4Value = $rowResult['keterangan'];
                          $Stat = $rowResult['ak'];

                          if ($Stat < 1) {
                              $formatted_number = number_format($Stat, 3); // Display 3 decimal places if less than 1
                          } else {
                              $formatted_number = number_format($Stat, 0); // Display without decimal places if 1 or more
                          }

                          $tableRows .= "<tr>";
                          $tableRows .= "<td><center>$column1Value</center></td>";
                          $tableRows .= "<td>$column2Value pada <b>$selectedColumn2</b> dengan satuan hasilnya <b>$column3Value</b></td>";
                          $tableRows .= "<td>$column4Value</td>";
                          $tableRows .= "<td><center>$formatted_number</center></td>";
                          $tableRows .= "</tr>";
                      }

                      $volume = $_POST['volume'];

                      if (isset($volume) && $volume != '') {
                          mysqli_data_seek($resultResult, 0); // Reset the result set pointer to the beginning
                          $rowResult = mysqli_fetch_assoc($resultResult); // Fetch a row to get the necessary data
                          $Stat = $rowResult['ak'];
                          $column3Value = $rowResult['satuan'];

                          if ($Stat < 1) {
                              $formatted_number = number_format($Stat, 3); // Display 3 decimal places if less than 1
                          } else {
                              $formatted_number = number_format($Stat, 0); // Display without decimal places if 1 or more
                          }

                          $result = $volume * $formatted_number;
                          $formatted_result = number_format($result, 3); // Display result with 3 decimal places

                          $calculationResult = "<div><h4>Kesimpulan:<br><br> Pejabat Fungsional Statistisi Penyelia, dari Pekerjaan <b>" . $selectedColumn3 .", pada " . $selectedColumn2 . ", sebanyak " . $volume . " " . $column3Value . ", memperoleh Angka Kredit sebesar: " . $formatted_result . "</b></h4><p>-- Sumber: PerKa BPS No. 59 Th. 2014</p></div>";
                      } else {
                          $calculationResult = "Silakan isikan volume terlebih dahulu.";
                      }

                        echo '<table id="kalkulator">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th><center>Kode PerKa</center></th>';
                        echo '<th>Pekerjaan Anda</th>';
                        echo '<th>Penjelasan</th>';
                        echo '<th><center>Angka Kredit</center></th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        echo $tableRows;
                        echo '</tbody>';
                        echo '</table>';
                        echo '<hr>';
                        echo $calculationResult;
                      } else {
                          echo "Tidak Ada DATA.";
                      }
                      } else {
                          echo "Silakan memilih kriteria terlebih dahulu dan mengisikan Volume yang dikerjakan";
                      }
                      ?>
        </div>
      </div>
    </div>
  </div>
      <div class="footer">
        <div class="container">
            <h2 class="title">KamFuS</h2>
            <h3 class="title">BPS Provinsi Jawa Barat</h3>
        </div>
      </div>
	
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#kalkulator').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            paging: true,
            pageLength: 3,
            responsive: true,
            
        });
    });
</script>
</html>