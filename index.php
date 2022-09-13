<?php
$makanan = $_POST; //simpan POST hasil inputan kedalam variable
?>
<html>

<head>
    <title>menu makanan kantin</title>
</head>

<body>
    <table border="1" width="300">
        <caption>Go Food Menu</caption>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Makanan</td>
                <td>Harga</td>
                <td>Pesan</td>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="index.php">
                <tr>
                    <td>1</td>
                    <td>nutrisari</td>
                    <td>5000</td>
                    <td><input type="checkbox" name="nutrisari" value="5000"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>nasi kuning</td>
                    <td>3000</td>
                    <td><input type="checkbox" name="nasi kuning" value="3000"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>nasi lengko</td>
                    <td>3000</td>
                    <td><input type="checkbox" name="nasi lengko" value="3000"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>gorengan</td>
                    <td>1000</td>
                    <td><input type="checkbox" name="gorengan" value="1000"></td>
                </tr>
        </tbody>
    </table>
    <br>
    <button type="submit">Masukan</button>
    </form>
    <?php if ($makanan) : //beri kondisi, ini akan di cetak jika ada inputan yang dikirim ?> 
        <table border="1" width="300">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Makan</td>
                    <td>Harga</td>
                </tr>
            </thead>
            <tbody>
                <?php $jmlh = 0; $i = 1; // untuk mendeklarasikan variable penampung hitung harga dan untuk nomor urut ?>
                <?php foreach ($makanan as $mkn => $harga) : // lakukan hasil inputang dgn perulangan beserta valuenya ?>
                    <?php $jmlh += $harga; // tambahakn harga ke dalam variable yang tdi di deklarasikan agar dihitung scra otomatis ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $mkn; ?></td>
                        <td><?= $harga; ?></td>
                    </tr>
                <?php $i++; endforeach; //increment $i agar bertambah satu setiap perulangan untuk nomor urutnya?>
                <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td><?= $jmlh; //tampilakn jumlah harganya ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>
</body>

</html>