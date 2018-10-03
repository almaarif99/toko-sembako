

<?php echo validation_errors(); ?>

<?php echo form_open('Admin/tambah_barang'); ?>


    <label for="nama_barang">Title</label>
    <input type="input" name="nama_barang" /><br />

    <label for="harga">harga</label>
    <input type="number" name="harga" /><br />

    <select  name="kategori">
           <option value="1" >sa</option>
    </select>

    <label for="dicripsi">dicripsi</label>
    <textarea name="dicripsi"></textarea><br />

    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" /><br />

    <input type="submit" name="submit" value="Create news item" />

</form>
