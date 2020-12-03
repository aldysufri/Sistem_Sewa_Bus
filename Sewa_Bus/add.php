<!DOCTYPE html>
<html>
<head>
    <title>Admin Tambah Data</title>
</head>

<body>
    <header>
        <h3>Admin Tambah Data</h3>
    </header>

    <form action="proses-add.php" method="POST">

        <fieldset>

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
            <select name="status">
                <option>Ready</option>
                <option>Proses</option>                
            </select>
        </p>

        <p>
            <label for="asal">Asal: </label>
            <input type="text" name="asal" placeholder="" />
        </p>
        <p>
            <label for="tujuan">Tujuan: </label>
            <input type="text" name="tujuan" placeholder="" />
        </p>        
        <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga" placeholder="" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>


    </form>


    </body>
</html>

