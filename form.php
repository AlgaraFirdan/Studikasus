<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="proses.php" method="post">
        <label>Nama Depan:</label><br>
        <input type="text" name="nama_depan" required><br><br>

        <label>Nama Belakang:</label><br>
        <input type="text" name="nama_belakang" required><br><br>

        <label>Tingkat Sekolah:</label><br>
        <select name="tingkat" required>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA/SMK">SMA/SMK</option>
            <option value="Kuliah">Kuliah</option>
        </select><br><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>

        <label>Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
        <input type="checkbox" name="hobi[]" value="Menulis"> Menulis<br>
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
        <input type="checkbox" name="hobi[]" value="Memasak"> Memasak<br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
