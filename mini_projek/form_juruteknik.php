<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="juruteknik.css">
    <script src="script.js"></script>
    <title>Form Juruteknik</title>
</head>
<body>

    <div class="content">
        
        <div class="form">

            <form action="#" method="post">

            <h2>Borang Pengemaskinian Peralatan</h2>

        <!-- nama alatan -->
        <label for="nama_alat">Nama Alatan</label>
          <select id="nama_alatan" name="nama_alatan">
            <option value="Monitor" id="Monitor">Monitor</option>
            <option value="Mouse" id="Mouse">Mouse</option>
            <option value="Keyboard" id="Keyboard">Keyboard</option>
            <option value="Speaker" id="Speaker">Speaker</option>
          </select>

          <!-- nombor perolehan -->
          <label for="nama_peroleh">Nombor Perolehan</label>
          <input type="text" id="nama_peroleh" name="nombor_perolehan" required onclick="inputperolehan()" placeholder="A3F4X">

           <!-- nombor pegawai -->
           <label for="nama_pegawai">Nama Pegawai</label>
           <input type="text" id="nama_pegawai" name="nama_pegawai_pemeriksa" required onclick="inputpegawai()" placeholder="Ruzaimi Bin Jaafar">

           <!-- status -->
          <label for="Status">Status</label>
          <select name="status">
            <option value="Sedia Digunakan">Sedia Digunakan</option>
            <option value="Sedang Dibaiki">Sedang Dibaiki</option>
            <option value="Rosak">Rosak</option>
          </select>

          <!-- keterangan -->
          <label for="keterangan">Keterangan</label>
          <input type="text" id="keterangan" name="keterangan" required onclick="keterangan()" placeholder="Peralatan Sedia Digunakan">

          <!-- tarikh -->
          <label for="Tarikh">Tarikh</label>
          <input type="date" id="date" name="tarikh" require>


          <button type="submit" class="button">Kemaskini</button>
          <button type="cancel" class="button">Cancel</button>

        </form>

        </div>
        <div class="sidenote">
            <h3><u>Status</u></h3>
        <p><b>Sedia Digunakan:</b>Masih boleh digunakan / tidak rosak</p>
        <br>
        <p><b>Sedang Dibaiki:</b>Alat dalam proses baikpulih</p>
        <br>
        <p><b>Rosak:Tidak boleh digunakan</b></p>
        </div>
    </div>

</body>
</html>