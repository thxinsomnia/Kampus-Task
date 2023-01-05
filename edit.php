<?php
// koneksi database
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $Nama = $_POST['Nama'];
    $Gaji = $_POST['Gaji'];
    $Kehadiran = $_POST['Kehadiran'];

    // apdet data
    $result = mysqli_query($mysqli, "UPDATE nama SET Nama='$Nama',Gaji='$Gaji',Kehadiran='$Kehadiran' WHERE id=$id");

    // otomatis balik ke home 
    header("Location: index.php");
}
?>
<?php
// ngurutin berdasarkan id
// cek id
$id = $_GET['id'];

// ngurut berdasar id
$result = mysqli_query($mysqli, "SELECT * FROM nama WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $Nama = $user_data['Nama'];
    $Gaji = $user_data['Gaji'];
    $Kehadiran = $user_data['Kehadiran'];
}
?>
<html>

<head>
    <title>Ubah Data</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container-md">
</div>
<a href="index.php">Home</a>
</nav>
    <br /><br />

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama; ?>></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td><input type="text" name="Gaji" value=<?php echo $Gaji; ?>></td>
            </tr>
            <tr>
                <td>Kehadiran</td>
                <td><input type="text" name="Kehadiran" value=<?php echo $Kehadiran; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>