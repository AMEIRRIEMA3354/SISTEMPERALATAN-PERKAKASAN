<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="rekod_admin.css">
  <script src = "script.js"></script>
  <title>Rekod Admin</title>
</head>
<body>

<div class="header-box">
    <div class="header">
        <div class="logo-1">
            <img src="user image/logo.png">
        </div>
        <div class="nav">
            <ul>
                <li class='tulisan'><a href="http://localhost/mini_projek/dashboardadmin.html">Utama</a></li>
                <li class='tulisan'>Kategori:</li>
                <li><button id="bsemua" onclick="displayData('semua')">Semua</button></li>
                <li><button id="bmonitor" onclick="displayData('monitor')">Monitor</button></li>
                <li><button id="bmouse" onclick="displayData('mouse')">Mouse</button></li>
                <li><button id="bkeyboard" onclick="displayData('keyboard')">Keyboard</button></li>
                <li><button id="bspeaker" onclick="displayData('speaker')">Speaker</button></li>
                <li><input type="search" name="search" id="search" onkeyup="searchFunction()" placeholder="Rosak/Sedia Digunakan/Sedang Dibaiki" data-search><button id="search" name="submit">Cari</button></li>

            </ul>
        </div>
    </div>
</div>

<!-- semua data -->
<div id="paparandataperalatan-semua" class="blokdata">
    <center>
        <!-- table header -->
        <table>
            <tr>
                <th>Nombor Perolehan</th>
                <th>Nama Alatan</th>
                <th>Nama Pegawai</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tarikh</th>
                <th colspan="2">Tindakan</th>
            </tr>
            <?php
            include('config.php');
            $display = mysqli_query($connect,"SELECT * FROM maklumat_peralatan");
            while ($row = mysqli_fetch_array($display)){
                $background_color = '';
                switch ($row['status']) {
                    case 'Sedia Digunakan':
                        $background_color = 'limegreen';
                        break;
                    case 'Sedang Dibaiki':
                        $background_color = 'yellow';
                        break;
                    case 'Rosak':
                        $background_color = 'red';
                        break;
                }

                echo "<tr>";
                echo "<td>".$row['nombor_perolehan']."</td>";
                echo "<td id='alatan'>".$row['nama_alatan']."</td>";
                echo "<td>".$row['nama_pegawai_pemeriksa']."</td>";
                echo "<td style='background-color:$background_color;'>".$row['status']."</td>";
                echo "<td>".$row['keterangan']."</td>";
                echo "<td>".$row['tarikh']."</td>";
                echo "<td><button id='update'><a href='form_juruteknik.php'>Update</a></button></td>";
                echo "<td><button id='delete'><a href=\"delete.php?nombor_perolehan=".$row['nombor_perolehan']."\" Onclick=\"return confirm('Confirm to delete record')\">Delete</a></button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</div>

<!-- data untuk peralatan = monitor -->
<div id="paparandataperalatan-monitor" class="blokdata" style="display:none;">
    <center>
        <!-- table header -->
        <table>
            <tr>
                <th>Nombor Perolehan</th>
                <th>Nama Alatan</th>
                <th>Nama Pegawai</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tarikh</th>
                <th colspan="2">Tindakan</th>
            </tr>
            <?php
            include('config.php');
            $display = mysqli_query($connect,"SELECT * FROM maklumat_peralatan WHERE nama_alatan = 'Monitor'");
            while ($row = mysqli_fetch_array($display)){
                $background_color = '';
                switch ($row['status']) {
                    case 'Sedia Digunakan':
                        $background_color = 'limegreen';
                        break;
                    case 'Sedang Dibaiki':
                        $background_color = 'yellow';
                        break;
                    case 'Rosak':
                        $background_color = 'red';
                        break;
                }
                echo "<tr>";
                echo "<td>".$row['nombor_perolehan']."</td>";
                echo "<td id='alatan'>".$row['nama_alatan']."</td>";
                echo "<td>".$row['nama_pegawai_pemeriksa']."</td>";
                echo "<td style='background-color:$background_color;'>".$row['status']."</td>";
                echo "<td>".$row['keterangan']."</td>";
                echo "<td>".$row['tarikh']."</td>";
                echo "<td><button id='update'><a href='form_juruteknik.php'>Update</a></button></td>";
                echo "<td><button id='delete'><a href=\"delete.php?nombor_perolehan=".$row['nombor_perolehan']."\" Onclick=\"return confirm('Confirm to delete record')\">Delete</a></button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</div>

<!-- data untuk peralatan = mouse -->
<div id="paparandataperalatan-mouse" class="blokdata" style="display:none;">
    <center>
        <!-- table header -->
        <table>
            <tr>
                <th>Nombor Perolehan</th>
                <th>Nama Alatan</th>
                <th>Nama Pegawai</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tarikh</th>
                <th colspan="2">Tindakan</th>
            </tr>
            <?php
            include('config.php');
            $display = mysqli_query($connect,"SELECT * FROM maklumat_peralatan WHERE nama_alatan = 'Mouse'");
            while ($row = mysqli_fetch_array($display)){
                $background_color = '';
                switch ($row['status']) {
                    case 'Sedia Digunakan':
                        $background_color = 'limegreen';
                        break;
                    case 'Sedang Dibaiki':
                        $background_color = 'yellow';
                        break;
                    case 'Rosak':
                        $background_color = 'red';
                        break;
                }
                echo "<tr>";
                echo "<td>".$row['nombor_perolehan']."</td>";
                echo "<td id='alatan'>".$row['nama_alatan']."</td>";
                echo "<td>".$row['nama_pegawai_pemeriksa']."</td>";
                echo "<td style='background-color:$background_color;'>".$row['status']."</td>";
                echo "<td>".$row['keterangan']."</td>";
                echo "<td>".$row['tarikh']."</td>";
                echo "<td><button id='update'><a href='form_juruteknik.php'>Update</a></button></td>";
                echo "<td><button id='delete'><a href=\"delete.php?nombor_perolehan=".$row['nombor_perolehan']."\" Onclick=\"return confirm('Confirm to delete record')\">Delete</a></button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</div>

<!-- data untuk peralatan = keyboard -->
<div id="paparandataperalatan-keyboard" class="blokdata" style="display:none;">
    <center>
        <!-- table header -->
        <table>
            <tr>
                <th>Nombor Perolehan</th>
                <th>Nama Alatan</th>
                <th>Nama Pegawai</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tarikh</th>
                <th colspan="2">Tindakan</th>
            </tr>
            <?php
            include('config.php');
            $display = mysqli_query($connect,"SELECT * FROM maklumat_peralatan WHERE nama_alatan = 'Keyboard'");
            while ($row = mysqli_fetch_array($display)){
                $background_color = '';
                switch ($row['status']) {
                    case 'Sedia Digunakan':
                        $background_color = 'limegreen';
                        break;
                    case 'Sedang Dibaiki':
                        $background_color = 'yellow';
                        break;
                    case 'Rosak':
                        $background_color = 'red';
                        break;
                }
                echo "<tr>";
                echo "<td>".$row['nombor_perolehan']."</td>";
                echo "<td id='alatan'>".$row['nama_alatan']."</td>";
                echo "<td>".$row['nama_pegawai_pemeriksa']."</td>";
                echo "<td style='background-color:$background_color;'>".$row['status']."</td>";
                echo "<td>".$row['keterangan']."</td>";
                echo "<td>".$row['tarikh']."</td>";
                echo "<td><button id='update'><a href='form_juruteknik.php'>Update</a></button></td>";
                echo "<td><button id='delete'><a href=\"delete.php?nombor_perolehan=".$row['nombor_perolehan']."\" Onclick=\"return confirm('Confirm to delete record')\">Delete</a></button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</div>

<!-- data untuk peralatan = speaker -->
<div id="paparandataperalatan-speaker" class="blokdata" style="display:none;">
    <center>
        <!-- table header -->
        <table>
            <tr>
                <th>Nombor Perolehan</th>
                <th>Nama Alatan</th>
                <th>Nama Pegawai</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tarikh</th>
                <th colspan="2">Tindakan</th>
            </tr>
            <?php
            include('config.php');
            $display = mysqli_query($connect,"SELECT * FROM maklumat_peralatan WHERE nama_alatan = 'Speaker'");
            while ($row = mysqli_fetch_array($display)){
                $background_color = '';
                switch ($row['status']) {
                    case 'Sedia Digunakan':
                        $background_color = 'limegreen';
                        break;
                    case 'Sedang Dibaiki':
                        $background_color = 'yellow';
                        break;
                    case 'Rosak':
                        $background_color = 'red';
                        break;
                }
                echo "<tr>";
                echo "<td>".$row['nombor_perolehan']."</td>";
                echo "<td id='alatan'>".$row['nama_alatan']."</td>";
                echo "<td>".$row['nama_pegawai_pemeriksa']."</td>";
                echo "<td style='background-color:$background_color;'>".$row['status']."</td>";
                echo "<td>".$row['keterangan']."</td>";
                echo "<td>".$row['tarikh']."</td>";
                echo "<td><button id='update'><a href='form_juruteknik.php'>Update</a></button></td>";
                echo "<td><button id='delete'><a href=\"delete.php?nombor_perolehan=".$row['nombor_perolehan']."\" Onclick=\"return confirm('Confirm to delete record')\">Delete</a></button></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</div>

<script>
    function displayData(data) {
      // tentukan kategori data yang akan dipaparkan
      // dia akan ambil yg dkt onclick tu
      // akan kira nilai dkt onclick tu sbg data
        document.getElementById("paparandataperalatan-semua").style.display = "none";
        document.getElementById("paparandataperalatan-monitor").style.display = "none";
        document.getElementById("paparandataperalatan-mouse").style.display = "none";
        document.getElementById("paparandataperalatan-keyboard").style.display = "none";
        document.getElementById("paparandataperalatan-speaker").style.display = "none";
      // ambil elemen dalam id dan sembunyikan
        var data = document.getElementById("paparandataperalatan-" + data).style.display = "block";
        // elemen dalam id dia masuk ke data dan display block
        // yg data ni adalah nilai yg diambil dari hasil onclick
        // yg dkt sini dia akan cari and match paparandataperalatan dan data

//Jadi, jika butang dipilih dengan id 'bsemua' dan fungsi dipanggil seperti ini: 
//displayData('semua'), nilai 'semua' akan menjadi nilai parameter data. 
//kod JavaScript akan mencari elemen dengan ID "paparandataperalatan-semua" dan 
//menetapkan paparan stailnya kepada block, yang akan menunjukkan elemen tersebut.
    }
</script>

</body>
</html>

