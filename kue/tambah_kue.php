<html>
<head>
    <title>Input Data Ulasan Kue</title>
</head>
<body>
    <form action="tambah_kue_proses.php" method="POST">
    <table border="1">
<tr>
    <td colspan="2" align="center">INPUT ULASAN KUE</td>
</tr>
<tr>
    <td>Kode Kue</td>
    <td><input type="text" name="kode" required placeholder="Masukkan Kode Kue"></td> 
</tr>
<tr>
    <td>Nama Kue</td>
    <td><input type="text" name="nama" required placeholder="Masukkan Nama Kue"></td> 
</tr>
<tr>
    <td>Rating</td>
    <td><select name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option> 
            </select>
        </td>
    </tr>
<tr>
<tr>
    <td>Catatan</td>
    <td><input type="text" name="catatan" required placeholder="Masukkan catatan"></td> 
<tr>
    <td colspan="2" align="center"><input type="submit" name="cetak" value="CETAK">
                    <input type="reset" name="batal" value="BATAL">
    </td>
</tr>
</table>
</form>    
</body>
</html>