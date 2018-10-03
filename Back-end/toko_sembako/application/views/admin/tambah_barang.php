

<?php echo validation_errors(); ?>

<?= form_open('Admin/tambah_barang'); ?>


    <label for="nama">Title</label>
    <input type="input" name="nama" /><br />

    <label for="harga">harga</label>
    <input type="number" name="harga" /><br />

    <select  name="kategori">
           <option value="1">sa</option>
           <option value="2">sb</option>
    </select>

    <label for="dicripsi">dicripsi</label>
    <textarea name="dicripsi"></textarea><br />

    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" /><br />

    <input type="submit" name="submit" value="Create news item" />

<?= form_close(); ?>
