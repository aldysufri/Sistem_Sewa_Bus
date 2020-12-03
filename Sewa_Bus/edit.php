<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_bus']) ){
    header('Location: home.php');
}

//ambil id dari query string
$id_bus = $_GET['id_bus'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM bus WHERE id_bus=$id_bus";
$query = mysqli_query($koneksi, $sql);
$bussi = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Edit Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <header>
        <h3>Admin Edit Data</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>
        <input type="hidden" name="id_bus" value="<?php echo $bussi['id_bus'] ?>" />

        <p>
            <label for="gambar">Gambar: </label>
            <select name="gambar">
                <option>elf.png</option>
                <option>mini.png</option>
                <option>junior.png</option>
                <option>medium.png</option>
                <option>star_big.png</option>
            </select>
        </p>

        <p>
            <label for="jenis">Jenis: </label>
            <select name="jenis">
                <option>elf</option>
                <option>mini</option>                
                <option>junior</option>
                <option>medium</option>
                <option>star_big</option>
            </select>
        </p>

        <p>
            <label for="status">Status: </label>
            <?php $status = $bussi['status']; ?>
            <label><input type="radio" name="status" value="Ready" <?php echo ($status == 'Ready') ? "checked": "" ?>> Ready</label>
            <label><input type="radio" name="status" value="Proses" <?php echo ($status == 'Proses') ? "checked": "" ?>> Proses</label>
        </p>

        <p>
            <label for="asal">Asal: </label>
            <input type="text" name="asal" placeholder="asal" value="<?php echo $bussi['asal'] ?>" />
        </p>
        <p>
            <label for="tujuan">Asal: </label>
            <input type="text" name="tujuan" placeholder="tujuan" value="<?php echo $bussi['tujuan'] ?>" />
        </p>      

        <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga" placeholder="harga" value="<?php echo $bussi['harga'] ?>" />
        </p> 

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>