<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>ADMIN</title>
</head>

<body>
    <header align="center">
        <h3>DATA PEMESAN</h3>
    </header>

    <table class="table table-dark">
    <thead>
        <tr align="center">
            <th scope="col">Id_transaksi</th>
            <th scope="col">Id_bus</th>
            <th scope="col">Mulai_sewa</th>
            <th scope="col">Selesai_sewa</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM transaksi ";
        $query = mysqli_query($koneksi, $sql);

            while($user_data = mysqli_fetch_array($query)) {   ?>      
                <tr>
                <td align='center'><?=$user_data['id_transaksi']?></td>
                <td align='center'><?=$user_data['id_bus']?></td>
                <td align='center'><?=$user_data['mulai_sewa']?></td>
                <td align='center'><?=$user_data['selesai_sewa']?></td>
                <td align='center' width='85px'><a class="btn btn-success" href="konfirmasi.php?id_transaksi=<?php echo $user_data['id_transaksi']; ?>">Konfirmasi Pesanan</a></td>
       
            </tr>      
            
            <?php }?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>