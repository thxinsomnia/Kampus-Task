<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TES DB</title>
</head>
<body>
    <table cellpadding="2" cellspacing="0" border="1">
        <thead>
            <th>NO</th>
            <th width='150'>Name Jur</th>
        </thead>
        <tbody>
<?php
        include('koneksi.php');
        // Menampilkan Jurusan;
        $sql=mysqli_query($mysqli,"select * from nama order by gaji ASC");
        $no=1;
            while ($row=mysqli_fetch_array($sql)){
                $Nama_Anda=$row['Nama'];
                echo "
                <tr>
                    <td>".$Nama."</td>
                    <td width='150'>".$row.['Gaji']."</td>
                    </tr>
                            ";
        $no++;
            };
            ?>
        </tbody>
    </table>
</body>
</html>