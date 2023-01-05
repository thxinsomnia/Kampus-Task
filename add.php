<html>

<head>
    <title>Tambah Pengguna</title>
</head>

<body>
    <a href="index.php">Balek</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="150" border="1">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td><input type="text" name="Gaji"></td>
            </tr>
            <tr>
                <td>Kehadiran</td>
                <td><input type="text" name="Kehadiran"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // cek formulir terus add
    if (isset($_POST['Submit'])) {
        $Nama = $_POST['Nama'];
        $Gaji = $_POST['Gaji'];
        $Kehadiran = $_POST['Kehadiran'];

        // konek databes
        include_once("koneksi.php");

        // masukin data
        $result = mysqli_query($mysqli, "INSERT INTO nama(Nama,Gaji,Kehadiran) VALUES('$Nama','$Gaji','$Kehadiran')");

        // pop up esem es
        echo "Data brhasil ditambahkan!!. <a href='index.php'>Ketuk untuk lihat</a>";
    }
    ?>
</body>

</html>