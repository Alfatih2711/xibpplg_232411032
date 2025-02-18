<html>
<head>
    <title>Tiket Pesawat</title>
</head>
<body>
    <form action="buktipesawat.php" method="POST">
        <table border="1">
    <tr>
        <td colspan="2" align="center">PEMESANAN TIKET PESAWAT</td>
    </tr>
    <tr>
        <td>Nama Pemesanan</td>
        <td><input type="text" name="nama" required placeholder="Masukkan Nama"></td>
    </tr>
    <tr>
        <td>Kode Jurusan</td>
        <td><select name="kode">
            <option value="selected">-Pilih-</option>
            <option value="JB">JS</option>
            <option value="JS">JS</option>
            <option value="JK">JK</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Jumlah Pesanan</td>
        <td><input type="text" name="jumlah" required placeholder="Masukkan Jumlah"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" name="cetak" value="CETAK">
                        <input type="reset" name="batal" value="BATAL">
        </td>
    </tr>
</table>
</form>
</body>
</html>