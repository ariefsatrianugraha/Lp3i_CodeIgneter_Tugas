<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Barang</title>
</head>
<body>
    
    <h1>Input data barang</h1>
    <h3><?php echo $message; ?></h3>

    <form action="<?php echo base_url().'barang/validation_data'; ?>" method="post">
        <table>
            <tr>
                <td>Kode Barang :</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Nama Barang :</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Kode Jenis</td>
                <td><input type="text" name="kode_jenis"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>

</body>
</html>