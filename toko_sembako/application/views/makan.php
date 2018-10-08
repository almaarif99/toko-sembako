<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<table>
  <tr>
    <td>jurusa</td>
    <td>tnggal</td>
    <td>discrip</td>
  </tr>
  <?php foreach ($makan as $key ): ?>
    <tr>
      <td><?= $key['nama_barang'];?></td>
      <td></td>
    </tr>
  <?php endforeach; ?>
</table>

  </body>
</html>
