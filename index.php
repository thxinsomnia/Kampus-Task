<?php
// konek ke database
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM nama ORDER BY gaji ASC");
?>

<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      DATA PEGAWAI
    </a>
    <a href="add.php">tambah data</a><br /><br />
  </div>
</nav>
   

    <table width='100%' border=1 border-style=groove>

        <tr>
            <th>Nama</th>
            <th>Gaji</th>
            <th>Kehadiran</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['Nama'] . "</td>";
            echo "<td>" . $user_data['Gaji'] . "</td>";
            echo "<td>" . $user_data['Kehadiran'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Ubah Data</a> | <a href='delete.php?id=$user_data[id]'>Hapus Data</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>