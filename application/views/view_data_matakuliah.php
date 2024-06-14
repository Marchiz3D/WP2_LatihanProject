<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Data Mata Kuliah</title>
</head>
<body>
  <center>
    <table>
      <tr>
        <th colspan="3">Tampil Data Mata Kuliah</th>
      </tr>
      <tr>
        <td colspan="3">
          <hr>
        </td>
      </tr>
      <tr>
        <th>Kode Matkul</th>
        <th>:</th>
        <td>
          <?php echo $kode; ?>
        </td>
      </tr>
      <tr>
        <th>Nama Matkul</th>
        <th>:</th>
        <td>
          <?php echo $nama; ?>
        </td>
      </tr>
      <tr>
        <th>SKS Matkul</th>
        <th>:</th>
        <td>
          <?php echo $sks; ?>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <a href="<?php echo base_url('matakuliah');?>">Kembali</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>