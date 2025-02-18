<html>
    <head>
        <title>PEMBELIAN BUKU ONLINE</title>
    </head>
<body>
    <form action="tampilpembelianbuku.php" method="POST">
<pre>
    <h3>INPUT PEMBELIAN BUKU ONLINE</h3>
<hr>
Nama Pembeli            <input type="text" name="nama"><br>
Judul Buku              <input type="text" name="judul"><br>
Jenis Buku              <select name="jenis">
                        <option value="selected">-Pilih-</option>
                        <option value="Komik">Komik</option>
                        <option value="Novel">Novel</option>
                        <option value="Anak">Anak</option>
                        </select><br>
Pembayaran              <input type="radio" name="pembayaran" value="COD">COD<br>
                        <input type="radio" name="pembayaran" value="Transfer">Transfer<br>
Catatan                 <textarea name="catatan" id=""></textarea>
<input type="submit" name="TAMPIL">  <input type="reset" name="batal" value="BATAL">
</pre>
</form>
</body>
</html>