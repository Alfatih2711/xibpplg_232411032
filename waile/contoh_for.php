<html>
<body>
    Tanggal Lahir :
    <select name=tanggal>
    <option value=selected>tanggal</option>
    <?php
    for($i=1;$i<=31;$i++) 
{
    echo"<option value=$i>$i</option>";
}
?>
</body>
</html>